<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/* PostService */
use App\Services\Interfaces\UserServiceInterface;
use App\Services\UserService;

/* PostRepository */
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {   
        /*
            Các interface không thể dùng để khởi tạo đối tượng
            Binding interface với một lớp giúp chúng ta có thể dùng được
            Tắt dòng binding là thấy tai hại liền :)
        */
        /* Binding Services*/
        $this->app->singleton(UserServiceInterface::class, UserService::class);

        
        /* Binding Repositories*/
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}