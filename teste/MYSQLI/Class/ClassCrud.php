<?php
class ClassCrud extends ClassConexao{
    #Atributos
    private $Crud;
    private $Contador;
    private $Resultado;

    #preparando as declarativas
    private function preparedStatements($Query, $Tipos, $Parametros){
        $this->countParametros($Parametros);

        $Con=$this->conectaDB();
        $this->Crud=$Con->prepare($Query);

        if ($this->Contador > 0) {
            $CallParametros = array();
            foreach ($Parametros as $key => $Parametro) {
                $CallParametros[$Key] = &$Parametros[$Key];
            }
            array_unshift($CallParametros, $Tipos);
            call_user_func_array(array($this->$Crud,'bind_param'),$CallParametros);
        }
        $this->Crud->execute();
        $this->Resultado=$this->Crud->get_result();

    }


}




?>