<!-- Modal -->
<div wire:ignore.self class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">{{__('Edit Country')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición -->
                <form wire:submit.prevent="update">
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('Name')}}:</label>
                        <input type="text" id="name" class="form-control" wire:model.defer="country.name">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary me-sm-3 me-1" wire:loading.class="disabled" wire:loading.attr="disabled" wire:target="update" wire:click='update'>{{__('Save')}}</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Close')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.addEventListener('modalClose', () => {
            let modal = document.getElementById('edit');
            let bootstrapModal = bootstrap.Modal.getInstance(modal);
            if (bootstrapModal) {
                bootstrapModal.hide();
                bootstrapModal.dispose();
            }

            var backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
            modal.querySelectorAll('input, textarea').forEach(input => input.value = '');
        });
    });
</script>