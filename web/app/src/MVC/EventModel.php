<?php

namespace App\MVC;

use App\Event2;

/**
 * TODO:
 * - A getter and setter for the event object.
 * - A load method to load and instantiate the event.
 */
class EventModel {

    /**
     * This should contain the event.
     * 
     * Use the `Event2` class from the oop2 assigment.
     * 
     * @var Event2
     */
    protected $event;

    /**
     * A getter for the event object.
     * 
     * @return Event2
     */
    public function get_event() : ?Event2 {
        return $this->event;
    }

    /**
     * Set the event object after handling it.
     *
     * @param Event2 $event An event object.
     * @return void
     */
    public function set_event( Event2 $event ) {
        // Set the class property with the passed variable.
        $this->event = $event;

        // Let's pretend that our application
        // must change the time by 1 hour.
        $this->event->modify('+1 hour');

        // Enable chaining.
        return $this;
    }

    /**
     * "Loads" the event and stores it into the class property
     * by calling the setter method.
     * 
     * The event is not actually loaded from anywhere, but
     * created as a dummy object in this method.
     *
     * @return void
     */
    public function load_event() {
        // Create an event and use the chaining of set methods.
        $event = ( new Event2() )
            ->set_start_date(
                new \DateTime('2019-05-29T09:00:00')
            )->set_end_date(
                new \DateTime('2019-05-29T17:00:00')
            )->set_title(
                'The first event'
            )->set_description( 
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget dolor quis nisi hendrerit eleifend id ut orci. Suspendisse finibus commodo ipsum in hendrerit. In placerat ligula in nisl varius ultrices. Ut et mollis neque. Ut leo est, bibendum sed suscipit eget, elementum vel felis. Proin molestie dictum odio vitae lobortis. Suspendisse metus purus, finibus sed scelerisque in, vulputate vitae sem. Nullam et tempus ipsum, imperdiet luctus tortor. Cras vitae accumsan eros. In hac habitasse platea dictumst. Sed ac ultricies elit. Fusce tincidunt dui non magna facilisis, placerat ornare lacus suscipit. Nullam malesuada scelerisque orci, non pretium elit bibendum a. Praesent tempus ornare tincidunt.'
            );

        // Store the event for later use.
        // Use the setter to use its extended functionalities.
        $this->set_event( $event );
    }

}