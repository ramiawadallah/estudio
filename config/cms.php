<?php 

return [


	'theme' => [
		'folder' => 'public/themes',
		'active' => 'default'
	],

	'templates' => [
		'home'          => App\Template\HomeTemplate::class,
		'aboutus'       => App\Template\AboutUsTemplate::class,
		'blog' 			=> App\Template\BlogTemplate::class,
		'maintenance'   => App\Template\MaintenanceTemplate::class,
		'gallary'		=> App\Template\GallaryTemplate::class,
		'portfoilo'		=> App\Template\PortfoiloTemplate::class,
		'contactus'		=> App\Template\ContactusTemplate::class,
	]

];