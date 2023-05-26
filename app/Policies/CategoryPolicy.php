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

    public function create(User $user)
    {
        return $user->hasPermission('Category_create');
    }

    public function update(User $user, Category $category)
    {
        return $user->hasPermission('Category_update');
    }

    public function delete(User $user, Category $category)
    {
        return $user->hasPermission('Category_delete');
    } 

    public function restore(User $user, Category $category)
    {
        return $user->hasPermission('Category_restore');
    } 

    public function deleteforever(User $user, Category $category)
    {
        return $user->hasPermission('Category_forceDelete');
    } 
}