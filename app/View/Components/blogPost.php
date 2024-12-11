<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class blogPost extends Component
{
    public $blogData;
    public $author;
    public $blogText;
    /**
     * Create a new component instance.
     */
    public function __construct($blogData)
    {
        $this->blogData = $blogData;
        $user = $blogData->getAuthor;
        $this->author = $user->name;
        $this->blogText = substr($blogData->postText, 0, 100);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-post', ['blogData' => $this->blogData, 'author' => $this->author, 'blogText' => $this->blogText]);
    }
}
