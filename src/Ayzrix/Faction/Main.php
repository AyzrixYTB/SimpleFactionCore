<?php

namespace Ayzrix\Faction;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    private static $instance = null;

    public function onEnable(): void {
        $this->saveDefaultConfig();
        self::$instance = $this;
    }

    public static function getInstance(): Main {
        return self::$instance;
    }
}
