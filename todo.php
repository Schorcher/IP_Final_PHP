<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 7/14/2017
 * Time: 4:55 PM
 */

require("libs/config.php");
$pageDetails = "TODO";

# Session Start
session_start();

redirectIfNotLoggedIn();

# General Page setup
include('libs/setup.php');

# Add login function
include('libs/todo.php');

include(D_TEMPLATE . '/header.php');
?>

    <div id="banner" class="baseHeader">
        <h2 class="page_title">To-do</h2>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">To-do</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Completed?</th>
                        <th>Message</th>
                        <th>Due Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    global $DB;
                    $q = $DB->query('SELECT * FROM todo WHERE user=' . $user['id'] . ';');
                    while ($r = $q->fetch()) {
                        echo '<tr>';
                        if ($r['complete'] == "1") {
                            echo '<td class="col-md-1"><input type="checkbox" value="" checked></td>';
                        } else {
                            echo '<td class="col-md-1"><input type="checkbox" value=""></td>';
                        }
                        echo '<td class="col-md-6">' . $r['message'] . '</td>';
                        echo '<td class="col-md-3">' . $r['date'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>

                <?php
                if (isTeacher()) {
                    echo '<div>';
                    echo '<form class="form-horizontal" method="post">';
                    echo '<div class="form-group">';
                    echo '<label for="message">Add new todo item: </label>';
                    echo '<div class="form-group row">';
                    echo '<div class="col-md-6">';
                    echo '<input type="text" class="form-control" id="message" name="message">';
                    echo '</div>';
                    echo '<div class="col-md-2">';
                    echo '<input type="submit" class="btn btn-default">';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</form>';
                    echo '</div>';
                }
                ?>

            </div>
        </div>
    </div>

    <link rel="stylesheet" href="css/todo.css">

<?php
include("template/footer.php");
?>