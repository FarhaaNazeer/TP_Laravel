<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class SecurityController extends Controller
{
    public function create()
    {
        return view('Security/register');
    }

    public function save(RegisterRequest $request)
    {
        $user = new User();

        $user->name = htmlentities($request->get('name'));
        $user->email = htmlentities($request->get('email'));
        $user->setCreatedAt(new \DateTime());

        $password = htmlentities(trim($request->get('password')));
        $hash_password = Hash::make($password);

        $user->password = $hash_password;

        $user->save();

        return redirect('home');
    }
}
