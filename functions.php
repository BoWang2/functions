<?php
$obj = new main();
$array = array("a","b","c","d");
$array1 = array('a','b','b','c','d');
$array2 = array('e','d','f','j');
$array4 = array('a' => 'good','b' => "hero",'a' => 'pretty','c' => 'what');
$string = "a b c d ";
$string1 = "a b c d e f";
$obj->removelast($string);
$obj->getlength($string);
$obj->splitstr($string);
$obj->stringcomp($string,$string1);
$obj->partstr($string);
$obj->repeatstr($string,$a);
$obj->stroccur($string,$a);
$obj->outputstr($string);
$obj->returnascii($string);
$obj->quotestr($string);
$obj->construct1();
$obj->pop($array);
$obj->countarr($array);
$obj->advpointer($array);
$obj->splitarr($array,$x);
$obj->createarr($array);
$obj->rmdup($array1);
$obj->combarr($array,$array2);
$obj->getcol($array4,'a');
$obj->returnkey($array1,$x);
$obj->mergearr($array,$array2);
class main
{
        public function removelast($string){
	         echo '<h1>remove the last character</h1>';
		 echo  chop($string,"d");
		 echo '<hr>';
		 }


	public function getlength($string){
		echo '<h1>get string length</h1>';
		echo strlen($string);
		echo '<hr>';
		}


	public function splitstr($string){
		echo '<h1>split string by string</h1>';
		$piece = explode(" ",$string);
		echo $piece[1];
		echo '<hr>';
		}

	public function  stringcomp($string,$string1){
		echo'<h1>string comparsion</h1>';
		$a =  strcmp($string,$string1);
		if($a < 0)
			echo "string less than string1";
		else
			echo"string more than string1";
		echo '<hr>';
		}

	public function partstr($string){
		echo '<h1>return part string</h1>';
		echo substr($string,1);
		echo '<hr>';
		}
	
	public function repeatstr($string,$a){
		echo "<h1>repeat string</h1>";
		echo str_repeat($string,2);
		echo '<hr>';
		}	

	public function stroccur($string,$a){
		echo "<h1>Find the first occurrence of a string</h1>";
		echo strstr($string,'c');
		echo '<hr>';
		}

	public function outputstr ($string){ 
		echo '<h1>output the string</h1>';
	 	printf($string);
		echo '<hr>';
		}
	
	public function returnascii($string){
		echo "<h1>return ascii value of characters</h1>";
		echo ord($string);
		echo '<hr>';
		}

	public function quotestr($string){
		echo"<h1>quote string with slashe</h1>";
		echo addslashes($string);
		echo '<hr>';
		}

	

	public function construct1 (){
		echo '<h3>THERE ARE ARRAY FUNCTIONS</h3>';
		}


	public function pop($array){
		echo"<h1>pop the last character</h1>";
		array_pop($array); 
		print_r($array);
		echo "<hr>";
		}



	  public function countarr($array){
		echo"<h1>count the elements</h1>";
		echo count($array);
		echo"<hr>";

		}

	  public function advpointer($array){
		echo"<h1>advance internal pointer</h1>";
		echo next($array);
		echo '<div>';
		echo next($array);
		echo'<hr>';
	 	 } 		



	  public function splitarr($array,$x){
		echo"<h1>split array into chunk </h1>";
		print_r (array_chunk($array,2));
		echo "<hr>";

	 	 }	


	public function createarr($array){
		echo"<h1>create array</h1>";
		print_r ($array);
		echo'<hr>';
		}	

			
	public function rmdup($array1){
		echo"<h1>remove duplicate value from array</h1>";
		print_r ($array1);
		echo '<div>';
		print_r (array_unique($array1));
		echo "<hr>";

		}


	public function combarr($array,$array2){
		echo '<h1>combine arrays</h1>';
		print_r ($array);
		echo '<div>';
		print_r ($array2);
		echo '<div>';
		print_r (array_combine($array,$array2));
		echo '<hr>';
		}




	public function getcol($array4,$x){
		echo '<h1>return the value from a single column </h1>';
		$record = array_column($array4,'a');
		print_r ($record);
		echo '<hr>';
		}




	public function returnkey($array1,$x){
		echo "<h1>return the key</h1>";
		print_r (array_keys($array1,'b'));
		echo '<hr>';
		}		
						




	public function mergearr($array,$array2){
		echo "<h1>merge two array</h1>";
		$array00 = array_merge($array,$array2);
		print_r ($array00);
		echo'<hr>';
		}	


}
			
?>
