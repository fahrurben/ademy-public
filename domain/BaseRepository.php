<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 05/05/20
 * Time: 6:57
 */

namespace Domain;


interface BaseRepository
{
    public function find($id);

    public function findAll();

    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

    public function findOneBy(array $criteria, array $orderBy = null);

    public function count(array $criteria);

}