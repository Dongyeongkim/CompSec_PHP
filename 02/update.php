<?php
require('view/top.php');
require('lib/print.php');
?>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?= $_GET['id']; ?>">update</a>
    <?php } ?>
    <form method="post" action="update_process.php">
        <input type="hidden" name="old_title" value="<?= $_GET['id']; ?>">
        <p><input type="text" placeholder="Title" name="title" value="<?php print_title(); ?>"></p>
        <p><textarea name="description" placeholder="Description"><?php print_description(); ?></textarea></p>
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
