<?php

Kirby::plugin('medienbaecker/kookie', [
	'options' => [
		// Colors
		'color' => '#000000',
		'background-color' => '#ffffff',
		'color-accept' => '#ffffff',
		'background-color-accept' => '#000000',
		'color-reject' => '#ffffff',
		'background-color-reject' => '#777777',
		// Content
		'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		'link' => 'privacy',
		'linkText' => 'Learn more',
		'accept' => 'Accept',
		'reject' => 'Reject',
	],
	'snippets' => [
		'kookie' => __DIR__ . '/snippets/kookie.php'
	],
	'routes' => function ($kirby) {
		return [
		[
			'pattern' => 'kookie/cookies_accepted',
			'action' => function () {
				return snippet('cookies_accepted', [], true);
			}
		]
		];
	}
]);
