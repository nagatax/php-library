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
     * getArgsのテスト
     *
     * コマンドライン引数が取得できること。
     *
     * テスト時にグローバル変数を設定するため
     * backupGlobalsアノテーションを有効にし
     * テスト終了後にグローバル変数を復元する。
     *
     * @return void
     * @throws \Exception
     * @backupGlobals enabled
     */
    public function testGetArgs_コマンドライン引数が取得できること(): void
    {
        $GLOBALS['argv'] = array('testCommand', '--testArg1', '-tA2');
        $GLOBALS['argc'] = count($GLOBALS['argv']);

        // テストコードを実行する
        $this->assertIsArray($this->sut->getArgs());
    }

    /**
     * getArgsのテスト
     *
     * 例外が発生すること。
     *
     * テスト時にグローバル変数を設定するため
     * backupGlobalsアノテーションを有効にし
     * テスト終了後にグローバル変数を復元する。
     *
     * @return void
     * @throws \Exception
     * @backupGlobals enabled
     */
    public function testGetArgs_例外が発生すること(): void
    {
        // 検知する例外を定義する
        $this->expectException("Exception");

        $GLOBALS['argv'] = array();
        $GLOBALS['argc'] = count($GLOBALS['argv']);

        // テストコードを実行する
        $this->assertIsArray($this->sut->getArgs());
    }
}
