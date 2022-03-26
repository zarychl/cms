<?php
include_once("functions.php");
if(isset($_GET['q']))
{
    addSearchCount($_GET['q']);
    header("Location: /index.php");
}
else
{
    header("Location: /index.php");
}

?>