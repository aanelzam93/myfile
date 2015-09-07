<?php
 
    $pjg_array=count($_POST['pekerjaan']);
    for ($k=0;$k<$pjg_array;$k++)
    {
        $cnt = $k+1;
        print "Kode pekerjaan pilihan ke-$cnt : $pekerjaan[$k]";
    }
 
?>