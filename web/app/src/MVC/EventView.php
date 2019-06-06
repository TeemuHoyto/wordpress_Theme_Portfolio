<?php

namespace App\MVC;

/**
 * TODO:
 * - Create a property for the model
 * - Create a setter and a getter for the model
 * - Create a render method that requires the EventTemplate.
 */
class EventView {

    /**
     * The model class instance is stored here.
     *
     * @var EventModel
     */
    protected $model;

    /**
     * Store the event model.
     * 
     * This enables the dependency injection for the model.
     *
     * @param EventModel $model The model instance.
     * @return void
     */
    public function set_model( EventModel $model ) {
        $this->model = $model;
    }

    /**
     * A getter for the model.
     *
     * @return EventModel|null
     */
    public function get_model() : ?EventModel {
        return $this->model;
    }

    /**
     * To render the view, we require the template file.
     * 
     * The template is executed here and it controls what is outputted
     * to the browser.
     *
     * @return void
     */
    public function render() {
        require_once( dirname( __FILE__ ) . '/../Templates/EventTemplate.php' );
    }

}