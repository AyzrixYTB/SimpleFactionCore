<?php

namespace Ayzrix\Faction\Events\Listeners;

use Ayzrix\Faction\CPlayer;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;
use pocketmine\event\player\PlayerDeathEvent;

class PlayerListener implements Listener {

    public function onPlayerCreation(PlayerCreationEvent $event) {
        $event->setPlayerClass(CPlayer::class);
    }

    public function onPlayerDeath(PlayerDeathEvent $event) {
        $player = $event->getPlayer();

        if ($player instanceof CPlayer) {
            $player->setLastDeathPosition($player->getPosition());
        }
    }
}