<?php
/*
  ISTE-140 Session Demo - form-handler.php
  ----------------------------------------
  This handler stores submitted form data in the session. There is no file or database.
*/

// 1) Start the "session" on the web server for temporary storage per browser
session_start();

/*
  2) FIELD MAP: If your HTML uses different names, update the names below.
*/
$name           = $_POST['name']          ?? '';
$email          = $_POST['email']         ?? '';
$subject        = $_POST['subject']         ?? '';
$content        = $_POST['content']      ?? '';
$known          = $_POST['known']      ?? '';
$purpose        = $_POST['purpose']       ?? '';

// 3) Build a simple "row" for this submission
$record = [
    'id'             => uniqid('rec_', true),
    'created'        => date('c'),
    // Store using clear keys. You can rename these display labels in view-submissions.php if desired.
    'name'           => $name,
    'email'          => $email,
    'subject'        => $subject,
    'content'        => $content,
    'known'       => $known,
    'purpose'        => $purpose,
];

// 4) Save to the session "table"
$_SESSION['submissions'] = $_SESSION['submissions'] ?? [];
$_SESSION['submissions'][] = $record;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Thanks</title>
</head>
<body>
  <h1>Thanks</h1>
  <p>Your message was saved for this browser session.</p>

  <h2>Submitted</h2>
  <ul>
    <!-- Display what we saved. Adjust labels as you prefer. -->
    <li><strong>Name:</strong> <?= htmlspecialchars($record['name']) ?></li>
    <li><strong>Email:</strong> <?= htmlspecialchars($record['email']) ?></li>
    <li><strong>Subject:</strong> <?= htmlspecialchars($record['subject']) ?></li>
    <li><strong>Content:</strong> <?= nl2br(htmlspecialchars($record['content'])) ?></li>
    <li><strong>Known by:</strong> <?= htmlspecialchars($record['known']) ?></li>
    <li><strong>Purpose:</strong> <?= htmlspecialchars($record['purpose']) ?></li>
  </ul>

  <div>
    <a href="index.html">Back to form</a> |
    <a href="view-submissions.php">View submissions</a>
  </div>
</body>
</html>
