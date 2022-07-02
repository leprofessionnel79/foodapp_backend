<?php

return[
    //env('PAYPAL_CLIENT_ID','')
   'client_id'=>env('PAYPAL_CLIENT_ID',''),
   //env('PAYPAL_SECRET','')
   'secret'=>env('PAYPAL_SECRET',''),
   'settings'=>array(
       'mode'=>env('PAYPAL_MODE','sandbox'),
       'http.ConnectionTimeOut'=>30,
       'log.LogEnabled'=>true,
       'log.FileName'=>storage_path().'/logs/paypal.log',
       'log.LogLevel'=> 'ERROR'
   ),
];
