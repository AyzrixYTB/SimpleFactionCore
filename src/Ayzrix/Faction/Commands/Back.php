<?php

namespace Ayzrix\Faction\Commands;

use Ayzrix\Faction\CPlayer;
use Ayzrix\Faction\Main;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;

class Back extends PluginCommand {

    private static $back;

    public function __construct(Main $plugin) {
        parent::__construct("back", $plugin);
        $this->setDescription(Main::getInstance()->getConfig()->get("back_description"));
        $this->setPermission("sfc.back");
        $this->setUsage("/back");
    }

    public function execute(CommandSender $player, string $commandLabel, array $args) {
        if ($player instanceof CPlayer) {
            if ($player->hasPermission($this->getPermission())) {
                if ($player->hasLastDeathPosition()) {
                    $player->teleportToDeathPosition();
                    $player->sendMessage(Main::getInstance()->getConfig()->get("back_success"));
                } else $player->sendMessage(Main::getInstance()->getConfig()->get("back_notfound"));
            } else $player->sendMessage(Main::getInstance()->getConfig()->get("not_permission"));
        } else $player->sendMessage(Main::getInstance()->getConfig()->get("not_player"));
    }
}