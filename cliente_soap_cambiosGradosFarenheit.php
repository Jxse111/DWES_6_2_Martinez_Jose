<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Conversión de Temperatura</title>
    </head>
    <body>
        <h1>Cambio de Celsius a Fahrenheit</h2>

        <?php
        $uri = "http://www.w3schools.com/xml/tempconvert.asmx?WSDL";
        $servicioCambioTemperatura = new SoapClient($uri);

        // Grados Celsius a convertir
        $gradosCelsius = 17;

        // Llamada al método del servicio SOAP
        $cambioCelsiusFahrenheit = $servicioCambioTemperatura->CelsiusToFahrenheit(array("Celsius" => $gradosCelsius));

        // Mostramos el resultado
        echo "El cambio de Celsius a Fahrenheit es de " . $cambioCelsiusFahrenheit->CelsiusToFahrenheitResult . " ºF";
        ?>
        </br> 
        <h2>Cambio de Fahrenheit a Celsius</h2>
        <?php
        // Grados Fahrenheit a convertir
        $gradosFarenheit = 62.2;

        // Llamada al método del servicio SOAP
        $cambioFahrenheitCelsius = $servicioCambioTemperatura->FahrenheitToCelsius(array("Fahrenheit" => $gradosFarenheit));

        // Mostramos el resultado
        echo "El cambio de Fahrenheit a Celsius es de " . $servicioCambioTemperatura->FahrenheitToCelsiusResult . " ºC";
        ?>
</body>
</html>