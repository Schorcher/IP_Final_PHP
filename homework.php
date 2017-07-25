<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:59 PM
 */

require("libs/config.php");
$pageDetails = "homework";

include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

    <div id="banner" class="baseHeader">
        <h2 class="page_title">Homework</h2>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>

<?php
include(D_TEMPLATE . '/footer.php');
?>