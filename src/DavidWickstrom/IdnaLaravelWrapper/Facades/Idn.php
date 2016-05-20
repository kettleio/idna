<?php namespace DavidWickstrom\IdnaLaravelWrapper\Facades;

use Illuminate\Support\Facades\Facade;

class Idn extends Facade {
	
	public static function getFacadeAccessor()
	{
		return "idnalaravelwrapper";
	}
}
