<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 14/05/20
 * Time: 8:28
 */

namespace App\Helper;


use Nayjest\Grids\DataRowInterface;
use Nayjest\Grids\FieldConfig;

class NumberFieldConfig extends FieldConfig
{

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('ID', '#');
    }

    /**
     * Returns row id (row number).
     *
     * @param DataRowInterface $row
     * @return int
     */
    public function getValue(DataRowInterface $row)
    {
        return $row->getId();
    }
}
