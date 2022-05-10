<?php
namespace Tegaskan\Sikap\Lapor;

class Jaga {

    public function __construct(private string $komandan)
    {
    }

    public function laporan(string $name):string
    {
        return "Lapor komandan {$this->komandan}, saya $name akan melaksanakan tugas jaga ksatriaan";
    }
}