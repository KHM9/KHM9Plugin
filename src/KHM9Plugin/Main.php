<?php
namespace KHM9Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
class main extends PluginBase {
    public function onLoad(): void{
        $this->getLogger()->info(C::GOLD . "Your sweet plugin is almost ready! :D");
    }
    public function onEnable(): void{
        $this->getLogger()->info(C::GREEN . "The one and only KHM9 Plugin has been enabled! :D");
    }
    public function onDisable(): void{
        $this->getLogger()->info(C::RED . "Plugin has been Disabled");
    }
    public function onCommand(CommandSender $sender, Command $cmd, String $Label, array $args): bool{
        if($cmd->getName()){
            switch($args(count) === 0){
              case "example":
                $player->sendMessage(C::GREEN . "This is a developed by KHM9... It has no use lol");
                break;
            }
        return true;
        }
    }
}
