<div class="mb-4 row">
    <div class="mx-auto col-12">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
        @endif
        <div class="row align-items-center">
            <div class="col">
                <input type="email" class="form-control {{$errors->any() ? 'is-invalid' : ''}}" placeholder="Comentario..." wire:model.debounce.500ms="body">
                @error('body')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col">
                <button class="btn btn-primary" wire:click="create">Save</button>
            </div>
        </div>
    </div>
</div>
