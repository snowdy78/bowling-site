<?php
    include "src/DataBase.php";
    if ($_POST['search'])
    {
        $search_str = $_POST['search'];
        $db = DataBase::getDataBase();
        $result = $db->query("SELECT * FROM `balls_data` WHERE name LIKE '%".$search_str."%'");
        if (!empty($result))
        {
            $ball = $result->fetch_assoc();
            if ($ball)
            {
                header("Location:../index.php?page=ball&ball=".$ball['id']);
                return;
            }
        }
    }
    header("Location:../index.php?page=balls&feedback=error");
?>