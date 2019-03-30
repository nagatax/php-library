<?php

namespace PHPLibrary\Util;

class ArrayUtil
{
    /**
     * arr1がarr2に含まれているか、判定する
     *
     * @param array $arr1
     * @param array $arr2
     * @return bool
     */
    public function isArrayContains(array $arr1, array $arr2)
    {
        return array_intersect($arr1, $arr2) ? true : false;
    }
}
