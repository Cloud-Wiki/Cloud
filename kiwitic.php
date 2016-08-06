<?php

if ( ! defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
	'path'        => __FILE__,
	'name'        => 'Kiwitic',
	'url'         => 'https://shapebootstrap.net/item/1524925-acme-free-responsive-corporate-template/comments',
	'author'      => 'cosmic 원본, 김동동 수정<br>2DU 더 수정<br>코코아가 키위위키에 맞게 수정',
	'description' => 'acme 부트스트랩 테마를 미디어위키에 적용합니다.',
        'license-name' => "FREE LICENSE",
        'version' => '1.0b01',
);

$wgValidSkinNames['kiwitic'] = 'Kiwitic';
$wgAutoloadClasses['SkinKiwitic'] = __DIR__ . '/kiwitic.skin.php';


$skinDirParts = explode( DIRECTORY_SEPARATOR, __DIR__ );
$skinDir = array_pop( $skinDirParts );

$wgResourceModules['skins.kiwitic'] = array(
	'styles' => array(
		$skinDir . '/css/bootstrap.min.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/theme.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/bootstrap-reset.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/style.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/style-responsive.css'            => array( 'media' => 'all' ),
		$skinDir . '/css/Wikipedia-Common.css'            => array( 'media' => 'all' ),
	),
	'dependencies' => array(
		'jquery',
		'jquery.mwExtension',
		'jquery.client',
		'jquery.cookie',
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory'],
);
 
