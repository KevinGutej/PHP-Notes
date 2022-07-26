<?php

class Doctor
{
    protected int $earning;

    public function Heal()
    {
        echo "Healing in process...." . PHP_EOL;
    }

    public function __construct(int $income)
    {
        $this->earning = $income;
    }
}
class Dentist extends Doctor
{
    public function Heal()
    {
        echo "Fixing teeth...." . PHP_EOL;
        $this->PrintEarning();
    }
    private function PrintEarning()
    {
        echo $this->earning;
    }
}
class Surgeon extends Doctor
{
    public function Heal()
    {
        echo "Surgery in progress...." . PHP_EOL;
    }
}
$kevin = new Dentist(1200);
$kevin->Heal();



class Vehicle
{
    public int $speed;
    public int $cost;
    public string $color;

    public function SpeedingUp()
    {
        echo "The car is speeding up..." . PHP_EOL;
    }
    protected function SlowingDown()
    {
        echo "The car is slowing down..." . PHP_EOL;
    }
}
class Car extends Vehicle
{
    
}
class Ship extends Vechicle
{
    
}