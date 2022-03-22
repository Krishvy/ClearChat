<?php

declare(strict_types=1);

namespace Krishvy;

use pocketmine\plugin\PluginBase;
use Krishvy\ClearChatCommand;

class Main extends PluginBase {

    public static $instance;

    public function onEnable(): void
    {
        self::$instance = $this;
        $this->getServer()->getCommandMap()->register("ClearChat",new ClearChatCommand());
    }

    public static function getInstance(): self{
        return self::$instance;
    }

}