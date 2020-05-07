<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 14:18
 */

namespace Domain\Mahasiswa\Repositories;

use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\EntityRepository;
use Domain\BaseRepository;

class MahasiswaRepository extends EntityRepository implements BaseRepository
{
}