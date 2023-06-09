<?php
namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

/* 1: Phần use Repositories */
// GroupRepository
use App\Repositories\Interfaces\GroupRepositoryInterface;
use App\Repositories\Eloquents\GroupRepository;
/*CategoryRepository */
use App\Repositories\Eloquents\CategoryRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
/* ProductRepositories */
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Eloquents\ProductRepository;
// User Repository
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;
/* CustomerRepositories */
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Repositories\Eloquents\CustomerRepository;
/* OrderRepositories */
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\Eloquents\OrderRepository;
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
/*UsersService*/
use App\Services\Interfaces\UserServiceInterface;
use App\Services\UserService;

/*OrderService*/
use App\Services\Interfaces\OrderServiceInterface;
use App\Services\OrderService;

// GroupService
use App\Services\GroupService;
use App\Services\Interfaces\GroupServiceInterface;




class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        
        //Đăng ký product
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);

        //Đăng ký user
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);

        //Đăng ký group
        $this->app->singleton(GroupServiceInterface::class, GroupService::class);
        $this->app->singleton(GroupRepositoryInterface::class, GroupRepository::class);




        /* Binding Services*/
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        /* Binding Repositories*/
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);

        /*Đăng ký ServiceInterface */
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);
        $this->app->singleton(OrderServiceInterface::class, OrderService::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
       /*Đăng ký Repositories */
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->singleton(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);    
    }
   
    public function boot()
    {
        /*Phân trang*/
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}