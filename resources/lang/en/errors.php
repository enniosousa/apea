<?php

return [
	'404'=>[
		'title'=> 'Error 404',
		'description'=> 'We couldn\'t find what you\'re looking for on',
		'button'=> 'Take Me To The Homepage',
		'icon'=> 'fa fa-frown-o red',
		'reason'=>[
			'title'=> 'What happened?',
			'description'=> 'A 404 error status implies that the file or page that you\'re looking for could not be found.',
		],
		'solution'=>[
			'title'=> 'What can I do?',
			'visitor'=>[
				'title'=> 'If you\'re a site visitor',
				'description'=> 'Please use your browser\'s back button and check that you\'re in the right place. If you need immediate assistance, please send us an email instead.',
			],
			'owner'=>[
				'title'=> 'If you\'re the site owner',
				'description'=> 'Please check that you\'re in the right place and get in touch with your website provider if you believe this to be an error.',
			]
		]
	],
	'503'=>[
		'title'=> 'Error 500',
		'description'=> 'The web server is returning an unexpected temporary error for',
		'button'=> 'Try This Page Again',
		'icon'=> 'fa fa-exclamation-triangle orange',
		'reason'=>[
			'title'=> 'What happened?',
			'description'=> 'A 503 error status implies that this is a temporary condition due to a temporary overloading or maintenance of the server. This error is normally a brief temporary interruption.',
		],
		'solution'=>[
			'title'=> 'What can I do?',
			'visitor'=>[
				'title'=> 'If you\'re a site visitor',
				'description'=> 'If you need immediate assistance, please send us an email instead. We apologize for any inconvenience.',
			],
			'owner'=>[
				'title'=> 'If you\'re the site owner',
				'description'=> 'This error is mostly likely very brief, the best thing to do is to check back in a few minutes and everything will probably be working normal again.',
			]
		]
	],
	'maintenance'=>[
		'title'=> 'Temporary Maintenance',
		'description'=> 'The web server for <em>:domain</em> is currently undergoing some maintenance.',
		'button'=> 'Try This Page Again',
		'icon'=> 'fa fa-cogs green',
		'reason'=>[
			'title'=> 'What happened?',
			'description'=> 'Servers and websites need regular maintenance just like a car to keep them up and running smoothly.',
		],
		'solution'=>[
			'title'=> 'What can I do?',
			'visitor'=>[
				'title'=> 'If you\'re a site visitor',
				'description'=> 'If you need immediate assistance, please send us an email instead. We apologize for any inconvenience.',
			],
			'owner'=>[
				'title'=> 'If you\'re the site owner',
				'description'=> 'The maintenance period will mostly likely be very brief, the best thing to do is to check back in a few minutes and everything will probably be working normal again.',
			]
		]
	],
	'000'=>[
		'title'=> 'Error ',
		'description'=> '',
		'button'=> '',
		'icon'=> '',
		'reason'=>[
			'title'=> 'What happened?',
			'description'=> '',
		],
		'solution'=>[
			'title'=> 'What can I do?',
			'visitor'=>[
				'title'=> 'If you\'re a site visitor',
				'description'=> '',
			],
			'owner'=>[
				'title'=> 'If you\'re the site owner',
				'description'=> '',
			]
		]
	]
];