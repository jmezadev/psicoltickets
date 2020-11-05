<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                'name.required' => 'Debes ingresar tu nombre',
                'last_name.required' => 'Debes ingresar tu apellido',
                'email.required' => 'Debes ingresar tu email',
                'email.unique' => 'El correo ya está registrado',
                'password.required' => 'Debes ingresar tu contraseña',
                'dni.required' => 'Debes ingresar tu número de documento',
                'phone.required' => 'Debes ingresar tu número de teléfono',
            ]
        );

        try {
            DB::beginTransaction();

            $user = new User();
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->address = $request->address;
            $user->dni = $request->dni;
            $user->phone = $request->phone;
            $success = $user->save();

            DB::commit();
            return response()->json(['success' => $success]);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['success' => false, 'msg' => 'Ha ocurrido un error al crear la al usuario. Intente mas tarde.', 'code' => $e->getCode(), 'error' => $e->getMessage()]);
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

    public function userTickets(Request $request)
    {
        dd($request->all());
    }
}
