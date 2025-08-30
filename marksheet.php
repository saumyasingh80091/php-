<?php
$name = "XYZ";

// Marks
$sub1 = 40;
$sub2 = 30;
$sub3 = 45;
$sub4 = 48;
$sub5 = 34;

$total_max = 250;
$total_obtained = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percentage = ($total_obtained / $total_max) * 100;

// Result
if ($percentage >= 75) {
    $result = "With Distinction";
} elseif ($percentage >= 33) {
    $result = "Passed";
} else {
    $result = "Failed";
}

// Print Marksheet
echo "<h2>Marksheet</h2>";
echo "Name : $name <br>";

echo "<table border='1' cellpadding='8'>";
echo "<tr> <td colspan='3' align='center'><b>Name : $name</b></td></tr>";
echo "<tr><th>Subject Name</th><th>Max Marks</th><th>Obtained Marks</th></tr>";
echo "<tr><td>Sub1</td><td>50</td><td>$sub1</td></tr>";
echo "<tr><td>Sub2</td><td>50</td><td>$sub2</td></tr>";
echo "<tr><td>Sub3</td><td>50</td><td>$sub3</td></tr>";
echo "<tr><td>Sub4</td><td>50</td><td>$sub4</td></tr>";
echo "<tr><td>Sub5</td><td>50</td><td>$sub5</td></tr>";
echo "<tr><td><b>Total</b></td><td><b>$total_max</b></td><td><b>$total_obtained</b></td></tr>";
echo "<tr><td><b>Percentage</b></td><td colspan='2'>" . round($percentage,2) . "%</td></tr>";
echo "<tr><td><b>Result</b></td><td colspan='2'>$result</td></tr>";
echo "</table>";
?>