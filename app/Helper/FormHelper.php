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
    public static function arrayObjToOptionArray($arrObject, $default_option = null, $field = 'nama', \Closure $customReturn = null)
    {
        $arrOption = [];

        if (isset($default_option)) {
            $arrOption[''] = $default_option;
        }

        $fieldCapitalize = ucwords($field);
        foreach ($arrObject as $item) {
            if (isset($field)) {
                $arrOption[$item->getId()] = $item->{"get$fieldCapitalize"}();
            } else {
                $arrOption[$item->getId()] = $customReturn($item);
            }
        }

        return $arrOption;
    }
}