<?php
    echo "<p>title: ".$_GET['title']."<p>";
    echo "<p>description: ".$_GET['description']."<p>";
    file_put_contents('data/'.$_GET['title'], $_GET['description']);
?>