<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class BackOfficeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('backoffice.index');
    }


    public function users()
    {
        $users = User::all();
        $count = count($users);

        return view('backoffice.users', ['users' => $users, 'count' => $count]);
    }

    public function addUserView()
    {
        return view('backoffice.users.addUser');
    }

    public function addUser()
    {
        
    }
}
