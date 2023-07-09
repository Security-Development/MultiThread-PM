<?php

namespace plugin\thread;


class ThreadSetting implements Runnable {
    public $taskQueue = [];

    public function bindTo(ThreadAdapter $class) {
        $this->taskQueue[] = $class;
    }

    public function run(): void {
        while (!empty($this->taskQueue)) {
            $task = array_shift($this->taskQueue);
            $task->run();
        }
    }

    public function getData(): string {
        return serialize($this);
    }
}

