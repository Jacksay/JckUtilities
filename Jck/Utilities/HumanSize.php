<?php
/**
 * Created by PhpStorm.
 * User: jacksay
 * Date: 29/05/14
 * Time: 22:28
 */

namespace Jck\Utilities;


class HumanSize {
    /**
     * @param $size integer Octets
     */
    public static function render( $size ){
        $units = ['Ot', 'Ko', 'Mo', 'Go', 'To'];
        $unit = 0;
        while( $size%1000 > 0 ){
            $size = $size/1000;
            $unit++;
        }
        return intval($size).' '.$units[$unit];
    }
} 