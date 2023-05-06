<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

/* CategoryService */
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\CategoryService;

/* CategoryRepository */
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Eloquents\CategoryRepository;








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
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);


        
        /* Binding Repositories*/
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        
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