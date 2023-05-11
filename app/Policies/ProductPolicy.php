<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
  

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Product  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('Product_viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Product  $user
     * @param  \App\Models\Product  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        return $user->hasPermission('Product_view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Product  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
         return $user->hasPermission('Product_create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Product  $user
     * @param  \App\Models\Product  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        return $user->hasPermission('Product_update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Product  $user
     * @param  \App\Models\Product  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return $user->hasPermission('Product_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Product  $user
     * @param  \App\Models\Product  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user)
    {
        return $user->hasPermission('Product_restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Product  $user
     * @param  \App\Models\Product  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteforever(User $user)
    {
        return $user->hasPermission('Product_deleteforever');
    }
   
}
