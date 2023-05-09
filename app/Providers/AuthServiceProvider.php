<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Group;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

use App\Policies\CategoryPolicy;
use App\Policies\CustomerPolicy;
use App\Policies\GroupPolicy;
use App\Policies\OrderPolicy;
use App\Policies\ProductPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Group::class => GroupPolicy::class,
        User::class => UserPolicy::class,
        Product::class => ProductPolicy::class,
        Customer::class => CustomerPolicy::class,
        Category::class => CategoryPolicy::class,
        Order::class => OrderPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
<<<<<<< HEAD
        
=======
>>>>>>> 35c6f5a7e4ba1c95761b90f92a6c30a4f6aa49d9
    }
}
