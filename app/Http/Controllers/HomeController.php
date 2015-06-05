<?php namespace App\Http\Controllers;

use App\Page;
use App\Repositories\Pages\PageRepositoryInterface;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(PageRepositoryInterface $repository)
	{
		$this->middleware('auth');
		$this->pages = $repository;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$id = 1;
		$post = $this->pages->find($id);
		echo "<pre>";print_r($post);echo "</pre>";
		// return view('home')->withPages(Page::all());
	}

}
