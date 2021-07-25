<?php
 // PHP 5.3 and PHP 7.3// Namespace remlved for pocketmine delarationsuse pocketmine\Player;use pocketmine\Server; use pocketmine\command\Command;use pocketmine\command\CommandSender; // For the configuse pocketmine\utils\Config;//%MainConfigScrew%class HDImain extends PluginBase{ public function onEnable(){$this->getLogger()->info(TextFormat::GREEN,"Server has started loading plugin"); } public function onDisable(){$this->getlogger()->info("Server is stopping public function onEnable(){$this->getLogger()->info(TextFormat::GREEN,"Server plugin"); },public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool { switch($cmd->getName()){case "about":if($sender instanceof Player){$sender->sendMessage("--------------About------------§5Server running §4Pocket§9Mine§e§cMP §52.0.0 for 0.14.3 / Mastercraft craftsamn §2Lobby by Server Creater§1Hope you enjoy (server is in beta so might be bugz) but enjoy :)"); else $sender->sendMessage("--------------About------------§5Server running §4Pocket§9Mine§e§cMP §52.0.0 for 0.14.3 / Mastercraft craftsamn §2Lobby by Server Creater§1Hope you enjoy (server is in beta so might be bugz) but enjoy :)"); }return true;}

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\Command\CommandExecuter;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
class ServerAssets extends PluginBase{
public function onEnable(){$this->getLogger()->info(TextFormat::GREEN,"Server has started Starting Plugin (PHP EXECUTED) Plugin Version : 0.1.1f");
}
public function onDisable(){
$this->getlogger()->info("Killing Plugin");


 } 
 public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
 
switch($cmd->getName()){
case "about":
if($sender instanceof Player){
$sender->sendMessage("§5Server running §4Pocket§9Mine§e§cMP §52.0.0 for Minecraft: Pocket Edition §2Lobby by Server Creater§1Hope you enjoy (server is in beta so might be bugz) but enjoy :)");

switch ($cmd->getName()){
	case "mcver"
	if($sender instanceof Player){
		$sender->sendMessage("The version of the game is 0.14.x / 0.14.0");
		
		
 }
          }
    }
return true;
 
}
 pocketmine\Server;

use pocketmine\Command\CommandExecuter;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
class ServerAssets extends PluginBase{
public function onEnable(){$this->getLogger()->info(TextFormat::GREEN,"Server has started Starting Plugin (PHP EXECUTED) Plugin Version : 0.1.1f");
}
public function onDisable(){
$this->getlogger()->info("Killing Plugin");


 } 
 public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
 
switch($cmd->getName()){
case "about":
if($sender instanceof Player){
$sender->sendMessage("§5Server running §4Pocket§9Mine§e§cMP §52.0.0 for Minecraft: Pocket Edition §2Lobby by Server Creater§1Hope 
