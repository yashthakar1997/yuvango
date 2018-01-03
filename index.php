<!DOCTYPE html>
<html>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yuva NGO</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet" media="all">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>

    <div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="navbar-brand hvr-float-shadow" href="#"> <img src="logo.jpg" height="45px" width="80px" padding="0px"> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="Events.php">Events</a>
                    </li>
                    <li>
                        <a href="#">Projects</a>
                    </li>
                     <li>
                        <a href="#">Team</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
<br><br><br><br>

<div class="container" style="padding-bottom:100px;">

<div class="panel panel-default">
    <div class="panel-heading animated bounceInRight"> News Feed </div>
    <div class="panel-body animated jackInTheBox">

      <img src="seichan.jpg" alt="" class="img-responsive container">

    </div>
  </div>

</div>


</div>

    <footer class="footer">
        <div class="container">
            <div class="row">
              <h3>contact us<h3>
            <div class="col-md-6">
            <br>
            Email us:     info@yuvango.com  <br>
            Call us:   +91-9825373697  <br>
                        +91-9427531605  <br>
            </div>
            <div class="col-md-6"><br><br>
            <a href="https://www.facebook.com/yuva.ngo.75"><img src="fb.png" height="60px"></a>
            <a href="https://www.instagram.com/yuva_foundation_/"><img src="instagram.png" height="60px"></a>
        </div>
    </div>
    </div>

    </footer>
    <!-- Put your page content here! -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        <script>
            /**
             * Used to demonstrate Hover.css only. Not required when adding
             * Hover.css to your own pages. Prevents a link from being
             * navigated and gaining focus.
             */
            var effects = document.querySelectorAll('.effects')[0];
            effects.addEventListener('click', function(e) {
                if (e.target.className.indexOf('hvr') > -1) {
                    e.preventDefault();
                    e.target.blur();
                }
            });
        </script>
</body>

</html>
