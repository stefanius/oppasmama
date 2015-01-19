<?php

namespace Stef\DagVanDeWeekBundle\CalendarTranslations;

class Dutch
{
    protected $months = [];

    protected $weekdays = [];

    function __construct()
    {
        $this->months['01'] = 'januari';
        $this->months['02'] = 'februarie';
        $this->months['03'] = 'maart';
        $this->months['04'] = 'april';
        $this->months['05'] = 'mei';
        $this->months['06'] = 'juni';
        $this->months['07'] = 'juli';
        $this->months['08'] = 'augustus';
        $this->months['09'] = 'september';
        $this->months['10'] = 'oktober';
        $this->months['11'] = 'november';
        $this->months['12'] = 'december';

        $this->weekdays[0] = 'zondag';
        $this->weekdays[1] = 'maandag';
        $this->weekdays[2] = 'dinsdag';
        $this->weekdays[3] = 'woensdag';
        $this->weekdays[4] = 'donderdag';
        $this->weekdays[5] = 'vrijdag';
        $this->weekdays[6] = 'zaterdag';
        $this->weekdays[7] = 'zondag';
    }

    public function getMonth($number)
    {
        if (strlen($number) < 2) {
            $number = '0' . $number;
        }

        return $this->months[$number];
    }

    public function getDay($number)
    {
        return $this->weekdays[(integer) $number];
    }
}