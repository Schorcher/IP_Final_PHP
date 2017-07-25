<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:59 PM
 */

require("libs/config.php");
$pageDetails = "userinfo";

session_start();

include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

    <div id="banner" class="baseHeader">
        <h2 class="page_title">User Info</h2>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>


    <div class="container">
        <div class="page-header">
            <h3>Hello, <?php echo $user['fullname']; ?></h3>
        </div>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Classroom</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                </tr>
            </tbody>
        </table>

    </div>

<?php
include(D_TEMPLATE . '/footer.php');
?>