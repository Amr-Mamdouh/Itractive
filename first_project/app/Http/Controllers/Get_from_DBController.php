<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Reuests;
use DB;
ini_set('max_execution_time', 180);

class Get_from_DBController extends Controller
{

	public function show()
	{
		$users=DB::table('users')->get();
		return view ('Pages.show',compact('users'));
	}
}