<?php

namespace Taki21/PocketMath;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase{
  
  public function onEnable{
    $this->getLogger()->info(C::GREEN."PocketMath Enabled!");
  }
  public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
    if(strtolower($cmd->getName() == "add")){
      if(!isset($args[0] or $args[1])){
        $s->sendMessage(C::RED."Usage: /add <Number 1> <Number 2>");
      }else{
        if(!is_numeric($args[0] or $args[1])){
          $s->sendMessage(C::RED."Usage: /add <Number 1> <Number 2>")
        }else{
          $a = array_shift($args);
          $b = array_shift($args);
          $c = $a + $b;
          $s->sendMessage(C::GREEN."The Answer is $c");
        }
      }
    }
  }
}
