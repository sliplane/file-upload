<?php
$dir = "uploads/";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != "." && $file != "..") {
                echo "<li><a href='uploads/$file' target='_blank'>$file</a></li>";
            }
        }
        closedir($dh);
    }
} else {
    echo "The uploads directory does not exist.";
}
?>
