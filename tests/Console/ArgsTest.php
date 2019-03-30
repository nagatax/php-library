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
     * @expectedException \Exception
     */
    public function testGetArgs()
    {
        $this->sut->getArgs();
    }
}
