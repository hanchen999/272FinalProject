<?php
	
class communication
{
	public function __construct(){
		
	}
	
	public function setOrder($username,$product_ids,$price,$storeID){
		//step1, save user to market-place database
		//mysqlxxx
		
		//step2, prepare the $data;
		$data = array(
			"username"	=> $username,
			"product_ids"	=> $product_ids,
			"price"	=> $price
		);
		
		//step3, tell this new user to the individual website
		$this->sendRequestToIndividualWebsite($storeID,"setOrder",$data)
	}
	
	public function setUser($name,$email,$phone){
		//step1, save user to market-place database
		//mysqlxxx
		
		//step2, prepare the $data;
		$data = array(
			"name"	=> $name,
			"email"	=> $email,
			"phone"	=> $phone
		);
		
		//step3, tell this new user to all websites
		for($i=1;$i<=6;$i++){
			$this->sendRequestToIndividualWebsite($i,"setUser",$data)
		}
	}
	
	//this function is the only curl function, which will be reused in all cross-domain communication.
	private function sendRequestToIndividualWebsite($storeID,$type,$data){
		if($storeID==1){
			$domain = "";
		} else if ($storeID==2){
			$domain = "";
		} else if ($storeID==3){
			$domain = "";
		} else if ($storeID==4){
			$domain = "";
		} else if ($storeID==5){
			$domain = "";
		} else if ($storeID==6){
			$domain = "";
		}
		$parameters = array(
			"type" => $type,
			"data" => $data
		);
		$curl1 = curl_init();
		curl_setopt($curl1, CURLOPT_POST, 1);
		curl_setopt($curl1, CURLOPT_URL, $domain."/request.php");  
		curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl1, CURLOPT_POSTFIELDS, $parameters);
		$result1 = curl_exec($curl1);
		curl_close($curl1);
		return $result1;
	}
}

?>