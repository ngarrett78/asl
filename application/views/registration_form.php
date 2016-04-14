<!-- NAVBAR
================================================== -->
<body class="wrapper_reg">
<div class="navbar-wrapper">
    <div class="container" id="reg_login">


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
                        <li ><a href="http://localhost:8888/">Home</a></li>
                        <li class="active"><a href="/index.php/user_authentication/user_registration_show">Register</a></li>
                        <li><a href="/index.php/user_authentication/user_login_show">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>


<div class="container">
    <div id="login">
        <h2>Registration Form</h2>
        <hr/>
        <?php
        echo "<div class='error_msg'>";
        echo validation_errors();
        echo "</div>";
        echo form_open('user_authentication/new_user_registration');

        echo form_label('Create Username : ');
        echo"<br/>";
        echo form_input('username');
        echo "<div class='error_msg'>";
        if (isset($message_display)) {
            echo $message_display;
        }
        echo "</div>";
        echo"<br/>";
        echo form_label('Email : ');
        echo"<br/>";
        $data = array(
            'type' => 'email',
            'name' => 'email_value'
        );
        echo form_input($data);
        echo"<br/>";
        echo"<br/>";
        echo form_label('Password : ');
        echo"<br/>";
        echo form_password('password');
        echo"<br/>";
        echo"<br/>";
        echo form_submit('submit', 'Sign Up');
        echo form_close();
        ?>
        <a href="<?php echo base_url('/index.php/user_authentication/user_login_show') ?> ">For Login Click Here</a>
    </div>
</div>
