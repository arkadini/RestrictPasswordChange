<?php
if (!defined('MEDIAWIKI')) die();

$wgRestrictPasswordChangeUsers = array();

$wgExtensionCredits['other'][] = array(
    'path' => __FILE__,
    'name' => 'RestrictPasswordChange',
    'author' => array('Arek Korbik'),
    'version' => '0.0.1',
    'descriptionmsg' => 'restrictpasswordchange-desc',
);

$wgAutoloadClasses['RestrictPasswordChange'] = __DIR__ . '/RestrictPasswordChange.class.php';
$wgExtensionMessagesFiles['RestrictPasswordChange'] = __DIR__ . '/RestrictPasswordChange.i18n.php';

$wgHooks['AbortChangePassword'][] = 'RestrictPasswordChange::onAbortChangePassword';
