<!DOCTYPE html>
<html lang="en">
<head>
<?php require('./component/head.php'); ?>
    <title>Exercice Quality Test</title>
</head>
<body>
    <?php require('./component/nav.php'); ?>
    <h1>EXERCICE QUALITY TEST</h1>
    <div class="container">
        <form method="POST" action="add_person.php">
            <div class="row">
                <div class="input-field col s4">
                <label for="firstname">Firstname</label>
                    <input required id="firstname" name="firstname" type="text">
                </div>
                <div class="input-field col s4">
                <label for="lastname">Lastname</label>
                    <input required id="lastname" name="lastname"type="text">
                </div>
                <div class="input-field col s4">
                    <label for="birth">Year of birth</label>
                    <input  required name="birthyear" id="birth" type="number" min="1900" max="2000">
                </div>
            </div>
            <div class="input-field col s12">
                <label for="comment">Comment</label>
                <textarea  required name="comment" id="comment" class="materialize-textarea"></textarea>
            </div>
            <button class="btn waves-effect waves-light" name="new">Save<i class="material-icons right">save</i></button>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>