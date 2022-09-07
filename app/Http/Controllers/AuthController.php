<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPostRequest;
use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\updateUserRequest;

use App\Models\User;
;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function logout()
    {
        auth("web")->logout();
        return redirect("/home");
    }

    public function showRegisterForm()
    {
        return view("auth.registration");
    }

    public function login(LoginPostRequest $request)
    {
        $data = $request->validated();

        if (auth("web")->attempt($data)) {

            return redirect("/home");

        }

        else {
            return response()->json([

                'errors' => 'Пользователь не найден или неправильный пароль'

            ], 403);

        }

    }

    public function register(RegisterPostRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        if ($user) {
            auth("web")->login($user);
        }

        return redirect("/home");

    }

    public function getUser()
    {
        $user = auth()->user();


        return response()->json([

            'user' => $user

        ], 200);

    }

    public function updateUser(updateUserRequest $request)
    {
        $request->validated();


        $id = $request->id;
        $user_auth = auth()->user();

        $name = $request->name;
        $email = $request->email;
        $password = bcrypt($request->password);

        if ($name != null) {
            User::where('id', '=', $id)->update(array(
                'name' => $name));
        }
        if ($email != null) {
            User::where('id', '=', $id)->update(array(
                'email' => $email));
        }
        if ($password != null) {
            User::where('id', '=', $id)->update(array(
                'password' => $password));
        }


        return response()->json([

            'user' => $user_auth

        ], 200);

    }


}
