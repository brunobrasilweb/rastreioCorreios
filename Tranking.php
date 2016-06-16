<?php

class Tranking {

    CONST WS_URL = 'http://webservice.correios.com.br/service/rastro/Rastro.wsdl';
    CONST WS_USER = 'ECT';
    CONST WS_PASS = 'SRO';

    public static function get($codes) {

        try {
            $soap = self::soap();
            $data = self::assignData($codes);

            $result = $soap->__soapCall('buscaEventosLista', $data, array());

            return $result;
        } catch(Exeception $e) {
            return false;
        }

    }

    public static function soap() {

        $client = new SoapClient(self::WS_URL);

        return $client;

    }

    public static function assignData($codes) {

        $data = array('res:buscaEventosLista' => array(
            "usuario" => self::WS_USER,
            "senha" => self::WS_PASS,
            "tipo" => "L",
            "resultado" => "T",
            "lingua" => "101",
            "objetos" => $codes
        ));

        return $data;

    }

}
?>
