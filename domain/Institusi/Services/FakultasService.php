<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 02/05/20
 * Time: 8:39
 */

namespace Domain\Institusi\Services;


use Doctrine\ORM\EntityManager;
use Domain\Institusi\Fakultas;

class FakultasService
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function create(Fakultas $fakultas)
    {
        $this->entityManager->persist($fakultas);
        $this->entityManager->flush();
    }
}