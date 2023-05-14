
<div class="<?php
if($page == 'home')
echo 'header-div';
?>" id="navbar">
      <h2>INTER-NETWORK</h2>
      <nav>
        <ul>
          <li><a href="../index.php" class="<?php if($page == 'home'){
            echo 'active';
          }   ?>" >úvod</a></li>
          <li><a href="./pages/o_nas.php">O Nás</a></li>
          <li><a href="./pages/registracia.php">Registrácia</a></li>
          <li><a href="./pages/kontakt.php">Kontakt</a></li>
          <li><a href="./pages/zamknuta.php">Zamknutá stranka</a></li>
        </ul>
      </nav>
    </div>