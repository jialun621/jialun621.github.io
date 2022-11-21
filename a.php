<html><head></head>
<body bgcolor="#ccccff">
 
<?php
if( isset($_GET['a']) && isset($_GET['b']) ){
    echo (int)$_GET['a'] * (int)$_GET['b'];
}
?>
 
<form action="a.php" method="get">
    <input type="text" name="a"> +
    <input type="text" name="b">
    <input type="submit">
</form>
