<?php
/**
 * User: Beyond_dream
 * Date: 2016/8/27
 * Time: 9:27
 */

$arr=array(100,43,54,62,21,66,32,78,36,76,39);

print_r(bubbleSort($arr));
print_r(selectSort($arr));
print_r(insertSort($arr));
print_r(quickSort($arr));

//冒泡 1到n-1次, 每次两两比较，大就交换
function bubbleSort($arr, $sort = 'ASC')
{
    $len = count($arr);

    for ($i = 1; $i < $len; $i++) {

        for ($j = 0; $j < $len - $i; $j++) {

            if ('ASC' == $sort) {

                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }

            } else {

                if ($arr[$j] < $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }

            }
        }
    }
    return $arr;
}


function selectSort($arr)
{
    $len = count($arr);

    for ($i = 0; $i < $len; $i++) {
        $p = $i;

        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$p] > $arr[$j]) {
                $p = $j;
            }
        }

        if ($p != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$p];
            $arr[$p] = $tmp;
        }
    }

    return $arr;
}

function insertSort($arr)
{
    $count = count($arr);

    for ($i = 1; $i < $count; $i++) {
        $tmp = $arr[$i];

        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$j] > $arr[$j + 1]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                break;
            }
        }
    }

    return $arr;
}


function quickSort($arr)
{
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }

    $base = $arr[0];
    $leftArr = [];
    $rightArr = [];

    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] < $base) {
            $leftArr[] = $arr[$i];
        } else {
            $rightArr[] = $arr[$i];
        }
    }

    $leftArr = quickSort($leftArr);
    $rightArr = quickSort($rightArr);

    return array_merge($leftArr, array($base), $rightArr);
}

