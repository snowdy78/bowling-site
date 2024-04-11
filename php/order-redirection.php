<?php
    
    include "/php/make-order-redirection.php";
    
    if (empty($_GET['road']))
    {
        $road = $db->getFreeRoad();
    }
    else 
    {
        $road = $db->getRoadState($_GET['road']);
    }
    $user = $db->getUser($_SESSION['login']);
    if (!empty($road) && !empty($user))
    {
        $db->setRoadState($user, $road['id']);
    }

?>