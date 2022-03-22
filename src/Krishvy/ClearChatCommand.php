<?php

declare(strict_types=1);

namespace Krishvy;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class ClearChatCommand extends Command {
    public function __construct()
    {
        parent::__construct("clearchat", "Clear the chat!");
        $this->setPermission("clearchat.use");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool
    {
        if (!$sender instanceof Player) {
            return true;
        }
        if(!$this->testPermission($sender)){
            return true;
        }
        Main::getInstance()->getServer()->broadcastMessage("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
        return true;
    }

}
