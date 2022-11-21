<html><head></head>
<body bgcolor="#ccccff">
 

<?php
if( isset($_POST['a']) && isset($_POST['b']) && $_POST['op'] == '+' ){
    echo (int)$_POST['a'] + (int)$_POST['b'];
}
else if( isset($_POST['a']) && isset($_POST['b'])&& $_POST['op'] == '-'  ){
    echo (int)$_POST['a'] - (int)$_POST['b'];
}
 else    if( isset($_POST['a']) && isset($_POST['b'])&& $_POST['op'] == '*'  ){
    echo (int)$_POST['a'] * (int)$_POST['b'];
}
   else   if( isset($_POST['a']) && isset($_POST['b']) && $_POST['op'] == '/' ){
    echo (int)$_POST['a'] / (int)$_POST['b'];
}
?>
 

 <form action="d.php" method="post">
   <input type="text" name="a">
   <select name="op">
       <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
   </select>
<input type="text" name="b">
<input type="submit" name="">
</form>

</body></html>