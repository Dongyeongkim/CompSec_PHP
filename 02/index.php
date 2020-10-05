<?php 
require('lib/print.php');
require('view/top.php');
?>

    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?= $_GET['id']; ?>">update</a>
        <a href="delete_process.php?id=<?= $_GET['id']; ?>">delete</a>
    <?php } ?>
    <h2>
        <?php
            print_title();
        ?>
    </h2>
        <?php
            print_description();
        ?>
<?php 
require('view/bottom.php')
?>
