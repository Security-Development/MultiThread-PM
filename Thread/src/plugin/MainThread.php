<?php

namespace plugin;

use plugin\thread\one_thread;
use plugin\thread\ThreadController;
use plugin\thread\ThreadSetting;
use plugin\thread\two_thread;
use pocketmine\plugin\PluginBase;

class MainThread extends PluginBase {

    public function onEnable() : void {
        $this->getServer()->getPluginManager()->enablePlugin($this);

        $task = new ThreadSetting();
        $task->bindTo(new one_thread);
        $thread = new ThreadController($task);
        $thread->start();

        $task = new ThreadSetting();
        $task->bindTo(new two_thread);
        $thread = new ThreadController($task);
        $thread->start();

        while (1){
            echo "main\n";
            sleep(1);
        }
    }

}
