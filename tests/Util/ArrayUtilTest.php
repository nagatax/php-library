<?php

namespace PHPLibrary\Util;

use \PHPUnit\Framework\TestCase;

class ArrayUtilTest extends TestCase
{
    /** @var \PHPLibrary\Util\ArrayUtil */
    private $sut;

    /**
     * 初期設定
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->sut = new ArrayUtil();
    }

    /**
     * isArrayContainsのテスト
     *
     * 配列1(arr1)に配列2(arr2)が含まれること
     */
    public function test_isArrayContains_配列1に配列2が含まれること(): void
    {
        $arr1 = [1, 2, 3, 4, 5];    // 配列1
        $arr2 = [3, 4];             // 配列2

        $this->assertTrue($this->sut->isArrayContains($arr1, $arr2));
    }

    /**
     * isArrayContainsのテスト
     *
     * 配列1(arr1)に配列2(arr2)が含まれないこと
     */
    public function test_isArrayContains_配列1に配列2が含まれないこと(): void
    {
        $arr1 = [1, 2, 3, 4, 5];    // 配列1
        $arr2 = [10, 11];           // 配列2

        $this->assertFalse($this->sut->isArrayContains($arr1, $arr2));
    }

    /**
     * isEqualArrayのテスト
     */
    public function test_isEqualArray_配列の比較結果が取得できること(): void
    {
        // 配列が完全一致すること
        $arr1 = [1, 2, 3];
        $arr2 = [1, 2, 3];

        $actual = $this->sut->isEqualArray($arr1, $arr2, true);
        $this->assertTrue($actual);

        $arr1 = [1, 2, 3];
        $arr2 = [1, 2, '3'];

        $actual = $this->sut->isEqualArray($arr1, $arr2, true);
        $this->assertFalse($actual);

        $arr1 = [1, 2, 3];
        $arr2 = [1, 2, '3'];

        $actual = $this->sut->isEqualArray($arr1, $arr2);
        $this->assertTrue($actual);

        $arr1 = [1, 2, 3];
        $arr2 = [1, 2];

        $actual = $this->sut->isEqualArray($arr1, $arr2);
        $this->assertFalse($actual);
    }
}
