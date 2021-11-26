<?php
     /**
      * Uma variável que nos retorna uma rotina ou um valor, o retorno dela é executado
      * Exemplos:
      */

      $code = "<article><h1>Um Call User Function</h1></article>";
      $codeClear = call_user_func("strip_tags", $code); //strip_tags é uma função que retira todas as tags;
      var_dump($code, $codeClear);

      $codeMore = function($code){
          var_dump($code);
      };

      $codeMore(" ->    BoraProgramar!!");