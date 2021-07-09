<?php

namespace Ayzrix\Faction;

use Ayzrix\Faction\Commands\{Back, Feed, Heal};
use Ayzrix\Faction\Events\Listeners\PlayerListener;
use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    private static $instance = null;

    public function onEnable(): void {
        $this->saveDefaultConfig();
        self::$instance = $this;
        $this->initCommands();
        $this->initEvents();
    }

    private function initCommands(): void {
        $commands = [new Back($this), new Heal($this), new Feed($this)];
        foreach($commands as $command) {
            if ($command instanceof Command) {
                $this->getServer()->getCommandMap()->register($command->getName(), $command);
            }
        }
    }

    private function initEvents(): void {
        $events = [new PlayerListener()];
        foreach($events as $event) {
            $this->getServer()->getPluginManager()->registerEvents($event, $this);
        }
    }

    public static function getInstance(): Main {
        return self::$instance;
    }
}
