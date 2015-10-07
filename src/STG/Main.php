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

class Main extends PluginBase implements Listener
{
public function onEnable() {
		
        
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		}
		
		 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) {
        if(strtolower($cmd->getName()) === "wu") {
            if(isset($args[0])) {
              if($sender instanceof PLayer){
                $status = $args[0];
                  $sender->setNameTag(implode(" ",$sender->getName()."\n".$status));
                   $sender->sendMessage("Status updated");


}
}
}
}
