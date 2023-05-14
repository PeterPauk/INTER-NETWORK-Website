
<div class="<?php

if($page == 'o_nas'){
echo 'header-onas-div';
}
elseif($page == 'regi'){
echo 'header-regi-div';
}
elseif($page == 'kontakt'){
echo 'header-kontakt-div';
}
?>" id="navbar">
      <h2>INTER-NETWORK</h2>
      <nav>
        <ul>
          <li><a href="../index.php">úvod</a></li>
          <li><a href="../pages/o_nas.php"class="<?php if($page == 'o_nas'){
            echo 'active';
          }   ?>">O Nás</a></li>
          <li><a href="../pages/registracia.php"class="<?php if($page == 'regi'){
            echo 'active';
          }   ?>">Registrácia</a></li>
          <li><a href="../pages/kontakt.php"class="<?php if($page == 'kontakt'){
            echo 'active';
          }   ?>">Kontakt</a></li>
          <li><a href="../pages/zamknuta.php">
            Zamknutá stranka</a></li>
        </ul>
      </nav>
    </div>