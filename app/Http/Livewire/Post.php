<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Post extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $isOther = false;

    public function updatedIsOther(){
        $this->resetPage();
    }
    public function render()
    {
        if($this->isOther)
            $posts = ModelsPost::where('user_id', '!=', Auth::user()->id)->orderBy('id', 'DESC')->paginate(2);
        else
            $posts = ModelsPost::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(2);
        return view('livewire.post', compact('posts'));
    }

    public function show($postId){
        return redirect()->route('posts.show', $postId);
    }
}
