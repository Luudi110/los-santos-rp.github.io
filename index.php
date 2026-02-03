<?php
// Basic configuration variables (easy to extend or load from config)
$serverName = "Los Santos RP";
$discordLink = "https://discord.gg/your-invite"; // Replace with real invite
$serverIP = "play.lossantosrp.com"; // Replace with real endpoint or IP

// Stats placeholders — ready for future API / MySQL integration
$playersOnline = 12;
$uptime = "99.9%";
$whitelistOpen = true;

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main class="site-main">
  <!-- HERO -->
  <section id="hero" class="hero">
    <div class="hero-inner container">
      <h1 class="hero-title">Welcome to <span class="accent"><?php echo htmlspecialchars($serverName); ?></span></h1>
      <p class="hero-sub">A cinematic, premium Los Santos roleplay experience — immersive stories, community-driven gameplay.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="#join">Join Server</a>
        <a class="btn btn-ghost" href="<?php echo $discordLink; ?>" target="_blank" rel="noopener noreferrer">Discord</a>
      </div>
    </div>
    <img class="hero-decor" src="/assets/img/hero.svg" alt="Los Santos Sunset">
  </section>

  <!-- ABOUT -->
  <section id="about" class="section about container">
    <h2 class="section-title">About <span class="accent"><?php echo htmlspecialchars($serverName); ?></span></h2>
    <p class="lead">Los Santos RP focuses on realism, community, and deep character-driven roleplay. Whether you're a cop, medic, entrepreneur, or one of the city's most notorious figures — your story matters here.</p>

    <div class="cards">
      <article class="card">
        <div class="card-icon">🚓</div>
        <h3>Realistic Systems</h3>
        <p>Detailed policing, medical, and economic mechanics for meaningful choices.</p>
      </article>

      <article class="card">
        <div class="card-icon">🤝</div>
        <h3>Active Community</h3>
        <p>Dedicated staff and daily events keep roleplay alive and engaging.</p>
      </article>

      <article class="card">
        <div class="card-icon">🎭</div>
        <h3>Immersive Stories</h3>
        <p>Deep narrative arcs and opportunities to shape the city.</p>
      </article>
    </div>
  </section>

  <!-- FEATURES -->
  <section id="features" class="section features container">
    <h2 class="section-title">Server Features</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <img src="/assets/img/icon-police.svg" alt="Police">
        <h4>Police RP</h4>
        <p>Authentic law enforcement with clear role progression.</p>
      </div>

      <div class="feature-card">
        <img src="/assets/img/icon-ems.svg" alt="EMS">
        <h4>EMS</h4>
        <p>Realistic medical systems and lifelike emergency response.</p>
      </div>

      <div class="feature-card">
        <img src="/assets/img/icon-criminal.svg" alt="Criminal RP">
        <h4>Criminal RP</h4>
        <p>Complex heists, gangs, and underground economies.</p>
      </div>

      <div class="feature-card">
        <img src="/assets/img/icon-business.svg" alt="Businesses">
        <h4>Businesses</h4>
        <p>Player-run companies and economic gameplay.</p>
      </div>

      <div class="feature-card">
        <img src="/assets/img/icon-scripts.svg" alt="Custom Scripts">
        <h4>Custom Scripts</h4>
        <p>Unique features and optimizations exclusive to our server.</p>
      </div>
    </div>
  </section>

  <!-- SERVER STATS -->
  <section id="stats" class="section stats container">
    <h2 class="section-title">Server Stats</h2>
    <div class="stats-grid">
      <div class="stat">
        <div class="stat-value" id="stat-players"><?php echo $playersOnline; ?></div>
        <div class="stat-label">Players Online</div>
      </div>
      <div class="stat">
        <div class="stat-value" id="stat-uptime"><?php echo htmlspecialchars($uptime); ?></div>
        <div class="stat-label">Uptime</div>
      </div>
      <div class="stat">
        <div class="stat-value" id="stat-whitelist"><?php echo $whitelistOpen ? 'Open' : 'Closed'; ?></div>
        <div class="stat-label">Whitelist</div>
      </div>
    </div>
    <p class="muted">Stats are dynamic and ready for integration with your server API or MySQL backend.</p>
  </section>

  <!-- JOIN -->
  <section id="join" class="section join container">
    <h2 class="section-title">How to Join</h2>
    <ol class="steps">
      <li>Create a Discord account and join our server.</li>
      <li>Read the rules and apply to whitelist if required.</li>
      <li>Connect to <strong><?php echo htmlspecialchars($serverIP); ?></strong> in-game.</li>
      <li>Introduce your character and start roleplaying.</li>
    </ol>
    <div class="join-cta">
      <a class="btn btn-primary large" href="#" onclick="scrollToSection('#hero');return false;">Join Now</a>
      <a class="btn btn-ghost" href="<?php echo $discordLink; ?>" target="_blank" rel="noopener noreferrer">Open Discord</a>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
