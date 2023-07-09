<?php

namespace plugin\thread;

interface Runnable {
    public function bindTo(ThreadAdapter $class);
    public function run(): void;
}