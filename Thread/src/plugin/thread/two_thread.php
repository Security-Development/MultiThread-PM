<?php

namespace plugin\thread;

class two_thread implements ThreadAdapter {
    public function run() {
        while(1){
            echo "thread-2\n";
            sleep(1);
        }
    }

    
}