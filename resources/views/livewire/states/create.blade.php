<div>
    <div wire:ignore.self  class="modal fade" id="create"  tabindex="-1" aria-labelledby="exampleModalLabel" style="" aria-hidden="true" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-simple">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="closeAndClean"></button>
                    <div class="text-center mb-4">
                        <h3 class="mb-2">{{__('Add state')}}</h3>
                        <p class="text-muted">{{__('Complete the information to add a new state')}}</p>
                    </div>
                    <form class="row g-3 d-flex align-items-center" wire:submit.prevent="save" id="userCreate">
                        <div class="col-12">
                            <label for="country_id" class="form-label">{{__('Country')}}</label>
                            <select class="form-select" id="country_id" wire:model.defer="country_id">
                                <option value="">{{__('Select')}}</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                            @error('country_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" wire:model.defer="name" placeholder="{{__('Name')}}">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="country_id" class="form-label">{{__('Zip Code')}}</label>
                            <input type="number" class="form-control" id="zip_code" wire:model.defer="zip_code" placeholder="{{__('Zip Code')}}">
                            @error('zip_code') <span class="text-danger">{{ $message }}</span> @enderror
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
</div>