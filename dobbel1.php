<html>
<body>
<form method="POST" action=''>
    <input type="submit" name="button1"  value="Dobbel">
</form>
</body>
</html>

<?php
if (isset($_POST['button1'])){
    $dobbelstenen = array(rand(1, 6), rand(1, 6), rand(1, 6), rand(1, 6), rand(1, 6));
    $totaal = 0;
    foreach ($dobbelstenen as $dobbel){
        echo $dobbel . ", ";
        $totaal += $dobbel;
    }
    echo "totaal: " . $totaal;
}
?>