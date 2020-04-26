## 一、哈希
### 1. 哈希（hash table）的特性
哈希表又称作散列表，是根据关键码值(key-value)而直接进行访问的数据结构。它通过把关键码值映射到表中的一个位置来访问记录，以加快查找的速度。这个映射函数叫做散列函数（Hash Function），存放记录的数组叫做哈希表（或散列表）

### 2. 哈希（hash table）的工程实践
- 电话号码簿
- 用户信息表
- 缓存（LRU Cache）
- 键值对存储（Redis）
- 区块链

### 3. 时间复杂度：（一般情况下是O(1)）



## 二、映射(map) - key-value对，key不重复
### 1. 映射的特性
- new HashMap()/TreeMap()
- map.set(key, val)
- map.get(key)
- map.has(key)
- map.size()
- map.clear()


## 三、集合(set) - 不重复元素的集合
### 1. 集合的特性
- new HashSet()/TreeSet()
- set.add(val)
- set.delete(val)
- set.has(val)
PHP接口：
https://www.php.net/manual/en/function.hash.php
https://www.php.net/manual/en/function.hash-update.php

Python接口
https://docs.python.org/zh-cn/3/library/stdtypes.html#set-types-set-frozenset
https://docs.python.org/zh-cn/3/library/stdtypes.html#dict
dict、list类型


切题四件套：1.clarification; 2.possible solution --> optimal (space & time); 3.code; 4.test cases
## 一、树
### 1. 树（tree）的特性
Linked-List 就是特殊的tree；Tree 就是特殊化的 graph


## 二、二叉树
### 1. 二叉树（tree）的特性
```
graph TD
    根节点 --> 左子树
    左子树 --> 左1子树
    左子树 --> 左2子树
    根节点 --> 右子树
    右子树 --> 右1子树
    右子树 --> 右2子树
```


### 2.二叉树遍历
- 前序遍历【Pre-Order】
```
graph LR
根节点-->左子树
左子树-->右子树
```

- 中序遍历【Pre-Order】
```
graph LR
左子树-->根节点
根节点-->右子树
```

- 后续遍历
```
graph LR
左子树-->右子树
右子树-->根节点
```

- 层次遍历：按照二叉树中的层次从左到右依次遍历每层中的结点。具体的实现思路是：通过使用队列的数据结构，从树的根结点开始，依次将其左孩子和右孩子入队。而后每次队列中一个结点出队，都将其左孩子和右孩子入队，直到树中所有结点都出队，出队结点的先后顺序就是层次遍历的最终结果。

## 三、二叉搜索树
### 1. 二叉搜索树
二叉搜索树也叫二叉排序树，有序二叉树、排序二叉树，是指一颗空树或者具有下列性质的二叉树:
    左子树上所有节点的值均小于它的根节点的值；
    右子树上所有节点的值均大于它的根节点的值；
    以此类推，左右子树分别为二叉查找树（这就是重要性）

### 2.二叉搜索树排序：中序遍历

### 3.二叉搜索树时间复杂度
查询、插入、删除    都是O(logn)

## 一、堆
### 1. 堆（heap）的特性
- 可以迅速找到一堆数中的最大值或最小值的数据结构
- 根节点最大的堆叫做大顶堆或大根堆
- 根节点最小的堆叫做小顶堆或小根堆
- 常见的堆：二叉堆、斐波那契堆

假设是最大堆，则常见操作（api）:
find-max: O(1)
delete-max: O(logN)
insert(create): O(1)或O(logN)


## 二、二叉堆
### 1. 二叉堆的特性
- 通过完全二叉树实现
- 二叉堆（大顶）他满足下列性质：
- - 是一颗完全树
- - 树中任意节点的值总是 >= 其子节点的值
