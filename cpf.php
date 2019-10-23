<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Digite o CPF: <input type="text" name="txtcpf">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['txtcpf'];
    if (empty($name)) {
        echo "Por favor preencha o cpf";
    } else {
	    $cpf_enviado = validaCPF($name);
		if($cpf_enviado == true)
			echo "CPF VERDADEIRO";
		else if($cpf_enviado == false)
			echo "CPF FALSO";

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
