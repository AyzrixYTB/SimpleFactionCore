<?php

namespace Ayzrix\Faction\Commands;

use Ayzrix\Faction\CPlayer;
use Ayzrix\Faction\Main;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;

class Feed extends PluginCommand {

    public function __construct(Main $plugin) {
        parent::__construct("feed", $plugin);
        $this->setDescription(Main::getInstance()->getConfig()->get("feed_description"));
        $this->setPermission("sfc.feed");
        $this->setUsage("/feed");
    }

    public function execute(CommandSender $player, string $commandLabel, array $args) {
        if ($player instanceof CPlayer) {
            if ($player->hasPermission($this->getPermission())) {
                $player->setFood($player->getMaxFood());
                $player->setSaturation(20);
                $player->sendMessage(Main::getInstance()->getConfig()->get("feed_success"));
            } else $player->sendMessage(Main::getInstance()->getConfig()->get("not_permission"));
        } else $player->sendMessage(Main::getInstance()->getConfig()->get("not_player"));
    }
}