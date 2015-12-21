<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Entities\User;
use App\Entities\UserRepository;
use App\Entities\UserRepositoryDummyData;

use App\Entities\interfacepengguna;

class UserController extends Controller  {
	protected $user;

	public function __construct(interfacepengguna $user){
			$this->user=$user;
	}

	public function tampil(UserRepository $user){
	
		return view('user.tampil-user',[
				'user'	=>$user->all(),
				// 'title'	=>'Data User',
				// 'logged'	=>true
			]);
	}

}
