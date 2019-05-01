<?php

namespace PHPLibrary\Http;

class Redirect
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        ;
    }

    /**
     * 301(Moved Permanently)でリダイレクトする
     * (クローラがリダイレクト先のアドレスを新しいリソースと認識して記録する)
     *
     * @param string $url URL
     * @param bool $rep 同名のヘッダがある場合に置き換えるか
     */
    public function redirectMovedPermanently(string $url, $rep = true): void
    {
        header('Location: ' . $url, $rep, HTTP_REDIRECT_PERM);
    }

    /**
     * 302(Found/Moved Temporarily)でリダイレクトする
     * (クローラがリダイレクト先のアドレスを記録しない)
     *
     * @param string $url URL
     * @param bool $rep 同名のヘッダがある場合に置き換えるか
     */
    public function redirectMovedTemporarily(string $url, $rep = true): void
    {
        header('Location: ' . $url, $rep, HTTP_REDIRECT_FOUND);
    }

    /**
     * 303(See Other)でリダイレクトする
     *
     * @param string $url URL
     * @param bool $rep 同名のヘッダがある場合に置き換えるか
     */
    public function redirectSeeOther(string $url, $rep = true): void
    {
        header('Location: ' . $url, $rep, HTTP_REDIRECT_POST);
    }
}
