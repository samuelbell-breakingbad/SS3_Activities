<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylePT5.css">
</head>
<body>
<div class="container">
<?php

		if (isset($_POST['addstudent'])) {
            $q1 = (float) $_POST['q1'];
            $q2 = (float) $_POST['q2'];
            $q3 = (float) $_POST['q3'];
            $q4 = (float) $_POST['q4'];

            $q1 = min($q1, 98);
            $q2 = min($q2, 98);
            $q3 = min($q3, 98);
            $q4 = min($q4, 98);

			$average = ($q1 + $q2 + $q3 + $q4) /4;

    if ($average >= 90) {
        $description = "Outstanding!";
        $remarks = "Passed";
    } elseif ($average >= 85) {
        $description = "Very Satisfactory!";
        $remarks = "Passed";
    } elseif ($average >= 80) {
        $description = "Satisfactory";
        $remarks = "Passed";
    } elseif ($average >= 75) {
        $description = "Fairly Satisfactory";
        $remarks = "Passed";
    } else {
        $description = "Did not meet expectations";
        $remarks = "Failed";
    }

			echo "1st Quarter Grade: $q1 <br>";
            echo "2nd Quarter Grade: $q2 <br>";
            echo "3rd Quarter Grade: $q3 <br>";
            echo "4th Quarter Grade: $q4 <br>";
            echo "<strong>Final Average: " . round($average, 2) . "</strong><br><br>";
            echo "<strong>Description:</strong> $description <br>";
            echo "<strong>Remarks:</strong> $remarks <br>";
}

		
	?>