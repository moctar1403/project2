<?php


  if(!function_exists('page_title')){

    function page_title(?string $title = null):string{
        // return $title
        // ? $title. '|'. config('app.name')
        // : config('app.name');

         return isset($title) ? $title. '|'. config('app.name') : config('app.name');

    }

  }  
    
    

