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
}
