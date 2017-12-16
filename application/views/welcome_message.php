<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
    <style>
        html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div id="container">

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">

                Some App

            </div>
            <div class="links">
                <a href="<?php echo base_url();?>dashboard">Dashboard</a>
                <a href="<?php echo base_url();?>login">Sing In</a>
                <a href="<?php echo base_url();?>register">Sing Up</a>
                <a href="">API Service</a>
                <a href="https://asmith.my.id" target="_blank">Asmith</a>
            </div>
            <p style="text-align:center; margin-top:50px">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ? "". 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
    </div>

</div>

</body>
</html>