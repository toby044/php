<?php
/**
 * Description of basic_class
 *
 * @author Per Toft
 */

// Class declaration
class basic {
    // Instance variables
    // Useable in the entire object
    private $class_name = 'Test';
    private $class_creation_date;
    
    function __construct() {
        // Contains what needs to happen when the object is created
        $this->setCreationDate(date("Y-m-d H:i:s"));
    }
    
    function __destruct() {
        // Contains code to destroy whatever needs to be destroyed before the object is deleted
    }
    
    function __toString() {
        // Contains code to represent this object as a string
    }
    
    // User generated methods
    // Accessor
    function getCreationDate() {
        return $this->class_creation_date;
    }
    
    // Mutator
    function setCreationDate($date) {
        $this->class_creation_date = $date;
    }
}