<?php

    ob_start();
    session_start();

    if(!isset($_SESSION['admin_id']))header("location:login.php");

    include "../config.php";
    
?>

<!DOCTYPE html>
<html>
<?php include("include/head.php") ?>
<body>
    <div id="wrapper">
        <?php include("include/header.php") ?>
        <div id="page-wrapper">
            <?php
            if (isset($_GET["watercolor"])) include("page/blog/watercolor.php");
            else if (isset($_GET["watercolor-update"])) include("page/blog/watercolor-update.php");
            else if (isset($_GET["watercolor-delete"])) include("page/blog/watercolor-delete.php");
            else if (isset($_GET["graphicsdesign"])) include("page/blog/graphicsdesign.php");
            else if (isset($_GET["graphicsdesign-update"])) include("page/blog/graphicsdesign-update.php");
            else if (isset($_GET["graphicsdesign-delete"])) include("page/blog/graphicsdesign-delete.php");
            else if (isset($_GET["user"])) include("page/user/index.php");
            else if (isset($_GET["administrator"])) include("page/administrator/index.php");
            else if (isset($_GET["administrator-delete"])) include("page/administrator/delete.php");
            else if (isset($_GET["administrator-update"])) include("page/administrator/update.php");
            else if (isset($_GET["active-update"])) include("page/home/active-update.php");
            else if (isset($_GET["follow-update"])) include("page/home/follow-update.php");
            else if (isset($_GET["follow-delete"])) include("page/home/follow-delete.php");
            else include("page/home/index.php");
            ?>
        </div>
    </div>
    <?php include("include/footer.php") ?>
</body>
</html>

<?php

    ob_end_flush();

?>
