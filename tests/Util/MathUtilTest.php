<?php

namespace PHPLibrary\Util;

use \PHPUnit\Framework\TestCase;

class MathUtilTest extends TestCase
{
    /** @var \PHPLibrary\Util\MathUtil */
    private $sut;

    /**
     * 初期設定
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->sut = new MathUtil();
    }

    /**
     * bcaddのテスト
     *
     * 任意精度数学関数(加算)を利用し、計算結果が0.8になること
     */
    public function test_bcadd_加算結果が正しく取得できること(): void
    {
        $expected = 0.8;
        $actual = 0.1 + 0.7;

        $this->assertEqualsWithDelta($expected, $actual, 0.1);

        $expected = 0.8;
        $actual = $this->sut->bcadd(0.1, 0.7, 1);

        $this->assertEquals($expected, $actual);
    }

    /**
     * bcmulのテスト
     *
     * 任意精度数学関数(乗算)を利用し、計算結果が0.8になること
     */
    public function test_bcmul_乗算結果が正しく取得できること(): void
    {
        $expected = 8;
        $actual = $this->sut->bcmul(0.8, 10, 1);
        $this->assertEquals($expected, $actual);
    }

    /**
     * bccompのテスト
     *
     * 比較結果が取得できること
     */
    public function test_bccomp_比較結果が正しく取得できること(): void
    {
        // 左オペランド = 右オペランドの場合
        $expected = 0;
        $actual = $this->sut->bccomp(0.7, 0.7, 1);
        $this->assertEquals($expected, $actual);

        // 左オペランド > 右オペランドの場合
        $expected = 1;
        $actual = $this->sut->bccomp(0.8, 0.7, 1);
        $this->assertEquals($expected, $actual);

        // 左オペランド < 右オペランドの場合
        $expected = -1;
        $actual = $this->sut->bccomp(0.7, 0.8, 1);
        $this->assertEquals($expected, $actual);
    }

    /**
     * 階乗の計算結果が正しいこと
     */
    public function test_factorial_計算結果が120になること(): void
    {
        $expected = 120;
        $actual = $this->sut->factorial(5);
        $this->assertEquals($expected, $actual);
    }
}
