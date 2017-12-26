<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		$users=[
			'Andres',
			'Gilberto',
			'Susana'
		];
		return view('users.usuarios', compact('users'));
	}
	public function show($id)
	{
		return "Detalles del usuario: {$id}";
	}
	public function add()
	{
		return "Agregar nuevo usuario";
	}
	public function edit($id)
	{
		return "Editar usuario {$id}";
	}
}
