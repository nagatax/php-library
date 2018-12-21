<?php
/**
 * Created by PhpStorm.
 * User: nagata
 * Date: 2018/12/20
 * Time: 17:31
 */

namespace console;

use \PHPUnit\Framework\TestCase;

class ArgsTest extends TestCase
{
    /** @var Args */
    private $sut;

    /**
     * 初期設定
     *
     * @return void
     */
    public function setUp()
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
