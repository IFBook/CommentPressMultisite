Commentpress for Multisite
==========================

Commentpress for Multisite integrates the Commentpress [plugin](https://github.com/IFBook/CommentPressPlugin) and [theme](https://github.com/IFBook/CommentPressTheme) into a WordPress Multisite environment. It requires the key Commentpress [plugin](https://github.com/IFBook/CommentPressPlugin) to be installed (but not activated) and is _additional_ to it, not a _replacement_ for it. 

The Commentpress [theme](https://github.com/IFBook/CommentPressTheme) must also be present in `/wp-content/themes` and will be auto-activated by this plugin. Optionally, it will also manage the activation of the [AJAX commenting plugin](https://github.com/IFBook/CommentPressAjaxified) if it is present.

Note: this plugin supersedes the Commentpress for BuddyPress plugin, which is now deprecated. If you already have that installed, just deactivate it before following the installation instructions below.

### Installation

1. Unzip the .zip file and, if needed, rename the enclosing folder so that the plugin's files are located directly inside `/wp-content/plugins/commentpress-mu`
2. If you are using a version of BuddyPress that is less than 1.6 and you don't already have a custom settings file, move `bp-settings/bp-custom.php` into `/wp-content/plugins`. If you do have that file already, then make sure you're enabling BP_USE_WP_ADMIN_BAR, which is the default setting for BuddyPress 1.6.
3. Network activate the plugin
4. You are done!

### Compatibility

For compatibility with BuddyPress Group Email Subscription, please make sure that BuddyPress Group Email Subscription is network activated, or else comment and post notifications will not be registered in groupblogs.
