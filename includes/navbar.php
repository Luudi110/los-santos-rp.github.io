<?php
// Simple reusable navbar
if (!isset($discordLink)) {
  $discordLink = '#';
}
if (!isset($serverIP)) {
  $serverIP = 'play.lossantosrp.com';
}
?>
<header class="site-header">
  <div class="container nav-inner">
    <a class="brand" href="/">
      <div class="logo-dot" aria-hidden></div>
      <span class="brand-text"><?php echo htmlspecialchars($serverName); ?></span>
    </a>

    <nav class="nav" id="main-nav">
      <ul class="nav-list">
        <li><a href="#about">About</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#stats">Stats</a></li>
        <li><a href="#join">Join</a></li>
      </ul>
    </nav>

    <div class="nav-actions">
      <a class="btn small" href="steam://connect/<?php echo htmlspecialchars($serverIP); ?>">Join Server</a>
      <a class="btn discord" href="<?php echo $discordLink; ?>" target="_blank" rel="noopener noreferrer">Discord</a>

      <button class="mobile-toggle" id="mobile-toggle" aria-label="Open menu">☰</button>
    </div>
  </div>
</header>
