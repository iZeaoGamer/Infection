<?php
namespace  TDroidd\Infection\Tasks;
use pocketmine\Player;
use pocketmine\Server;
use TDroidd\Infection\Main;
use pocketmine\scheduler\Task;

class WaitTask extends Task{

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
        $this->waitTime = 30;
    }

    public function onRun(int $currentTick) : void{

    }

}
