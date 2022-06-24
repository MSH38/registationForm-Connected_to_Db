<?php
    if(isset($_POST['Submit'])){
        
        echo '<h4>Thanks '.$_POST['Gender'] ." " .$_POST['FirstName'] .' '. $_POST['LastName'].'</h4>';
        echo '<h3>Please Review Your Information</h3>';
        echo '<h4>Name: </h4>' .$_POST['UserName'] ;
        echo '<h4>Address: </h4>' .$_POST['Address'] ;
        echo "<h4>Skills: </h4>";
        foreach($_POST['check'] as $x){
            echo  " * ". $x . "<br>";
        }
    }