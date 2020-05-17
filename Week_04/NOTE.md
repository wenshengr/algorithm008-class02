## 一、二分查找
### 1. 二分查找的前提 (在有序的里面进行查找)
- 目标函数单调性（单调递增或单调递减）

- 存在上下界（bounded）

- 能够通过索引下标进行访问（index accessible）

### 2. 二分法思想
二分法查找针对的是一个有序的数据集合,每次通过与区间的中间元素对比,将待查找的区间缩小为之前的一半,直到找到要查找的元素,或者区间被缩小为0

二分查找非常高效,假设数据大小是n,每次查找后数据都会缩小为原来的一半,也就是会除以2,最坏情况下,直到查找区间被缩小为空,才停止

当n/2k = 1时,k是总共缩小的次数,而每一次缩小操作只涉及两个数据的大小比较,经过K次区间缩小的操作,时间复杂度就是O(k),n/2k = 1得到k=log2 n,故时间复杂度就是O(logn)

### 3. 二分查找的递归与非递归实现
#### 最简单的二分查找实现(有序数据集合中不存在重复的数据)
```
public static int binarySearch(int[]A,int value) {
        int low = 0;
        int len = A.length;
        int high = len -1;
​
        while(low <= high) {
            int mid = (low + high)>>1;
            if(A[mid] == value)
                return mid;
            else if (A[mid] < value)
                low = mid +1;
            else
                high = mid -1;
        }
        return -1;
    }

二分查找易错的地方：

1. 循环退出的条件

注意是low <= high,而不是low<high.

2. mid的取值

如果写成 mid (low+high)/2是有问题,如果low和high比较大,两者的和可能会溢出改进的方案low+(high-low)/2,但是计算机位运算比除法快,故可改成low+((high-low)>>1)

```

#### 二分法的递归实现
```
    /**
     * 二分法搜索的递归实现
     */
    public static int bsearch(int[] a,int n,int val) {
        return bsearchInternally(a,0,n-1,val);
    }
​
    private static int bsearchInternally(int[] a,int low,int high,int value) {
        if(low >high) 
            return -1;
        int mid = low +((high - low)>> 1);
        if(a[mid] == value) {
            return mid;
        }else if(a[mid] < value) 
            return bsearchInternally(a,mid+1,high,value);
        else {
            return bsearchInternally(a,low,mid-1,value);
        }
    }

```
#### 二分法查找应用场景
- 二分查找依赖顺序表结构
     
- 二分查找不能依赖如链表的的其他结构,主要原因是二分查找算法需要按照下标随机访问元素,链表随机访问的时间复杂度是O(n),使用链表存储,二分查找的时间复杂度就会变得很高
     
- 二分查找针对的有序数组
     
- 二分查找对数据要求必须是有序的,如果数据没有序,则需要先排序
     
- 数据量太小或数据量太大也不适合二分查找
