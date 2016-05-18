<?php

class QueueFactor {
	
  protected $queueName;
  protected $queueDrive;

  public function __construct($queueDrive,$queueName)
  {
     $this->queueName = $queueName; 
	 $this->queueDrive = $queueDrive;
  }



  public function getQueue ()
  {
  	if(!empty($this->queueDrive)){
         $class =  $this->queueDrive."Queue";
         require $class.".php";
         $memcacheQueue = new $class($this->queueName);
         return $memcacheQueue;
  	}

  }












}













?>