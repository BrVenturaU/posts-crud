<div class="row">
    <div class="mx-auto col-12">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
        @endif
        @foreach($comments as $comment)
            <div class="mb-3 rounded-lg shadow-sm card">
                @if($comment->user_id == Auth::user()->id)
                    <span class="mt-2 mr-3 text-right delete-icon font-weight-bold" wire:click="delete({{$comment->id}})">X</span>
                @endif
                <div class="card-body">
                    <h2 class="card-title h4">{{$comment->creator->name}} <small class="text-muted">{{$comment->created_at->diffForHumans()}}</small></h2>
                    <p class="card-text">{{$comment->body}}</p>
                </div>
            </div>
        @endforeach

        {{$comments->links()}}
    </div>
</div>
