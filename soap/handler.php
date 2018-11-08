<?php

class Handler{


	/**
	 * @param string $msg
	 * @return string
	*/
	public function say($msg){
    
        $return = "Hello ".$msg;
		return $return;
	}


}