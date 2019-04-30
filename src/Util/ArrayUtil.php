<?php

namespace PHPLibrary\Util;

class ArrayUtil
{
    /**
     * arr1がarr2に含まれているか、判定する
     *
     * @param array $arr1 左オペランド
     * @param array $arr2 右オペランド
     * @return bool 比較結果
     */
    public function isArrayContains(array $arr1, array $arr2): bool
    {
        return array_intersect($arr1, $arr2) ? true : false;
    }
}
