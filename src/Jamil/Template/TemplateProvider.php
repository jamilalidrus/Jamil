<?php
 namespace Jamil\Template;


use Illuminate\Support\ServiceProvider;

class TemplateProvider extends ServiceProvider {

	

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		
		$this->loadViewsFrom(__DIR__.'/Resources/View','JamilTemplate');
		$this->publishes([__DIR__.'/public'=>public_path("jamil-template")], 'public');
	}


	public function register()
	{
		
	}

	


}
