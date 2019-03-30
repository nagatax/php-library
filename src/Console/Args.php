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
     * @param string $opt
     * @return string|false
     * @throws \Exception
     */
    public function getArgs(string $opt = null) : string
    {
        if (empty($argv)) {
            throw (new \Exception('コマンドライン引数が未設定です'));
        }

        return json_encode($argv);
    }
}
