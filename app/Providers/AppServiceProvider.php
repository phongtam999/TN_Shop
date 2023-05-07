<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
/* Service */
/*Category*/
// use App\Repositories\Interfaces\CategoryRepositoryInterface;
// use App\Services\CategoryService;
// use App\Services\Interfaces\CategoryServiceInterface;
// use App\Repositories\Eloquents\CategoryRepository;
/* Product */
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;

// use App\Services\Interfaces\UserServiceInterface;
// use App\Services\UserService;
// use Illuminate\Pagination\Paginator;
// use Illuminate\Support\ServiceProvider;

/*1: Phần use Service CategoryService */
use App\Services\CategoryService;
use App\Services\Interfaces\CategoryServiceInterface;
//ProductService
use App\Services\ProductService;
use App\Services\Interfaces\ProductServiceInterface;


/* Phần use Reponsitories CategoryRepository */
use App\Repositories\Eloquents\CategoryRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
//ProductRepository
// use App\Repositories\Eloquents\ProductRepository;
// use App\Repositories\Interfaces\ProductRepositoryInterface;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Đăng ký category
        // $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        // $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        //Đăng ký product
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);


        /* Binding Services*/
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        // $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        /* Binding Repositories*/
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        // $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}