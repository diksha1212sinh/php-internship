<?php
echo "<table border= 1 bgcolor='gray>";
for ($a=0;$a<21;$a++){
    echo "<tr>";
    if ($a%2==1){
        echo "<td bgcolor='white'>$a</td>";
    } else {
        echo "<td bgcolor='pink'>$a</td>";
    }
    echo "</tr";
}
echo "</table>";