<?php
    $str = file_get_contents("http://search.yahoo.com/search?p=" . str_replace(" ", "+", $_GET["question"]));
    $str = str_replace('<script', "<textarea", $str);
    echo str_replace('</script>', "</textarea>", $str);
?>
