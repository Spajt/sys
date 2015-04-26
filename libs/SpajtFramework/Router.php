<?php

namespace libs\SpajtFramework;

class Router {

    function __construct() {
        global $mainPage;
        if (@$_GET['action'] === null) {
            $scope = new $mainPage;
            $scope->init();
        } else {
            $_GET['action'] = rtrim($_GET['action'], '/');
            $toDo = explode("/", $_GET['action']);
            $toDo[0] = "\controllers\\".$toDo[0];
            $scope = new $toDo[0];
            if (isset($toDo[2])) {
                if (!method_exists($scope,$toDo[1])) {
                        new \controllers\Error("20");
                        return false;
                    }
                $scope->{$toDo[1]}($toDo[2]);
            } else {
                if (isset($toDo[1])) {
                    if (!method_exists($scope,$toDo[1])) {
                        new \controllers\Error("22");
                        return false;
                    }
                    $scope->{$toDo[1]}();
                } else {
                    $scope->init();
                }
            }
        }
    }

}
