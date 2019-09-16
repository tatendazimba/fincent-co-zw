<?php

namespace App\Providers;

use App\Http\Composers\SidebarComposer;
use App\Http\Controllers\Interfaces\AgentInterface;
use App\Http\Controllers\Interfaces\CustomerInterface;
use App\Http\Controllers\Interfaces\PostsInterface;
use App\Http\Controllers\Interfaces\RegisterInterface;
use App\Http\Controllers\Interfaces\TagInterface;
use App\Http\Controllers\Repositories\AgentApiRepository;
use App\Http\Controllers\Repositories\CustomerRepository;
use App\Http\Controllers\Repositories\PostsRepository;
use App\Http\Controllers\Repositories\RegisterRepository;
use App\Http\Controllers\Repositories\TagRepository;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::share("colours", ["cyan lighten-3", "teal lighten-3", "orange lighten-3", "indigo lighten-3"]);

        $this->app->bind(PostsInterface::class, PostsRepository::class);
        $this->app->bind(TagInterface::class, TagRepository::class);
        $this->app->bind(CustomerInterface::class, CustomerRepository::class);
        $this->app->bind(AgentInterface::class, AgentApiRepository::class);
        $this->app->bind(RegisterInterface::class, RegisterRepository::class);

        $this->app->bind(Client::class, function ($app) {
            return new Client([
                'base_uri' => config("app.API"),
                'timeout'  => config("app.TIMEOUT"),
                "auth" => [
                    config("app.USER"),
                    config("app.PASS")
                ]
            ]);
        });

        View::composer('*', SidebarComposer::class);

    }
}
