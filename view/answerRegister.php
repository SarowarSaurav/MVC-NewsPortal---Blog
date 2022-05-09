<?php
ob_start();

if (isset($result)) {
    if ($result[0] == true) {
?>
        <div class="container">
            <div class="alert alert-info">
                <strong>ব্যবহারকারী যোগ করা হয়েছে </strong>
                <a href="admin/"> Dashboard</a>
            </div>
        </div>
    <?php
    } else if ($result[0] == false) {
    ?>
        <div class="container">
            <div class="alert alert-warning">
                <strong>ভুল!</strong> <?php echo $result[1]; ?>
                <a href="registerForm">নিবন্ধন ফর্ম</a>
            </div>
        </div>
<?php
    }
}
?>
<?php $content = ob_get_clean(); ?>

<?php include "view/layout.php";
