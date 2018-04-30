<?php
require_once('db.class.php');

class Person
{
    private function verif_person($firstname,$lastname,$str_birthyear)
    {
        $birthyear = intval($str_birthyear);
        $query_verif = Database::getDB()->query("SELECT * FROM person
                                                WHERE firstname ='$firstname'
                                                AND lastname ='$lastname'
                                                AND birth_year = $birthyear
                                                ");
        $result = $query_verif->fetch();
        if($result === false)
        {
            return $result;
            
        }
        else
        {
            
            return $result[0];
        }

    }
    public function add_person($firstname,$lastname,$str_birthyear,$comment)
    {
        $birthyear = intval($str_birthyear);
        $verif = $this->verif_person($firstname,$lastname,$birthyear);

        if($verif === false)
        {
            try
            {
                $new = Database::getDB()->prepare("INSERT INTO person (firstname, lastname, birth_year,comment)
                                                    VALUES (:firstname,:lastname,:birthyear,:comment)");
                $new -> execute(array(':firstname' => $firstname,':lastname' => $lastname,':birthyear' => $birthyear,':comment' => $comment));
                echo'new personn added';
            }
            catch(PDOException $e) {
                print "Erreur!  " . $e->getMessage() . "<br/>";
                die();
            }
            
        }
        else
        {
            echo'pas bien';
        }
        
        
    }
    public function list_person()
    {

        foreach(Database::getDB()->query('SELECT * from person') as $row) 
        {
            echo'
            <div class="col s6">
            <div class="card blue-grey darken-1">
            <div class="card-content white-text">
            <span class="card-title">'.$row['firstname'].' '.$row['lastname'].'</span>
            </div>
            <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
            <li class="tab"><a href="#birthyear'.$row['id'].'">Year of Birth</a></li>
            <li class="tab"><a href="#comment'.$row['id'].'">Comment</a></li>
            </ul></div>
            <div class="card-content grey lighten-4">
            <div id="birthyear'.$row['id'].'">'.$row['birth_year'].'</div>
            <div id="comment'.$row['id'].'">'.$row['comment'].'</div>
            </div>
            </div>
            </div>';
        
        }
    }
}