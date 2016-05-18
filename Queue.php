<?php
require "QueueFactor.php";
class Queue {
	
	//protected $QueueFactor;
	protected $queueDrive;       //队列驱动
	protected $queue;           
	protected $queueName;        //队列名称

    public function __construct ($queueDrive,$queueName )
    {
       $this->queueDrive = $queueDrive;
       $this->queueName = $queueName; 
	  // $this->QueueFactor = $QueueFactor;
       $this->queue = $this->getQueue();
    }

    public function pop ()
    {
       return $this->queue ->pop();
    }

    public function push ($item)
    {
       return  $this->queue ->push($item);
    }


    public function getQueue ()
    {
	   $QueueFactor = new QueueFactor($this->queueDrive,$this->queueName);
       return $QueueFactor->getQueue();
    }


















}














?>