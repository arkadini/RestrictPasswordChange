RestrictPasswordChange
======================

Extremely simple MediaWiki extension to disable password change on
selected accounts.


Install
-------

Clone into `$IP/extensions`, add the following line to the
LocalSettings.php:

```php
require_once "$IP/extensions/RestrictPasswordChange/RestrictPasswordChange.php";
```


Configure
---------

Add something similar to the LocalSettings.php:

```php
# Create restricted guest user group
$wgRevokePermissions['guest']['passwordreset'] = true;
$wgAddGroups['sysop'][] = 'guest';
$wgRemoveGroups['sysop'][] = 'guest';

# Accounts to disable password change (note the exact case!)
$wgRestrictPasswordChangeUsers[] = 'Guest';
```
