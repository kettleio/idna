# Laravel Wrapper for php-idna-converter
This is an ultra thin wrapper around mabrahamde/php-idna-converter which in turn is a wrapper around [phlyLabs' pure PHP IDNA Converter](http://phlymail.com/en/downloads/idna-convert.html).

## Installation
### Via composer

Add the package to your composer.json file:

	{
	  "require": {
	    "dwickstrom/idna-converter-laravel": "dev-master"
	  }
	}

Run 'composer update'.


Add this string to the array of Service providers in the app/config/app.php file:

	'DavidWickstrom\IdnaLaravelWrapper\IdnaServiceProvider', 

And the alias to the Class aliases array in the same file:

	'Idn'	=>	'DavidWickstrom\IdnaLaravelWrapper\Facades\Idn',

## Usage

	Idn::encode('räksmörgås.nu'); // xn--rksmrgs-5wao1o.nu
	Idn::decode('xn--rksmrgs-5wao1o.nu'); // räksmörgås.nu

