<?php
/**
 * HelpfulMarker extension
 * Allows specified users to mark certain objects as "Helpful"
 */

$wgExtensionCredits['other'][] = array(
	'author' => array( 'Rob Moen', 'Benny Situ' ),
	'descriptionmsg' => 'markashelpful-desc',
	'name' => 'MarkAsHelpful',
	'url' => 'https://www.mediawiki.org/wiki/Mark_as_Helpful', // FIXME: A page in the extension namespace should be created
	'version' => '0.1',
	'path' => __FILE__,
);


// Object model


// API


// Hooks
$wgAutoloadClasses['MarkAsHelpfulHooks'] = dirname(__FILE__).'/MarkAsHelpful.hooks.php';
$wgHooks['BeforePageDisplay'][] = 'MarkAsHelpfulHooks::onPageDisplay';
$wgHooks['MakeGlobalVariablesScript'][] = 'MoodBarHooks::makeGlobalVariablesScript';

// Special pages


// User rights
$wgAvailableRights[] = 'markashelpful-view';
$wgAvailableRights[] = 'markashelpful-admin';

$wgGroupPermissions['sysop']['makrashelpful-admin'] = true;

// Internationalisation
$wgExtensionMessagesFiles['MarkAsHelpful'] = dirname(__FILE__).'/MarkAsHelpful.i18n.php';

// Resources
$mbResourceTemplate = array(
	'localBasePath' => dirname(__FILE__) . '/modules',
	'remoteExtPath' => 'MarkAsHelpful/modules'
);

$wgResourceModules['ext.markAsHelpful'] = $mbResourceTemplate + array(
	'styles' => 'ext.markAsHelpful/ext.markAsHelpful.css',
	'scripts' => 'ext.markAsHelpful/ext.markAsHelpful.js',
	'messages' => array(
		'helpful-text',
	),
	'position' => 'bottom',
	'dependencies' => array(
		'mediawiki.util'
	),
);