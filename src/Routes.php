<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

declare (strict_types=1);

return [
    ['GET', '/', 'PageController@index'],
    ['GET', '/{id:\d+}', 'PageController@index'],
    ['GET', '/test', 'PageController@testPage'],
    ['GET', '/hello-world', function () {
            echo 'Hello World';
        }],
    ['GET', '/another-route', function () {
            echo 'This works too';
        }],
];
