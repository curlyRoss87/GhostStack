<?php $pageTitle = "GhostStack™"; ?>
<!doctype html>
<html lang="en">
<head><?php include __DIR__ . "/../includes/head.php"; ?></head>
<body>
<?php include __DIR__ . "/../includes/header.php"; ?>

<main class="page">
  <section class="hero">
    <div class="hero-inner">
      <div class="hero-kicker reveal">Product</div>
      <h1 class="hero-title reveal">GhostStack™</h1>
      <p class="hero-lede reveal">
        The operational intelligence layer — real-time clarity for complex infrastructure.
      </p>
      <div class="hero-actions reveal">
        <a class="btn" href="/demo.php">Book a demo</a>
        <a class="btn btn-ghost" href="/use-cases.php">Explore use cases</a>
      </div>
    </div>
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="hero-noise" aria-hidden="true"></div>
  </section>

  <section class="section">
    <div class="section-inner">
      <h2 class="section-title reveal">What it delivers</h2>
      <div class="cards">
        <article class="card reveal"><h3>Unified visibility</h3><p>Across assets, estates, facilities and buildings.</p></article>
        <article class="card reveal"><h3>Automated workflows</h3><p>From insight → action → proof with auditability built in.</p></article>
        <article class="card reveal"><h3>AI-supported decisioning</h3><p>Prioritise work, reduce failure loops, improve outcomes.</p></article>
      </div>
    </div>
  </section>

  <?php include __DIR__ . "/../includes/cta.php"; ?>
</main>

<?php include __DIR__ . "/../includes/footer.php"; ?>
</body></html>
