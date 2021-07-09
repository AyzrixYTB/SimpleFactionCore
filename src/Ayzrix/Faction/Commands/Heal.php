<?php

namespace Ayzrix\Faction\Commands;

use Ayzrix\Faction\CPlayer;
use Ayzrix\Faction\Main;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;

class Heal extends PluginCommand {

    public function __construct(Main $plugin) {
        parent::__construct("heal", $plugin);
        $this->setDescription(Main::getInstance()->getConfig()->get("heal_description"));
        $this->setPermission("sfc.heal");
        $this->setUsage("/heal");
    }

    public function execute(CommandSender $player, string $commandLabel, array $args) {
        if ($player instanceof CPlayer) {
            if ($player->hasPermission($this->getPermission())) {
                $player->setHealth($player->getMaxHealth());
                $player->sendMessage(Main::getInstance()->getConfig()->get("heal_success"));
            } else $player->sendMessage(Main::getInstance()->getConfig()->get("not_permission"));
        } else $player->sendMessage(Main::getInstance()->getConfig()->get("not_player"));
    }
}