<?php
// dump and die
function dd($data){
    echo"<pre>";
        var_dump($data);
    echo"</pre>";
    die(); // kill execution
}

function redirectIfNotFound($location = "/") {
    http_response_code(404);
    header("Location: $location", 302);
    exit(); // like die(), but more softly
}
?>