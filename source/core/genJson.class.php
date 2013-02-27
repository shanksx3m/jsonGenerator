<?php
/**
 * Description of genJson
 *
 * @author tim
 */
class genJson implements JsonSerializable {
    
    private $array;

    public function __construct(array $array) {
        $this->array = $array;
        $this->jsonSerialize();
    }    
    
    public function jsonSerialize() {
        return $this->array;
    }
}

?>
