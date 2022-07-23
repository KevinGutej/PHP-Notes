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
