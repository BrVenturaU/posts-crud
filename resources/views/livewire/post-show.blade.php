<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$post->title}}</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="mx-auto col-12">
            <div class="mb-4 rounded-lg shadow-sm card">
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
        </div>
    </div>

    <livewire:comment-form :postId='$post->id'>
    <livewire:comment-list :postId='$post->id'>
</div>
