<?php namespace Admin\Statistics\Components;

use Cms\Classes\ComponentBase;
use Admin\Statistics\Models\Rounds;

class Rounds extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Rounds component',
            'description' => 'Component for all rounds'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
    }

    public function onRoundResults() 
    {
        $rounds = Rounds::getRounds();

        $data['round_type'] = $rounds['round_type_id'];
    }

    public function onRounds2017() {
        $rounds = Rounds::getRounds(2017);
    }

}
