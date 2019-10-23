<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validação 2</title>
  </head>
  <body>
    <form class="" action="validacao2.php" method="post">
      Nome: <input type="text" name="nome" value="">
      <input type="submit" name="" value="OK">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = $_REQUEST['nome'];
      if (empty($nome)) {
        echo "Preencha o nome";
      }else {
        echo "$nome";
      }
    }?>
  </body>
</html>
