<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\AgentInterface;

class AgentController extends Controller
{

    protected $agents;

    public function __construct(AgentInterface $agents)
    {
        $this->agents = $agents;
    }

    public function index($location, $selectedSuburb = "")
    {
        $mcc = config("constants.MCC_CODES");

        $merchants = $this->agents->index();

        $groupedMerchants = [];
        $groupedSuburbs = [];

        foreach ($merchants as $i => $merchant) {

            $groupName = strtolower($merchant->city);
            $suburb = strtolower($merchant->suburb);

//            $merchants[$i]->suburb = $suburb;

            // check if group exist. Add if it doesn't
            if (!isset($groupedMerchants[$groupName])) {
                $groupedMerchants[$groupName] = [];
            }

            // check if group exist. Add if it doesn't
            if (!isset($groupedSuburbs[$groupName])) {
                $groupedSuburbs[$groupName] = [];
            }

            // add merchant to group
            $groupedMerchants[$groupName][] = $merchant;

            // add suburb if it doesn't exist
            if (!in_array($suburb, $groupedSuburbs[$groupName])) {
                $groupedSuburbs[$groupName][] = $suburb;
            }

            sort($groupedSuburbs[$groupName]);

        }

        ksort($groupedMerchants);

        $groupedMerchantsByLength = $groupedMerchants;

        uasort($groupedMerchantsByLength, array($this, "sortByLength"));

//        $ranking = DB::connection(env("DB_DEV_CONNECTION"))->table('agent')->select('type', DB::raw('count(*) as total'))
//            ->groupBy('type')
//            ->orderBy('total', 'desc')
//            ->get();
        $ranking = [];

        return view("merchants", compact("merchants", "ranking", "groupedMerchants", "groupedSuburbs", "mcc", "location", "selectedSuburb", "groupedMerchantsByLength"));
    }

    function sortByLength($a, $b){
        return count($b)-count($a);
    }
}
