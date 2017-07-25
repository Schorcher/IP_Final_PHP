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
                                    <img class="lib-img-show" src="/images/UNADJUSTEDNONRAW_thumb_f29.jpg">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        David McFall
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        David is a Senior at KSU. Major in Computer Science and Software Engineering.
                                        Has an adorable dog named Ellie. David currently runs and manages 3 businesses.
                                        He loves playing fallout games in his spare time.
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
                                    <img class="lib-img-show" src="https://avatars0.githubusercontent.com/u/25462828?v=4&s=460">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        Elizabeth McDonald
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        Elizabeth is a senior at KSU. She is a computer science major.
                                        She is planning on attending grad school for Library Science.
                                        Her goal is to work at the Bodleian Library in Oxford, England.
                                        She has worked at Chick-fil-a for 6 years. She loves her cats: Pookie, Bagheera, and Mitzy.
                                        She enjoys spending time with family, singing, playing piano, traveling, and watching classic movies.
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
                                    <img class="lib-img-show" src="http://acm.kennesaw.edu/assets/img/alex.jpg">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        Alex Veselinovic
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        I am a Senior CS Major at Kennesaw State University.
                                        The languages I primarily use are C, C++, C#, Python, x86 Assembly, and Java.
                                        I prefer Unix systems over all specifically Debian or Fedora distributions.
                                        I am more interested in lower level programming, and system based programming, rather than the higher levels.
                                        I hope to go into security analysis or cybersecurity for a career.
                                    </div>
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