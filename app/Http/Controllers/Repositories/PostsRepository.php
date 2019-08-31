<?php
/**
 * Created by PhpStorm.
 * User: tat-nda
 * Date: 3/5/19
 * Time: 7:38 PM
 */

namespace App\Http\Controllers\Repositories;


use App\Http\Controllers\Interfaces\PostsInterface;
use App\Post;
use App\Tag;
use function foo\func;
use Illuminate\Database\Eloquent\Collection;

class PostsRepository implements PostsInterface
{
    protected $posts;
    protected $tags;

    public function __construct(Post $posts, Tag $tags)
    {
        $this->posts = $posts;
        $this->tags = $tags;
    }

    public function index()
    {
        $posts = $this->posts->with("images")->orderBy("id", "desc")->paginate();

        return $posts;
    }

    public function find($name)
    {
        $posts = Post::whereHas('tags', function ($query) use ($name) {
            $query->where([
                ['name', '=', $name]
            ]);
        })
            ->with("tags")->paginate();

        return $posts;
    }

    public function faqTags()
    {
        $value = "FAQ";

        $posts = Post::whereHas('tags', function ($query) use ($value) {
            $query->where('name', '=', $value);
        })->with("tags")->get();

        $tags = [];

        foreach ($posts as $post) {
            foreach ($post->tags()->get() as $tag) {

                if (in_array($tag->name, $tags)) {
                    continue;
                }

                $tags[] = $tag;
            }
        }

        return (new Collection($tags))->unique();

    }

    public function faqWithTag($tag)
    {
        $posts = Post::whereHas('tags', function ($query) {
            $query->where([
                ['name', '=', "FAQ"]
            ]);
        })
            ->whereHas("tags", function ($query) use ($tag){
                $query->where([
                    ['name', '=', $tag]
                ]);
            })
            ->with("tags")->orderBy("id", "desc")->get();

        return $posts;
    }


    public function popular()
    {
        return $this->posts->orderBy("id", "desc")->limit(5)->get();
    }

    public function heroes()
    {
        $posts = $this->tags->where("name", "Hero")->first()->posts()->orderBy("id", "desc")->get();

        return $posts;
    }

    public function featured()
    {

        $posts = Post::whereHas("tags", function ($query){
                $query->where([
                    ['name', '=', "Featured"]
                ]);
            })
            ->with("tags")->orderBy("id", "desc")->get();

        return $posts;
    }

    public function store($request)
    {
        $post = new Post();
        $post->fill($request);
        $post->save();

        // TODO log

        return $post;
    }

    public function destroy(Post $post)
    {
        return $post->delete();
    }

    public function discover()
    {
        return $this->query("Discover");
    }

    public function howTos()
    {
        return $this->query("How To");
    }

    public function guides()
    {
        return $this->query("Guide");
    }

    public function faqs()
    {
        return $this->query("FAQ");
    }

    public function query($tag)
    {
        $posts = Post::whereHas("tags", function ($query) use ($tag) {
            $query->where([
                ['name', '=', $tag]
            ]);
        })->with("tags")->get();

        return $posts;
    }
}
