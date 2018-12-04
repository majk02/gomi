<?php
file_put_contents('data/'.date("YmdHis").$_POST['title'], $_POST['description']);
header('Location: /index.php?id='.date("YmdHis").$_POST['title']);
?>