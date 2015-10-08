<?php // Never forget this, or plugins (or anything else written in php) will not work
namespace STG;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener{
	public function onEnable() {
	$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
		
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
        	if(strtolower($cmd->getName()) === "wu") {
            		if(isset($args[0])) {
        			if($sender instanceof Player){
                			$status = implode(" ", $args[0]);
                  			$sender->setNameTag(,$sender->getName()."\n".$status));
                   			$sender->sendMessage("Status updated");
                   			return true; // If you don't put this, it'll send the usage of the command after the command is executed
				}else{
					$sender->sendMessage("That command can only be used in-game");
					return true;
				}
			}else{
				$sender->sendMessage("You didn't choose a status!");
				return false; // Putting this will send the player the command usage after the command is executed
			}
		}
	}
}
