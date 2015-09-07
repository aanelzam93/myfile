
<?php
    $a = ['http://php.net/', 'http://google.com/', 'http://bbc.co.uk/'];

    $website = $a[mt_rand(0, count($a) - 1)];
    echo $website;
?>