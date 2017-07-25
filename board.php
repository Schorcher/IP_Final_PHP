<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:59 PM
 */

require("libs/config.php");
$pageDetails = "board";



include('libs/setup.php');

include('libs/board.php');

include(D_TEMPLATE . '/header.php');
?>


    <div id="banner" class="baseHeader">
        <h2 class="page_title">Message Board</h2>
        <img src="<?php echo $page['banner_image']; ?>" alt="">
    </div>


    <div class="container">
        <div class="panel panel-default">
            <div class="page-header">

            </div>
            <div class="panel-body">
                <div class="chat">
                    <div class="chat-history">
                        <ul class="chat-ul">
                            <li><h2>Current messages</h2></li>

                            <?php

                            global $DB;
                            $q = $DB->query('SELECT * FROM board 
                              WHERE 
                              receiver=' . $user['id'] . '
                              OR
                              sender=' . $user['id'] . '
                              ;');

                            while ($r = $q->fetch()) {
                                $q2 = $DB->query('SELECT * FROM users WHERE id=' . $r['sender'] . ';');
                                $r2 = $q2->fetch();
                                if ($r['receiver'] == $user['id']) {
                                    $_SESSION['receiver'] = $r['sender'];
                                    echo '<li>';
                                    echo '<div class="message-data">';
                                    echo '<span class="message-data-name"><i class="fa fa-circle you"></i> ' . $r2['first_name'] . ' ' . $r2['last_name'] . '</span>';
                                    echo '</div>';
                                    echo '<div class="message you-message">';
                                    echo $r['message'];
                                    echo '</div>';
                                    echo '</li>';
                                } else {
                                    echo '<li class="clearfix">';
                                    echo '<div class="message-data align-right">';
                                    echo '<span class="message-data-name">' . $r2['first_name'] . ' ' . $r2['last_name'] . ' <i class="fa fa-circle me"></i></span>';
                                    echo '</div>';
                                    echo '<div class="message me-message float-right">';
                                    echo $r['message'];
                                    echo '</div>';
                                    echo '</li>';
                                }


                            }

                            ?>


                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="span4 well" style="padding-bottom:0">
                            <form accept-charset="UTF-8" class="form-group" method="POST">
                                <textarea class="span4 form-control" id="message" name="message"
                                          placeholder="Type in your message" rows="5"></textarea>
                                <h6 class="pull-right">320 characters remaining</h6>
                                <button class="btn btn-info" type="submit">Post New Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <link href="css/board.css" rel="stylesheet">


<?php
include(D_TEMPLATE . '/footer.php');
?>