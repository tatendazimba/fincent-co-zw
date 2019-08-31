<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\PostsInterface;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    protected $posts;

    public function __construct(PostsInterface $posts)
    {
        $this->posts = $posts;
    }

    function __invoke($tagParameter)
    {
        $faqTags = $this->posts->faqTags();

        if ($tagParameter === "ALL") {
            $faqs = $this->posts->faqs();
        }
        else {
            $faqs = $this->posts->faqWithTag($tagParameter);
        }

        return view("faqs", compact("faqs", "faqTags", "tagParameter"));
    }
}
