<?php require '../libs/functions.php';
/**
 * Created by PhpStorm.
 * User: David McFall
 * Date: 4/29/2017
 * Time: 11:51 PM
 */

require("../libs/config.php");
$pageDetails = "manage_pages";

include('../libs/setup.php');

# Redirect if not logged in
redirectIfNotLoggedIn();

# Page Setup:
include('template/header.php');
include('template/sidebar.php');
?>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Current Pages</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Created By</th>
                    <th>Parent Page</th>
                    <th>Title</th>
                    <th>Header</th>
                    <th>Banner Image</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody>
                <?php
                global $DB;
                $q = $DB->query('SELECT * FROM pages');
                while ($r = $q->fetch()) {
                    echo "<tr>";
                    echo "<td>";
                    echo $r['id'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['user'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['parent'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['title'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['header'];
                    echo "</td>";
                    echo "<td>";
                    echo $r['banner_image'];
                    echo "</td>";
                    echo "<td>";
                    echo $r[''];
                    echo "</td>";
                    echo "</tr>";

                }
                ?>
                </tbody>
            </table>
        </div>
    </div>


<?php include(D_TEMPLATE . '/footer.php'); ?>