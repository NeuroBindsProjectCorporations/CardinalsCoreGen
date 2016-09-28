<?php

namespace Cardinals;

class Core{

 const NETWORK_TRANSFER = 12;//Packet
 const PACKET_FAIL = 6;
 const TRANSFER_FAIL = NETWORK_TRANSFER < PACKET_FAIL;

 function Core(){
   self::init();
   self::instance();
   
}

 $motion = 1;//by default
 public function motion($motion){
  $this->Core()->motion($motion);

}


}
