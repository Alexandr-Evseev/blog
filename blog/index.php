<?php
/**
 * Created by PhpStorm.
 * User: Alexandr_Evseev
 * Date: 05.05.2018
 * Time: 16:57
 */

require_once("database.php");
require_once("models/articles.php");

    $link = db_connect();
    $articles = articles_all($link);

include("views/articles.php");

?>