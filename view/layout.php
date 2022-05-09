<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>নিউজপোর্টাল</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
</head>

<body>

    <nav class="one">
        <ul class="topmenu">
            <li><a href="#">ক্যাটাগরি<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    <?php
                    Controller::allCategory();
                    ?>
                </ul>
            </li>
            <li><a href="testError">তথ্য</a></li>
            <li><a href="./">
প্রথম পাতা</a></li>
            <li><a href="registerForm">নিবন্ধন করুন
</a></li>
            <div class="pull-right">
                <li>
                    <form action="search">
                        <input type="text" name="অনুসন্ধান">
                        <input type="submit" value="অনুসন্ধান">
                    </form>
                </li>
            </div>
        </ul>
    </nav>

    
    <section>
        <div class="divBox">
            <?php
            if (isset($content)) {
                echo $content;
            } else {
                echo '<h1>Content is gone!</h1>';
            }
            ?>
        </div>
    </section>

    <hr>
    <p style="display:block; text-align:center;">CSE470 Project - Ashikur Rahman</p>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>