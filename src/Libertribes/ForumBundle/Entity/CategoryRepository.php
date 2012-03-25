<?php

namespace Libertribes\ForumBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends ObjectRepository
{

    public function findOneBySlug($slug)
    {
        return $this->findOneBy(array('slug' => $slug));
    }


    public function findOneById($id)
    {
        return $this->findOneBy(array('id' => $id));
    }

    public function findAll()
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->orderBy('c.position')
            ->getQuery()
            ->execute();
    }


    public function findAllIndexById()
    {
        return $this->getObjectManager()
            ->createQuery(sprintf('SELECT category FROM %s category INDEX BY category.id ORDER BY category.position', $this->getObjectClass()))
            ->execute();
    }

}