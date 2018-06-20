<?php
require_once 'config.php';

$result = mysqli_query($link, "SELECT * FROM research_projects");

echo "<table border='1'>
<tr>
<th>Research Name</th>
<th>Minimum GPA</th>
<th>Minimum Year</th>
<th>maximum Year</th>
<th>Minimum Years of Experience</th>
<th>Keywords</th>
<th>Required Classes</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['minGPA'] . "</td>";
echo "<td>" . $row['minYear'] . "</td>";
echo "<td>" . $row['maxYear'] . "</td>";
echo "<td>" . $row['minExp'] . "</td>";
echo "<td>" . $row['keywords'] . "</td>";
echo "<td>" . $row['classes'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>