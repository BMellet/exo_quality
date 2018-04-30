<!DOCTYPE html>
<html lang="en">
<head>
<?php require('./component/head.php'); ?>
    <title>Exercice Quality Test - List</title>
</head>
<body>
<?php
    require('./component/nav.php');
    require_once('./classes/person.class.php');
?>
<div class="container">
    <div class="row">
        <?php
        $list = new Person;
        $list->list_person();
        ?>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="./js/app.js"></script>
</body>
</html>