<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $lastPost = Post::where('user_id', Auth::user()->id)->latest('created_at')->first();
        return view('livewire.home', compact('lastPost'));
    }
}
