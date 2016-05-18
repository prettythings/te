<?php
require "QueueAbstractClass.php";
class RedisQueue extends QueueAbstractClass {

  public $q_name;           //队列名称
  public $queue;

  public function __construct ($q_name)
  {
     $this->q_name = $q_name;  
     $this->_connect();                           //获取链接对象

  }


  //入列
  public function push ($item)
  {
       return $this->redis->lpush($this->q_name,$item);
  }

   //出列
  public function pop ()
  {
      return  $this->redis->rpop($this->q_name );
  }

  
   public function _connect ()
   {
   	 $this->redis = new Redis();
   	 $this->redis->connect('127.0.0.1','6379');
    }


    public function count ()
    {
    	return $this->redis->llen($this->q_name);
    }


    public function listItem ($start,$end)
    {
    	return $this->redis->lrange($this->q_name,$start,$end);
    }

}


$redis = new RedisQueue('demo');

//$res = $redis->pop();

//$res = $redis->count();

//$res = $redis->push('c#');

$res = $redis->listItem(0,5);


var_dump($res);

?>