<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auto
 *
 * @author CP
 */
class Auto {
    //put your code here
    function getId() {
        return $this->id;
    }

    function getModel() {
        return $this->model;
    }

    function __construct($id, $model) {
        $this->id = $id;
        $this->model = $model;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setModel($model) {
        $this->model = $model;
    }

        protected $id ; 
   protected $model;

    
}
