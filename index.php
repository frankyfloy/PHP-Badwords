<?php
    $testo = 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    $badword = $_GET['badWord'];
    $newTesto = str_replace($badword, '***', $testo);
?>

<div class="">
    <h2>TESTO ORIGINALE</h2>
    <?php echo ucfirst($testo); ?>
</div>

<br>
<br>
<br>

<div class="">
    <h2>TESTO REPLACE CHAR  <strong>'<?php echo ucfirst($badword); ?>'</strong> con <strong>***</strong></h2>
    <?php echo ucwords($newTesto); ?>
</div>

<br>
<br>
<br>

<div class="">
    lUNGHEZZA TESTO : <?php echo strlen($testo) ?>
</div>

<br>
<br>
<br>

<div class="">
    BADWORD : <?php  echo  ucfirst($badword) ?>
</div>
