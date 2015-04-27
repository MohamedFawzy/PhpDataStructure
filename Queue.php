<?php

/**
 * Class Queue
 */
class Queue extends SplQueue{

    protected $_limit;
    protected $_queue;

    public function __construct($limit=10){
        $this->_queue = array();
        $this->_limit=$limit;
    }

    public function enqueue($item){
        if(count($this->_queue) < $this->_limit){
            array_unshift($this->_queue,$item);
        }else{
            throw new RuntimeException("Stack is full");
        }
    }

    public function dequeue(){
        if($this->_isEmpty()){
            throw new RuntimeException("Queue is empty");
        }else{
            return array_pop($this->_queue);
        }
    }

    private function _isEmpty(){
        return empty($this->_queue);
    }
}

$queue = new Queue();


// add some items to the queue
$queue->enqueue('A Game of Thrones');
$queue->enqueue('A Clash of Kings');
$queue->enqueue('A Storm of Swords');

echo $queue->dequeue();