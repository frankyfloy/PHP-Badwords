<?php
    $testo = 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    $badword = $_GET['badWord'];
    $newTesto = str_replace($badword, '***', $testo);
?>

<div style="background-color: cyan; color: black;">
    <h2>TESTO ORIGINALE</h2>
    <?php echo ucfirst($testo); ?>
</div>

<br>
<br>
<br>

<div style="background-color: cyan; color: black;">
    <h2>TESTO REPLACE CHAR  <strong>'<?php echo ucfirst($badword); ?>'</strong> con <strong>***</strong></h2>
    <?php echo ucwords($newTesto); ?>
</div>

<br>
<br>
<br>

<div style="background-color: cyan; color: black;">
    LUNGHEZZA TESTO : <?php echo strlen($testo) ?>
</div>

<br>
<br><br>

<div style="background-color: cyan; color: black;">
    BADWORD : <?php  echo  ucfirst($badword) ?>
</div>

<br>
<br>
<br>

<div style="background-color: cyan; color: black;">
    <h2>STRINGA NEW LINE</h2>
    <p> <?php  echo str_replace(',', '<br>', $testo);  ?></p>

</div>

<br>
<br>
<br>

<div style="background-color: cyan; color: black;">
    <h2>STRINGA SPLITTATA</h2>
    <p> <?php  var_dump( explode(',',$testo));  ?></p>

</div>
