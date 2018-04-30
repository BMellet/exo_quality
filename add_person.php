<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('./component/head.php'); ?>
    <title>Exercice Quality Test</title>
</head>
<body>
    <?php
        require_once('./component/nav.php');
        require_once('./classes/person.class.php');
    ?>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_POST['new']))
            {
                echo'ok';
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $birthyear = $_POST['birthyear'];
                $comment = $_POST['comment'];
                checkInput($firstname);
                checkInput($lastname);
                die;
                
                $new_person = new Person;
                var_dump($new_person);
                $new_person->add_person($firstname,$lastname,$birthyear,$comment);
                
            }
            ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>
<?php
function checkInput($input)
{
    $number = preg_match('/[0-9]/', $input,$matches, PREG_OFFSET_CAPTURE);
    $special_char = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $input,$matches, PREG_OFFSET_CAPTURE);

}
?>




