// Main JS for interactivity: mobile nav, smooth scroll, blob parallax and demo stats
document.addEventListener('DOMContentLoaded', function(){
  var mobileToggle = document.getElementById('mobile-toggle');
  var navList = document.querySelector('.nav-list');

  if(mobileToggle){
    mobileToggle.addEventListener('click', function(){
      navList.style.display = (navList.style.display === 'flex') ? 'none' : 'flex';
    });
  }

  // Smooth scroll helper
  window.scrollToSection = function(selector){
    var el = document.querySelector(selector);
    if(!el) return;
    el.scrollIntoView({behavior:'smooth', block:'start'});
  }

  // Blob parallax removed for maximum performance — previously used rAF-throttled movement here
  // Decorative blobs have been disabled to reduce repaints and improve site responsiveness on lower-end devices.


  // Demo dynamic stats update — replace with actual fetch from your server API
  function updateStats(){
    // Replace with fetch('/api/stats.json') for real data
    var playersEl = document.getElementById('stat-players');
    if(playersEl){
      playersEl.textContent = Math.floor(10 + Math.random() * 120);
    }
  }

  // Poll every 10 seconds for demo — adjust or replace with real API calls
  updateStats();
  setInterval(updateStats, 10000);

  // Rules page: toggle rule details and accept button
  (function(){
    var toggles = document.querySelectorAll('.rule-toggle');
    toggles.forEach(function(btn){
      btn.addEventListener('click', function(){
        var controls = btn.getAttribute('aria-controls');
        var panel = document.getElementById(controls);
        var expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', !expanded);
        if(panel){
          if(expanded){
            panel.hidden = true;
          } else {
            panel.hidden = false;
          }
        }
      });
    });

    // Accept rules — store in localStorage and show confirmation briefly
    var accept = document.getElementById('accept-rules');
    if(accept){
      accept.addEventListener('click', function(){
        try{ localStorage.setItem('lsrp_rules_accepted','1'); }catch(e){}
        accept.textContent = 'Accepted ✓';
        accept.disabled = true;
        accept.classList.add('btn-disabled');
        setTimeout(function(){ accept.classList.remove('btn-disabled'); }, 3000);
      });

      // Show accepted state if already accepted
      try{ if(localStorage.getItem('lsrp_rules_accepted') === '1'){ accept.textContent = 'Accepted ✓'; accept.disabled = true; } }catch(e){}
    }
  })();
});

/*
  Integration notes:
  - Replace updateStats with a fetch() to your stats API.
  - For MySQL integration, expose a small endpoint that queries the DB and returns JSON.
  - Keep CORS and caching in mind for performance.
*/