<?php
require './assets/incl/conn.php';
require './assets/incl/message-functions.php';
require './assets/incl/common-modules.php';
render_meta();
render_header("Messages");
?>
<div class="container">
    <?php render_messages(); ?>
</div>
<?php 

render_foot(1);

?>