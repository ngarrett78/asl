<!-- NAVBAR
================================================== -->
<body class="wrapper_login">
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
                        <li><a href="http://localhost:8888/">Home</a></li>
                        <li><a href="/index.php/user_authentication/user_registration_show">Register</a></li>
                        <li class="active"><a href="/index.php/user_authentication/user_login_show">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>


<div class="container">
<?php
if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<?php
if (isset($message_display)) {
    echo "<div class='message'>";
    echo $message_display;
    echo "</div>";
}
?>
    
    
<div id="main">
    <div id="login">
        <h2>Login Form</h2>
        <hr/>
        <?php echo form_open('user_authentication/user_login_process'); ?>
        <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
            echo $error_message;
        }
        echo validation_errors();
        echo "</div>";
        ?>
        <label>UserName :</label>
        <input type="text" name="username" id="name" placeholder="username"/><br /><br />
        <label>Password :</label>
        <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
        <input type="submit" value=" Login " name="submit"/><br />
        <a href="<?php echo base_url() ?>index.php/user_authentication/user_registration_show">To SignUp Click Here</a>
        <?php echo form_close(); ?>
    </div>
</div>
</div> <!-- close container -->
