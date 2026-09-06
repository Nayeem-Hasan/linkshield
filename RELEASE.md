# LinkShield v1.0.0

Initial public release of LinkShield, a PHP/MySQL URL safety checker.

## Included
- URL validation
- Local phishing indicators
- Google Safe Browsing integration
- VirusTotal integration
- Risk scoring
- Responsive frontend
- MySQL schema
- Security documentation

## Production checklist
- Use PHP 8.1+.
- Enable HTTPS.
- Configure API keys server-side.
- Add rate limiting before public deployment.
- Enable GitHub secret scanning, push protection, Dependabot and code scanning.
- Do not expose `config.php`.
- Do not treat a "safe" result as a guarantee.

## Known limitation
This release does not perform arbitrary server-side page fetching or redirect
following. That is intentional to reduce SSRF exposure. A future isolated
scanner can provide deeper redirect/page analysis.
