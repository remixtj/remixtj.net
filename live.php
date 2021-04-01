<?php
if (isset($_GET['lat']) && isset($_GET['lon']) && isset($_GET['alt'])) {

    $data = str_replace(",",".",$_GET['lat']).",".str_replace(",",".",$_GET['lon']).",".str_replace(",",".",$_GET['alt'])."\n";

    file_put_contents("live/".date('Y-m-d').".txt", $data, FILE_APPEND);
} else {
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested expects different parameters.";
    exit();
}

?>
