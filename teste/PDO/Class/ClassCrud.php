<?php
class ClassCrud extends ClassConexao{

    #atributos
    private $Crud;
    private $Contador;



    #Preparação das declarativas
    public function preparedStatements($Query, $Parametros){
        $this->countParametros($Parametros);
        $this->Crud=$this->conectaDB()->prepare($Query);
        if($this->Contador > 0){
            for ($i=1; $i <= $this->Contador ; $i++) { 
                $this->Crud->bindValue($i,$Parametros[$i-1]);
            }
        }
        $this->Crud->execute();
    
    }


    #Contador de parâmetros
    private function countParametros($Parametros){
        
        $this->Contador=count($Parametros);

    }





}
?>