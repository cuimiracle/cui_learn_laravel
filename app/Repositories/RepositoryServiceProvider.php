<?php namespace App\Repositories;

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
		// $repository = 'App\Repositories\Pages\EloquentPageRepository';
 		$repository = 'App\Repositories\Pages\RedisPageRepository';
		$this->app->bind('App\Repositories\Pages\PageRepositoryInterface', $repository);
	}
}
