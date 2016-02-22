<?php

namespace Taki21\PocketMath;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase{
  
    public function onEnable(){
        $this->getLogger()->info(C::GREEN."PocketMath Enabled!");
    }
    public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
        if(strtolower($cmd->getName() == "add")){
            if(is_null($args[0] or $args[1])){
              $s->sendMessage(C::RED."Usage: /add <Number1> <Number2>");
            }else{
              $a = array_shift($args);
              $b = array_shift($args);
              $c = $a + $b;
              $s->sendMessage(C::GREEN."The Answer is $c");
            }
          }
        if(strtolower($cmd->getName() == "sub")){
            if(is_null($args[0] or $args[1])){
                $s->sendMessage(C::RED."Usage: /sub <Number 1> <Number 2>");
              }else{
                $d = array_shift($args);
                $e = array_shift($args);
                $f = $d - $e;
                $s->sendMessage(C::GREEN."The Answer is $f");
            }
          }
        if(strtolower($cmd->getName() == "mult")){
            if(is_null($args[0] or $args[1])){
                $s->sendMessage(C::RED."Usage: /mult <Number 1> <Number 2>");
            }else{
                   $g = array_shift($args);
                   $h = array_shift($args);
                   $i = $g * $h;
                   $s->sendMessage(C::GREEN."The Answer is $i");
            }
        }
        if(strtolower($cmd->getName() == "div")){
           if(is_null($args[0] or $args[1])){
              $s->sendMessage(C::RED."Usage: /div <Number 1> <Number 2>");
           }else{
                 $j = array_shift($args);
                 $k = array_shift($args);
                 $l = $j / $k;
                 $s->sendMessage(C::GREEN."The Answer is $l");
             }
        }
        if(strtolower($cmd->getName() == "prct")){
            if(is_null($args[0] or $args[1])){
                $s->sendMessage(C::RED."/prct <Number1> <Number2>");
            }else{
                $m = array_shift($args);
                $n = array_shift($args);
                $o = $n*($m / 100);
                $s->sendMessage(C::GREEN."The Answer is $o");
            }
        }
        if(strtolower($cmd->getName() == "expo")){
            if(is_null($args[0] or $args[1])){
                $s->sendMessage(C::RED."/expo <Number1> <Number2>");
            }else{
                $p = array_shift($args);
                $q = array_shift($args);
                $r = $p**$q;
                $s->sendMessage(C::GREEN."The Answer is $r");
            }
        }
        if(strtolower($cmd->getName() == "circle")){
            if(is_null($args[0] or $args[1])){
                $s->sendMessage(C::RED."/circle <Radius>");
            }else{
                $st = array_shift($args);
                $t = $st*3.14*2;
                $s->sendMessage(C::GREEN."The Answer is $t");
            }
        }
        return true;
    }
}
