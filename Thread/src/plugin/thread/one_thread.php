<?php

namespace plugin\thread;

class one_thread implements ThreadAdapter {
    public function run() {
        while(1){
            echo "thread-1\n";
            sleep(1);
        }
    }

    
}