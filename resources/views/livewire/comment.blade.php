<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Comentarios</h3>
        </div>
    </div>
    <livewire:comment-form :postId="$post_id" />

    <livewire:comment-list :postId="$post_id">
    {{$comments->links()}}
</div>
