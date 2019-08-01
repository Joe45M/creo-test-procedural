<?php

function render_messages() {
    global $con;
    $messages = mysqli_query($con, "SELECT * FROM `submissions` ORDER BY `timestamp` DESC");
    if (mysqli_num_rows($messages) !== 0 ) {
        while($message = mysqli_fetch_assoc($messages)) { ?>
            <div class="message-box">
                <div class="title" data-toggle="1">
                    <p>
                        <?php echo $message["title"]; ?>
                    </p>
                    <p>
                        <?php echo date("d/m/y", $message["timestamp"]); ?>
                    </p>
                </div>
                <div class="content">
                    <p> <?php echo nl2br($message["message"]); ?> </p>
                </div>
            </div>
        <?php
        }
    }
}

?>