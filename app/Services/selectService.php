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
    static private $result,
                   $position = ['Articles a la une', 'Articles priorite 2', 'Articles priorite 3', 'Article top info'],
                   $rubric = [
                       'politique' => 'Politique',
                       'économie'  => 'Economie',
                       'opinion'   => 'Opinion',
                       'enquêtes'   => 'Enquetes',
                       'sport'     => 'Sport',
                       'santé'     => 'Santé',
                       'international'   => 'International',
                       'éducation'       => 'Education',
                       'tech-Innovation' => 'Tech-Innovation',
                       'dossiers-d\'actualité' => 'Dossiers d\'actualité',
                       'le-conseil-des-ministres' => 'Le conseil des ministres',
                       'histoires-d\'afrique' => 'istoires d\'afrique',
                       'tv' => 'La royaleNews TV'
                   ];

    static function validateValueOptionForPosition($name, $data)
    {
        $objPosition = (object)self::$position;

        if(!array_key_exists($name, $_POST) || !isset($objPosition->$data))
            self::$result = 1;

        return self::$result;
    }
    static function validateValueOptionForRubric($name, $data)
    {
        $objRubric = (object)self::$rubric;

        if(!array_key_exists($name, $_POST) || !isset($objRubric->$data))
            self::$result = 1;

        return self::$result;
    }
}