<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 14:56
 */

namespace Domain\Institusi\Repositories;

use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\EntityRepository;

class ProdiRepository extends EntityRepository
{
    public function getProdiGridQuery()
    {
        $query = $this->getEntityManager()->getConnection()->createQueryBuilder();
        $query->select('id', 'nama', 'kode', 'fakultas_id')
            ->from('prodi')
            ->andWhere('prodi.deleted_at is NULL')
            ->orderBy('nama');

        return $query;
    }
}