<?php
require('view/top.php');
require('lib/print.php');
?>
    <a href="create.php">create</a>
    <form method="post" action="create_process.php">
        <p><input type="text" placeholder="Title" name="title"></p>
        <p><textarea name="description" placeholder="Description" ></textarea></p>
        <p><input type="submit"></p>
    </form>
    <h2>
        <?php
            print_title();
        ?>
    </h2>
        <?php
            print_description();
        ?>
<?php
require('view/bottom.php');
?>
