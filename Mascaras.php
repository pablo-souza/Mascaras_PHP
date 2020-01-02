<?php
class Mascaras{
    private $numero;
    private $mascara;
    function __construct($numero=null,$mascara=null) {
        $this->numero = $numero;
        if($mascara!=null && 
        strlen(preg_replace("/[^#]/","",$mascara))==strlen($numero)){
            $this->mascara = $mascara;
        } 
    }
    public function gerarMasc()
    {
        $masc=$this->mascara;
        $val=$this->numero;
        $mascaraAplicada = '';
        $k = 0;
        for($i = 0; $i<=strlen($masc)-1; $i++) {
            if(isset($val[$k])) {
                if($masc[$i] == '#') {
                    if(isset($val[$k]))
                        $mascaraAplicada .= $val[$k++];
                } else {
                    if(isset($masc[$i]))
                    $mascaraAplicada .= $masc[$i];
                }
            }
        }
        return $mascaraAplicada;
    }
    public function mascCPF($numero)
    {
        $numero = preg_replace("/[^0-9]/","",$numero);
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $numero);
    }
    public function mascCNPJ($numero)
    {
        $numero = preg_replace("/[^0-9]/","",$numero);
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $numero);
    }
    public function mascCEP($numero)
    {
        $numero = preg_replace("/[^0-9]/","",$numero);
        if(strlen($numero)==5){
            return $numero."-"."000";
        }
        elseif(strlen($numero)==8){
            return substr($numero,0,5)."-".substr($numero,5);
        }
        else{
            return $numero;
        }
    }
    public function mascTelefone($numero)
    {
        $numero = preg_replace("/[^0-9]/","",$numero);
        $array = [];
        if(strlen($numero)-2==6||strlen($numero)-2==8){//fixo
            if(strlen($numero)-2==8){// com DD
                preg_match('/^([0-9]{2})([0-9]{4})([0-9]{4})$/', $numero, $array);
                return "(".$array[1].") ".$array[2].'-'.$array[3];
            }else{
                preg_match('/^([0-9]{4})([0-9]{4})$/', $numero, $array);
                return $array[1].'-'.$array[2];
            }
        }elseif(strlen($numero)-2==7||strlen($numero)-2==9){//celular
            if(strlen($numero)-2==9){
                preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $numero, $array);
                return "(".$array[1].") ".$array[2].'-'.$array[3];
            }else{
                preg_match('/^([0-9]{5})([0-9]{4})$/', $numero, $array);
                return $array[1].'-'.$array[2];
            }
        }
        else{
            return $numero; 
        }
        
    }
}
