<?php

namespace Cardinals;

class Core{

 function Core(){
   self::init();
   self::instance();
   
}

 $motion = 1;//by default
 public function motion($motion){
  $this->Core()->motion($motion);

}


}
