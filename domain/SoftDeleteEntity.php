<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 01/05/20
 * Time: 15:36
 */

namespace Domain;


trait SoftDeleteEntity
{
    /**
     * @ORM\Column(name="deleted_at", type="datetime")
     */
    protected $deletedAt;

    /**
     * @return mixed
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param mixed $deletedAt
     */
    public function setDeletedAt($deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

}