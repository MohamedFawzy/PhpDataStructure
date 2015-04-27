<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Fawzy
 * Date: 4/27/2015
 * Time: 4:52 PM
 */

class PriorityQueue extends SplPriorityQueue{

    public function compare($p1, $p2) {
        if ($p1 === $p2) return 0;
        // in ascending order of priority, a lower value
        // means higher priority
        return ($p1 < $p2) ? 1 : -1;
    }
}

$pq = new PriorityQueue();
$pq->insert('A', 4);
$pq->insert('B', 3);
$pq->insert('C', 5);
$pq->insert('D', 8);
$pq->insert('E', 2);
$pq->insert('F', 7);
$pq->insert('G', 1);
$pq->insert('H', 6);
$pq->insert('I', 0);

while ($pq->valid()) {
    print_r($pq->current());
    echo "\n";
    $pq->next();
}