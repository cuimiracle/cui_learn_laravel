<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CuiServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->registerBirdComponent();
	}

    function registerBirdComponent(){
//        $repository = 'App\Repositories\Pages\EloquentPageRepository';
//        $this->app->bind('App\Repositories\Pages\PageRepositoryInterface', $repository);
    }
}
