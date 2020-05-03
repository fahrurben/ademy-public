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
            ->setParameter(0, $organizationId);

        return $query;
    }
}