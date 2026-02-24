<?php
$current = basename($_SERVER['PHP_SELF']);
function navActive($file, $current) { return $file === $current ? 'is-active' : ''; }
?>
<header class="site-header">
  <div class="header-inner">
    <a class="brand" href="/home.php" aria-label="Go to GhostStack™ home">
      <span class="brand-mark" aria-hidden="true">
  <img src="/assets/img/ghoststack_logo.svg" alt="">
</span>
      <span class="brand-word">GhostStack<sup>™</sup></span>
    </a>

    <nav class="nav">
      <a class="nav-link <?= navActive('contact.php',$current) ?>" href="/contact.php">Contact Us</a>
      <a class="nav-link <?= navActive('partners.php',$current) ?>" href="/partners.php">Our Partners</a>
      <a class="nav-link <?= navActive('projects.php',$current) ?>" href="/projects.php">Projects</a>
      <a class="nav-link <?= navActive('demo.php',$current) ?>" href="/demo.php">Demo</a>
    </nav>

    <button class="nav-burger" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>

  <div class="nav-drawer" aria-hidden="true">
    <a href="/contact.php">Contact Us</a>
    <a href="/partners.php">Our Partners</a>
    <a href="/projects.php">Projects</a>
    <a href="/demo.php">Demo</a>
  </div>
</header>
