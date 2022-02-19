<?php

/**
 * Description of bicycle
 *
 * @author Per Toft
 */
class bicycle {
    private $make;
    private $model;
    private $owner;
    
    function __construct() {
        // Contains what needs to happen when the object is created
    }
    
    function __toString() {
        // Contains code to represent this object as a string
    }
    
    // Accessor
    function getMake() {
        return $this->make;
    }
    
    // Accessor
    function getModel() {
        return $this->model;
    }
    
    // Accessor
    function getOwner() {
        return $this->owner;
    }

    // Mutator
    function setMake($make) {
        $this->make = $make;
    }
    
    // Mutator
    function setModel($model) {
        $this->model = $model;
    }

    // Mutator
    function setOwner($owner) {
        $this->owner = $owner;
    }
}
