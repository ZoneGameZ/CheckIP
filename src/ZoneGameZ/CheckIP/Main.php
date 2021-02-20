<?php

namespace ZoneGameZ\CheckIP;

use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

    public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      switch($cmd->getName()){
        case "ip":
        if(isset($args[0])){
          $player = $this->getServer()->getPlayer($args[0]);
          $sender->sendMessage("§fชื่อ : §e ".$player->geName()."");
          $sender->sendMessage("§fIP : §e ".$player->getAddress()."");
        } else {
          
        }
        return true;
      }
       }
     }