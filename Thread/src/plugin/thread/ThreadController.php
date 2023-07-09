<?php

namespace plugin\thread;

use pocketmine\thread\Thread;

class ThreadController extends Thread
{
    private $thread;

    public function __construct(ThreadSetting $task) {
        $this->thread = $task->getData();
    }

    public function onRun(): void {
        $task = $this->getThread();
        $this->setThread($task); 
        $task->run();
    }

    public function getThread() : ThreadSetting {
        return unserialize($this->thread);
    }

    public function setThread(ThreadSetting $thread) : void {
        $this->thread = $thread->getData();
    }
}