<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentForm extends Component
{
    public $body;
    public $post_id;

    public function mount($postId){
        $this->post_id = $postId;
    }

    public function updated($body){
        $this->validateOnly($body, [
            'body' =>'required|max:255'
        ]);
    }

    public function render()
    {
        return view('livewire.comment-form');
    }

    public function create(){

        $this->validate([
            'body' =>'required|max:255'
        ]);
        $comment = Comment::create([
            'body' => $this->body,
            'user_id' => Auth::user()->id,
            'post_id' => $this->post_id
        ]);

        $this->body = "";
        $this->emit('refreshCommentList', $this->post_id);

        session()->flash('message', 'Comentario agregado correctamente.');
    }
}
