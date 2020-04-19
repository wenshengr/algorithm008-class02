<?php
/**
 * @filename MyCircularDeque.php
 * @desc 设计一个双端队列
 * @date 2020/4/18 20:06
 * @author: wsr
 */

class MyCircularDeque {

    /**
     * 队列
     * @var array
     */
    protected $queue = [];

    /**
     * 容量
     * @var int
     */
    protected $capacity = 0;

    /**
     * 队首
     * @var null
     */
    protected $head = 0;

    /**
     * 队尾
     * @var null
     */
    protected $tail = 0;


    /**
     * Initialize your data structure here. Set the size of the deque to be k.
     * @param Integer $k
     */
    function __construct($k) {
        $this->capacity = $k + 1;
    }

    /**
     * Adds an item at the front of Deque. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function insertFront($value) {
        if ($this->isFull()) {
            return false;
        }

        if ($this->isEmpty()) {
           $this->queue[$this->head] = $value;
        } else {
            $this->head = ($this->capacity + $this->head -1) % $this->capacity;
            $this->queue[$this->head] = $value;
        }
        return true;
    }

    /**
     * Adds an item at the rear of Deque. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function insertLast($value) {
        if ($this->isFull()) {
            return false;
        }

        $this->queue[$this->tail] = $value;
        $this->tail = ($this->tail + 1) % $this->capacity;
        return true;
    }

    /**
     * Deletes an item from the front of Deque. Return true if the operation is successful.
     * @return Boolean
     */
    function deleteFront() {
        if ($this->isEmpty()) {
            return false;
        }
        $this->head = ($this->head + 1) % $this->capacity;
        return true;
    }

    /**
     * Deletes an item from the rear of Deque. Return true if the operation is successful.
     * @return Boolean
     */
    function deleteLast() {
        if ($this->isEmpty()) {
            return false;
        }

        $this->head = ($this->tail - 1 + $this->capacity) % $this->capacity;
        return true;
    }

    /**
     * Get the front item from the deque.
     * @return Integer
     */
    function getFront() {
        if ($this->isEmpty()) {
            return false;
        }
        return $this->queue[$this->head];
    }

    /**
     * Get the last item from the deque.
     * @return Integer
     */
    function getRear() {
        if ($this->isEmpty()) {
            return false;
        }

        return $this->queue[$this->tail];
    }

    /**
     * Checks whether the circular deque is empty or not.
     * @return Boolean
     */
    function isEmpty() {
        return count($this->queue) == 0;
    }

    /**
     * Checks whether the circular deque is full or not.
     * @return Boolean
     */
    public function isFull() {
        return $this->capacity == count($this->queue);
    }
}

/**
 * Your MyCircularDeque object will be instantiated and called as such:
 * $obj = MyCircularDeque($k);
 * $ret_1 = $obj->insertFront($value);
 * $ret_2 = $obj->insertLast($value);
 * $ret_3 = $obj->deleteFront();
 * $ret_4 = $obj->deleteLast();
 * $ret_5 = $obj->getFront();
 * $ret_6 = $obj->getRear();
 * $ret_7 = $obj->isEmpty();
 * $ret_8 = $obj->isFull();
 */

$obj = new MyCircularDeque(10);
$ret_1 = $obj->insertFront('k4');
$ret_11 = $obj->insertFront('k5');
$ret_2 = $obj->insertLast('tail_001');
$ret_3 = $obj->deleteFront();
$ret_4 = $obj->deleteLast();
$ret_5 = $obj->getFront();
$ret_6 = $obj->getRear();
$ret_7 = $obj->isEmpty();
$ret_8 = $obj->isFull();
var_dump($ret_1);
var_dump($ret_2);
var_dump($ret_3);
var_dump($ret_4);
var_dump($ret_5);
var_dump($ret_6);
var_dump($ret_7);
var_dump($ret_8);