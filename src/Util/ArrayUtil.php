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

    /**
     * 2つの配列を比較する
     *
     * @param array $arr1 左オペランド
     * @param array $arr2 右オペランド
     * @param bool $isStrict 厳密に比較するかどうか
     * @return bool 比較結果
     */
    public function isEqualArray(array $arr1, array $arr2, bool $isStrict = false): bool
    {
        if ($isStrict && $arr1 === $arr2) {
            return true;
        } else {
            if (!$isStrict && $arr1 == $arr2) {
                return true;
            } else {
                return false;
            }
        }
    }
}
