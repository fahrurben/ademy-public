<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 7:08
 */

namespace App\Helper;


use Nayjest\Grids\DbalDataProvider;
use Nayjest\Grids\FieldConfig;
use Nayjest\Grids\FilterConfig;

class GridColumnHelper
{
    public static function generateViewColumn($field, $label, $filterType = null, $is_sorted = true)
    {
        $column = (new FieldConfig())
            ->setName($field)
            ->setLabel($label);
        if (isset($filterType)) {
            $column->addFilter(
                (new FilterConfig())
                    ->setOperator(FilterConfig::OPERATOR_LIKE)
                    ->setFilteringFunc(function ($val, DbalDataProvider $provider) use($field) {
                        $provider->getBuilder()->where($field.' = ?')->setParameter(0, $val);
                    })
            );
        }
        if ($is_sorted) {
            $column->setSortable(true);
        }

        return $column;
    }
}