<?php
$n = isset($_GET['n']) ? intval($_GET['n']) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Practice 4 Output</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    table { border-collapse: collapse; margin-top: 15px; }
    th, td { border: 1px solid #333; padding: 6px 10px; text-align: right; }
    th { background: #f2f2f2; }
  </style>
</head>
<body>
  <h1>Multiplication Table (1..<?php echo $n; ?>)</h1>

  <?php if ($n > 0): ?>
    <table>
      <tr>
        <th>×</th>
        <?php for ($c = 1; $c <= $n; $c++): ?><th><?php echo $c; ?></th><?php endfor; ?>
      </tr>
      <?php for ($r = 1; $r <= $n; $r++): ?>
        <tr>
          <th><?php echo $r; ?></th>
          <?php for ($c = 1; $c <= $n; $c++): ?>
            <td><?php echo $r * $c; ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </table>
  <?php else: ?>
    <p style="color:#b00020;">Please enter a valid size.</p>
  <?php endif; ?>
</body>
</html>

