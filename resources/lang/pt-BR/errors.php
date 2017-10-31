<?php

return [
	'404'=>[
		'title'=> 'Erro 404',
		'description'=> 'Não conseguimos encontrar o que você procura em <em>:domain</em>.',
		'button'=> 'Leve-me para a página inicial',
		'icon'=> 'fa fa-frown-o red',
		'url'=> 'home', //current options are current, home and domain
		'reason'=>[
			'title'=> 'O que aconteceu?',
			'description'=> 'O erro 404 ocorre quando não encontramos o arquivo ou página que você está procurando.',
		],
		'solution'=>[
			'title'=> 'O que eu posso fazer?',
			'visitor'=>[
				'title'=> 'Se você é um visitante do site',
				'description'=> 'Use o botão de navegação do seu navegador e verifique se você está no lugar certo. Se precisar de ajuda imediata, envie-nos um e-mail.',
			],
			'owner'=>[
				'title'=> 'Se você é o proprietário do site',
				'description'=> 'Verifique se está no lugar certo, se acredita que está, entre em contato com provedor do seu site.',
			]
		]
	],
	'503'=>[
		'title'=> 'Erro 500',
		'description'=> 'O servidor Web está retornando um erro temporário inesperado para <em>:domain</em>.',
		'button'=> 'Tente recarregar esta página',
		'icon'=> 'fa fa-exclamation-triangle orange',
		'url'=> 'current', //current options are current, home and domain
		'reason'=>[
			'title'=> 'O que aconteceu?',
			'description'=> 'O erro 503 ocorre devido a uma sobrecarga ou manutenção no servidor. Geralmente este erro é temporário.',
		],
		'solution'=>[
			'title'=> 'O que eu posso fazer?',
			'visitor'=>[
				'title'=> 'Se você é um visitante do site',
				'description'=> 'Se precisar de ajuda imediata, envie-nos um e-mail. Pedimos desculpas por qualquer inconveniente.',
			],
			'owner'=>[
				'title'=> 'Se você é o proprietário do site',
				'description'=> 'Este erro é provavelmente temporário, a melhor coisa a fazer é verificar novamente em alguns minutos e tudo provavelmente estará funcionando de forma normal novamente.',
			]
		]
	],
	'maintenance'=>[
		'title'=> 'Manutenção temporária',
		'description'=> 'O servidor do site <em>:domain</em> está passando por atualizações neste momento.',
		'button'=> 'Tente recarregar esta página',
		'icon'=> 'fa fa-cogs green',
		'url'=> 'current', //current options are current, home and domain
		'reason'=>[
			'title'=> 'O que aconteceu?',
			'description'=> 'Assim como os carros, os servidores e sites precisam de manutenção regulares para funcionar sem problemas.',
		],
		'solution'=>[
			'title'=> 'O que eu posso fazer?',
			'visitor'=>[
				'title'=> 'Se você é um visitante do site',
				'description'=> 'Se precisar de ajuda imediata, envie-nos um e-mail. Pedimos desculpas por qualquer inconveniente.',
			],
			'owner'=>[
				'title'=> 'Se você é o proprietário do site',
				'description'=> 'Este erro é provavelmente temporário, a melhor coisa a fazer é verificar novamente em alguns minutos e tudo provavelmente estará funcionando de forma normal novamente.',
			]
		]
	],
	'000'=>[
		'title'=> 'Erro 000 ',
		'description'=> '',
		'button'=> '',
		'icon'=> '',
		'url'=> '', //current options are current, home and domain
		'reason'=>[
			'title'=> 'O que aconteceu?',
			'description'=> '',
		],
		'solution'=>[
			'title'=> 'O que eu posso fazer?',
			'visitor'=>[
				'title'=> 'Se você é um visitante do site',
				'description'=> '',
			],
			'owner'=>[
				'title'=> 'Se você é o proprietário do site',
				'description'=> '',
			]
		]
	]
];