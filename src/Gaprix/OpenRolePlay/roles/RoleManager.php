<?php

namespace Gaprix\OpenRolePlay\roles;

use Gaprix\OpenRolePlay\OpenRolePlay;

class RoleManager{

	private static $main;
	private $roles;

	public function __construct(OpenRolePlay $main){
		self::$main = $main;
	}

	public function importPatterns(){
		$config = self::$main->getConfig();
		$roles = $config->get("roles");
		$this->roles = [];
		foreach($roles as $patternName => $settings){
			$pt = new RolePattern();
			$pt->name = $patternName;
			$pt->id = $settings["id"];
			$pt->roleName = $settings["roleName"];
			$this->roles[] = new Role($pt);
		}
	}

	public function addRole(RolePattern $pattern){
		$this->roles[] = new Role($pattern);
	}

}
