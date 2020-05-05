<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 15:01
 */

namespace Domain;

use Doctrine\ORM\EntityManager;

class BaseService
{
    private $repository;

    private $entityManager;

    public function __construct(EntityManager $entityManager, BaseRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        return $this->repository->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, array $orderBy = null)
    {
        return $this->repository->findOneBy($criteria, $orderBy);
    }

    public function create($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    public function update($entity)
    {
        $this->entityManager->merge($entity );
        $this->entityManager->flush();
    }

    public function delete($id)
    {
        $entity = $this->repository->find($id);

        if (!isset($entity)) {
            throw new \Exception(__('Rekod tidak ada'));
        }

        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }
}