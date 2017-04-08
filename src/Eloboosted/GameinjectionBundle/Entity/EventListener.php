<?php
/**
 * Created by PhpStorm.
 * User: Taha
 * Date: 02/04/2017
 * Time: 00:01
 */

namespace Eloboosted\GameinjectionBundle\Entity;


use ADesigns\CalendarBundle\Entity\EventEntity;
use ADesigns\CalendarBundle\Event\CalendarEvent;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventListener extends Controller
{
    protected $em;

    public function __construct()
    {
        global $kernel;
        if ( 'AppCache' == get_class($kernel) )
        {
            $kernel = $kernel->getKernel();
        }
        $em = $kernel->getContainer()->get( 'doctrine.orm.entity_manager' );
        $this->em = $em ;
    }

    public function loadEvents(CalendarEvent $calendarEvent)
    {
        $request = $calendarEvent->getRequest();
        $events= $this->em->getRepository('EloboostedGameinjectionBundle:TEvenement')
            ->findAll();
        foreach ($events as $event)
        {
            $eventEntity= new EventEntity($event->getTitleevent(),$event->getDateEvent(),null,true);
            //optional calendar event settings
            $eventEntity->setAllDay(true); // default is false, set to true if this is an all day event
            $eventEntity->setBgColor('#FF8E2B'); //set the background color of the event's label
            $eventEntity->setFgColor('#FFFFFF'); //set the foreground color of the event's label
            $eventEntity->setUrl($event->getIdEvenement().'/showevent');
            $eventEntity->setCssClass('my-custom-class'); // a custom class you may want to apply to event labels
            $calendarEvent->addEvent($eventEntity);
        }

    }

    /**
     * @return mixed
     */
    public function getEm()
    {
        return $this->em;
    }

    /**
     * @param mixed $em
     */
    public function setEm($em)
    {
        $this->em = $em;
    }


}