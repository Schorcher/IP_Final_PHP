<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/25/2017
 * Time: 7:17 AM
 */

if($_POST)
{
    global $DB;
    $date = '';
    $message = $_POST['message'];

    $sql = 'INSERT INTO board (sender, receiver, message) VALUES("' . $user['id'] . '","' . $_SESSION['receiver'] . '","' . $message . '")';

    $q = $DB->exec($sql);
}