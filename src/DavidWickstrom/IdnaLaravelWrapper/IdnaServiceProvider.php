<?php namespace DavidWickstrom\IdnaLaravelWrapper;

use Illuminate\Support\ServiceProvider;

class IdnaServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('idnalaravelwrapper', function()
		{
			return new \idna_convert(['idn_version' => 2008]);
		});
	}
}
