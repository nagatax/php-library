<?php

namespace PHPLibrary\Console;

require_once __DIR__ . "/../bootstrap.php";

class Args
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        ;
    }

    /**
     * コマンドライン引数の取得
     *
     * コマンドライン引数を取得する。
     *
     * @param string $opt オプション
     * @return array
     * @throws \Exception
     */
    public function getArgs(): array
    {
        global $argv;
        global $argc;

        if (isset($argc) && $argc <= 1) {
            throw (new \Exception('コマンドライン引数が未設定です'));
        }

        return $argv;
    }
}
