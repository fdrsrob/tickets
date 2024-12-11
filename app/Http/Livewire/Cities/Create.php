<?php

namespace App\Http\Livewire\Cities;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $state_id;
    public $states;

    protected $listeners = [
        'CitiesCreateChange',
    ];
    public function hydrate()
    {
        $this->emit('CitiesCreateHydrate');
    }
    public function CitiesCreateChange($value, $key){
        $this->$key = $value;
    }
    protected function rules(){
        $rules = [
            'name' => 'required|string|max:255',
            'state_id' => 'required|integer',
        ];

        return $rules;
    }
    protected $messages = [
        'name.required' => 'The name field is required.',
        'name.string' => 'The name field must be a string.',
        'name.max' => 'The name field must be less than :max characters.',
        'state_id.required' => 'The state field is required.',
        'state_id.integer' => 'The state field must be an integer.',
    ];
    public function closeAndClean(){
        $this->reset([
            'name',
            'state_id',
        ]);
        $this->resetValidation([
            'name',
            'state_id',
        ]);
    }
    public function mount(){
        $this->states = State::all();
    }
    public function save(){
        $this->validate();
        $city = new City();
        $city->name = $this->name;
        $city->state_id = $this->state_id;
        $city->save();

        $this->emitTo('cities.show', 'render');
        $this->emit('alert', __('The city has been created successfully'), '#create');
        $this->emit('CitiesShowRender');
        $this->closeAndClean();
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        return view('livewire.cities.create');
    }
}
