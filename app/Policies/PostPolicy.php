<?php

namespace App\Policies;

use App\Model\admin\admin;
//use App\Model\user\post;
use Illuminate\Auth\Access\HandlesAuthorization;

class postPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function view(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\admin  $user
     * @return mixed
     */
    public function create(admin $user)
    {
      return $this->getPermission($user,1);
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
          return $this->getPermission($user,3);
    }
    // category-CRUD gate
    public function category(admin $user)
    {
          return $this->getPermission($user,8);
    }
    // tag-CRUD gate
    public function tag(admin $user)
    {
          return $this->getPermission($user,7);
    }
/*
    // user_create gate
    public function user_create(admin $user)
    {
          return $this->getPermission($user,4);
    }

    // user_update gate
    public function user_update(admin $user)
    {
          return $this->getPermission($user,5);
    }

    // user_delete gate
    public function user_delete(admin $user)
    {
          return $this->getPermission($user,6);
    }

    // post_publish gate
    public function post_publish(admin $user)
    {
          return $this->getPermission($user,9);
    }
    */
    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function restore(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function forceDelete(admin $user)
    {
        //
    }
    // user defined function to avoid repetition of dsame codes
    protected function getPermission($user, $p_id)
    {
      foreach ($user->roles as $role) {
        foreach ($role->permissions as $permission) {
          if($permission->id == $p_id){
            return true;
          }
        }

      }
      return false;
    }
}
