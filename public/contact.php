<?php
$pageTitle = "GhostStack™ — Contact Us";
?>
<!doctype html>
<html lang="en">
<head>
  <?php include __DIR__ . "/../includes/head.php"; ?>
</head>
<body>
  <?php include __DIR__ . "/../includes/header.php"; ?>

  <main class="page page-basic">
    <section class="section">
      <div class="section-inner">
        <h1 class="section-title">Contact Us</h1>
        <p class="section-text muted">Placeholder page.</p>

        <!-- Optional placeholder form (no backend handling yet) -->
        <form class="form" method="post" action="#">
          <label>
            Name
            <input type="text" name="name" autocomplete="name">
          </label>
          <label>
            Email
            <input type="email" name="email" autocomplete="email">
          </label>
          <label>
            Message
            <textarea name="message" rows="5"></textarea>
          </label>
          <button class="btn" type="submit">Send</button>
        </form>
      </div>
    </section>
  </main>

  <?php include __DIR__ . "/../includes/footer.php"; ?>
</body>
</html>
