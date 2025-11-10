<?php
/*
  ISTE-140 Session Demo - view-submissions.php
  --------------------------------------------
  Reads $_SESSION['submissions'] and prints a table.
*/

session_start();
$rows = $_SESSION['submissions'] ?? [];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Submissions</title>
</head>
<body>
  <h1>Submissions (this session)</h1>

  <?php if (empty($rows)): ?>
    <p>No submissions yet. Post the form at <code>index.html</code>.</p>
  <?php else: ?>
    <!--
      GENERIC TABLE
      This version builds the header from the first record's keys and prints each value.
      Arrays (like checkbox groups) are joined with a comma and a space.
    -->
    <table border>
      <thead>
        <tr>
          <?php foreach (array_keys($rows[0]) as $col): ?>
            <th><?= htmlspecialchars($col) ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $r): ?>
          <tr>
            <?php foreach ($r as $val): ?>
              <td>
                <?php
                  if (is_array($val)) {
                    // For arrays, join with a comma and escape each value.
                    echo implode(', ', array_map('htmlspecialchars', $val));
                  } else {
                    echo nl2br(htmlspecialchars((string)$val));
                  }
                ?>
              </td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>

  <div>
    <a href="index.html">Back to form</a> |
    <a href="reset-session.php">Reset all submissions</a>
  </div>

</body>
</html>
