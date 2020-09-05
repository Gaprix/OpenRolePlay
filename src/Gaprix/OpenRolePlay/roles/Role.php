<?php

namespace Gaprix\OpenRolePlay\roles;

class Role{

	private $pattern

	public function __construct(RolePattern $pattern){
		$this->pattern = $pattern;
	}

	public function getId(){
		return $this->pattern->id;
	}

	public function getName(){
		return $this->pattern->roleName;
	}

}
