<!DOCTYPE html>

<?php
    $xml=simplexml_load_file("annaprof.xml") or die("Error: Cannot create object");
    print_r($xml);
    ?>

</html>