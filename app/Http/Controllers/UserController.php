<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        DB::table('users')->insert([
            'name' => 'New User',
            'email' => 'newuser@example.com',
            'password'=> bcrypt('123456789'),
        ]);
    }

    public function read()
    {
        $users = DB::table('users')->get();
        return $users;
    }

    public function update($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['name' => 'Updated User']);
    }

    public function delete($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();
    }
}
