<!DOCTYPE HTML>
<html>
	<head>
    <?php include 'assets/config.php'; ?>
    <?php include 'assets/head.php'; ?>
    <? $paginaAtual = 'Turismo'; $tituloPagina = $paginaAtual ." - ". $empresa; ?>
    <title><? echo $tituloPagina ?></title>
  </head>

  <body id="turismo">
    <?php include 'assets/header.php'; ?>
    <?php include 'assets/banners.php'; ?>
    <?php include 'assets/oquee.php'; ?>
    <?php include 'assets/beneficios.php'; ?>
    <?php include 'assets/criterios.php'; ?>
    <?php include 'assets/processos.php'; ?>
    <?php include 'assets/selecao.php'; ?>
    <?php include 'assets/inscricao.php'; ?>
    <?php include 'assets/fundadores.php'; ?>

    <? include ('assets/footer.php') ?>
  </body>
</html>