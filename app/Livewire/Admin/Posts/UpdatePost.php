<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
#[Layout('layouts.admin')]
class UpdatePost extends Component
{

    use WithFileUploads;
    public Post $post;
    public $title;
    public $slug;
    public $content;
    public $cover;
    public $published_at;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->cover = $post->cover;
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->content = $post->content;
        $this->published_at = $post->published_at;
    }
    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $this->post->id,
            'content' => 'required|string',
            'cover' => 'nullable|image|max:2048',
            'published_at' => 'boolean',
        ];
    }

    public function update()
    {
        $this->validate();

        if ($this->cover) {
            $coverPath = $this->cover->store('covers', 'public');
            $this->post->cover = $coverPath;
        }

        $this->post->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'published_at' => $this->published_at,
            'cover' => $this->post->cover,
        ]);

        session()->flash('success', 'Post updated ✅');
        return $this->redirect('/admin/posts');
    }

    public function render()
    {
        return view('livewire.admin.posts.update-post');
    }
}
