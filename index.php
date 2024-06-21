<!DOCTYPE HTML>
<html>
	<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>
    <? $paginaAtual = 'Home'; $tituloPagina = $paginaAtual ." - ". $empresa; ?>
    <title><? echo $tituloPagina ?></title>
  </head>

  <body id="home">    
    <?php include 'assets/header.php'; ?>
    <?php include 'assets/banners.php'; ?>
    <?php include 'assets/inscrever.php'; ?>
    <?php include 'assets/fundadores.php'; ?>
    <?php include 'assets/governanca.php'; ?>
    <? include ('assets/footer.php') ?>
  </body>
</html>