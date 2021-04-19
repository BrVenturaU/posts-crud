<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class CommentList extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $post_id;

    protected $listeners = [
        'refreshCommentList'
    ];

    public function mount($postId){
        $this->post_id = $postId;
    }

    public function refreshCommentList($postId){
        $this->mount($postId);
    }

    public function render()
    {
        $comments = Comment::where('post_id', $this->post_id)->orderBy('created_at', 'DESC')->paginate(3);
        return view('livewire.comment-list', compact('comments'));
    }
    public function delete($id){
        $comment = Comment::find($id);
        if(!isset($comment))
            return;
        $comment->delete();
        
        session()->flash('message', 'Se ha eliminado su comentario.');
    }
}
