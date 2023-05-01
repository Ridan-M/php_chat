<?php

trait MutableServerArrayTrait {
    
    protected array $serverArray;

    public function add ($key, $value) {
        $this->serverArray[$key] = $value;
    }

    public function delete ($key) {
        unset($this->serverArray[$key]);
    }

    public abstract function clear ();

}