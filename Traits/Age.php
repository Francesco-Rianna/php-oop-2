<?php
trait Age {
    protected $age;
    
    /**
     * Restituisce l'età.
     *
     * @return int
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Imposta l'età.
     *
     * @param int $newAge La nuova età da impostare.
     */
    public function setAge($newAge) {
        $this->age = $newAge;
    }
}
?>
