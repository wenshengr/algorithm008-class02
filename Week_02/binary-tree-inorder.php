<?php
/**
 * @filename binary-tree-inorder.php
 * @desc this is file description
 * @date 2020/4/24 23:00
 * @author: wsr
 */
//给定一个二叉树，返回它的中序 遍历。
//
//示例:
//
//输入: [1,null,2,3]
//   1
//    \
//    2
//    /
//    3
//
//输出: [1,3,2]
//进阶: 递归算法很简单，你可以通过迭代算法完成吗？

class Solution{
    public $result = [];

    /**
     * 递归遍历
     * @param $root
     * @return array
     */
    public function inorderTraversal($root)
    {
        if ($root) {
            $this->inorderTraversal($root->left);
            array_push($this->result, $root->val);
            $this->inorderTraversal($root->right);
        }
        return $this->result;
    }
}

class Node{
    public $value;
    public $left;
    public $right;
}


//中序遍历，左子树---> 根节点 ---> 右子树
function inorder($root)
{
    $stack = array();
    $center_node = $root;
    while (!empty($stack) || $center_node != null) {
       while ($center_node != null) {
           array_push($stack, $center_node);
           $center_node = $center_node->left;
       }

       $center_node = array_pop($stack);
       echo $center_node->value . " ";

       $center_node = $center_node->right;
   }
}

$a=new Node();
$b=new Node();
$c=new Node();
$d=new Node();
$e=new Node();
$f=new Node();
$a->value='A';
$b->value='B';
$c->value='C';
$d->value='D';
$e->value='E';
$f->value='F';
$a->left=$b;
$a->right=$c;
$b->left=$d;
$c->left=$e;
$c->right=$f;
inorder($a);//D B A E C F
