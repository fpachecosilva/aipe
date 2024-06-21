<!DOCTYPE HTML>
<html>
	<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>
    <? $paginaAtual = 'Chamadas'; $tituloPagina = $paginaAtual ." - ". $empresa; ?>
    <title><? echo $tituloPagina ?></title>
  </head>

  <body id="chamadas">
    <?php include 'assets/header.php'; ?>
    <?php include 'assets/banners.php'; ?>
    <?php include 'assets/oquee.php'; ?>
    <?php include 'assets/chamadas-negocios.php'; ?>
    <? include ('assets/footer.php') ?>
  </body>
</html>