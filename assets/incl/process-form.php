<?php
// this file is responsible for handling form submissions from /index.php.

// prop error var
$error = "";

function check_words($string, $input) {
    global $error;
    $words = array('Red', 'Green', 'Blue', 'Yellow', 'Orange');
    $usedWords = array();
    foreach ($words as $key => $banned_word) {
        if(strpos($string, $banned_word) !== false) {
            array_push($usedWords, $banned_word);
        }
    }

    // format error string
    if($error == "" && sizeof($usedWords) !== 0) {
        $error .= "Error. <br> Your {$input} contains the following banned " .
        (sizeof($usedWords) !== 1 ? "phrases: " : "phrase: ") . 
        implode($usedWords, ", ");
    } elseif($error !== "" && sizeof($usedWords) !== 0) {
        $error .= "<br> Your {$input} contains the following banned  " .
        (sizeof($usedWords) !== 1 ? "phrases: " : "phrase: ") . 
        implode($usedWords, ", ");
    }
}


// Check form has been submitted
if (isset($_POST['submit'])) {
    if(isset($_POST['title'])) {
        check_words($_POST['title'], 'Title');
    }
    if(isset($_POST['message'])) {
        check_words($_POST['message'], 'Message');
        
    }

    if ($error == "") {
        // insert
        // escape strings
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        $timestamp = time();
        mysqli_query($con, "INSERT INTO `submissions`(`title`, `message`, `timestamp`) VALUES ('$title', '$message', '$timestamp')");
        header("location: ?success=1");
    }


} else {
    $error = "Form not submitted";
}
