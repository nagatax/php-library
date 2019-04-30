<?php

namespace PHPLibrary\Util;

use \PHPUnit\Framework\TestCase;

class DateUtilTest extends TestCase
{
    /** @var \PHPLibrary\Util\DateUtil */
    private $sut;

    /**
     * 初期設定
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->sut = new DateUtil();
    }

    /**
     * isBissextileのテスト
     */
    public function test_isBissextile_閏年であること(): void
    {
        $expected = 1;
        $actual = $this->sut->isBissextile(new \DateTime('2016/1/1 0:0:0'));
        $this->assertEquals($expected, $actual);
    }

    /**
     * isBissextileのテスト
     */
    public function test_isBissextile_閏年でないこと(): void
    {
        $expected = 0;
        $actual = $this->sut->isBissextile(new \DateTime('2015/1/1 0:0:0'));
        $this->assertEquals($expected, $actual);
    }

    /**
     * getDaysOfTheMonthのテスト
     */
    public function test_getDaysOfTheMonth_月の日数が29であること(): void
    {
        $expected = 29;
        $actual = $this->sut->getDaysOfTheMonth(new \DateTime('2016/2/1 0:0:0'));

        $this->assertEquals($expected, $actual);
    }

    /**
     * getDaysOfTheMonthのテスト
     */
    public function test_getDaysOfTheMonth_月の日数が31であること(): void
    {
        $expected = 31;
        $actual = $this->sut->getDaysOfTheMonth(new \DateTime('2016/5/1 0:0:0'));

        $this->assertEquals($expected, $actual);
    }

    /**
     * getDaysOfTheMonthのテスト
     */
    public function test_getDaysOfTheMonth_月の日数が一致しないこと(): void
    {
        $expected = 29;
        $actual = $this->sut->getDaysOfTheMonth(new \DateTime('2015/2/1 0:0:0'));

        $this->assertNotEquals($expected, $actual);
    }
}
