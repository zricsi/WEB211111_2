<?php include("header.php"); ?>

<?php
    $faktor=1;
    $kiiras="";
    if(isset($_POST["kuld"]))
    {
        $kiiras="<p>".$_POST["f"]."! = ".$faktor;
        if($_POST["f"]!=1)
        {
            for($i=2; $i<=$_POST["f"]; $i++)
            {
                $faktor *= $i;
                $kiiras.="*".$i;
            }
        }
    $kiiras.=" = ".$faktor."</p>";
    }
?>

<h2>Faktoriális számolás</h2>
<form method = 'POST' action=''>
    <p>Adja meg a számot: </p>
        <input type = 'number' name ='f' required value = '1' min='1'>
        <input type = 'submit' name = 'kuld' value = 'Mutasd'>
</form>

<?php echo $kiiras;
include "footer.php";
?>
<?php include("footer.php"); ?>