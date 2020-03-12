<?php

/**
 * 2020-03-12
 * 测试composer包开发
 */

namespace numberFormat;


class NumberFormat
{
    /**
     * @param $num 需要格式的数字
     * @param $precision 数字的精度
     */
    public static function byte_format($num = 0,$precision = 1){
        switch ($num){
            case $num>1000000000000:
                $num = round($num / 1099511627776, $precision);
                $unit = 'TB';
            break;
            case $num >= 1000000000:
                $num = round($num / 1073741824, $precision);
                $unit = 'GB';
            break;
            case $num >= 1000000:
                $num = round($num / 1048576, $precision);
                $unit = 'MB';
            break;
            case $num >= 1000:
                $num = round($num / 1024, $precision);
                $unit = 'KB';
            break;
            default:
                $num =  number_format($num,$precision);
                $unit = 'Bytes';
        }
        return number_format($num, $precision).' '.$unit;

    }
}