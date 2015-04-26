<?php
namespace controllers;

class Form {
    private $vars = [];
    public function products() {
       return \models\Data("products")->getAll();
    }
    public function fields() {
       return ['action'=>'https://sandbox.przelewy24.pl/index.php',
              'method'=>'POST',
              'imie'=>['type'=>'text', 'id'=>'imie', 'class'=>'formImie'],
              'nazwisko'=>['type'=>'text', 'id'=>'nazwisko', 'class'=>'formNazwisko'],
              'pesel'=>['type'=>'text', 'id'=>'pesel', 'class'=>'formPesel'],
              'email'=>['type'=>'text', 'id'=>'telefon', 'class'=>'formTelefon'],
              'p24_session_id'=>['type'=>'hidden', 'id'=>'sesja'],
              'p24_id_sprzedawcy'=>['type'=>'hidden', 'id'=>'sprzedawca'],
              'p24_kwota'=>['type'=>'hidden', 'id'=>'kwota'],
              'p24_kraj'=>['type'=>'hidden', 'value' => 'PL', 'id'=>'kraj'],
              'p24_return_url_ok'=>['type'=>'hidden', 'id'=>'ok'],
              'p24_return_url_error'=>['type'=>'hidden', 'id'=>'error'],
              'p24_kod'=>['type'=>'text', 'id'=>'kod', 'class'=>'formKod'],
              'p24_klient'=>['type'=>'text', 'id'=>'klient', 'class'=>'formKlient'],
              'p24_adres'=>['type'=>'text', 'id'=>'adres', 'class'=>'formAdres'],
              'p24_miasto'=>['type'=>'text', 'id'=>'miasto', 'class'=>'formMiasto'],
              'szybkosc'=>['type'=>'hidden', 'id'=>'szybkość'],
              'send'=>['class'=>'submit']
            ];
    }
    private function prepareData() {
        $classMethods = get_class_methods(__CLASS__);
        foreach($classMethods as $method) {
            array_push(self::$vars, $this->$method);  
        }
    }
        public function makeView() {
         \libs\SpajtFramework\View::set($key, $value);  
        }
    }


