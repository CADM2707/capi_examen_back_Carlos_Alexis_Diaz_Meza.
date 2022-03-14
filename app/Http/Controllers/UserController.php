<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {        
        $collection = collect();
        $usuarios = User::with('domicilio')->get()->take(1);

        foreach ($usuarios as $key => $usuario) {

            $collection->push(
                [
                    'id' => $usuario->id,
                    'nombre' => $usuario->name,
                    'email' => $usuario->email,
                    'email_verified_at' => $usuario->email_verified_at,
                    'created_at' => $usuario->created_at,
                    'updated_at' => $usuario->updated_at,
                    'fecha_nacimento' => $usuario->fecha_nacimento,
                    'edad' => Carbon::parse($usuario->fecha_nacimento)->age,
                    'domicilio' => $usuario->domicilio->domicilio,
                    'numero_exterior' => $usuario->domicilio->numero_exterior,
                    'colonia' => $usuario->domicilio->colonia,
                    'cp' => $usuario->domicilio->cp,
                    'ciudad' => $usuario->domicilio->ciudad,
                ]
            );
            
        }
        return response()
            ->json($collection);

    }



}
