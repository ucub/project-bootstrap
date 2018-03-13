<!DOCTYPE html>
<html lang="en">

<head>
    <title>K-Whynot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="./media/gambar/favicon.ico">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */

        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */

        .sidenav {
            padding-top: 3.2%;
        }

        /* Set black background color, white text and some padding */

        footer {
            background-color: #050505;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {
                height: auto;
            }
        }

    </style>
</head>

<body style="height:auto">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
        </button>
                <a class="navbar-brand" href="index.php">K-WHYNOT</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Client Side <span class="glyphicon glyphicon-triangle-bottom"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://www.w3schools.com/html/default.asp">HTML</a></li>
                            <li><a href="https://www.w3schools.com/css/default.asp">CSS</a></li>
                            <li><a href="https://www.w3schools.com/js/default.asp">Javascript</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Server Side <span class="glyphicon glyphicon-triangle-bottom"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://www.w3schools.com/php/default.asp">PHP</a></li>
                            <li><a href="https://www.w3schools.com/js/js_ajax_intro.asp">AJAX</a></li>
                            <li><a href="https://www.w3schools.com/jquery/default.asp">JQUERY</a></li>
                            <li><a href="https://www.w3schools.com/sql/default.asp">SQL</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Desktop Side <span class="glyphicon glyphicon-triangle-bottom"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">JAVA</a></li>
                            <li><a href="#">Delphi</a></li>
                            <li><a href="#">VB.60</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?page=aboutme"><span class="glyphicon glyphicon-question-sign"></span> About Me</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Contact</a>
                        <ul class="dropdown-menu">
                            <li><a href="https://www.facebook.com/exynl">Facebook</a></li>
                            <li><a href="https://www.instagram.com/yusufys_/">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/in/yusuf-yudha-sanjaya-399226114/">Linkedln</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
          include './konten.php';
    ?>


        <footer class="container-fluid">
            <p class="text-right">Copyright @ 2017 Yusuf YS</p>
        </footer>

</body>

</html>
