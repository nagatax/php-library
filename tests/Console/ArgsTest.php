<?php

namespace PHPLibrary\Console;

use \PHPUnit\Framework\TestCase;

class ArgsTest extends TestCase
{
    /** @var \PHPLibrary\Console\Args */
    private $sut;

    /**
     * 初期設定
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->sut = new Args();
    }

    /**
     * 引数なしのチェック
     *
     * @return void
     * @throws \Exception
     */
    public function testGetArgs(): void
    {
        // 検知する例外を定義する
        $this->expectException("Exception");

        // テストコードを実行する
        $this->sut->getArgs();
    }
}
