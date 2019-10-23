<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>validaçã</title>
  </head>
  <body>
    <b>Validação</b><br><br>
    <table>
    <form class="formulario" action="validacao.php" method="post">
      Nome:<input type="text" name="name" value=""><br>
      <input type="submit" name="" value="Submeter">
</table>
    </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $name  = $_REQUEST['name'];
        if (empty($name)) {
          echo "Preencha o campo nome.";
        }
        else {
          echo $name;
        }
      }
?>

  </body>
</html>
