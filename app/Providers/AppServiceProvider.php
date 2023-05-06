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

        // // đăng ký group
        // $this->app->singleton(GroupRepositoryInterface::class, GroupRepository::class);
        // $this->app->singleton(GroupServiceInterface::class, GroupService::class);

        // // đăng ký customer
        // $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
        // $this->app->singleton(CustomerServiceInterface::class, CustomerService::class);

        // // đăng ký user
        // $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        // $this->app->singleton(UserServiceInterface::class, UserService::class);
        // // đăng ký order
        // $this->app->singleton(OrderRepositoryInterface::class, OrderRepository::class);
        // $this->app->singleton(OrderServiceInterface::class, OrderService::class);
        //  // đăng ký Api products
        //  $this->app->singleton(ApiProductRepositoryInterface::class, ApiProductRepository::class);
        //  $this->app->singleton(ApiProductServiceInterface::class, ApiProductService::class);
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