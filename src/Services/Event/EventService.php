<?php

namespace App\Services\Event;

use Psr\Log\LoggerInterface;
use App\Entity\Event;

/*
 * @author Samuel Pearce <samuel.pearce@open.ac.uk>
 */
class EventService
{
    /* @var $logger LoggerInterface */

    private $logger;

    /* @var $repository \Doctrine\Common\Persistence\ObjectManager */
    private $repository;
    
    /** @var \Doctrine\ORM\EntityManagerInterface $em */
    private $em;

    public function __construct(LoggerInterface $logger, \Doctrine\ORM\EntityManagerInterface $em)
    {
        $this->logger = $logger;
        $this->em = $em;
        $this->repository = $em->getRepository(Event::class);
    }

    /**
     * Returns an array of matching items
     * @param string $name
     * @return array
     */
    public function findBy($name)
    {
        if ($name == "") {
            $name = "Uncategorised";
        }
        return $this->repository->findBy(['Name' => $name]);
    }
    
    /**
     * Adds a sermon
     * @param Event $sermon
     * @return Event The managed persisted object
     */
    public function add(Event $sermon)
    {
        $this->em->persist($sermon);
        $this->em->flush();
        return $sermon;
    }
    
    /**
     * Find Event by ID
     * @param type $id
     * @return Event
     */
    public function getById($id)
    {
        return $this->repository->find($id);
    }
    
    public function deleteById($id) 
    {
        $event = $this->em->getReference(Event::class, $id);
        $this->em->remove($event);
        $this->em->flush();
    }
}
