<?php
class planas {

    private $name;
    private $min;
    private $sms;
    private $gb;
    private $pasirinktas;
    private $rodiklis;
    
    function __construct($name, $min, $sms, $gb)
    {
        $this->name = $name;
        $this->min = $min;
        $this->sms = $sms;
        $this->gb = $gb;
        $this->pasirinktas = false;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param mixed $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @return mixed
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * @param mixed $sms
     */
    public function setSms($sms)
    {
        $this->sms = $sms;
    }

    /**
     * @return mixed
     */
    public function getGb()
    {
        return $this->gb;
    }

    /**
     * @param mixed $gb
     */
    public function setGb($gb)
    {
        $this->gb = $gb;
    }

    /**
     * @return mixed
     */
    public function getPasirinktas()
    {
        return $this->pasirinktas;
    }

    /**
     * @param mixed $pasirinktas
     */
    public function setPasirinktas($pasirinktas)
    {
        $this->pasirinktas = $pasirinktas;
    }

    /**
     * @return mixed
     */
    public function getRodiklis()
    {
        return $this->rodiklis;
    }

    /**
     * @param mixed $rodiklis
     */
    public function setRodiklis($rodiklis)
    {
        $this->rodiklis = $rodiklis;
    }





    
}