<?php

namespace App\Http\Livewire\Countries;

use App\Models\Country;
use Livewire\Component;

class Create extends Component
{
    public $name;

    protected $listeners = [
        'CountriesCreateChange',
    ];
    public function hydrate()
    {
        $this->emit('CountriesCreateHydrate');
    }
    public function CountriesCreateChange($value, $key){
        $this->$key = $value;
    }
    protected function rules(){
        $rules = [
            'name' => 'required|string|max:255',
        ];

        return $rules;
    }
    protected $messages = [
        'name.required' => 'The name field is required.',
        'name.string' => 'The name field must be a string.',
        'name.max' => 'The name field must be less than :max characters.',
    ];
    public function closeAndClean(){
        $this->reset([
            'name',
        ]);
        $this->resetValidation([
            'name',
        ]);
    }
    public function save(){
        $this->validate();
        $country = new Country();
        $country->name = $this->name;
        $country->save();

        $this->emitTo('countries.show', 'render');
        $this->emit('alert', __('The country has been created successfully'), '#create');
        $this->emit('CountriesShowRender');
        $this->closeAndClean();
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        return view('livewire.countries.create');
    }
}
