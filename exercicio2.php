<?php

class exec2
{

	function tabuada($num){

		for ($i=0; $i <=10  ; $i++) {
		   $this->$num = $num;

			$result = $num * $i;
			echo "$num x $i = $result; <br>";
		}
	}
	function par(){
		for ($i=0; $i <=200 ; $i++) {
			if ($i % 2 == 0) {
				echo "$i, ";
			}
		}
	}
}


$tab = new exec2;

$tab -> tabuada(6);
$tab -> par();
