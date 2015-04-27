<?php

/**
 * Class BinaryNode
 * @author Mohamed Fawzy
 */
class BinaryNode
{

    public $value; // contains the node item
    public $left; // contains the left child BinaryNode
    public $right; // contains the right child BinaryNode

    public function __construct($item){
        $this->value = $item;
        $this->left=null;
        $this->right=null;
    }

}

class BinaryTree
{
    protected $_root; // the root of node tree

    public function __construct(){
        $this->_root = null;
    }

    public function isEmpty(){
        return $this->_root === null;
    }

    public function insert($item){
        $node = new BinaryNode($item);
        if($this->isEmpty()){
            $this->_root = $node;
        }else{
            $this->insertNode($node,$this->_root);
        }
    }

    public function insertNode(BinaryNode $node,BinaryNode &$subTree){
        if($subTree===null){
            // insert new node here if subtree is empty
            $subTree = $node;
        }else{
            if($node->value > $subTree->value){
                // insert to right child in case new value greater than current one
                $this->insertNode($node,$subTree->right);
            }else if($node->value < $subTree->value){
                // insert to left child in case new value less than current one
                $this->insertNode($node,$subTree->left);
            }else{

            }
        }
    }
}