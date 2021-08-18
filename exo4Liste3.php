
<?php

echo 'Exercice 4:';

$departments = array(
    "02"=>"Aisne", 
    "59"=>"Nord",  
    "60"=>"Oise",
    "62"=>"Pas-de-calais",
    "80"=>"Somme",

);

var_dump($departments);

echo '<br/>'.'Exercice 5:';

$departments= array( "Aisne" =>" 02",
                     "Nord" =>" 59", 
                     "Oise" =>" 60",
                     "Pas-de-calais" =>" 62", 
                     "Somme" =>" 80", 

);

echo  $departments["Aisne"];
echo $departments["Nord"];
echo $departments["Oise"];
echo $departments["Pas-de-calais"];
echo $departments["Somme"];

echo '<br/>';
echo '<br/>'.'Exercice 6:';

$departments= array( "Aisne" =>" 02",
                     "Nord" =>" 59", 
                     "Oise" =>" 60",
                     "Pas-de-calais" =>" 62", 
                     "Somme" =>" 80", 

                     "02" => " Aisne", 
                     "59" => " Nord", 
                     "60" => " Oise",
                     "62" => " Pas-de-calais",
                     "80" => " Somme",
);

echo '<br/>'.'Le département de l\''. '' .$departments["02"]. '' .' a le numéro'. '' .$departments["Aisne"];
echo '<br/>'.'Le département du'. '' . $departments["59"]. '' .' a le numéro'. '' .$departments["Nord"];
echo '<br/>'.'Le département de l\''. '' .$departments["60"]. '' .' a le numéro'. '' .$departments["Oise"];
echo '<br/>'.'Le département du'. '' .$departments["62"]. '' .' a le numéro'. '' .$departments["Pas-de-calais"];
echo '<br/>'.'Le département de la'. '' .$departments["80"]. '' .' a le numéro'. '' .$departments["Somme"];