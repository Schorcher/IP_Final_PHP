<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:59 PM
 */

require("libs/config.php");
$pageDetails = "about";

include('libs/setup.php');

include(D_TEMPLATE . '/header.php');
?>

    <div id="banner" class="baseHeader">
        <h2 class="page_title">About Us</h2>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>


    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="row">

                </div>
                <hr>
                <div class="row row-margin-bottom">
                    <div class="col-md-5 col-md-offset-1 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-6">
                                    <img class="lib-img-show" src="http://lorempixel.com/850/850/?random=123">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        David McFall
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem
                                        ipsum dolor Lorem ipsum dolor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-margin-bottom">
                    <div class="col-md-5 col-md-offset-1 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-6">
                                    <img class="lib-img-show" src="http://lorempixel.com/850/850/?random=123">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        Elizabeth McDonald
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem
                                        ipsum dolor Lorem ipsum dolor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-margin-bottom">
                    <div class="col-md-5 col-md-offset-1 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-6">
                                    <img class="lib-img-show" src="http://lorempixel.com/850/850/?random=123">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        Alex V.
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem
                                        ipsum dolor Lorem ipsum dolor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <link href="css/about.css" rel="stylesheet">

<?php
include(D_TEMPLATE . '/footer.php');
?>