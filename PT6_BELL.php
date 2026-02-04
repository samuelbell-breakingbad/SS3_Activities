<?php
function calculateIncrease($estimatedCost, $rate) {
    $increase = $estimatedCost * $rate;
    $totalCost = $estimatedCost + $increase;
    return $totalCost;
}

$lumber = 150000;
$concrete = 78000;
$drywall = 69000;
$paint = 12000;
$miscellaneous = 20000;

$lumber10 = calculateIncrease($lumber, 0.10);
$concrete10 = calculateIncrease($concrete, 0.10);
$drywall10 = calculateIncrease($drywall, 0.10);
$paint10 = calculateIncrease($paint, 0.10);
$miscellaneous10 = calculateIncrease($miscellaneous, 0.10);

$lumber15 = calculateIncrease($lumber, 0.15);
$concrete15 = calculateIncrease($concrete, 0.15);
$drywall15 = calculateIncrease($drywall, 0.15);
$paint15 = calculateIncrease($paint, 0.15);
$miscellaneous15 = calculateIncrease($miscellaneous, 0.15);

$lumber20 = calculateIncrease($lumber, 0.20);
$concrete20 = calculateIncrease($concrete, 0.20);
$drywall20 = calculateIncrease($drywall, 0.20);
$paint20 = calculateIncrease($paint, 0.20);
$miscellaneous20 = calculateIncrease($miscellaneous, 0.20);

function calculateTotal($a, $b, $c, $d, $e) {
    return $a + $b + $c + $d + $e;
}

function formatMoney($amount) {
    return number_format($amount, 2);
}

$totalEstimated = calculateTotal($lumber, $concrete, $drywall, $paint, $miscellaneous);
$total10 = calculateTotal($lumber10, $concrete10, $drywall10, $paint10, $miscellaneous10);
$total15 = calculateTotal($lumber15, $concrete15, $drywall15, $paint15, $miscellaneous15);
$total20 = calculateTotal($lumber20, $concrete20, $drywall20, $paint20, $miscellaneous20);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Public Library Expansion Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { background: #fff; color: #111; font-family: Arial, Helvetica, sans-serif; padding: 20px; }
        table { width: 90%; border-collapse: collapse; margin: 0 auto; }
        th, td { border: 1px solid #000; padding: 8px 10px; text-align: left; }
        th { background: #f1f1f1; text-align: center; }
        td.center { text-align: center; }
        .right { text-align: right; }
        .totals { font-weight: bold; background: #f9f9f9; }
        caption { caption-side: top; font-size: 1.4rem; margin-bottom: 8px; font-weight: bold; }
        .created-by { width: 90%; margin: 16px auto 0; text-align: right; font-style: italic; }
    </style>
</head>
<body>

    <table>
        <caption><strong>Public Library Expansion Project — Cost Estimates</strong></caption>
    <tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
    </tr>

    <tr>
        <td>Lumber</td>
        <td class="right"><?php echo formatMoney($lumber); ?></td>
        <td class="right"><?php echo formatMoney($lumber10); ?></td>
        <td class="right"><?php echo formatMoney($lumber15); ?></td>
        <td class="right"><?php echo formatMoney($lumber20); ?></td>
    </tr>

    <tr>
        <td>Concrete</td>
        <td class="right"><?php echo formatMoney($concrete); ?></td>
        <td class="right"><?php echo formatMoney($concrete10); ?></td>
        <td class="right"><?php echo formatMoney($concrete15); ?></td>
        <td class="right"><?php echo formatMoney($concrete20); ?></td>
    </tr>

    <tr>
        <td>Drywall</td>
        <td class="right"><?php echo formatMoney($drywall); ?></td>
        <td class="right"><?php echo formatMoney($drywall10); ?></td>
        <td class="right"><?php echo formatMoney($drywall15); ?></td>
        <td class="right"><?php echo formatMoney($drywall20); ?></td>
    </tr>

    <tr>
        <td>Paint</td>
        <td class="right"><?php echo formatMoney($paint); ?></td>
        <td class="right"><?php echo formatMoney($paint10); ?></td>
        <td class="right"><?php echo formatMoney($paint15); ?></td>
        <td class="right"><?php echo formatMoney($paint20); ?></td>
    </tr>

    <tr>
        <td>Miscellaneous</td>
        <td class="right"><?php echo formatMoney($miscellaneous); ?></td>
        <td class="right"><?php echo formatMoney($miscellaneous10); ?></td>
        <td class="right"><?php echo formatMoney($miscellaneous15); ?></td>
        <td class="right"><?php echo formatMoney($miscellaneous20); ?></td>
    </tr>

    <tr class="total">
        <td>Total Expenditures</td>
        <td class="right"><?php echo formatMoney($totalEstimated); ?></td>
        <td class="right"><?php echo formatMoney($total10); ?></td>
        <td class="right"><?php echo formatMoney($total15); ?></td>
        <td class="right"><?php echo formatMoney($total20); ?></td>
    </tr>
</table>

<div class="created-by">Created by: Samuel Bell</div>

</body>
</html>