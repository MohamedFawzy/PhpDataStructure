<?php

class Heap extends SplHeap{

    /**
     * (PHP 5 &gt;= 5.3.0)<br/>
     * Compare elements in order to place them correctly in the heap while sifting up.
     * @link http://php.net/manual/en/splheap.compare.php
     * @param mixed $value1 <p>
     * The value of the first node being compared.
     * </p>
     * @param mixed $value2 <p>
     * The value of the second node being compared.
     * </p>
     * @return int Result of the comparison, positive integer if <i>value1</i> is greater than <i>value2</i>, 0 if they are equal, negative integer otherwise.
     * </p>
     * <p>
     * Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.
     */
    protected function compare($value1, $value2)
    {
        return (int) $value1-$value2;
    }
}


$heap = new Heap();
$heap->insert(19);
$heap->insert(36);
$heap->insert(54);
$heap->insert(100);
$heap->insert(17);
$heap->insert(3);
$heap->insert(25);
$heap->insert(1);
$heap->insert(67);
$heap->insert(2);
$heap->insert(7);
while(!$heap->isEmpty()){
    echo $heap->extract()."\n";
}