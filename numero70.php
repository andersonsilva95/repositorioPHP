 <?php

 class num70{

function comp(){

	$val =70;
	$resul = "";
	if ($val>0) {
		echo $result = "valor positivo";
	}elseif ($val<0) {
		echo $result = "valor negativo";
	}else{
		echo $result = "igual a zero";
	}
}
 }


$resp = new num70;

echo $resp -> comp();
