<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

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
		$this->registerPostRepository();
	}

	private function registerPostRepository()
	{
		$repository = 'App\Repositories\Posts\EloquentPostRepository';
 
		$this->app->bind('App\Repositories\Posts\PostRepositoryInterface', $repository);
	}
}