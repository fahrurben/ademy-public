<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 06/05/20
 * Time: 5:30
 */

namespace Domain\Institusi\DTOs;


class BaseDTO
{
    public function setAttributesFromRequestArray($array)
    {
        $refl = new \ReflectionClass($this);

        foreach ($array as $propertyToSet => $value) {

            // If property not exist, ignore it
            if (!$refl->hasProperty($propertyToSet)) continue;

            $property = $refl->getProperty($propertyToSet);

            if ($property instanceof \ReflectionProperty) {
                $property->setValue($this, $value);
            }
        }
    }
}