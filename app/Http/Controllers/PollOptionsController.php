<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HandleResponse;
use App\Http\Resources\PollOptionsResource as PollOptionsResource;
use App\Http\Resources\PollOptionsCollection;
use App\PollOptions;

class PollOptionsController extends Controller
{
    public static function store($options, $qid)
    {   
        $optionsArray = [];
        foreach ($options as $value) {
            $optionsArray[] = array(
                'option_title' => $value,
                'question_id' => $qid
            );
        }
        PollOptions::insert($optionsArray);
    }
}
