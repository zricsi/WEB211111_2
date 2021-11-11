<?php include("header.php"); ?>

<?php include "szamol.php"?>
<p>Adj meg két számot és műveletet!</p>
<form method="GET" action="">
    <input type="number" name = "a">
    <select name="muvelet">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="number" name="b"> 
    <input type="submit" name="kuld" value="Számolj">   
</form>

<?php echo $eredmeny;?>

<?php include("footer.php"); ?>