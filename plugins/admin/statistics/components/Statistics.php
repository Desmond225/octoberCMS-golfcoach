<?php namespace Admin\Statistics\Components;
use Cms\Classes\ComponentBase;
use Admin\Statistics\Models\Rounds;
use Admin\Statistics\Classes\RoundsOverview;
use Session;
use Carbon\Carbon;

class Statistics extends ComponentBase
{
    public $RoundsOverview;
    public function componentDetails()
    {
        return [
            'name'                  => 'The general statistics component',
            'description'           => ''
        ];
    }

    public function __construct($cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->RoundsOverview = new RoundsOverview();
    }

    public function onClearSession()
    {
        Session::flush();
    }

    public function onCurrentPeriod() 
    {
        $this->RoundsOverview->setStartDate(Carbon::now());
        return $this->render();
    }

    public function onNextPeriod()
    {
        $this->RoundsOverview->setNextPeriod();
        return $this->render();
    }

    public function onPreviousPeriod()
    {
        $this->RoundsOverview->setPreviousPeriod();
        return $this->render();
    }

    public function getAllRounds2019()
    {
        return Rounds::getRounds2019($this->RoundsOverview);
    }

    public function render()
    {
        return [
            '.table' =>$this->renderPartial('blocks/rounds.htm', [
                'current_period'    =>      $this->RoundsOverview->currentPeriod(),
                'rounds'            =>      $this->getAllRounds2019(),
            ]),
            ];
    }
}