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
        <form wire:submit.prevent="create">
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('post.title') ? 'is-invalid' : ''}}" placeholder="Titulo..." wire:model.debounce.500ms="post.title">
                @error('post.title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <textarea class="form-control {{$errors->has('post.header') ? 'is-invalid' : ''}}" name="" id="" placeholder="Cabecera..." wire:model.debounce.500ms="post.header">
                
                </textarea>
                @error('post.header')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <textarea class="form-control {{$errors->has('post.body') ? 'is-invalid' : ''}}" name="" id="" placeholder="Cuerpo..." wire:model.debounce.500ms="post.body">
                
                </textarea>
                @error('post.body')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
