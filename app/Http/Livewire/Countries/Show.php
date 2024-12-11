<?php

namespace App\Http\Livewire\Countries;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $country;
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
      'CountriesShowChange',
      'CountriesShowRender' => 'render',
    ];
    public function hydrate()
    {
        $this->emit('CountriesShowHydrate');
    }
    public function CountriesShowChange($value, $key){
        $this->$key = $value;
    }
    public function readyToLoad()
    {
        $this->readyToLoad = true;
    }
    public function chargingData(){
        $query = Country::query();
        if ($this->query) {
            $query->where('name', 'like', '%' . $this->query . '%');
        }

        $query->orderBy($this->orderBy['field'], $this->orderBy['direction']);
        return $query->paginate($this->cant);
    }
    protected function rules(){
        $rules = [
            'country.name' => 'required|string|max:255',
        ];

        return $rules;
    }
    public function edit(Country $country){
        $this->country = $country;
    }
    public function update(){
        $this->validate();
        $this->country->save();

        $this->emitTo('countries.show', 'render');
        $this->emit('alert', __('The country has been updated successfully'), '#edit');
        $this->emit('CountriesShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function delete(Country $country){
        $this->country = $country;
    }
    public function destroy(){
        $this->country->delete();
        $this->emitTo('countries.show', 'render');
        $this->emit('alert', __('The country has been deleted successfully'), '#delete');
        $this->emit('CountriesShowRender');
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        if ($this->readyToLoad) {
            $countries = $this->chargingData();
        } else {
            $countries = [];
        }
        return view('livewire.countries.show', compact('countries'));
    }
}
