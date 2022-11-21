<?php
$a = $_POST['a'];
for($i=1;$i<$a+1;$i++){
    echo "$i ";
}
?>
<form action="c.php" method="post">
    <input type="text" name="a"> 