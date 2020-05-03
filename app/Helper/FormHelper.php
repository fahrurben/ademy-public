<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 15:53
 */

namespace App\Helper;


class FormHelper
{
    public static function arrayObjToOptionArray($arrObject, $default_option, $field = 'nama')
    {
        $arrOption = [];
        $arrOption[''] = $default_option;

        $field = ucwords($field);
        foreach ($arrObject as $item) {
            $arrOption[$item->getId()] = $item->{"get$field"}();
        }

        return $arrOption;
    }
}