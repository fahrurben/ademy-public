<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 02/05/20
 * Time: 13:06
 */

namespace Domain\Institusi\Repositories;


use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\EntityRepository;

class FakultasRepository extends EntityRepository
{
    public function getFakultasGridQuery($organizationId)
    {
        $query = $this->getEntityManager()->getConnection()->createQueryBuilder();
        $query->select('id', 'nama', 'kode', 'organization_id')
            ->from('fakultas')
            ->where('fakultas.organization_id = ?')
            ->andWhere('fakultas.deleted_at is NULL')
            ->setParameter(0, $organizationId);

        return $query;
    }

    public function getAllFakultas()
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->select('f')
            ->from('\Domain\Institusi\Fakultas', 'f')
                ->where($qb->expr()->isNull('f.deletedAt'))
                ->orderBy('f.nama', 'ASC');

        return $qb->getQuery()->getResult();
    }
}