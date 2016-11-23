<?php

return array(
	'version' => '0.9.4.1',
	'pgcache.enabled' => true,
	'pgcache.engine' => 'file_generic',
	'minify.enabled' => true,
	'minify.auto' => false,
	'minify.engine' => 'file',
	'minify.html.engine' => 'html',
	'minify.js.engine' => 'js',
	'minify.css.engine' => 'css',
	'dbcache.enabled' => true,
	'dbcache.engine' => 'file',
	'objectcache.enabled' => true,
	'objectcache.engine' => 'file',
	'browsercache.enabled' => true,
	'cdn.enabled' => false,
	'cdn.engine' => 'akamai',
	'varnish.enabled' => false,
	'varnish.servers' => array(
		0 => '',
	),
	'newrelic.enabled' => false,
	'newrelic.api_key' => '',
	'newrelic.account_id' => '',
	'newrelic.appname' => '',
	'newrelic.application_id' => 0,
	'plugin.license_key' => '',
	'widget.pagespeed.enabled' => true,
	'widget.pagespeed.key' => '',
	'config.check' => true,
	'pgcache.file.nfs' => false,
	'minify.file.nfs' => false,
	'dbcache.file.locking' => false,
	'objectcache.file.locking' => false,
	'pgcache.file.locking' => false,
	'minify.file.locking' => false,
	'plugin.type' => '',
	'pgcache.debug' => false,
	'notes.need_empty_pgcache' => false,
	'minify.debug' => false,
	'dbcache.debug' => false,
	'objectcache.debug' => false,
	'cdn.debug' => false,
	'pgcache.cache.home' => true,
	'pgcache.cache.feed' => true,
	'pgcache.cache.ssl' => true,
	'pgcache.cache.404' => false,
	'pgcache.check.domain' => true,
	'pgcache.reject.logged' => true,
	'pgcache.reject.logged_roles' => false,
	'pgcache.reject.roles' => array(
		0 => '',
	),
	'pgcache.prime.enabled' => true,
	'pgcache.prime.interval' => 907,
	'pgcache.prime.limit' => 15,
	'pgcache.prime.sitemap' => 'http://douceursetvolupte.com/sitemap_index.xml',
	'pgcache.prime.post.enabled' => true,
	'pgcache.purge.home' => true,
	'pgcache.purge.post' => true,
	'pgcache.purge.feed.blog' => true,
	'pgcache.purge.comments' => false,
	'pgcache.purge.author' => false,
	'pgcache.purge.terms' => false,
	'pgcache.purge.feed.comments' => false,
	'pgcache.purge.feed.author' => false,
	'pgcache.purge.feed.terms' => false,
	'pgcache.purge.archive.daily' => false,
	'pgcache.purge.archive.monthly' => false,
	'pgcache.purge.archive.yearly' => false,
	'pgcache.purge.feed.types' => array(
		0 => 'rss2',
	),
	'pgcache.purge.postpages_limit' => 10,
	'pgcache.purge.pages' => array(
		0 => '',
	),
	'pgcache.purge.sitemap_regex' => '([a-z0-9_\\-]*?)sitemap([a-z0-9_\\-]*)?\\.xml',
	'pgcache.late_init' => false,
	'pgcache.compatibility' => false,
	'pgcache.remove_charset' => false,
	'pgcache.file.gc' => 3600,
	'pgcache.comment_cookie_ttl' => 1800,
	'pgcache.accept.qs' => array(
		0 => '',
	),
	'pgcache.reject.ua' => array(
		0 => '',
	),
	'pgcache.reject.cookie' => array(
		0 => 'wptouch_switch_toggle',
	),
	'pgcache.reject.uri' => array(
		0 => 'wp-.*\\.php',
		1 => 'index\\.php',
	),
	'pgcache.accept.files' => array(
		0 => 'wp-comments-popup.php',
		1 => 'wp-links-opml.php',
		2 => 'wp-locations.php',
	),
	'pgcache.accept.uri' => array(
		0 => 'sitemap(_index)?\\.xml(\\.gz)?',
		1 => '([a-z0-9_\\-]+)?sitemap\\.xsl',
		2 => '[a-z0-9_\\-]+-sitemap([0-9]+)?\\.xml(\\.gz)?',
	),
	'browsercache.replace.exceptions' => array(
		0 => '',
	),
	'browsercache.no404wp' => false,
	'browsercache.no404wp.exceptions' => array(
		0 => 'robots\\.txt',
		1 => '[a-z0-9_\\-]*sitemap[a-z0-9_\\-]*\\.(xml|xsl|html)(\\.gz)?',
	),
	'browsercache.cssjs.last_modified' => true,
	'browsercache.cssjs.expires' => true,
	'browsercache.cssjs.lifetime' => 31536000,
	'browsercache.cssjs.cache.control' => true,
	'browsercache.cssjs.cache.policy' => 'cache_public_maxage',
	'browsercache.cssjs.etag' => false,
	'browsercache.cssjs.w3tc' => true,
	'browsercache.cssjs.compression' => true,
	'browsercache.cssjs.replace' => false,
	'browsercache.cssjs.nocookies' => false,
	'browsercache.html.last_modified' => true,
	'browsercache.html.expires' => true,
	'browsercache.html.lifetime' => 7200,
	'browsercache.html.cache.control' => true,
	'browsercache.html.cache.policy' => 'cache_public_maxage',
	'browsercache.html.etag' => false,
	'browsercache.html.w3tc' => true,
	'browsercache.html.compression' => true,
	'browsercache.other.last_modified' => true,
	'browsercache.other.expires' => true,
	'browsercache.other.lifetime' => 31536000,
	'browsercache.other.cache.control' => true,
	'browsercache.other.cache.policy' => 'cache_public_maxage',
	'browsercache.other.etag' => false,
	'browsercache.other.w3tc' => true,
	'browsercache.other.compression' => true,
	'browsercache.other.replace' => false,
	'browsercache.other.nocookies' => false,
	'browsercache.timestamp' => '1473983425',
	'minify.rewrite' => true,
	'minify.reject.logged' => true,
	'minify.html.enable' => true,
	'minify.html.inline.css' => true,
	'minify.html.inline.js' => true,
	'minify.html.reject.feed' => false,
	'minify.html.strip.crlf' => true,
	'minify.html.comments.ignore' => array(
		0 => 'google_ad_',
		1 => 'RSPEAK_',
	),
	'minify.js.enable' => true,
	'minify.js.combine.header' => false,
	'minify.js.header.embed_type' => 'blocking',
	'minify.js.combine.body' => false,
	'minify.js.body.embed_type' => 'blocking',
	'minify.js.combine.footer' => false,
	'minify.js.footer.embed_type' => 'blocking',
	'minify.js.strip.comments' => true,
	'minify.js.strip.crlf' => true,
	'minify.css.enable' => true,
	'minify.css.combine' => false,
	'minify.css.strip.comments' => true,
	'minify.css.strip.crlf' => true,
	'minify.css.imports' => '',
	'minify.lifetime' => 86400,
	'minify.file.gc' => 86400,
	'minify.reject.uri' => array(
		0 => '',
	),
	'minify.reject.files.js' => array(
		0 => '',
	),
	'minify.reject.files.css' => array(
		0 => '',
	),
	'minify.reject.ua' => array(
		0 => '',
	),
	'minify.js.groups' => array(
		'60eac' => array(
			'default' => array(
				'include' => array(
					'files' => array(
						0 => 'wp-content/themes/twentyfourteen/js/customizer.js',
						1 => 'wp-content/themes/twentyfourteen/js/featured-content-admin.js',
						2 => 'wp-content/themes/twentyfourteen/js/functions.js',
						3 => 'wp-content/themes/twentyfourteen/js/html5.js',
						4 => 'wp-content/themes/twentyfourteen/js/keyboard-image-navigation.js',
						5 => 'wp-content/themes/twentyfourteen/js/slider.js',
					),
				),
			),
		),
	),
	'minify.css.groups' => array(
		'60eac' => array(
			'default' => array(
				'include' => array(
					'files' => array(
						0 => 'wp-content/themes/twentyfourteen/style.css',
						1 => 'wp-content/themes/twentyfourteen/rtl.css',
						2 => 'wp-content/themes/twentyfourteen/css/ie.css',
						3 => 'wp-content/themes/twentyfourteen/css/editor-style.css',
					),
				),
			),
		),
	),
	'notes.need_empty_minify' => false,
	'mobile.enabled' => true,
	'mobile.rgroups' => array(
		'high' => array(
			'theme' => '',
			'enabled' => true,
			'redirect' => '',
			'agents' => array(
				0 => 'acer\\ s100',
				1 => 'android',
				2 => 'archos5',
				3 => 'bada',
				4 => 'bb10',
				5 => 'blackberry9500',
				6 => 'blackberry9530',
				7 => 'blackberry9550',
				8 => 'blackberry\\ 9800',
				9 => 'cupcake',
				10 => 'docomo\\ ht\\-03a',
				11 => 'dream',
				12 => 'froyo',
				13 => 'googlebot-mobile',
				14 => 'htc\\ hero',
				15 => 'htc\\ magic',
				16 => 'htc_dream',
				17 => 'htc_magic',
				18 => 'iemobile/7.0',
				19 => 'incognito',
				20 => 'ipad',
				21 => 'iphone',
				22 => 'ipod',
				23 => 'kindle',
				24 => 'lg\\-gw620',
				25 => 'liquid\\ build',
				26 => 'maemo',
				27 => 'mot\\-mb200',
				28 => 'mot\\-mb300',
				29 => 'nexus\\ 7',
				30 => 'nexus\\ one',
				31 => 'opera\\ mini',
				32 => 's8000',
				33 => 'samsung\\-s8000',
				34 => 'series60.*webkit',
				35 => 'series60/5\\.0',
				36 => 'sonyericssone10',
				37 => 'sonyericssonu20',
				38 => 'sonyericssonx10',
				39 => 't\\-mobile\\ mytouch\\ 3g',
				40 => 't\\-mobile\\ opal',
				41 => 'tattoo',
				42 => 'touch',
				43 => 'webmate',
				44 => 'webos',
			),
		),
		'low' => array(
			'theme' => '',
			'enabled' => false,
			'redirect' => '',
			'agents' => array(
				0 => '240x320',
				1 => '2\\.0\\ mmp',
				2 => '\\bppc\\b',
				3 => 'alcatel',
				4 => 'amoi',
				5 => 'asus',
				6 => 'au\\-mic',
				7 => 'audiovox',
				8 => 'avantgo',
				9 => 'benq',
				10 => 'bird',
				11 => 'blackberry',
				12 => 'blazer',
				13 => 'cdm',
				14 => 'cellphone',
				15 => 'danger',
				16 => 'ddipocket',
				17 => 'docomo',
				18 => 'dopod',
				19 => 'elaine/3\\.0',
				20 => 'ericsson',
				21 => 'eudoraweb',
				22 => 'fly',
				23 => 'haier',
				24 => 'hiptop',
				25 => 'hp\\.ipaq',
				26 => 'htc',
				27 => 'huawei',
				28 => 'i\\-mobile',
				29 => 'iemobile',
				30 => 'iemobile/7',
				31 => 'iemobile/9',
				32 => 'j\\-phone',
				33 => 'kddi',
				34 => 'konka',
				35 => 'kwc',
				36 => 'kyocera/wx310k',
				37 => 'lenovo',
				38 => 'lg',
				39 => 'lg/u990',
				40 => 'lge\\ vx',
				41 => 'midp',
				42 => 'midp\\-2\\.0',
				43 => 'mmef20',
				44 => 'mmp',
				45 => 'mobilephone',
				46 => 'mot\\-v',
				47 => 'motorola',
				48 => 'msie\\ 10\\.0',
				49 => 'netfront',
				50 => 'newgen',
				51 => 'newt',
				52 => 'nintendo\\ ds',
				53 => 'nintendo\\ wii',
				54 => 'nitro',
				55 => 'nokia',
				56 => 'novarra',
				57 => 'o2',
				58 => 'openweb',
				59 => 'opera\\ mobi',
				60 => 'opera\\.mobi',
				61 => 'p160u',
				62 => 'palm',
				63 => 'panasonic',
				64 => 'pantech',
				65 => 'pdxgw',
				66 => 'pg',
				67 => 'philips',
				68 => 'phone',
				69 => 'playbook',
				70 => 'playstation\\ portable',
				71 => 'portalmmm',
				72 => 'proxinet',
				73 => 'psp',
				74 => 'qtek',
				75 => 'sagem',
				76 => 'samsung',
				77 => 'sanyo',
				78 => 'sch',
				79 => 'sch\\-i800',
				80 => 'sec',
				81 => 'sendo',
				82 => 'sgh',
				83 => 'sharp',
				84 => 'sharp\\-tq\\-gx10',
				85 => 'small',
				86 => 'smartphone',
				87 => 'softbank',
				88 => 'sonyericsson',
				89 => 'sph',
				90 => 'symbian',
				91 => 'symbian\\ os',
				92 => 'symbianos',
				93 => 'toshiba',
				94 => 'treo',
				95 => 'ts21i\\-10',
				96 => 'up\\.browser',
				97 => 'up\\.link',
				98 => 'uts',
				99 => 'vertu',
				100 => 'vodafone',
				101 => 'wap',
				102 => 'willcome',
				103 => 'windows\\ ce',
				104 => 'windows\\.ce',
				105 => 'winwap',
				106 => 'xda',
				107 => 'xoom',
				108 => 'zte',
			),
		),
	),
	'notes.plugins_updated' => false,
	'common.instance_id' => 913158888,
);