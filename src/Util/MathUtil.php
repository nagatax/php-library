<?php

namespace PHPLibrary\Util;

class MathUtil
{
    /**
     * 2つの任意精度の数値を加算する
     * (無限循環小数を考慮)
     *
     * @param string $left_operand 左オペランド
     * @param string $right_operand 右オペランド
     * @param int $scale 小数点以下の桁数
     * @return string 二つの数の和
     */
    public function bcadd($left_operand, $right_operand, $scale = 0): string
    {
        return bcadd($left_operand, $right_operand, $scale);
    }

    /**
     * 2つの任意精度数値の乗算を行う
     * (無限循環小数を考慮)
     *
     * @param string $left_operand 左オペランド
     * @param string $right_operand 右オペランド
     * @param int $scale 小数点以下の桁数
     * @return string 二つの数の積
     */
    public function bcmul($left_operand, $right_operand, $scale = 0): string
    {
        return bcmul($left_operand, $right_operand, $scale);
    }

    /**
     * 階乗の計算
     *
     * @param int $num 自然数
     * @return int 1からnの総積
     */
    public function factorial(int $num): int
    {
        if ($num !== 0) {
            return $num * $this->factorial($num - 1);
        }
        return 1;
    }
}