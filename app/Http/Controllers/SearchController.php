<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// http://..../search?item=drafter&
		//array( 'registered_after' => '2014-01-01', 'min_posts' => 10)
		$filters = Input::only('location', 'item');
		$location = $filters['location']; 
		$item = $filters['item'];

		$retval = array();
		
		if ($item == 'Drafter'  && $location == 'Karol Bagh' ) {
			$retval[] = array('User' => 'Naresh' , 'Contact' => '1234567890' , 'ItemCount' => 2 ); 
			$retval[] = array('User' => 'Raman' , 'Contact' => '1234567892' , 'ItemCount' => 4 );
		} else if ( $item == 'Drafter' ) {
			$retval[] = array('User' => 'Naresh' , 'Contact' => '1234567890' , 'ItemCount' => 2 );
			$retval[] = array('User' => 'Raman' , 'Contact' => '1234567892' , 'ItemCount' => 4 );
			$retval[] = array('User' => 'Mukesh' , 'Contact' => '1234567891' , 'ItemCount' => 1 );
		}
		
		return $retval;
	}
	
}
