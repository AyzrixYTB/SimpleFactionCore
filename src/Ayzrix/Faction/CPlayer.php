<?php

namespace Ayzrix\Faction;

use pocketmine\level\Position;
use pocketmine\Player;

class CPlayer extends Player {

    /** @var Position */
    public static $lastDeathPosition = null;

    public function setLastDeathPosition(Position $position) {
       self::$lastDeathPosition = $position;
    }

    public function hasLastDeathPosition(): bool {
        return self::$lastDeathPosition !== null;
    }

    public function teleportToDeathPosition() {
        if ($this->hasLastDeathPosition()) {
            $this->teleport(self::$lastDeathPosition);
            self::$lastDeathPosition = null;
        }
    }
}