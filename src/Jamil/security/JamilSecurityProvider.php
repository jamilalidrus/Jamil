<?php
 namespace Jamil\security;

 use Illuminate\Routing\Router;

// use Illuminate\Support\ServiceProvider;
 use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;




class JamilSecurityProvider extends ServiceProvider {
protected $namespace='Jamil\security\Http\Controllers';
	

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot(Router $router)
	{
		
		parent::boot($router);
	}


	public function register()
	{
		
		$this->loadViewsFrom(__DIR__.'/Resources/View','JamilSecurity');
       require __DIR__.'/routes.php';
			
		
	
	}

	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require __DIR__.'/routes.php';

		});
	}	
}


 