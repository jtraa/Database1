<?php

    //CARD.PHP//
    //CARD//


    include "db_connection.php";


    $sql_querie = "SELECT hp_id, hp_title, hp_genre, hp_age, hp_release, hp_price, hp_image, hp_image2 FROM hp";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {           
        echo '<div class="card debug">' .
             '<div class="h1">' .
                '<h2>' . $row['hp_title'] . '</h2>' . 
             '</div>' .
             '<div class="Hoi">' .
            '<div class="flip-card">' .
                '<div class="flip-card-inner">' .
                    '<div class="flip-card-front">' .
                       '<a href= "index2.php?id='.$row['hp_id'].'">' . '<img src="' . $row['hp_image'] . '" alt="' . $row['hp_title'] . '" style=width:100%">' .
                        //<img src=img\halfbloodprince.jpg style=width:100%>
                    '</div>' .
                    '<div class="flip-card-back">' .
                    '<img src="' . $row['hp_image2'] . '" alt="' . $row['hp_title'] . '" style=width:100%">' .
                        //<img src=img\halfbloodprince2.jpg style=width:100%>
                    '</div>' .
                    '</div>'.
                    '</a>' .
            '</div>'.
        '</div>'.
        '<div class="h2">' .
            '<h3>'. $row['hp_genre'] . '<br>' . $row['hp_age'] . '+' . '<br>' . '€' . $row['hp_price'] . ',-' . '<br>' . '</h3>' .
         '</div>' .
    '</div>';

        
    }       

    $conn = null;
  
?>

