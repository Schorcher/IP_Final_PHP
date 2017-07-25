<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 6/22/17
 * Time: 5:30 PM
 */
?>

<!DOCTYPE HTML>
<HTML>
<head>
    <title><?php echo($page['title']); ?> - ACM</title>
    <link rel="icon" href="http://artoo.kennesaw.edu/_resources/images/favicon.ico" type="text/png"/>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>

    <!-- Bootstrap -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="../node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="../css/default.css" rel="stylesheet">
</head>
<body>
<!-- Add Code below here -->

<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">CRH</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li<?php if($pageDetails=='home'){echo ' class="active"';} ?>><a href="/index.php">Home</a></li>
                        <?php
                        if(isLoggedIn())
                        {?>
                            <li<?php if($pageDetails=='userinfo'){echo ' class="active"';} ?>><a href='/userinfo.php'>User Info</a></li>
                            <li<?php if($pageDetails=='homework'){echo ' class="active"';} ?>><a href='/homework.php'>Homework</a></li>
                            <li<?php if($pageDetails=='activities'){echo ' class="active"';} ?>><a href='/activities.php'>Activities</a></li>
                            <li<?php if($pageDetails=='TODO'){echo ' class="active"';} ?>><a href='/todo.php'>To-Do List</a></li>
                            <li<?php if($pageDetails=='list'){echo ' class="active"';} ?>><a href='/wishlist.php'>WishList</a></li>
                            <li<?php if($pageDetails=='board'){echo ' class="active"';} ?>><a href='/board.php'>Message Board</a></li>
                        <?php } ?>

                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <?php
                        if (isLoggedIn()) {
                            echo "<li>";
                            echo "<buton id=\"btn-debug\" class=\"btn btn-default navbar-btn\"><i class=\"fa fa-bug\"></i></buton>";
                            echo "</li>";

                            echo "<li class=\"dropdown\">";
                            echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">" . $user['fullname_reverse'] . "<span class=\"caret\"></span></a>";
                            echo "<ul class=\"dropdown-menu\">";
                            echo "<li><a href=\"../login.php\">Login (Test)</a></li>";
                            echo "<li><a href=\"../dashboard/index.php\">Admin Dashboard</a></li>";
                            echo "<li><a href=\"#\">Account Settings</a></li>";
                            echo "<li role=\"separator\" class=\"divider\"></li>";
                            echo "<li class=\"dropdown-header\">Nav header</li>";
                            echo "<li><a href=\"../logout.php\">Logout</a></li>";
                            echo "</ul>";
                            echo "</li>";
                        } else {
                            echo "<li><a href='../login.php'>Login</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>
