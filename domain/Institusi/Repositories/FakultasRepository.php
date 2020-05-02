<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 02/05/20
 * Time: 13:06
 */

namespace Domain\Institusi\Repositories;


use Doctrine\ORM\EntityRepository;

class FakultasRepository extends EntityRepository
{
    public function getFakultas($organization_id)
    {
        $dql = "SELECT f FROM Domain\Institusi\Fakultas f ORDER BY f.nama DESC";

        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
}