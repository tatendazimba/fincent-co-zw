<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\PostsInterface;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    protected $posts;

    public function __construct(PostsInterface $posts)
    {
//        if (auth()->user()->role === "ADMIN")
//            return redirect(route("transactions.index"));

        $this->posts = $posts;
    }

    public function index($tagParameter = "ALL")
    {
        $shopTags = $this->posts->shopTags();

        if ($tagParameter === "ALL") {
            $shop = $this->posts->index();
        }
        else {
            $shop = $this->posts->shopWithTag($tagParameter);
        }

        return view("members", compact(  "shop", "shopTags", "tagParameter"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
