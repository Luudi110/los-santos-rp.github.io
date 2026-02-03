<?php
// Header include — outputs <head> section and opens <body>
if (!isset($serverName)) {
  $serverName = 'Los Santos RP';
}
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($serverName); ?> — Premium RP</title>
  <meta name="description" content="Los Santos RP — cinematic, immersive roleplay server.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script defer src="/assets/js/main.js"></script>
</head>
<body>
  <div class="site-wrapper">
  <!-- Accessibility: skip link -->
  <a class="skip-link" href="#main">Skip to content</a>
