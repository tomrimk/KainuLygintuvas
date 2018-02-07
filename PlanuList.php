<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 2018-02-07
 * Time: 11:50
 */

class PlanuList
{
    private $planai = array();

    /**
     * PlanuList constructor.
     * @param array $planai
     */
    public function __construct(array $planai)
    {
        $this->planai = $planai;
    }

    /**
     * @return array
     */
    public function getPlanai()
    {
        return $this->planai;
    }

    /**
     * @param array $planai
     */
    public function setPlanai($planai)
    {
        $this->planai = $planai;
    }

    function calculate($pasirinktiPokalbiai, $pasirinktosZinutes, $pasirinktasInternetas, $planas) {
        $result = sqrt(pow(($planas->getMin() - $pasirinktiPokalbiai), 2)
            + pow(($planas->getSms() - $pasirinktosZinutes),2)
            + pow(($planas->getGb() - $pasirinktasInternetas),2));
        return $result;
    }




}