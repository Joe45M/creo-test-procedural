<?php

function render_header($title = "") { ?>
    <div id="title-strip">
        <div class="container">
            <h1>Creo test - procedural</h1>
            <p><?php echo $title; ?></p>
        </div>
    </div>
    <div class="nav-bar">
        <a href="./">Contact</a>
        <a href="./messages.php">Messages</a>
    </div>
<?php
}

function render_meta() { ?>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <title>Creo Test - Procedural</title>
</head>
<body>
<?php 
}

function render_foot($app = 0) { ?>
    </body>
    <?php echo ($app ? '<script src="/assets/script/app.js"></script>' : null); ?>
    </html>
<?php
}

function render_error_alert($message) { ?>
    <div class="alert alert-error">
        <p><?php echo $message; ?></p>
    </div>
<?php
}

function render_success_alert($message) { ?>
    <div class="alert alert-success">
        <p> <?php echo $message ?> </p>
    </div>


<?php
}
?>
