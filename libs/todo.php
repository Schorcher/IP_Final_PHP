<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/25/2017
 * Time: 5:35 AM
 */


if($_POST)
{
    global $DB;
    $date = '';
    $message = $_POST['message'];

    $sql = 'INSERT INTO todo (user, message) VALUES("' . $user['id'] . '","' . $message . '")';

    $q = $DB->exec($sql);
}