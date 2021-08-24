<?php
    $client = new SoapClient('http://www.learnwebservices.com/services/hello?WSDL');
    $responce_param = $client->SayHello(array(
        'HelloRequest'=>array(
            'Name'=>$_GET['name']
        )
    ));
    echo $responce_param->HelloResponse->Message;
?>