<?php

  abstract class ClassConexao{
      protected function conectaDB(){
        try {
            $Con = new mysqli("localhost","root","","crud");
             return $Con; 
        } catch (Exception $Erro) {
            return $Erro->getMessage();
        }
      }
       
    }

?>