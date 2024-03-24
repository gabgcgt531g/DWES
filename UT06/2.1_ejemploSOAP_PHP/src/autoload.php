<?php


 function autoload_a16902a6d49985cbeb5f51db2df84aeb($class)
{
    $classes = array(
        'Clases\ExchangeRates' => __DIR__ .'/ExchangeRates.php',
        'Clases\GetExchangeRatesByValueXML' => __DIR__ .'/GetExchangeRatesByValueXML.php',
        'Clases\GetExchangeRatesByValueXMLResponse' => __DIR__ .'/GetExchangeRatesByValueXMLResponse.php',
        'Clases\GetExchangeRatesByDateXML' => __DIR__ .'/GetExchangeRatesByDateXML.php',
        'Clases\GetExchangeRatesByDateXMLResponse' => __DIR__ .'/GetExchangeRatesByDateXMLResponse.php',
        'Clases\GetExchangeRatesXML' => __DIR__ .'/GetExchangeRatesXML.php',
        'Clases\GetExchangeRatesXMLResponse' => __DIR__ .'/GetExchangeRatesXMLResponse.php',
        'Clases\GetCurrentExchangeRatesXML' => __DIR__ .'/GetCurrentExchangeRatesXML.php',
        'Clases\GetCurrentExchangeRatesXMLResponse' => __DIR__ .'/GetCurrentExchangeRatesXMLResponse.php',
        'Clases\GetExchangeRatesXMLSchema' => __DIR__ .'/GetExchangeRatesXMLSchema.php',
        'Clases\GetExchangeRatesXMLSchemaResponse' => __DIR__ .'/GetExchangeRatesXMLSchemaResponse.php',
        'Clases\GetCurrentExchangeRate' => __DIR__ .'/GetCurrentExchangeRate.php',
        'Clases\GetCurrentExchangeRateResponse' => __DIR__ .'/GetCurrentExchangeRateResponse.php',
        'Clases\GetExchangeRate' => __DIR__ .'/GetExchangeRate.php',
        'Clases\GetExchangeRateResponse' => __DIR__ .'/GetExchangeRateResponse.php',
        'Clases\ConvertToEUR' => __DIR__ .'/ConvertToEUR.php',
        'Clases\ConvertToEURResponse' => __DIR__ .'/ConvertToEURResponse.php',
        'Clases\ConvertToForeign' => __DIR__ .'/ConvertToForeign.php',
        'Clases\ConvertToForeignResponse' => __DIR__ .'/ConvertToForeignResponse.php',
        'Clases\CurrentConvertToEUR' => __DIR__ .'/CurrentConvertToEUR.php',
        'Clases\CurrentConvertToEURResponse' => __DIR__ .'/CurrentConvertToEURResponse.php',
        'Clases\CurrentConvertToForeign' => __DIR__ .'/CurrentConvertToForeign.php',
        'Clases\CurrentConvertToForeignResponse' => __DIR__ .'/CurrentConvertToForeignResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a16902a6d49985cbeb5f51db2df84aeb');

// Do nothing. The rest is just leftovers from the code generation.
{
}
