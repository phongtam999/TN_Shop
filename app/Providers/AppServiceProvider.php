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
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\ProductService;
// use App\Services\Interfaces\UserServiceInterface;
// use App\Services\UserService;
// use Illuminate\Pagination\Paginator;
// use Illuminate\Support\ServiceProvider;
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
        //Đăng ký category
        // $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        // $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        //Đăng ký product
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
      
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