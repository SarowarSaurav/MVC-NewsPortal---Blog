<?php ob_start() ?>
<article>
    <div id="main" class="container">
        <h3>এডমিন প্যানেল</h3>
        <div class="row">
            <p>এডমিন প্যানেল</p>
        </div>
    </div>
</article>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php";
