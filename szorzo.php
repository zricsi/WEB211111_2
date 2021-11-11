<?php include("header.php"); ?>

<?php $tabla="";
if(isset($_POST["kuld"]))
{
    $tabla.="<table class='szorzo'>";
    for($i=1; $i<=$_POST["sz"]; $i++)
    {
        $tabla.="<tr>";
        for($j=1; $j<=$_POST["sz"];$j++) 
        {
            $tabla.="<td>".($i*$j)."</td>";
        }
        $tabla.="</tr>";
    }
    $tabla.="</table>";
}
?>

<h2>Szorzótábla</h2>
<form method="POST" action="">
    <input type="number" name="sz" min="1" max="16">
    <input type="submit" name="kuld" value="Szorozz!!!">
</form>

<?php echo $tabla?>

<?php include("footer.php"); ?>