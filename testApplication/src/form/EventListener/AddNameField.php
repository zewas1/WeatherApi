<?php


namespace App\form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class AddNameField implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [FormEvents::PRE_SET_DATA => 'preSetData'];
    }

    public function preSetData(FormEvent $event): void
    {
        $country = $event->getData();
        $form = $event->getForm();

//        if (!$country || null === $country->getId()) {
//            $form->add('name', TextType::class);
//        }
    }
}