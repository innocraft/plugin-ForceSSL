# Piwik ForceSSL Plugin

## Description

When activated, this plugin will automatically redirect all http:// requests to https:// in the Piwik UI and API.

Note: If SSL or HTTPS is not correctly configured on your server, activating this plugin may break your Piwik. In such 
a case you can disable this plugin again by removing the line `Plugins[] = ForceSSL` from the `config/config.ini.php` file.

For security and privacy reasons you should always use Piwik over HTTPS (SSL).