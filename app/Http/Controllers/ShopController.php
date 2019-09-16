<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\PostsInterface;

class ShopController extends Controller
{
    protected $posts;

    public function __construct(PostsInterface $posts)
    {
        $this->posts = $posts;
    }

    public function __invoke($tagParameter)
    {
        $shopTags = $this->posts->shopTags();

        if ($tagParameter === "ALL") {
            $shop = $this->posts->shop();
        }
        else {
            $shop = $this->posts->shopWithTag($tagParameter);
        }

        return view("shop", compact(  "shop", "shopTags", "tagParameter"));
    }
}
