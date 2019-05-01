<?php

namespace PHPLibrary\Util;

class DateUtil
{
    /**
     * 閏年かどうか判定する
     *
     * @param \DateTime $dt 日付
     * @return int 閏年かどうか(1:閏年/0:閏年でない)
     */
    public function isBissextile(\DateTime $dt): int
    {
        return $dt->format('L');
    }

    /**
     * 月の日数を取得する
     *
     * @param \DateTime $dt 日付
     * @return int 月の日数
     */
    public function getDaysOfTheMonth(\DateTime $dt): int
    {
        return $dt->format('t');
    }
}
