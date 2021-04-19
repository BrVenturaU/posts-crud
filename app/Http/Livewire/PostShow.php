<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $postId;

    public function mount($id){
        $this->postId = $id;
    }
    
    public function render()
    {
        $post = Post::find($this->postId);
        
        return view('livewire.post-show', compact('post'));
    }
}
