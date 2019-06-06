<?php

namespace App\MVC;

/**
 * TODO:
 * - Create properties for the model and the view.
 * - Instantiate the EventModel in the constructor.
 * - Instantiate the EventView in the constructor.
 * - Create a method for displaying an event.
 *      - This method should load the event via the model 
 *        and then pass the model to the view before rendering it.
 */
class EventController {

    protected $model;
    protected $view;

    /**
     * Constructor.
     * 
     * Called on class instantiation.
     * Creates the model and the view and stores
     * them into class properties.
     */
    public function __construct() {
        $this->model = new EventModel();
        $this->view = new EventView();
    }

    /**
     * The method for the display action.
     * 
     * Loads the event via the model, injects the model
     * into the view and renders the view.
     *
     * @return void
     */
    public function display() {
        $this->model->load_event();
        $this->view->set_model( $this->model );
        $this->view->render();
    }
    
}