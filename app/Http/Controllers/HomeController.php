<?php namespace App\Http\Controllers;

use App\Component\Birds\FlyBird;
use App\User;
use App\Page;
use App\Repositories\Pages\PageRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Component\MyClass;
use App\Component\Birds;
use App\Commands\PurchasePodcast;

class HomeController extends Controller {
    public $pages;

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
	public function index(Request $request)
	{
        $rets = $this->pages->find(1);//->get()
        $user = User::find(1);
        //echo '<pre>';print_r($user);echo '</pre>';
        /*
        if(!empty($rets)){
            foreach($rets as $ret){
                echo "<pre>";print_r($ret->id);echo "</pre>";
            }
        }*/
        $this->dispatch(new PurchasePodcast($user, $rets));
//        $FlyBird = new Birds\FlyBird();
//        echo $FlyBird->fly();exit;
//        echo $users = User::ofName('emily')->get();
//        echo MyClass::display();
//        $name = $request->input('name');
//        echo "<pre>";print_r($name);echo "</pre>";
//        $results = DB::select('select * from pages where id = :id', ['id' => 1]);
//        echo "<pre>";print_r($results[0]->title);echo "</pre>";
//        $id = 1;
//        $post = $this->pages->find($id);
//        echo "<pre>";print_r($post);echo "</pre>";exit;
//        return view('home')->withPages(Page::all());
	}

    public function storePhoto(Request $request)
    {
//        echo $url = $request->url();
//        print_r($_FILES);
        if ($request->hasFile('photo'))
        {
//            $request->file('photo')->move($destinationPath, $fileName);
            echo $request->file('photo')->getClientMimeType();
            echo "<br/>";
            echo $request->file('photo')->guessClientExtension();
        }
    }
}
