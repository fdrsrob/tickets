<?php

namespace App\Http\Livewire\States;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $state;
    public $countries;
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
      'StatesShowChange',
      'StatesShowRender' => 'render',
    ];
    public function hydrate()
    {
        $this->emit('StatesShowHydrate');
    }
    public function StatesShowChange($value, $key){
        $this->$key = $value;
    }
    public function readyToLoad()
    {
        $this->readyToLoad = true;
    }
    public function mount(){
        $this->countries = Country::all();
    }
    public function chargingData(){
        $query = State::query();
        if ($this->query) {
            $query->where('name', 'like', '%' . $this->query . '%')
                ->orWhere('zip_code', 'like', '%' . $this->query . '%')
                ->orWhereHas('country', function ($query) {
                    $query->where('name', 'like', '%' . $this->query . '%');
                });
        }

        $query->orderBy($this->orderBy['field'], $this->orderBy['direction']);
        return $query->paginate($this->cant);
    }
    protected function rules(){
        $rules = [
            'state.name' => 'required|string|max:255',
            'state.zip_code' => 'required|numeric',
            'state.country_id' => 'required|exists:countries,id',
        ];

        return $rules;
    }
    public function edit(State $state){
        $this->state = $state;
    }
    public function update(){
        $this->validate();
        $this->state->save();

        $this->emitTo('states.show', 'render');
        $this->emit('alert', 'The state has been updated successfully', '#edit');
        $this->emit('StatesShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function delete(State $state){
        $this->state = $state;
    }
    public function destroy(){
        $this->state->delete();
        $this->emitTo('states.show', 'render');
        $this->emit('alert', 'The state has been deleted successfully', '#delete');
        $this->emit('StatesShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        if ($this->readyToLoad) {
            $states = $this->chargingData();
        } else {
            $states = [];
        }
        return view('livewire.states.show', compact('states'));
    }
}
