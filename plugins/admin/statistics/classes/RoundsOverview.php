<?php
namespace Admin\Statistics\Classes;
use Carbon\Carbon;
use Session\Session;
use Admin\Statistics\Models\Rounds;

class RoundsOverview {
    public $rounds;
    public $current_date;
    public $action;
    public $sort_by;
    public $filters;
    public $order_by;

    public function __construct()
    {
        $this->current_date = Carbon::now();
    }

    private function createPeriod(Carbon $start_date, Carbon $end_date) 
    {
        $years = [];

        while (!$start_date->equalTo($end_date)) {
            $years[] = $start_date->copy();
            $start_date->addYear(1);
        }

        return $years;
    }

    public function startOfPeriod()
    {
        return $this->current_date->copy()->startOfYear()->hour(0)->minute(0)->second(0);
    }

    public function endOfPeriod()
    {
        return $this->current_date->copy()->endOfYear()->hour(0)->minute(0)->second(0);
    }

    public function currentPeriod()
    {
        if ($this->current_date === null) {
            $this->current_date = $this->createPeriod(
                $this->startOfPeriod(),
                $this->endOfPeriod()->addYear(1)
            );
        }
        return $this->current_date;
    }

    public function setStartDate(Carbon $start_date)
    {
        Session::put('start_date', $start_date);
        $this->start_date = $start_date;
    }

    public function setCurrentPeriod()
    {
        $this->setStartDate(Carbon::now());
    }

    public function setPreviousPeriod()
    {
        $this->setStartDate($this->startOfPeriod()->subYear(1));
    }

    public function setNextPeriod()
    {
        $this->setStartDate($this->startOfPeriod()->addYear(1));
    }

    public function flush()
    {
        Session::flush();
    }
} 