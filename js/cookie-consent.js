function setCookieConsent(statistics, marketing) {
  const consent = {
    necessary: true,
    statistics: statistics,
    marketing: marketing,
    timestamp: new Date().toISOString()
  };
  localStorage.setItem('cookieConsent', JSON.stringify(consent));
}

function getCookieConsent() {
  try {
    return JSON.parse(localStorage.getItem('cookieConsent'));
  } catch (err) {
    return null;
  }
}
function loadAnalytics() {
  // Google Analytics
  const script = document.createElement('script');
  script.src = 'https://www.googletagmanager.com/gtag/js?id=G-ZGF9E4WFZD';
  script.async = true;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-ZGF9E4WFZD');
}
function loadMarketing() {
  // Google Ads Example (conversion tracking)
  const script = document.createElement('script');
  script.src = 'https://www.googletagmanager.com/gtag/js?id=AW-7880643696';
  script.async = true;
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-7880643696');

  // Facebook Pixel (placeholder)
  // Insert your pixel script here if needed
}
function initializeCookies() {
  const consent = getCookieConsent();
  if (!consent) {
    document.getElementById('cookie-banner').style.display = 'block';
  } else {
    if (consent.statistics) loadAnalytics();
    if (consent.marketing) loadMarketing();
  }
}
function bindCookieForm() {
  const form = document.getElementById('cookie-form');
  if (!form) return;
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const statistics = document.getElementById('cookie-statistics').checked;
    const marketing = document.getElementById('cookie-marketing').checked;
    setCookieConsent(statistics, marketing);
    document.getElementById('cookie-banner').style.display = 'none';
    if (statistics) loadAnalytics();
    if (marketing) loadMarketing();
  });

  const acceptAllBtn = document.getElementById('cookie-accept-all');
  if (acceptAllBtn) {
    acceptAllBtn.addEventListener('click', acceptAllCookies);
  }
}
function acceptAllCookies() {
  document.getElementById('cookie-statistics').checked = true;
  document.getElementById('cookie-marketing').checked = true;
  setCookieConsent(true, true);
  document.getElementById('cookie-banner').style.display = 'none';
  loadAnalytics();
  loadMarketing();
}
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', function() {
    initializeCookies();
    bindCookieForm();
  });
} else {
  initializeCookies();
  bindCookieForm();
}
