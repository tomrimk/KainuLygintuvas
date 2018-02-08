<?php
class planas {

    private $operatorius;
    private $min;
    private $sms;
    private $gb;
    private $pasirinktas;
    private $rodiklis;
    private $kaina;
    
    function __construct($operatorius, $min, $sms, $gb, $kaina)
    {
        $this->operatorius = $operatorius;
        $this->min = $min;
        $this->sms = $sms;
        $this->gb = $gb;
        $this->pasirinktas = false;
        $this->kaina = $kaina;
    }

    /**
     * @return mixed
     */
    public function getOperatorius()
    {
        return $this->operatorius;
    }

    /**
     * @param mixed $name
     */
    public function setName($operatorius)
    {
        $this->operatorius = $operatorius;
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

    /**
     * @return mixed
     */
    public function getKaina()
    {
        return $this->kaina;
    }

    /**
     * @param mixed $kaina
     */
    public function setKaina($kaina)
    {
        $this->kaina = $kaina;
    }







    
}