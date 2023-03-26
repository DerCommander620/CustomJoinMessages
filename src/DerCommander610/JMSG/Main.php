<?php

namespace KoDe\Events;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;
use puocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PLayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;

class joinmessages extends PLuginBase implements Listener {

    public function onEnable() {
        $this->getLogger()->info(C::Green . "Join msgs geladen");
    }

    public function onDisable(){
        $this->getLogger()->info(C::Red "Join messages ausgeschaltet!");
    }

    public function onJoinPlayer(PlayerJoinEvent $event) {
        $event->setJoinMessage("Der Spieler " . $event->getPlayer()->getName() . "ist online gegangen");
        @mkdir($this->getDataFolder());
        $this->getResource("joinmessages.yml")
        if($sender->setQuitMessage($this->getConfig()->get("JoinMessage")))
    }

    public function onQuitPlayer(PlayerQuitEvent $event) {
        $event->setQuitMessage("Der Spieler" . $event->getPlayer()->getName() . "ist offline gegangen");
        @mkdir($this->getDataFolder());
        $this->getResource("joinmessages.yml")
        if($sender->setQuitMessage($this->getConfig()->get("QuitMessage"))){
        }
    return true;
    }
}