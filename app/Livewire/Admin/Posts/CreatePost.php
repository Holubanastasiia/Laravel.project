<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreatePost extends Component
{
    #[Layout('layouts.admin')]

    #[Validate('required')]
    public $title = '';
    #[Validate('required')]
    public $content = '';
    public $slug = '';

    public function save()
    {
        $this->validate();
        $this->slug = Str::slug($this->title, '_');
        Post::create(
            $this->only(['title', 'content', 'slug'])
        );

        return $this->redirect('/admin/posts');
    }

    public function render()
    {
        return view('livewire.admin.posts.create-post');
    }
}
