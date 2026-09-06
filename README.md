# LinkShield

**LinkShield** is a PHP/MySQL URL safety checker that combines local phishing
indicators with optional threat-intelligence providers.

> A "safe" result means no threat was detected by the configured checks. It is
> not a guarantee that a URL is harmless.

## Features

- URL validation and normalization
- HTTPS and IP-host checks
- Punycode/homograph warning
- suspicious TLD and hostname keyword heuristics
- Google Safe Browsing integration
- VirusTotal integration
- optional URLScan configuration
- risk score and verdict
- responsive frontend
- MySQL schema
- server-side API keys
- GitHub Actions PHP syntax checks

## Requirements

- PHP 8.1+
- MySQL 5.7+ or MariaDB
- PHP cURL extension
- HTTPS for production

## Installation

```bash
git clone https://github.com/YOUR-USERNAME/linkshield.git
cd linkshield
```

1. Import `schema.sql`.
2. Copy `config.example.php` to `config.php`.
3. Add database credentials.
4. Add API keys to `config.php`.
5. Point your web server document root at the project.
6. Open `index.php`.

Never commit `config.php`.

## API providers

### Google Safe Browsing

Set:

```php
'google_safe_browsing_key' => 'YOUR_KEY',
```

### VirusTotal

Set:

```php
'virustotal_key' => 'YOUR_KEY',
```

### URLScan

The project reserves configuration for URLScan. Automatic submission is
disabled in v1.0.0 because sending a submitted URL to a third-party scanning
service can have privacy implications.

## Security architecture

The application deliberately does **not** fetch arbitrary user-supplied URLs
from the PHP server. Doing so without strict SSRF controls can allow attackers
to target internal services such as localhost, private networks, cloud metadata
endpoints, or administrative interfaces.

A future deep-scan component should run in an isolated worker/container with
network egress controls, DNS rebinding protection, private/reserved IP
blocking, redirect limits, timeouts and resource limits.

## Production hardening

Before opening the scanner to the public:

- Add IP/user/API rate limiting.
- Add Cloudflare Turnstile or equivalent abuse protection.
- Configure strict Content Security Policy.
- Keep API keys outside source control.
- Enable GitHub secret scanning and push protection.
- Enable Dependabot and code scanning.
- Use a separate database user with minimum privileges.
- Log security events without storing unnecessary submitted URLs.

GitHub recommends README documentation and repository security controls such
as Dependabot, secret scanning, push protection and code scanning.

## License

MIT. See `LICENSE`.
