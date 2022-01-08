<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class Datatablecontroller extends Controller
{
    public function simple()
    {
        // $users = User::all();
        $users = User::paginate(10);
        return view('users.simple', compact('users'));
    }

    public function datatable()
    {
        $users = User::all();
        // // $users->paginate(10);
        // $users = User::paginate(15);
        return view('users.datatable', compact('users'));
    }

    public function ajax()
    {
        $model= User::query();
        // $users = User::all();
        return Datatables::of($model)->make(true);
    }

    public function getUsers()
    {
       
        return Datatables::of(User::query())->make(true);
    }
}
