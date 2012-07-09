Commentpress for Multisite
==========================

Commentpress for Multisite integrates CommentPress in a WordPress Multisite environment. This replaces the Commentpress for BuddyPress plugin, which is now deprecated. If you already have that installed, just deactivate it before following the installation instructions below.

### Installation

1. Unzip the .zip file into `/wp-content/plugins/commentpress-mu`
2. If you are using BuddyPress and you don't already have a custom settings file, move `bp-settings/bp-custom.php` into `/wp-content/plugins`. If you do, then make sure you're enabling BP_USE_WP_ADMIN_BAR, which is the default setting for BuddyPress 1.6+
3. Network activate the plugin
4. You are done!

### Compatibility

For compatibility with BuddyPress Group Email Subscription, please make sure that BuddyPress Group Email Subscription is network activated, or else comment and post notifications will not be registered in groupblogs.
