<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Conversión de Temperatura</title>
    </head>
    <body>
        <h1>Cambio de Celsius a Fahrenheit</h1>

        <?php
        // Grados Celsius a convertir
        $parametros = ["Celsius" => 17];

        // Crear el cliente SOAP con el WSDL
        try {
            $servicioCambioTemperatura = new SoapClient("http://www.w3schools.com/xml/tempconvert.asmx?WSDL");

            // Llamar a la función para convertir de Celsius a Fahrenheit
            $cambioCelsiusFahrenheit = $servicioCambioTemperatura->CelsiusToFahrenheit($parametros);

            // Mostrar los resultados
            echo nl2br("Parámetro de entrada: " . $parametros["Celsius"] . " ºC.\n");
            echo nl2br("Resultado de la conversión: " . $cambioCelsiusFahrenheit->CelsiusToFahrenheitResult . " ºF.\n");
        } catch (SoapFault $error) {
            echo "ERROR: " . $error->faultcode . ", " . $error->faultstring;
        }
        ?>
        <h2>Cambio de Fahrenheit a Celsius</h2>
        <?php
        // Grados Fahrenheit a convertir
        $parametros = ["Fahrenheit" => 62.2];

        try {
            // Llamar a la función para convertir de Fahrenheit a Celsius
            $cambioFahrenheitCelsius = $servicioCambioTemperatura->FahrenheitToCelsius($parametros);

            // Mostrar los resultados
            echo nl2br("Parámetro de entrada: " . $parametros["Fahrenheit"] . " ºF.\n");
            echo nl2br("Resultado de la conversión: " . $cambioFahrenheitCelsius->FahrenheitToCelsiusResult . " ºC.\n");
        } catch (SoapFault $error) {
            echo "ERROR: " . $error->faultcode . ", " . $error->faultstring;
        }
        ?>
    </body>
</html>
