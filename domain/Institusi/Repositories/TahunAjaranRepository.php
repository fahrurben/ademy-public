<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 06/05/20
 * Time: 8:20
 */

namespace Domain\Institusi\Repositories;


class TahunAjaranRepository extends EntityRepository implements BaseRepository
{
    public function isExist($tahunAjaranObject, $id = null) {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('t')
            ->from('\Domain\Institusi\TahunAjaran', 't')
            ->where('t.tipe = ?1')
            ->andWhere('t.tahunAwal = ?2')
            ->andWhere('t.tahunAkhir = ?3');

        if (isset($id)) {
            $queryBuilder->andWhere('t.id != ?4');
        }

        $queryBuilder->setParameter(1, $tahunAjaranObject->tipe);
        $queryBuilder->setParameter(2, $tahunAjaranObject->tahunAwal);
        $queryBuilder->setParameter(3, $tahunAjaranObject->tahunAkhir);

        if (isset($id)) {
            $queryBuilder->setParameter(4, $tahunAjaranObject->id);
        }

        return $queryBuilder->getQuery()->getResult();
    }
}