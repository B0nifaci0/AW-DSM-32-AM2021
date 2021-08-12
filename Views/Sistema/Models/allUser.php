<?php

include('../../../conexion.php');

$sql = "select * from Usuarios";

/* foreach($mysqli->query($sql) as $result){
    print $result['id']. "\t";
    print $result['name']. "\t";
    print $result['email']. "\t";
    print $result['password']. "\t";
    print $result['type_id']. "\t";
}
foreach($mysqli->query($sql) as $result){
    echo"<tr>";
    echo"<th>". $result['id']. "</th>";
    echo"<th>".$result['name']."</th>";
    echo"<th>".$result['email']."</th>";
    echo"<th>".$result['password']."</th>";
    echo"<th>".$result['type_id']."</th>";
    echo"</tr>";
}
 */
?>