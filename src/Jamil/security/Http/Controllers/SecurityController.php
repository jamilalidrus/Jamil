<?php 
namespace Jamil\security\Http\Controllers;

use App\Http\Controllers\Controller;

class SecurityController extends Controller
{
	public function form()
	{
		return view("JamilSecurity::form-login");
	}
}

?>