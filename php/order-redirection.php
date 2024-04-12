<?php
    
    include "make-order-redirection.php";
    $road = NULL;
    if (empty($_GET['road']))
    {
        $road = $db->getFreeRoad();

    }
    else 
    {
        $road = $db->getRoadState(intval($_GET['road']));

    }
    $user = $db->getUser($_SESSION['login']);
    if (!empty($road) && !empty($user))
    {
        $db->setRoadState($road, $user);
        header("Location:/index.php?page=ordered&order_state=true");
    }
    else 
    {
        header("Location:/index.php?page=ordered&order_state=false");
    }
?>