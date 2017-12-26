<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUsersController extends Controller
{
	public function saludo($name,$nickname=null)
	{
		$name = ucfirst($name);
		if ($nickname) {
			return "Bienvenido {$name}, tu apodo es {$nickname}";
		} else {
			return "Bienvenido {$name}";
		}	
	}
}
