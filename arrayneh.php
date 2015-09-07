<?php 
$docid = array(1, 2, 3, 4, 5);
    $table = array('technology' => 1 , 'languange' => 2, 'town' => 3, 'gadget' => 4, 'smartphone' => 5);
    echo "<table border=3><tr><th>Token/Document</th>";
    $count = count($table);
    $doc_count = count($docid);
    for($i=1; $i<=$count; $i++)
    {
        echo "<th>Doc.$i</th>";
    }
    foreach($table as $key=>$value)
    {
        echo "<tr><td>$key</td>";
        for($i=0; $i<$doc_count;$i++)
        {
            $random = rand(1, 8);
            $results[$i][] = $random; // save in array for totaling
            echo "<td>$random</td>";
        }
    }
    echo "</tr><td>RESULT</td>";
    for($i=0; $i<$doc_count;$i++)
    {
        echo "<td>".array_sum($results[$i])."</td>"; // total array using array_sum()
    }
    echo "</tr></table>";
     ?>