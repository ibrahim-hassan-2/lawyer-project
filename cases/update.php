<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";

if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $select  = "SELECT * FROM `cases` where id = $id";
    $s = mysqli_query($conn, $select);
    $update = "UPDATE `cases` SET `status` = 'approved' where id = $id";
    $q = mysqli_query($conn, $update);
    go("/cases/list.php");
}

else if (isset($_GET['reject'])) {
    $id = $_GET['reject'];
    $select  = "SELECT * FROM `cases` where id = $id";
    $s = mysqli_query($conn, $select);
    $update = "UPDATE `cases` SET `status` = 'rejected' where id = $id";
    $q = mysqli_query($conn, $update);
    go("/cases/list.php");
}

include '../shared/footer.php';
include "../shared/script.php";

?>