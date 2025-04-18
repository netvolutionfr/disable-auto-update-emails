# Disable Auto-Update Emails

Prevent WordPress from sending notification emails after automatic updates of plugins and themes.

## Description

By default, WordPress sends you an email whenever it updates a plugin, a theme, or the core automatically.  
This plugin disables those notification emails for plugins and themes (and optionally for the core).

## Requirements

- WordPress 5.5 or higher (filters introduced in WP 5.5)
- PHP 5.6 or higher

## Installation

1. Upload the `disable-auto-update-emails` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the **Plugins** screen in WordPress Admin.

Alternatively, install via WP‑CLI:

```bash
wp plugin install https://github.com/your-username/disable-auto-update-emails/archive/refs/tags/v1.0.0.zip --activate
```

# Usage

No further configuration is required.
After activation, WordPress will no longer send emails when it auto‑updates plugins and themes.

If you also want to suppress core update emails, uncomment the corresponding line in the main plugin file:

```php
// add_filter( 'auto_core_update_send_email', '__return_false' );
```

# Changelog
## 1.0.0
- Initial release: disable plugin & theme auto‑update emails.

# License

This plugin is licensed under the GPL2.

# Contributing

1. Fork the repository 
2. Create your feature branch (git checkout -b feature/my-feature)
3. Commit your changes (git commit -am 'Add my feature')
4. Push to the branch (git push origin feature/my-feature)
5. Submit a Pull Request

