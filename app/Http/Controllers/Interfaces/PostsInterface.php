<?php
/**
 * Created by PhpStorm.
 * User: tat-nda
 * Date: 3/5/19
 * Time: 7:38 PM
 */

namespace App\Http\Controllers\Interfaces;


use App\Post;

interface PostsInterface
{
    public function index();
    public function heroes();
    public function discover();
    public function featured();
    public function howTos();
    public function guides();
    public function faqs();
    public function find($name);
    public function faqTags();
    public function faqWithTag($tag);

    public function store($request);
    public function destroy(Post $post);
}
