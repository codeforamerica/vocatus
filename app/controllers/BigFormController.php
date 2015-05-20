<?php

class BigFormController extends BaseController{


	public function showFirstPage(){
		return View::make('start');
	}


	public function showProviderChooser(){

		$has_firstname = Input::get('firstname',false);		

		if($has_firstname){
			Session::put('firstname',Input::get('firstname'));
			Session::put('lastname',Input::get('lastname'));
			Session::put('birthdate',Input::get('birthdate'));	//need to validate this!
			Session::put('digitalsig',Input::get('digitalsig'));
		}else{
			echo "How did you get here without filling out the form?";
			exit();
		}

		if(strpos(Request::root(),'local') !== false){
			$api_url = "http://patchlocal.ft1.us/";
		}else{
			$api_url = "http://patch.ft1.us/";
		}

		return View::make('providerchoose',array('api_url' => $api_url));

	}

	public function finalApproval($npi){

		if(!is_numeric($npi)){
			echo "ERROR $npi needs to be a number\n";
			exit();
		}
	
		if(strlen($npi) != 10){
			echo "ERROR $npi needs to be a 10 digit number\n";
			exit();
		}

		$firstname = Session::get('firstname',false);		
		$lastname = Session::get('lastname',false);		
		$birthdate = Session::get('birthdate',false);		
		$digitalsig = Session::get('digitalsig',false);		

		if(!$firstname){
			echo "No firstname. fail\n";
			exit();
		}

		if(!$lastname){
			echo "No lastname. fail\n";
			exit();
		}

		if(!$birthdate){
			echo "No birthdate. fail\n";
			exit();
		}

		if(!$digitalsig){
			echo "No digitalsig. fail\n";
			exit();
		}


		echo "
<html><head></head><body>

<h1> EndMockup </h1>
<ul>
	<li> first $firstname </li>
	<li> last $lastname </li>
	<li> birthdate $birthdate </li>
	<li> digitalsig $digitalsig </li>
	<li> NPI $npi </li>

</ul>

</body></html>
";


	}

}

?>
