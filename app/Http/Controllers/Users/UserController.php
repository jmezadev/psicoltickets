<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'email' => 'required|unique:users,email',
                'password' => 'required',
                'dni' => 'required',
                'phone' => 'required',
            ],
            [

            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->dni = $request->dni;
        $user->phone = $request->phone;
        $success = $user->save();

        if ($success) {
            return response()->json(['success' => $success]);
        } else {
            return response()->json(['success' => false, 'msg' => 'Ha ocurrido un error al crear la al usuario. Intente mas tarde.', 'code' => 1], 500);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
