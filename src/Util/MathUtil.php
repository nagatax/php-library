<?php

namespace PHPLibrary\Util;

class MathUtil
{
    /**
     * 無限循環小数を考慮して、加算計算を行う
     *
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale
     * @return string
     */
    public function bcadd($left_operand, $right_operand, $scale = 0)
    {
        return bcadd($left_operand, $right_operand, $scale);
    }

    /**
     * 無限循環小数を考慮して、乗算計算を行う
     *
     * @param string $left_operand
     * @param string $right_operand
     * @param int $scale
     * @return string
     */
    public function bcmul($left_operand, $right_operand, $scale = 0)
    {
        return bcmul($left_operand, $right_operand, $scale);
    }

    /**
     * 階乗の計算
     *
     * @param int $num 求める階乗
     * @return int
     */
    public function factorial(int $num): int
    {
        if ($num !== 0) {
            return $num * $this->factorial($num - 1);
        }
        return 1;
    }
}