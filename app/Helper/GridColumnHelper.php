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
use Nayjest\Grids\Components\ColumnHeadersRow;
use Nayjest\Grids\Components\FiltersRow;
use Nayjest\Grids\Components\HtmlTag;
use Nayjest\Grids\Components\OneCellRow;
use Nayjest\Grids\Components\RecordsPerPage;
use Nayjest\Grids\Components\THead;

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

    public static function generateFilterSortingHeader($gridConfig)
    {
        $gridConfig->setComponents([
            (new THead())
                ->setComponents([
                    (new ColumnHeadersRow),
                    (new FiltersRow),
                    (new OneCellRow)
                        ->setComponents([
                            (new RecordsPerPage())
                                ->setVariants([
                                    50,
                                    100,
                                    1000
                                ])
                            ,
                            (new HtmlTag)
                                ->setTagName('button')
                                ->setAttributes([
                                    'type' => 'submit',
                                    'class' => 'btn btn-primary'
                                ])
                                ->setContent('Filter')
                        ])
                        ->setRenderSection(THead::SECTION_AFTER)
                    ,
                ])
        ]);
    }

    public static function generateNumberingViewColumn()
    {
        return (new FieldConfig())
            ->setName('id')
            ->setLabel('#');
    }
}