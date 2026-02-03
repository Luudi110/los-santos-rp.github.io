<?php
// Footer include — closes <body> and <html>
if (!isset($discordLink)) {
  $discordLink = '#';
}
?>
<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-brand">
      <div class="logo-dot" aria-hidden></div>
      <div>
        <strong><?php echo htmlspecialchars($serverName); ?></strong>
        <div class="muted">Los Santos — Sunset RP</div>
      </div>
    </div>

    <div class="footer-links">
      <a href="<?php echo $discordLink; ?>" target="_blank" rel="noopener noreferrer">Discord</a>
      <a href="#">Rules</a>
      <a href="#">Apply</a>
    </div>

    <div class="footer-copyright">&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($serverName); ?>. All rights reserved.</div>
  </div>
</footer>
  </div> <!-- .site-wrapper -->
</body>
</html>
