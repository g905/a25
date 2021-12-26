<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace A25\Controllers;

include __DIR__ . '/../Template.php';

/**
 * Description of TestController
 *
 * @author g905
 */
class ViewController {

    public function process($handler, $vars) {
        $a = explode("@", $handler);
        $a[0] = "A25\Controllers\\" . $a[0];
        $page = call_user_func([new $a[0]($vars), $a[1]]);
        if (is_array($page)) {
            if (!isset($page[1])) {
                \Template::view($page[0]);
            } else {
                \Template::view($page[0], $page[1]);
            }
        } else {
            \Template::view($page);
        }
    }

}
