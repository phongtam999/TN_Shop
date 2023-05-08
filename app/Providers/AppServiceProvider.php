<?php
namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

/* 1: Phần use Repositories */
/*CategoryRepository */
use App\Repositories\Eloquents\CategoryRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
/* ProductRepositories */
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
/* CustomerRepositories */
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Repositories\Eloquents\CustomerRepository;
/*-------------------------------------------------------------------*/

/* 2: Phần use Service */
/*CategoryService */
use App\Services\CategoryService;
use App\Services\Interfaces\CategoryServiceInterface;
/*ProductService*/
use App\Services\ProductService;
use App\Services\Interfaces\ProductServiceInterface;
/*CustomerService*/
use App\Services\CustomerService;
use App\Services\Interfaces\CustomerServiceInterface;


// use App\Services\Interfaces\UserServiceInterface;
// use App\Services\UserService;
// use Illuminate\Pagination\Paginator;
// use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        /*Đăng ký ServiceInterface */
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);

       /*Đăng ký Repositories */
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
       
    }
   
    public function boot()
    {
        /*Phân trang*/
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}