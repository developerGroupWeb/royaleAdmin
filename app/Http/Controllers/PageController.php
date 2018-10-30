<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\articleFormsRequests;
use App\Services\redactionService;
use App\Services\selectService;

class PageController extends Controller
{
    function home($page)
    {
        return view('pages.'.$page);
    }

    function store(articleFormsRequests $request)
    {
        $dangerPosition = selectService::validateValueOptionForPosition('position', $request->get('position'));
        $dangerRubric   = selectService::validateValueOptionForRubric('rubric', $request->get('rubric'));
        if($dangerPosition == 1 || $dangerRubric == 1)
        {
            $errorHacking = 'You are trying to edit the HTML5 code';
            return view('pages.redaction', ['errorHacking' => $errorHacking]);
        }

        $pictureName = time().'.'.request()->picture->getClientOriginalExtension();
        $request->picture->storeAs('pictures', $pictureName);

        $folderFile = $request->other_picture->store('other_pictures');
        $file   = explode('/', $folderFile);
        $other_pictureName = $file[1];

        $insert = redactionService::insertArticle($request,$pictureName);
        if($insert)
        {
            session()->flash('message', 'Your article has been successfully inserted');
            return view('pages.redaction');
        }


    }
}
