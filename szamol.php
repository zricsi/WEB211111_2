
<?php
    $eredmeny="";
    if(isset($_GET["kuld"]))
    {
        $a=$_GET["a"];
        $b=$_GET["b"];
        $c=0.0;
        switch($_GET["muvelet"])
        {
            case "+": {$c=$a+$b;break;}
            case "-": {$c=$a-$b;break;}
            case "*": {$c=$a*$b;break;}
            case "/": {$c=$a/$b;break;}
        }
        $eredmeny="<hr>
        <p>$a $_GET[muvelet] $b = $c</p>";
    }
?>