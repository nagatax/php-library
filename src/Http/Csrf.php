<?php

namespace PHPLibrary\Http;

require_once __DIR__ . "/../bootstrap.php";

class Csrf
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        ;
    }

    /**
     * ユニークなトークンを取得する
     *
     * @return string トークン
     */
    public function getToken(): string
    {
        return sha1(uniqid(mt_rand(), true));
    }
}
