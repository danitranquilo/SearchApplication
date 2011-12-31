<?php
    $str = file_get_contents("http://www.bing.com/search?q=".str_replace(" ","+",$_GET["question"]));
    $str = str_replace('<script', "<textarea", $str);
    echo str_replace('</script>', "</textarea>", $str);
?>
