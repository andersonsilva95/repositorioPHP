<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Request</title>
  </head>
  <body>
<form class="" action="request3.php" method="POST">
CPF:<input type="text" name="cpf" value="">
<input type="submit" name="" value="OK">
</form>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_REQUEST['cpf'];
      if (empty($cpf)) {
        echo "Preechan o CPF!";
      }else {
        $cpf_enviado = validaCPF($cpf);
        if ($cpf_enviado == true)
        echo "CPF verdadeiro!";
        elseif ($cpf_enviado == false)
        echo "CPF não é valido!";
      }
    }
    // Função que valida o CPF
    function validaCPF($cpf)
    {	// Verifiva se o número digitado contém todos os digitos
        $cpf = str_pad(preg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);

    	// Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
    	{
    	return false;
        }
    	else
    	{   // Calcula os números para verificar se o CPF é verdadeiro
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }

                $d = ((10 * $d) % 11) % 10;

                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }
  ?>

  </body>
</html>
