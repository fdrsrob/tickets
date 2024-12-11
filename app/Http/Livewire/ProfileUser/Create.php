<?php

namespace App\Http\Livewire\ProfileUser;

use App\Models\City;
use App\Models\Country;
use App\Models\ProfileUser;
use App\Models\State;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $dni;
    public $first_name;
    public $last_name;
    public $user_id;
    public $name;
    public $email;
    public $address;
    public $phone;
    public $password;
    public $password_confirmation;

    public $countries;
    public $states;
    public $cities;
    public $country_id;
    public $state_id;
    public $city_id;
    public $zip_code;

    protected $listeners = [
        'ProfileUserCreateChange',
    ];
    public function hydrate()
    {
        $this->emit('ProfileUserCreateHydrate');
    }
    public function ProfileUserCreateChange($value, $key){
        $this->$key = $value;
    }
    protected function rules(){
        $rules = [
            'dni' => 'required|string|max:12|unique:profile_users,dni',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|same:password',
        ];

        return $rules;
    }
    protected $messages = [
        'dni.required' => 'The dni field is required.',
        'dni.string' => 'The dni field must be a string.',
        'dni.max' => 'The dni field must be less than 12 characters.',
        'dni.unique' => 'The dni field has already been taken.',
        'first_name.required' => 'The name field is required.',
        'first_name.string' => 'The name field must be a string.',
        'last_name.required' => 'The name field is required.',
        'last_name.string' => 'The name field must be a string.',
        'email.required' => 'The email field is required.',
        'email.email' => 'The email field must be a valid email.',
        'email.unique' => 'The email field has already been taken.',
        'address.required' => 'The address field is required.',
        'address.string' => 'The address field must be a string.',
        'phone.required' => 'The phone field is required.',
        'phone.numeric' => 'The phone field must be a number.',
        'password.required' => 'The password field is required.',
        'password.string' => 'The password field must be a string.',
        'password.min' => 'The password field must be at least 8 characters.',
        'password_confirmation.required' => 'The password confirmation field is required.',
        'password_confirmation.same' => 'The password confirmation field and password must match.',

    ];
    public function closeAndClean(){
        $this->dispatchBrowserEvent('modalClose');
        $this->reset([
            'dni',
            'name',
            'email',
            'address',
            'phone',
            'password',
            'password_confirmation',
        ]);
        $this->resetValidation([
            'dni',
            'name',
            'email',
            'address',
            'phone',
            'password',
            'password_confirmation',
        ]);
    }
    public function mount(){
        $this->countries = Country::all();
        $this->states = [];
        $this->cities = [];
    }
    public function selectedCountry(){
        $this->states = State::where('country_id', $this->country_id)->get();
        $this->zip_code = $this->states->first()->zip_code;
        $this->state_id = null;
    }
    public function selectedState(){
        $this->cities = City::where('state_id', $this->state_id)->get();
        $this->city_id = null;
    }
    public function save(){
        $this->validate();

        $firstNameWords = explode(' ', $this->first_name);
        $firstLastNameWords = explode(' ', $this->last_name);

        $user = new User();
        $user->name = $firstNameWords[0] . ' ' . $firstLastNameWords[0];
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->save();
        
        $profile = new ProfileUser();
        $profile->user_id = $user->id;
        $profile->dni = $this->dni;
        $profile->first_name = $this->first_name;
        $profile->last_name = $this->last_name;
        $profile->phone = $this->phone;
        $profile->address = $this->address;
        $profile->country_id = $this->country_id;
        $profile->state_id = $this->state_id;
        $profile->city_id = $this->city_id;
        $profile->zip_code = $this->zip_code;
        $profile->save();

        $this->emitTo('profile-user.show', 'render');
        $this->emit('alert', 'The user has been created successfully', '#create');
        $this->emit('ProfileUserShowRender');
        $this->closeAndClean();
        $this->dispatchBrowserEvent('modalClose');
    }
    public function render()
    {
        return view('livewire.profile-user.create');
    }
}
