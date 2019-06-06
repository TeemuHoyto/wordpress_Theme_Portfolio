<?php
/**
 * Inside this file we can access $this.
 * It stands for the view object, because this
 * template file is required inside its method.
 */

// Get the event from the model.
// $this refers to the EventView class instance (meaning an object)
// in which this template is required.
$event = $this->get_model()->get_event();

// TODO: Print out the event data.

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $event->get_title(); ?></title>
    </head>
    <body>
        <h1><?= $event->get_title(); ?></h1>
        <ul>
            <li><?= $event->get_start_date( 'c' ); ?></li>
            <li><?= $event->get_end_date( 'c' ); ?></li>
        </ul>
        <p><?= $event->get_description(); ?></p>
    </body>
</html>