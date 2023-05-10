<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
 
    public function viewAny(User $user)
    {
        return $user->hasPermission('Category_viewAny');
    }

    public function view(User $user, Category $category)
    {
        return $user->hasPermission('Category_view');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('Category_create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Category $category)
    {
        return $user->hasPermission('Category_update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Category $category)
    {
        return $user->hasPermission('Category_delete');
    } 
}