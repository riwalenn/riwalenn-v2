<?php

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, ?array $orderBy = null)
 * @method User[] findAll()
 * @method User[] findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends EntityRepository
{
    public function __construct(EntityManagerInterface $em, ClassMetadata $class)
    {
        parent::__construct($em, $class);
    }
}