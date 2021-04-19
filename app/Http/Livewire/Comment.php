<?php

namespace App\Http\Livewire;

use App\Models\Comment as ModelsComment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $post_id;

    protected $listeners = [
        'selectedPost'
    ];

    public function selectedPost($postId){
        $this->post_id = $postId;
    }

    public function render()
    {
        $comments = ModelsComment::where('post_id', $this->post_id)->orderBy('id', 'DESC')->paginate(2);
        return view('livewire.comment', compact('comments'));
    }
}
