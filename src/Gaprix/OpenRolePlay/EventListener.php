<?php

namespace Gaprix\OpenRolePlay;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use Gaprix\OpenRolePlay\utils\TextManager;

class EventListener implements Listener{

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$player->sendMessage(TextManager::getString("text.join"));
	}

}
