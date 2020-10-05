<?php
    unlink('data/'.$_GET['id']);
    header('Location: 02/index.php');
?>