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
    public function sale();
    public function new();
    public function shop();
    public function blogs();
    public function shopWithTag($tag);
    public function shopTags();

    public function store($request);
    public function destroy(Post $post);
}
