<?php
 namespace App\Entities;
 use App\Entities\interfacepengguna;

	/**
	* 
	*/
	class UserRepository implements interfacepengguna 	{
		protected $user;
		
		public  function __construct (User $user)
		{
			$this->user=$user;
		}

		public function all(){
			// $data=[];
			// foreach ($this->user->all() as $e) {
			// 	$e->nama =$e->name;
			// 	$e->kode=base64_decode($e->id);
			// 	$e->slug=str_replace("",'-',strtolower($e->name));
			// 	$data[]=$e;
			// }

			// return $data;

			// return User::all();
		 $data= User::all();
		 $collection=$data->map(function($item,$key){
		 	$item->alamat="busam";
		 	// $item->address= $this->alamat;
		 	return $item;
		 });

		 return $collection;
		}

		public function get($id){

		}


	}

?>