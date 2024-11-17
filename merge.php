<?php
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $middle = (int)(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $left_index = $right_index= 0;

    while ($left_index < count($left) && $right_index < count($right)) {
        if ($left[$left_index] <= $right[$right_index]) {
            $result[] = $left[$left_index];
            $left_index++;
        } else {
            $result[] = $right[$right_index];
            $right_index++;
        }
    }

    return array_merge($result, array_slice($left, $left_index), array_slice($right, $right_index));
}

$arr = [38, 27, 43, 10, 12, 11, 13, 5, 6, 7];
echo "Sorted array: ";
print_r(mergeSort($arr));
?>
