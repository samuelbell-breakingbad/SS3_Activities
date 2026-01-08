<?php
$HourlyRate = 150;
$HoursPerDay = 8;
$WorkingDays = 26;

$Income = $HourlyRate * $HoursPerDay * $WorkingDays;
// Monthly income = Hourly rate * Hours per day * Working days

echo "<p>Hourly Rate: $" . number_format($HourlyRate, 2) . "</p>";
echo "<p>Monthly Income: $" . number_format($Income, 2) . "</p>";

if ($Income <= 15000) {
    $tax = 0;
    echo "<p>No state income tax is due.</p>";
	} elseif ($Income <= 30000) {
		$tax = ($Income - 15000) * 0.05;
		echo "<p>Tax Rate: 5%</p>";
	} else {
		$tax = (15000 * 0.05) + (($Income - 30000) * 0.10);
		echo "<p>Tax Rate: 10%</p>";
	}

	echo "<p>State Income Tax: $" . number_format($tax, 2) . "</p>";
    $incomeAfterTax = $Income - $tax;
	echo "<p><strong>Net Income After Tax: $" . number_format($incomeAfterTax, 2) . "</strong></p>";

	echo "<hr>";
?>