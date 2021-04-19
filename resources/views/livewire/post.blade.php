<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Posts</h1>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="isOther" wire:model="isOther">
                    <label class="custom-control-label" for="isOther">Otros Posts</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto col-12">
                @forelse ($posts as $post)
                    <div class="mb-4 rounded-lg shadow card" style="cursor: pointer;" wire:click="show({{$post->id}})">
                        <div class="card-header">
                            <h2>{{$post->user->name}} <small class="text-muted">{{$post->created_at->diffForHumans()}}</small></h2>
                            @if (strlen($post->header) > 0)
                                <p class="text-muted">
                                    {{$post->header}}
                                </p>
                            @endif
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{$post->title}}</h3>
                            <p class="card-text">{{$post->body}}</p>
                        </div>
                    </div>
                @empty
                    <strong>No has creado posts aún.</strong>
                @endforelse
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
