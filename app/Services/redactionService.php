<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 28/09/2018
 * Time: 15:18
 */

namespace App\Services;

use App\models\Article;
use Carbon\Carbon;
class redactionService extends Article
{
    static function insertArticle($request, $picture)
    {
        $insert = Article::create([
            'title'    => $request->get('title'),
            'rubric'   => $request->get('rubric'),
            'content'  => $request->get('content'),
            'contents' => $request->get('contents'),
            'position' => $request->get('position'),
            'pictures' => $picture,
            'slug'     => str_slug($request->get('title')),
        ]);
        if($insert)
            return true;
    }
}