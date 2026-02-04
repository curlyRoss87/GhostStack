<?php $pageTitle = "GhostStack™ — Operational efficiency at scale"; ?>
<!doctype html>
<html lang="en">
<head><?php include __DIR__ . "/../includes/head.php"; ?></head>
<body>
<?php include __DIR__ . "/../includes/header.php"; ?>

<main class="page">
  <section class="hero">
    <div class="hero-inner">
      <div class="hero-kicker reveal">Pillar 02</div>
      <h1 class="hero-title reveal">Operational efficiency at scale</h1>
      <p class="hero-lede reveal">
        Automated workflows across maintenance, scheduling, triage and reporting.
        Less manual effort. Faster execution. Better consistency.
      </p>
      <div class="hero-actions reveal">
        <a class="btn" href="/workflows.php">See workflows</a>
        <a class="btn btn-ghost" href="/demo.php">View demo</a>
      </div>
    </div>
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="hero-noise" aria-hidden="true"></div>
  </section>

  <section class="section">
    <div class="section-inner">
      <h2 class="section-title reveal">From insight → action → proof</h2>
      <p class="section-text reveal">
        GhostStack<sup>™</sup> orchestrates workflows end-to-end so teams spend less time firefighting
        and more time improving performance.
      </p>

      <div class="timeline">
        <div class="timeline-item reveal">
          <div class="dot"></div>
          <div><h3>Trigger</h3><p>Events and thresholds start workflows automatically.</p></div>
        </div>
        <div class="timeline-item reveal">
          <div class="dot"></div>
          <div><h3>Coordinate</h3><p>Ops, facilities, finance and ESG stay aligned to one flow.</p></div>
        </div>
        <div class="timeline-item reveal">
          <div class="dot"></div>
          <div><h3>Close the loop</h3><p>Audit-ready evidence is captured as a by-product of doing the job.</p></div>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . "/../includes/cta.php"; ?>
</main>

<?php include __DIR__ . "/../includes/footer.php"; ?>
</body></html>
