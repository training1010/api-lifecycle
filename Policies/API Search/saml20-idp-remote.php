<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote 
 */

/*
 * Guest IdP. allows users to sign up and register. Great for testing!
 */
$metadata['tssg2.dev.com'] = array(
	'name' => array(
		'en' => 'APIM SAML IDP'
	),
	'description'          => 'Gateway SAML IDP to support SSO between portal and Drupal.',

	'SingleSignOnService'  => 'https://tssg2.dev.com:8443/auth/saml2',
	'SingleLogoutService'  => 'https://tssg2.floridablue.com/admin/logout',
    'AssertionConsumerService' => 'https://tssg2.dev.com:8443/portalAuth/sso/validateSaml',
	//'certFingerprint'      => '9B:0F:76:6F:4E:8B:F1:E9:16:EA:5D:9E:F1:57:72:21:85:C6:99:2C'
    'certFingerprint'      => '9B0F766F4E8BF1E916EA5D9EF157722185C6992C'
);

