<?php
    function dd($value) {
        echo "<pre>", var_dump($value), "</pre>";
        exit();
    }

    function newline() {
        echo '<br/>';
    }

    function dp($value) {
        echo "<pre>", print_r($value), "</pre>";
        exit();
    }
?>