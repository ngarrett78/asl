<!DOCTYPE html>
<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="organize your online profile pictures">
    <meta name="author" content="Nate Garrett">


    <title>Profile Pics aPlenty</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dist/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom style sheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>


</head>
<body class="wrapper_admin">
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost:8888/">Profile Pics aPlenty</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active" id="logout"><a href="logout">Logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1> <?php echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>"; ?></h1>

    </div>
</div>

<div class="container">
<div id="profile">
    <?php
    echo "Welcome to your personal Admin Page";
    echo "<br/>";
    echo "<br/>";
    echo "Your Username is " . $username;
    echo "<br/>";
    echo "Your Email is " . $email;
    echo "<br/>";
    ?>

    <!-- profile images will get displayed here after upload
    <div class="row">
        <h2>You current profile pictures</h2>

        <div class="col-md-4">
            <img src="/img/prof-1.jpg" class="img-responsive img-rounded" alt="Responsive image">
        </div>

        <div class="col-md-4">
            <img src="/img/prof-1.jpg" class="img-responsive img-rounded" alt="Responsive image">
        </div>

        <div class="col-md-4">
            <img src="/img/prof-1.jpg" class="img-responsive img-rounded" alt="Responsive image">
        </div>
    </div>

    -->

</div>
</div>

