<?php
/**
 * Created by PhpStorm.
 * User: philipp
 * Date: 09/08/2018
 * Time: 13:39
 */

namespace App;


class Router
{
    public static function RoutesArray()
    {
        return  array(
            'default' => array(
                '(/<controller>(/<action>(/<id>)))',
                array(
                    'controller' => 'hello',
                    'action' => 'index'
                ),
            ),
        );
    }
}