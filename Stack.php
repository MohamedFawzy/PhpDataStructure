<?php
error_reporting(E_ALL);
/**
 * Class Stack
 * @author Mohamed fawzy
 */
class Stack extends SplStack{

    protected $_limit;
    protected $_stack;

    public function __construct($limit=10){
        $this->_stack = array();
        $this->_limit = $limit;
    }

    public function push($item){
        if(count($this->_stack) < $this->_limit){
            array_unshift($this->_stack,$item);
        }else{
            throw new RuntimeException("Stack is full");
        }
    }

    public function pop(){
        if($this->_isEmpty()){
            throw new RuntimeException("Stack is empty");
        }else{
            return array_shift($this->_stack);
        }
    }

    public function top(){
        return current($this->_stack);
    }

    private function _isEmpty(){
        return empty($this->_stack);
    }
}

$stack = new Stack();
$stack->push('Hello');
$stack->push(1);
$stack->push('Hello Worqweld');
$stack->push('Hello Worsdfld');
$stack->push('Hello Worlxcvd');
$stack->push('Hello Worldasd');
$stack->push('Hello Worldasdasd');
$stack->push('Hello World23');
$stack->push('Hello World1');
echo $stack->pop()."\n";
echo $stack->pop()."\n";
echo $stack->top()."\n";
