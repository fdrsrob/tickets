<div>
    <div wire:ignore.self  class="modal fade" id="create"  tabindex="-1" aria-labelledby="exampleModalLabel" style="" aria-hidden="true" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-simple">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeAndClean"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">{{__('Add user')}}</h3>
                        <p class="text-muted">{{__('Complete the information to add a new user')}}</p>
                    </div>
                    <form class="row g-3 d-flex align-items-center" wire:submit.prevent="save" id="userCreate">
                        <div class="col-12">
                            <label class="form-label" for="dni">{{__('DNI')}}:</label>
                            <input type="number" id="dni" class="form-control" placeholder="" name="dni" aria-label="" wire:model.defer="dni" />
                            @error('dni')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="name">{{__('First Name')}}:</label>
                            <input type="text" id="name" class="form-control" placeholder="" name="name" aria-label="" wire:model.defer="first_name" />
                            @error('first_name')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="last_name">{{__('Last Name')}}:</label>
                            <input type="text" id="last_name" class="form-control" placeholder="" name="last_name" aria-label="" wire:model.defer="last_name" />
                            @error('last_name')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="email">{{__('Email')}}:</label>
                            <input type="email" id="email" class="form-control" placeholder="" name="email" aria-label="" wire:model.defer="email" autocomplete="off"/>
                            @error('email')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="country">{{__('Country')}}:</label>
                            <select id="country" class="form-select" name="country" aria-label="" wire:model="country_id">
                                <option value="">{{__('Select')}}</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            @error('country')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="state">{{__('State')}}:</label>
                            <select id="state" class="form-select" name="state" aria-label="" wire:model="state_id">
                                <option value="">{{__('Select')}}</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                            @error('state')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="city">{{__('City')}}:</label>
                            <select id="city" class="form-select" name="city" aria-label="" wire:model="city_id">
                                <option value="">{{__('Select')}}</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            @error('city')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="address" class="form-label">{{__('Address')}}</label>
                            <input type="text" id="address" class="form-control" placeholder="" name="address" aria-label="" wire:model.defer="address" />
                            @error('address')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="zip_code" class="form-label">{{__('Zip Code')}}</label>
                            <input type="number" id="zip_code" class="form-control" placeholder="" name="zip_code" aria-label="" wire:model.defer="zip_code" />
                        </div>
                        <div class="col-12">
                            <label for="phone" class="form-label">{{__('Phone')}}</label>
                            <input type="text" id="phone" class="form-control" placeholder="" name="phone" aria-label="" wire:model.defer="phone" />
                            @error('phone')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="form-password-toggle col-12">
                            <label class="form-label" for="password">{{__('Password')}}:</label>
                            <div class="input-group input-group-merge">
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       aria-describedby="password" wire:model.defer="password"
                                       autocomplete="current-password">
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                @error('password')
                                <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="password_confirmation">{{ __('Confirm password') }}:</label>
                            <input type="password" id="password_confirmation" class="form-control"
                                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                   name="password_confirmation" aria-label="" 
                                   wire:model.defer="password_confirmation" autocomplete="off" />
                            @error('password_confirmation')
                            <div class="badge bg-label-danger mt-2 w-100">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1" wire:loading.class="disabled" wire:loading.attr="disabled">{{__('Save')}}</button>
                            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close" wire:click="closeAndClean">{{__('Cancel')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.addEventListener('modalClose', () => {
                let modal = document.getElementById('create');
                let bootstrapModal = bootstrap.Modal.getInstance(modal);
                if (bootstrapModal) {
                    bootstrapModal.hide();
                }

                var backdrop = document.querySelector('.modal-backdrop');
                if (backdrop) {
                    backdrop.remove();
                }
            });
        });
    </script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}" defer></script>
    <script>
        $(function () {
            window.initUsersCreate=()=>{
                $('#country').select2({
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder') ? $(this).data('placeholder') : 'Select ...',
                    allowClear: Boolean($(this).data('allow-clear')),
                    dropdownParent: $('#country').parent()
                });
                $('#state').select2({
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder') ? $(this).data('placeholder') : 'Select ...',
                    allowClear: Boolean($(this).data('allow-clear')),
                    dropdownParent: $('#state').parent()
                });
                $('#city').select2({
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder') ? $(this).data('placeholder') : 'Select ...',
                    allowClear: Boolean($(this).data('allow-clear')),
                    dropdownParent: $('#city').parent()
                });
            }
            $('#country').on('change', function (e) {
                livewire.emit('ProfileUserCreateChange', $(this).val(), $(this).attr('wire:model'));
                @this.set($(this).attr('wire:model'), e.target.value);
                @this.call('selectedCountry');
            });
            $('#state').on('change', function (e) {
                livewire.emit('ProfileUserCreateChange', $(this).val(), $(this).attr('wire:model'));
                @this.set($(this).attr('wire:model'), e.target.value);
                @this.call('selectedState');
            });
            $('#city').on('change', function (e) {
                livewire.emit('ProfileUserCreateChange', $(this).val(), $(this).attr('wire:model'));
            });

            window.livewire.on('ProfileUserCreateHydrate',()=>{
                initUsersCreate();
            });
            livewire.emit('ProfileUserCreateChange', '', '');
        });
    </script>
</div>
