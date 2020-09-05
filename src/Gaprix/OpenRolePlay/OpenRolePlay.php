<?php

namespace Gaprix\OpenRolePlay;

use pocketmine\plugin\PluginBase;
use Gaprix\OpenRolePlay\utils\TextManager;

class OpenRolePlay extends PluginBase{

	private $textmanager;
	private static $instance;

	public function onLoad(){
		self::$instance = $this;
	}

	public function onEnable(){
		$this->textmanager = new TextManager($this);
		$this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
	}

	public static function getInstance(){
		return self::$instance;
	}

	public function getTextManager(){
		return $this->textmanager;
	}

}
