<?php

namespace App\Http\Livewire\ProfileUser;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $user;
    public $name;
    public $dni;
    public $phone;
    public $address;
    public $email;

    public $query = '';
    public $cant = '10';
    public $readyToLoad = false;
    public $orderBy = [
        'field' => 'created_at',
        'direction' => 'desc'
    ];
    protected $queryString = [
        'query' => ['except' => ''],
        'cant' => ['except' => '10'],
    ];
    public $orderByOptions = [
        'created_at' => 'Date of creation',
        'updated_at'=>'Date of updated',
        'name' => 'Name',
    ];
    protected $listeners = [
      'ProfileUserShowChange',
      'ProfileUserShowRender' => 'render',
    ];
    public function hydrate()
    {
        $this->emit('ProfileUserShowHydrate');
    }
    public function ProfileUserShowChange($value, $key){
        $this->$key = $value;
    }
    public function readyToLoad()
    {
        $this->readyToLoad = true;
    }
    public function chargingData(){
        $query = User::query();
        if ($this->query) {
            $query->where('name', 'like', '%' . $this->query . '%');
        }

        $query->orderBy($this->orderBy['field'], $this->orderBy['direction']);
        return $query->paginate($this->cant);
    }
    protected function rules(){
        $rules = [];

        return $rules;
    }
    public function edit(User $user){
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->dni = $user->profile->dni;
        $this->phone = $user->profile->phone;
        $this->address = $user->profile->address;
    }
    public function update(){
        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->save();
        $this->user->profile->dni = $this->dni;
        $this->user->profile->phone = $this->phone;
        $this->user->profile->address = $this->address;
        $this->user->profile->save();

        $this->emitTo('profile-user.show', 'render');
        $this->emit('alert', 'The user has been updated successfully', '#edit');
        $this->emit('ProfileUserShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function delete(User $user){
        $this->user = $user;
    }
    public function destroy(){
        $this->user->delete();
        $this->emitTo('profile-user.show', 'render');
        $this->emit('alert', 'The user has been deleted successfully', '#delete');
        $this->emit('ProfileUserShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        if($this->readyToLoad){
            $users = $this->chargingData();
        }else{
            $users = [];
        }
        return view('livewire.profile-user.show', compact('users'));
    }
}
