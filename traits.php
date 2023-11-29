<?php

trait msg{
    public function useTraite(){
        echo "trait";
    }
}

trait msg2{
    public function usesTraites(){
        echo " use";
    }
}

class welcome {
    use msg;
}

class wlcome{
    use msg2, msg;
}
$std = new welcome;
$std->useTraite();

$stdd = new wlcome;

$stdd->usesTraites();
$stdd->useTraite();
?>