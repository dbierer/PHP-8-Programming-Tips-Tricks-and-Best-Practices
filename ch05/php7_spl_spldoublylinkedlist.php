<?php
// /repo/ch05/php7_spl_spldoublylinkedlist.php

// define SplDoublyLinkedList + a show() method
$double = new class() extends SplDoublyLinkedList
{
    public function show(int $mode)
    {
        $this->setIteratorMode($mode);
        $this->rewind();
        while ($item = $this->current()) {
            echo $item . '. ';
            $this->next();
        }
    }
};

// insert values
$item = ['Person', 'Woman', 'Man', 'Camera', 'TV'];
foreach ($item as $key => $value)
    // this works in PHP 7 as push() returns bool
    if (!$double->push($value))
        throw new Exception('ERROR');

// display results forward
echo "**************** Foward ********************\n";
$forward = SplDoublyLinkedList::IT_MODE_FIFO
         | SplDoublyLinkedList::IT_MODE_KEEP;
$double->show($forward);

// display results in reverse
echo "\n\n**************** Reverse ********************\n";
$reverse = SplDoublyLinkedList::IT_MODE_LIFO
         | SplDoublyLinkedList::IT_MODE_KEEP;
$double->show($reverse);
echo "\n";
