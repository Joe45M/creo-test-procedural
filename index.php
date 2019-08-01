<?php
require './assets/incl/conn.php';
require './assets/incl/common-modules.php';
if(isset($_POST['submit'])) {
    require './assets/incl/process-form.php';
}
render_meta();
render_header("Form");

?>
    <div class="container">
        <?php
            if(isset($error)) {
                if($error !== "" ) {
                    render_error_alert($error);
                }
            }
            if(isset($_GET['success'])) {
                render_success_alert("Message submitted!");
            }
        ?>
        <form action="?" method="post" id="contact" class="form-basic">
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="input-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <div class="input-group input-group-submit">
                <input type="submit" value="Send form" name="submit">
            </div>
        </form>
    </div>
</body>
</html>

