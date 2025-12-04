<?php
$items = [
    ['name' => 'Lumber',        'cost' => 150000.00],
    ['name' => 'Concrete',      'cost' =>  78000.00],
    ['name' => 'Drywall',       'cost' =>  68000.00],
    ['name' => 'Paint',         'cost' =>  12000.00],
    ['name' => 'Miscellaneous', 'cost' =>  20000.00],
];

$rates = [
    '10%' => 0.10,
    '15%' => 0.15,
    '20%' => 0.20,
];

$totals = [
    'estimated' => 0.0,
    '10%' => 0.0,
    '15%' => 0.0,
    '20%' => 0.0,
];

function fmt($num) {
    return '$' . number_format($num, 2, '.', ',');
}

foreach ($items as &$it) {
    $it['estimated'] = $it['cost'];
    $it['inc10'] = $it['estimated'] * (1 + $rates['10%']);
    $it['inc15'] = $it['estimated'] * (1 + $rates['15%']);
    $it['inc20'] = $it['estimated'] * (1 + $rates['20%']);

    $totals['estimated'] += $it['estimated'];
    $totals['10%'] += $it['inc10'];
    $totals['15%'] += $it['inc15'];
    $totals['20%'] += $it['inc20'];
}
unset($it);
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
        <caption>Public Library Expansion Project — Cost Estimates</caption>
        <thead>
            <tr>
                <th>Expenditures</th>
                <th>Estimated Cost</th>
                <th>10% Increase</th>
                <th>15% Increase</th>
                <th>20% Increase</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $row): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td class="right"><?php echo fmt($row['estimated']); ?></td>
                <td class="right"><?php echo fmt($row['inc10']); ?></td>
                <td class="right"><?php echo fmt($row['inc15']); ?></td>
                <td class="right"><?php echo fmt($row['inc20']); ?></td>
            </tr>
            <?php endforeach; ?>

            <tr class="totals">
                <td>Total Expenditures:</td>
                <td class="right"><?php echo fmt($totals['estimated']); ?></td>
                <td class="right"><?php echo fmt($totals['10%']); ?></td>
                <td class="right"><?php echo fmt($totals['15%']); ?></td>
                <td class="right"><?php echo fmt($totals['20%']); ?></td>
            </tr>
        </tbody>
    </table>

    <div class="created-by">Created by: &lt;Samuel Bell&gt;</div>
</body>
</html>