<?php

namespace App\Http\Livewire\States;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $countries;
    public $country_id;
    public $zip_code;

    protected $listeners = [
        'StatesCreateChange',
    ];
    public function hydrate()
    {
        $this->emit('StatesCreateHydrate');
    }
    public function StatesCreateChange($value, $key){
        $this->$key = $value;
    }
    protected function rules(){
        $rules = [
            'name' => 'required|string|max:255',
            'zip_code' => 'required|numeric',
        ];

        return $rules;
    }
    protected $messagess = [
        'name.required' => 'The name field is required.',
        'name.string' => 'The name field must be a string.',
        'name.max' => 'The name field must be less than 255 characters.',
        'zip_code.required' => 'The zip code field is required.',
        'zip_code.numeric' => 'The zip code field must be a number.',
    ];
    public function closeAndClean(){
        $this->reset([
            'name',
            'zip_code',
        ]);
        $this->resetValidation([
            'name',
            'zip_code',
        ]);
    }
    public function mount(){
        $this->countries = Country::all();
        $this->country_id = 1;
    }
    public function save(){
        $this->validate();
        $state = new State();
        $state->name = $this->name;
        $state->country_id = $this->country_id;
        $state->zip_code = $this->zip_code;
        $state->save();

        $this->emitTo('states.show', 'render');
        $this->emit('alert', 'The state has been created successfully', '#create');
        $this->emit('StatesShowRender');
        $this->closeAndClean();
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        return view('livewire.states.create');
    }
}
