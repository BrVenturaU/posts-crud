<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostForm extends Component
{
    public $post = [
        'title' => '',
        'header' => '',
        'body' => ''
    ];
    public function render()
    {
        return view('livewire.post-form');
    }

    public function create(){

        $this->validate([
            'post.title' =>'required|max:100',
            'post.body' =>'required'
        ]);

        $post = Post::create([
            'title' => $this->post['title'],
            'body' => $this->post['body'],
            'user_id' => Auth::user()->id,
            'header' => $this->post['header']
        ]);

        $this->post = [
            'title' => '',
            'header' => '',
            'body' => ''
        ];
        // $this->emit('refreshCommentList', $this->post_id);

        session()->flash('message', 'Post agregado correctamente.');
    }
}
