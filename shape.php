<?php

//napraviti glavnu klasu koja u sebi prima parametar koji mora da ima implementiran shape interface
//napraviti klasu pravougaonik, trougao i kvadrat
//svaka od njih sadrzi metodu izracunavanje povrsine i ima implementiran shape interface, koji sadrzi metodu izr.povrsine
//na kraju instancirati shape i proslediti mu jednu od instanciranih klasa i od tog objekta pozvati metodu izracunavanja povrsine
//u slucaju nuzde pogledati fajl dependency_injection.php

interface shape {
    public function surface();
}

class rectangle implements shape {
    public function surface()
    {
        // TODO: Implement surface() method.
        $a=10;
        $b=15;
        echo 'Rectangle surface is: '.$a*$b;
    }
}
class triangle implements shape {
    public function surface(){
        $a=10;
        $h=12;
        echo 'Triangle surface is '.($a*$h)/2;
    }
}
class square implements shape {
    public function surface()
    {
        // TODO: Implement surface() method.
        $a=10;
        echo 'Square surface is '.$a*$a;
    }
}
class shape_geometric {
    public $geometric;
    public function __construct($geometric){
        $this->geometric=$geometric;
    }
}
$rectangle=new shape_geometric(new square());
$rectangle->geometric->surface();
