<?php
  $paginaAtual = isset($paginaAtual) ? $paginaAtual : '';
?>

<nav class="menu dfl">
  <div class="wrapper-menu dfsb container">
    <a href="<? echo ($url) ?>"/>
      <img class="logo" src="<? echo $images ?>home/logo.svg" alt="">
    </a>
    <ul class="menu-links dfc">
      <li><a class="menuhover <?php echo $paginaAtual == 'Agricultura' ? 'active' : ''; ?>" href="agricultura.php"/>Chamada <strong>Práticas de<br> Agricultura Sustentável</strong></a></li>
      <li><a class="menuhover <?php echo $paginaAtual == 'Turismo' ? 'active' : ''; ?>" href="turismo.php"/>Chamada<br><strong>Turismo sustentável</strong></a></li>
      <li><a class="menuhover <?php echo $paginaAtual == 'Chamadas' ? 'active' : ''; ?>" href="chamadas.php"/><strong>Chamadas anteriores</strong></a></li>
      <li><a class="menuhover <?php echo $paginaAtual == 'Home' ? 'active' : ''; ?>" href="index.php#inscrever"/><strong>Sobre nós</strong></a></li>
    </ul>

    <div class="menu-mobile">
      <div id="menuToggle">
        <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>          
      </div>      
    </div>    
  </div>
</nav>
