<?php

if ( ! defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
	'path'        => __FILE__,
	'name'        => 'Cloud',
	'url'         => 'https://shapebootstrap.net/item/1524925-acme-free-responsive-corporate-template/comments',
	'author'      => 'cosmic, 김동동, 2DU, 코코아, CES, 키위',
	'description' => '구름위키의 기본 스킨입니다.',
        'license-name' => "FREE LICENSE",
        'version' => 'Release',
);

$wgValidSkinNames['cloud'] = 'Cloud';
$wgAutoloadClasses['SkinCloud'] = __DIR__ . '/CloudSkin.php';


$skinDirParts = explode( DIRECTORY_SEPARATOR, __DIR__ );
$skinDir = array_pop( $skinDirParts );

$wgResourceModules['skins.cloud'] = array(
	'styles' => array(
		$skinDir . '/css/bootstrap.min.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/theme.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/bootstrap-reset.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/style.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/style-responsive.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/librewiki.css'            => array( 'media' => 'all' ),
	),
	'scripts' => array(
		$skinDir . '/js/jquery.min.js',
		$skinDir . '/js/bootstrap.min.js',
		$skinDir . '/js/adsbygoogle.js',
		$skinDir . '/js/Gadget-ReferenceTooltips-ko.js',
		$skinDir . '/js/R-18_NoAD.js',
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory'],
);
 
