<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../genral/config.php";
include "../genral/functions.php";

$select  = "SELECT * FROM `cases`;";
$s = mysqli_query($conn, $select);

?>
<main id="main" class="main">
    <h1> Show Cases </h1>
    <div class="container col-8 p-5">
        <div class="card p-5">
            <div class="card-body">
                <?php foreach($s as $data) { ?>
                <p> Title :<?= $data['title'] ?> </p>
                <p> description :<?= $data['desciption'] ?> </p>
                <p> Status :<?= $data['status'] ?> 
                    <a href="/hima/cases/update.php?approve=<?= $data['id'] ?> " class="btn btn-info"> approve </a>
                    <a href="/hima/cases/update.php?reject=<?= $data['id'] ?> " class="btn btn-danger"> reject </a> 
                </p>
                <hr>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php
include '../shared/footer.php';
include "../shared/script.php";

?>