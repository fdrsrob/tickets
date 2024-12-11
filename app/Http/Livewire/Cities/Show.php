<?php

namespace App\Http\Livewire\Cities;

use App\Models\City;
use App\Models\State;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $city;
    public $states;
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
      'CitiesShowChange',
      'CitiesShowRender' => 'render',
    ];
    public function hydrate()
    {
        $this->emit('CitiesShowHydrate');
    }
    public function CitiesShowChange($value, $key){
        $this->$key = $value;
    }
    public function readyToLoad()
    {
        $this->readyToLoad = true;
    }
    public function mount(){
        $this->states = State::all();
    }
    public function chargingData(){
        $query = City::query();
        if ($this->query) {
            $query->where('name', 'like', '%' . $this->query . '%')
                ->orWhereHas('state', function ($query) {
                    $query->where('name', 'like', '%' . $this->query . '%');
                });
        }

        $query->orderBy($this->orderBy['field'], $this->orderBy['direction']);
        return $query->paginate($this->cant);
    }
    protected function rules(){
        $rules = [
            'city.name' => 'required|string|max:255',
            'city.state_id' => 'required|integer',
        ];

        return $rules;
    }
    public function edit(City $city){
        $this->city = $city;
    }
    public function update(){
        $this->validate();
        $this->city->save();
        $this->emit('alert', __('The city has been updated successfully'), '#edit');
        $this->emit('CitiesShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function delete(City $city){
        $this->city = $city;
    }
    public function destroy(){
        $this->city->delete();
        $this->emit('alert', __('The city has been deleted successfully'), '#delete');
        $this->emit('CitiesShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        if ($this->readyToLoad) {
            $cities = $this->chargingData();
        } else {
            $cities = [];
        }
        return view('livewire.cities.show', compact('cities'));
    }
}
