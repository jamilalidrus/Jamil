<?php
 namespace App\Entities;

	/**
	* 
	*/
	class UserRepositoryDummyData implements interfacepengguna	{
		
		

		public function all(){
			$u =new \StdClass;
			$u->id="1";
			$u->name="alidrus";
			$u->password="12345";
			$u->alamat="samarinda";

			$u2 =new \StdClass;
			$u2->id="2";
			$u2->name="alidrus";
			$u2->password="12345";
			$u2->alamat="samarinda";
			return [$u,$u2];

		}

		public function semua(){
			$a=new \StdClass;
			$a->id="22";
			$a->name="jek";
			return[$a];
		}

		public function get($id){

		}



	}

?>