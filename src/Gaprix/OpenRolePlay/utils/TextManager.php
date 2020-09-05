<?php

namespace Gaprix\OpenRolePlay\utils;

use Gaprix\OpenRolePlay\OpenRolePlay;

class TextManager{

	private static $main;

	public function __construct(OpenRolePlay $main){
		self::$main = $main;
	}

	public static function getString(string $identifier){
		$config = self::$main->getConfig();
		$messages = $config->get('messages');
		return (isset($messages[$identifier])) ? $messages[$identifier] : '{'.$identifier.'}';
	}

}
