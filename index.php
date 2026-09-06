<?php
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>LinkShield — URL Safety Checker</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<main class="wrap">
  <section class="hero">
    <div class="badge">URL SECURITY SCANNER</div>
    <h1>Check whether a link is safe.</h1>
    <p>Scan a URL against threat-intelligence services and local phishing indicators before opening it.</p>
    <form id="scanForm">
      <input id="url" name="url" type="url" maxlength="2048"
             placeholder="https://example.com" autocomplete="off" required>
      <button id="scanBtn" type="submit">Scan URL</button>
    </form>
    <div class="notice">No security scanner can guarantee that a URL is 100% safe.</div>
  </section>

  <section id="loading" class="card hidden">
    <div class="spinner"></div><b>Scanning…</b>
    <p>Checking URL structure, domain signals, redirects and configured threat-intelligence providers.</p>
  </section>

  <section id="result" class="hidden">
    <div class="card result-head">
      <div>
        <div id="verdict" class="verdict">UNKNOWN</div>
        <h2 id="resultUrl"></h2>
        <p id="summary"></p>
      </div>
      <div class="score"><span id="score">0</span><small>/100</small></div>
    </div>
    <div class="grid">
      <div class="card"><h3>Security checks</h3><div id="checks"></div></div>
      <div class="card"><h3>Technical details</h3><div id="details"></div></div>
    </div>
  </section>

  <section class="card tips">
    <h2>Before you open a suspicious link</h2>
    <ul>
      <li>Do not enter passwords or payment details until the destination is verified.</li>
      <li>Be careful with shortened URLs and unexpected redirects.</li>
      <li>A valid HTTPS certificate only encrypts the connection; it does not prove the site is trustworthy.</li>
    </ul>
  </section>
</main>
<script src="assets/app.js"></script>
</body>
</html>
