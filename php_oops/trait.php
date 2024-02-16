<?php
trait Engine {
    protected function start() {
        echo "Engine started.";
    }

    public function accelerate($speed) {
        echo "Accelerating to $speed km/h.";
    }

    public function brake() {
        echo "Braking.";
    }
}

class derive implements Engine
{
    use Engine;
    public function disp()
    {
        start();
    }
}
$obj=new derive();
$obj->disp();