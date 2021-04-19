<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{isset($lastPost) ? $lastPost->title : 'No has creado posts aún.'}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="mx-auto col-12">
            <div class="mb-4 card">
                @if (isset($lastPost))
                    <div class="card-header">
                        <h2>{{$lastPost->user->name}} <small class="text-muted">{{$lastPost->created_at->diffForHumans()}}</small></h2>
                        @if (strlen($lastPost->header) > 0)
                            <p class="text-muted">
                                {{$lastPost->header}}
                            </p>
                        @endif
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">{{$lastPost->title}}</h3>
                        <p class="card-text">{{$lastPost->body}}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if (isset($lastPost))
        <div class="row">
            <div class="col-12">
                <h3>Comentarios</h3>
            </div>
        </div>

        <livewire:comment-form :postId='$lastPost->id'>
        <livewire:comment-list :postId='$lastPost->id'>
    @endif
</div>
