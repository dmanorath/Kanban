<?php
include("connection.php");
mysqli_select_db($con,"kanboard");
$result=mysqli_query($con,"select * from story");

echo "<table class='table'>
<thead>
<tr>
<td align=center><b>ID</b></td>
<td align=center><b>Title</b></td>
<td align=center><b>Note</b></td>
<td align=center><b>Description</b></td>
<td align=center><b>Posted Date</b></td>
</tr>
</thead><tbody>";

while($data = mysqli_fetch_row($result))
{   
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>