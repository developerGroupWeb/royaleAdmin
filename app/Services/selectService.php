<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 01/10/2018
 * Time: 12:20
 */

namespace App\Services;




class selectService
{
    static private $position = ['Articles a la une', 'Articles priorite 2', 'Articles priorite 3', 'Article top info'],
                   $rubric = [
                       'Politiques' => 'Politique',
                       'Economies'  => 'Economie',
                       'Opinions'   => 'Opinion',
                       'Enquetes'   => 'Enquetes',
                       'Sports'     => 'Sport',
                       'Santes'     => 'Sante',
                       'Internationals'   => 'Internationale',
                       'Educations'       => 'Education',
                       'Tech-Innovations' => 'Tech-Innovation'
    ];

    static function validateValueOptionForPosition($name, $data)
    {
        if(!array_key_exists($name, $_POST) || !isset(self::$position[$data]))
            return 1;
    }
    static function validateValueOptionForRubric($name, $data)
    {
        if(!array_key_exists($name, $_POST) || !isset(self::$rubric[$data]))
            return 1;
    }
}