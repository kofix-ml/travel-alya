<?php

use Illuminate\Database\Seeder;

class UserRolePerm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Admin';
        $user->password = bcrypt('adminadmin');
        $user->email = 'admin@admin.admin';
        $user->save();

        $user2 = new \App\User();
        $user2->name = 'User';
        $user2->password = bcrypt('useruser');
        $user2->email = 'user@user.user';
        $user2->save();

        $admin = new \App\Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator';
        $admin->description  = 'User is allowed to manage and edit other users';
        $admin->save();


        $owner = new \App\Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner';
        $owner->description  = 'User is the owner of a given project';
        $owner->save();


        $user = \App\User::first();
        $user->attachRole($admin);


        $createPost = new \App\Permission();
        $createPost->name         = 'create-post';
        $createPost->display_name = 'Create Posts';
        $createPost->description  = 'create new blog posts';
        $createPost->save();


        $editUser = new \App\Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit Users';
        $editUser->description  = 'edit existing users';
        $editUser->save();


        $admin->attachPermission($createPost);


        $user->hasRole('owner');   // false
        $user->hasRole('admin');   // true
        $user->can('edit-user');   // false
        $user->can('create-post'); // true
    }
}
