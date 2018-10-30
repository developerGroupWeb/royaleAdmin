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
        if(!array_key_exists($name, $_POST) || !isset(self::$position[$data]))
            return 1;
    }
    static function validateValueOptionForRubric($name, $data)
    {
        if(!array_key_exists($name, $_POST) || !isset(self::$rubric[$data]))
            return 1;
    }
}