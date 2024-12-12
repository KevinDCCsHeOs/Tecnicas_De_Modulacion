<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnicas de Modulación</title>
    <link rel="stylesheet" href="EstiloTecnicasDeModulacion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <nav class="tabs">
            <a href="?section=3.1" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == '3.1') ? 'active' : ''; ?>">Tema 3.1 Técnicas de modulación analogíca</a>
            <a href="?section=3.2" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == '3.2') ? 'active' : ''; ?>">Tema 3.2 Técnicas de modulación digital</a>
            <a href="?section=3.4" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == '3.4') ? 'active' : ''; ?>">Tema 3.4 Códigos de línea</a>
            <a href="?section=3.5" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == '3.5') ? 'active' : ''; ?>">Tema 3.5 Módems, Estándares y Prótocolos.</a>
            <a href="?section=osi" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == 'osi') ? 'active' : ''; ?>">Diseñe el OSI.</a>
            <a href="?section=tcpip" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == 'tcpip') ? 'active' : ''; ?>">Diseñe el PROTOCOLO TCP/IP.</a>
            <a href="?section=cloud" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == 'cloud') ? 'active' : ''; ?>">DESCUBRA LOS TRES 3 PILARES IMPORTANTES DE LA TECNOLOGÍA CLOUD.</a>
            <a href="?section=articulo" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == 'articulo') ? 'active' : ''; ?>">Análisis de 2 artículos de la Tecnología Cloud.</a>
        </nav>
        <div class="content">
            <?php
            $section = isset($_GET['section']) ? $_GET['section'] : '3.1';

            if ($section == '3.1') {
                ?>
                <h3>Conversiones Analógico a Analógico</h3>
                <p>La conversión analógico a analógico implica la modulación de una señal portadora para transmitir información. 
                Las conversiones analógicas permiten la transmisión eficiente de señales de voz y video en sistemas de comunicación. 
                Las señales moduladas pueden variar en amplitud, frecuencia o fase para representar los datos.</p>
                <ul>
                    <li><b>Ventajas</b>: Permite la transmisión a largas distancias, aprovecha mejor el espectro de frecuencias y es resistente a 
                        ciertos tipos de interferencias.</li>
                    <li><b>Aplicaciones comunes</b>: Transmisiones de radio, televisión analógica y comunicaciones satelitales.</li>
                </ul>

                <h3>Modulación en Amplitud (AM)</h3>
                <p>La modulación en amplitud varía la amplitud de una portadora de alta frecuencia de acuerdo con la señal de información. 
                    Es sencilla de implementar y se utiliza en la radio AM.</p>
                <ul>
                    <li><b>Características</b>:</li>
                    <ul>
                        <li>La señal modula la amplitud de la portadora.</li>
                        <li>Es sencilla de implementar, pero sensible al ruido y a las interferencias.</li>
                    </ul>
                    <li><b>Usos</b>: Radio AM y algunas aplicaciones de radiodifusión de bajo costo.</li>
                </ul>
                <img src="https://miro.medium.com/v2/resize:fit:1020/1*XCgMOyHXSqsC4YhnJQ2auw.png" alt="Modulacion en Amplitud (AM)" style="display: block; margin: 0 auto;">

                <h3>Modulación en Frecuencia (FM)</h3>
                <p>En la modulación en frecuencia, la frecuencia de la portadora varía de acuerdo con la señal de información. 
                    Es conocida por su mejor resistencia al ruido, lo que la hace ideal para transmisiones de audio de alta calidad.</p>
                <ul>
                <li><b>Ventajas</b>:</li>
                    <ul>
                        <li>Alta resistencia al ruido.</li>
                        <li>Se utiliza para transmisiones de alta fidelidad de sonido.</li>
                    </ul>
                    <li><b>Usos comunes</b>: Radio FM, televisión analógica para el sonido y sistemas de audio de dos vías.</li>
                </ul>
                <img src="https://www.textoscientificos.com/imagenes/redes/frecuencia.jpg" alt="Modulacion en Frecuencia (FM)" style="display: block; margin: 0 auto;">

                <h3>Modulación en Fase (PM)</h3>
                <p>La modulación en fase (PM) altera la fase de la señal portadora en función de la señal de información.</p>
                <ul>
                <li><b>Características</b>:</li>
                    <ul>
                        <li>Menos sensible al ruido que la modulación en amplitud.</li>
                        <li>Puede ser más compleja de demodular y requiere un diseño de receptor más sofisticado.</li>
                    </ul>
                    <li><b>Aplicaciones</b>: Común en modulación digital, donde se combina con otras técnicas (por ejemplo, PSK - Phase Shift Keying).</li>
                </ul>
                <img src="https://www.textoscientificos.com/imagenes/redes/moduladora.jpg" alt="Modulacion en Fase (PM)" style="display: block; margin: 0 auto;">

                <h3>Codec y Codificación</h3>
                <p>Los códecs son esenciales en la codificación del sonido y la TV digital, comprimiendo y descomprimiendo datos para la transmisión 
                    y almacenamiento eficiente.</p>
                <ul>
                <li><b>Tipos de códecs</b>: Códecs de compresión con pérdida (como MP3 y AAC) y códecs sin pérdida (como FLAC).</li>
                <li><b>Codificación en TV digital</b>:</li>
                    <ul>
                        <li>Utiliza estándares como MPEG para comprimir señales de video y transmitirlas eficientemente.</li>
                        <li>La codificación reduce la cantidad de datos requeridos y permite la transmisión de contenido de alta definición.</li>
                    </ul>
                </ul>
                <img src="https://i0.wp.com/www.cctvsg.net/wp-content/uploads/2019/11/maxresdefault-1.jpg?fit=1024%2C576&ssl=1" alt="Codecs" style="display: block; margin: 0 auto;">

                <?php
            } elseif ($section == '3.2') {
                ?>
                <video whidth="1000" height="600" controls>
                    <source src="3.2 Técnicas de modulación digital.mp4" type="video/mp4" style="display: block; margin: 0 auto;">
                </video>
                <h2>1. Conversión Digital a Digital</h2>
                <p>Este tipo de conversión implica transformar datos digitales en señales digitales, y existen tres métodos principales:</p>
                <ol>
                    <li><b>Unipolar</b>: Usa un solo nivel de voltaje. Típicamente, un bit "1" se representa con un nivel positivo, y el bit "0" se representa como cero voltios. Es una técnica simple, pero no es eficiente en términos de ancho de banda.</li>
                    <li><b>Polar</b>: Utiliza dos niveles de voltaje, uno positivo y uno negativo. Existen variantes como:</li>
                    <ul>
                        <li><b>NRZ (Non-Return-to-Zero)</b>: Los bits "1" y "0" se representan con niveles de voltaje positivo y negativo constantes, respectivamente.</li>
                        <li><b>RZ (Return-to-Zero)</b>: Cada bit regresa a cero en la mitad del intervalo, lo que permite la sincronización, pero requiere más ancho de banda.</li>
                        <li><b>Manchester</b>: Los cambios en el nivel de voltaje ocurren en medio de cada bit, lo cual facilita la sincronización.</li>
                    </ul>
                    <li><b>Bipolar</b>: Alterna entre tres niveles de voltaje: positivo, negativo y cero. En el formato <b>AMI (Alternate Mark Inversion)</b>, los bits "1" se alternan entre niveles positivos y negativos, mientras que los bits "0" permanecen en cero. Es eficiente en el uso del ancho de banda y minimiza los problemas de sincronización.</li>
                </ol>
                <h2>2. Conversión Analógico a Digital</h2>
                <p>En esta conversión, las señales analógicas se transforman en señales digitales a través de los siguientes pasos:</p>
                <ul>
                    <li><b>Muestreo</b>: La señal continua se toma en intervalos de tiempo específicos, lo que genera una serie de muestras. Según el teorema de muestreo de Nyquist, la frecuencia de muestreo debe ser al menos el doble de la frecuencia más alta en la señal para evitar la pérdida de información.</li>
                    <li><b>Cuantización</b>: Cada muestra se redondea al valor más cercano dentro de un conjunto discreto de niveles. Este proceso introduce un pequeño error llamado ruido de cuantización.</li>
                    <li><b>Codificación</b>: Cada nivel cuantizado se representa como una secuencia de bits. Esto permite que la señal digitalizada sea transmitida o almacenada en dispositivos digitales.</li>
                    <li><b>PAM (Pulse Amplitude Modulation)</b>: En esta técnica, la amplitud de cada pulso representa la amplitud de la señal analógica en ese momento. Aunque PAM no es digital en sí misma, se usa como primer paso en la digitalización, antes de aplicar cuantización y codificación.</li>
                </ul>
                <h2>3. Conversión Digital a Analógico</h2>
                <p>Este tipo de conversión transforma señales digitales en formas analógicas para ser transmitidas. Las técnicas principales incluyen:</p>
                <ul>
                    <li><b>ASK (Amplitude Shift Keying)</b>: La amplitud de la señal de portadora cambia en función de los datos. Para un "1" se envía una señal de alta amplitud, y para un "0", de baja o nula amplitud. Es una técnica simple, pero susceptible a interferencias.</li>
                    <li><b>FSK (Frequency Shift Keying)</b>: La frecuencia de la señal cambia para representar los bits. Cada bit "1" o "0" se representa por una frecuencia distinta. Se usa en sistemas como los modems de baja velocidad.</li>
                    <li><b>PSK (Phase Shift Keying)</b>: La fase de la señal se desplaza para representar bits. En BPSK (Binary PSK), la fase se cambia entre dos estados (0 y 180 grados) para representar "1" y "0". En QPSK (Quadrature PSK), se utilizan cuatro fases distintas para representar dos bits por cada cambio de fase, incrementando la eficiencia.</li>
                    <li><b>QAM (Quadrature Amplitude Modulation)</b>: Combina la modulación de amplitud y de fase, permitiendo transmitir varios bits por símbolo. Por ejemplo, 16-QAM utiliza 16 combinaciones diferentes de amplitud y fase, transmitiendo 4 bits por símbolo.</li>
                </ul>
                <?php
            } elseif ($section == '3.4') {
                ?>
                <p>Los códigos de línea son técnicas de codificación que transforman los datos binarios en señales adecuadas para la transmisión 
                    en un canal de comunicación.</p>

                <h3>RZ (Return to Zero)</h3>
                <p>La señal regresa a cero en la mitad del intervalo de bit, lo que proporciona sincronización pero usa más ancho de banda.</p>
                <ul>
                    <li><b>Ventajas</b>: Facilita la sincronización.</li>
                    <li><b>Desventajas</b>: Mayor uso de ancho de banda comparado con otros códigos.</li>
                    <li><b>Aplicaciones</b>: No muy común en sistemas modernos debido al ancho de banda requerido.</li>
                </ul>
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/RZcode.png" alt="RZ (Return to Zero)" style="display: block; margin: 0 auto;">
                <br>
                <img src="URZ.png" alt="URZ imagen" whidth="640" height="300" style="display: block; margin: 0 auto;">
                <br>
                <img src="PRZ.png" alt="PRZ imagen" whidth="740" height="400" style="display: block; margin: 0 auto;">

                <h3>NRZ (Non-Return to Zero)</h3>
                <p>Este código mantiene la señal en un nivel constante durante el intervalo de bit.</p>
                <ul>
                    <li><b>Tipos</b>:</li>
                    <ul>
                        <li><b>NRZ-L</b> (Level): La representación de los bits depende del nivel de voltaje.</li>
                        <li><b>NRZ-I</b> (Invertido): Cambia de nivel solo en un 1, y se mantiene en el mismo nivel para un 0.</li>
                    </ul>
                    <li><b>Ventajas</b>: Uso eficiente del ancho de banda.</li>
                    <li><b>Desventajas</b>: Problemas de sincronización si hay largas secuencias de bits iguales.</li>
                </ul>
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/NRZcode.png" alt="NRZ (Non-Return to Zero)" style="display: block; margin: 0 auto;">
                <br>
                <img src="NRZ.png" alt="NRZ imagen" height="450" style="display: block; margin: 0 auto;">
                <br>
                <img src="UNRZ.png" alt="UNRZ imagen" whidth="640" height="300" style="display: block; margin: 0 auto;">
                <br>
                <img src="PNRZ.png" alt="PNRZ imagen" whidth="640" height="300" style="display: block; margin: 0 auto;">

                <h3>AMI (Alternate Mark Inversion)</h3>
                <p>Codifica los unos con pulsos alternantes en polaridad (positiva y negativa), mientras que los ceros se representan con la ausencia de señal.</p>
                <ul>
                    <li><b>Ventajas</b>: Ayuda a mantener un balance de señal (sin componente de corriente continua).</li>
                    <li><b>Aplicaciones</b>: Sistemas de telecomunicaciones que requieren balance de carga.</li>
                </ul>
                <img src="https://slideplayer.com/slide/17887552/106/images/3/AMI+WAVEFORM.jpg" alt="AMI (Alternate Mark Inversion)" width="300" height="200" style="display: block; margin: 0 auto;">
                <br>
                <img src="AMI.png" alt="AMI imagen" height="400" style="display: block; margin: 0 auto;">

                <h3>Manchester</h3>
                <p>Cada bit tiene una transición en el medio del intervalo de bit.</p>
                <ul>
                    <li><b>Ventajas</b>: Proporciona sincronización de reloj, lo que permite una detección más precisa de bits.</li>
                    <li><b>Desventajas</b>: Utiliza más ancho de banda que NRZ.</li>
                    <li><b>Aplicaciones</b>: Común en redes de computadoras como Ethernet.</li>
                </ul>
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Manchester_code.png" alt="Manchester" style="display: block; margin: 0 auto;">
                <br>
                <img src="Manchester.png" alt="Manchester imagen" height="450" style="display: block; margin: 0 auto;">

                <h3>Manchester Diferencial</h3>
                <p>Similar al Manchester, pero las transiciones se utilizan para representar bits de forma diferente, lo que mejora la robustez 
                    contra errores de inversión de polaridad.</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Manchester_code.png" alt="Manchester diferencial" style="display: block; margin: 0 auto;">
                <br>
                <img src="ManchesterDiferencial.png" alt="Manchester Diferencial imagen" height="200" style="display: block; margin: 0 auto;">

                <h3>B8ZS (Bipolar 8-Zero Substitution)</h3>
                <p>Introduce un patrón de sustitución para evitar largas secuencias de ceros, manteniendo la sincronización.</p>
                <ul>
                    <li><b>Ventajas</b>: Mantiene la sincronización sin aumentar el ancho de banda.</li>
                    <li><b>Aplicaciones</b>: Líneas de transmisión de alta velocidad.</li>
                </ul>
                <img src="https://codes.pratikkataria.com/wp-content/uploads/2016/09/Line-coding8-700x398.jpg" alt="B8ZS (Bipolar 8-Zero Substitution)" style="display: block; margin: 0 auto;">

                <h3>HDB3 (High-Density Bipolar 3-Zero)</h3>
                <p>Similar a B8ZS, pero para líneas de transmisión europeas. Sustituye secuencias de ceros para mantener la sincronización y el balance de carga.</p>
                <img src="https://www.physicsforums.com/attachments/upload_2017-6-6_22-16-24-png.205018/" alt="HDB3 (High-Density Bipolar 3-Zero)" style="display: block; margin: 0 auto;">
            <?php
            } elseif ($section == '3.5') {
            ?>
                <h2>Módems</h2>
                <h3>¿Qué es un Módem?</h3>
                <p>Un módem, abreviatura de modulador-demodulador, es un dispositivo de comunicación que modula y demodula señales analógicas para permitir la 
                    transmisión de datos digitales a través de canales de comunicación analógicos. En términos más simples, convierte datos digitales de una 
                    computadora u otros dispositivos digitales en señales analógicas para su transmisión a través de líneas telefónicas u otros medios analógicos, 
                    y viceversa. Existen varios tipos de módems, cada uno diseñado para propósitos y tecnologías de comunicación específicos.</p>
                <h3>¿Como funciona un modem?</h3>
                <p>La computadora consiste en un dispositivo digital que funciona al encender y apagar interruptores electrónicos. Las líneas telefónicas, de lo contrario, son dispositivos análogos que envían señales como un corriente continuo. El módem tiene que unir el espacio entre estos dos tipos de dispositivos. Debe enviar los datos digitales de la computadora a través de líneas telefónicas análogas. Logra esto modulando los datos digitales para convertirlos en una señal análoga; es decir, el módem varía la frecuencia de la señal digital para formar una señal análoga continua.</p>
                <h4>TIPO DE MODEMS</h4>
                <ol>
                    <li>Módem DSL (Módem de línea de abonado digital):</li>
                    <p>Se utiliza para acceso a Internet de banda ancha de alta velocidad a través de líneas telefónicas. Los módems DSL funcionan a través de líneas telefónicas de cobre existentes y proporcionan velocidades de transferencia de datos más rápidas en comparación con los módems de acceso telefónico tradicionales.</p>
                    <p><b>EJEMPLO</b>: D-Link Wireless Ac1200 Gig Vdsl/adsl Modem $1,903 MXN.</p>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgL1ZN4RkhcneJi3ngaBM32852UTWy8Tct5vK0ZaBjKDXGBEg2W2-WBS8kF_Sej7xDcNwpXxU4aIzhlmzGQSkVPkHwOYmS5daHCiWgSSdjTIp5A12L_dtJJvCWC30qEn80Aixl-F9O2X7mcdSutiTEtB0TrdmG4CmoSizOObbT27s0El9wajH7DW8p40LsY/w578-h423/dsl.png" alt="D-Link Wireless Ac1200 Gig Vdsl/adsl Modem" style="display: block; margin: 0 auto;">
                    <li>Módem de cable:</li>
                    <p>Permite el acceso a Internet de banda ancha a través de líneas de televisión por cable. Los módems por cable utilizan la infraestructura de televisión por cable para brindar conectividad a Internet de alta velocidad.</p>
                    <p><b>EJEMPLO</b>: Módem por cable ARRIS SB8200 DOCSIS 3.1, Comcast Xfinity, Cox, Charter Spectrum- $89.99 USD</p>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhl8hL-OoAdawJrIAyVQh3MxAoTGXjD38UUxwutIQQo5-g3VJyZ4rY6aqcXeEEgnuwSsvMaXkULIe1BCfEuD7Q_vAd9iHMGyIL_U8SE3Fk5c-Xa7ZMHjqwkOy16SIrhIe1zPpPLvFAr8v8jBce5iFh3C_8ymx1J3EMJWg5CMSJl64NigZ74TQaoB5ihTdtf/w489-h498/modemcable.png" alt="Módem por cable ARRIS SB8200 DOCSIS 3.1, Comcast Xfinity, Cox, Charter Spectrum" style="display: block; margin: 0 auto;">
                    <li>Módem de acceso telefónico:</li>
                    <p>Uno de los primeros tipos de módems, los módems de acceso telefónico, establecen una conexión a Internet a través de una línea telefónica estándar. Son conocidos por sus velocidades de transferencia de datos relativamente lentas y ahora son menos comunes debido a la prevalencia de las tecnologías de banda ancha. </p>
                    <p><b>EJEMPLO</b>: MÓDEM INTERNO INTEL KB581604/02 56K PCI V.90- $7.90 USD</p>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjVYjbnGPojte7jc7TizeZ7NzBSfwnU0e_jp3DvTbTUPlkiBd3X8BJPgNOOgnOPsZ4RasDam6uyukxl7FiXJ6GQzbEs6hrOsCWTE6YouaUcTJ6R6U3Um_uks7Z7HHewGPmShqwF38Z0zR5ci4dDh6ePY6AgSuXWuLTN9XYBSDFocqXw_wYxX_3w8ZBoP4UQ/w590-h213/MODEINTERNO.png" alt="MÓDEM INTERNO INTEL KB581604/02 56K PCI V.90" style="display: block; margin: 0 auto;">
                    <li>Módem de fibra óptica:</li>
                    <p>Se utiliza para acceso a Internet de alta velocidad a través de líneas de fibra óptica. Los módems de fibra óptica convierten señales digitales en señales ópticas para su transmisión a través de cables de fibra óptica.</p>
                    <p><b>EJEMPLO</b>: TP-Link WiFi 6 AX3000 WiFi Router - 802.11ax Router, Gigabit, Dual Band, OFDMA, MU-MIMO $1,320 MXN.</p>
                    <p>Estándares de Wi-Fi: 6 IEEE 802.11ax/ac/n/a 5 GHz y IEEE 802.11ax/n/b/g 2.4 GHz</p>
                    <p>Protocolos: IPv4 y IPv6</p>
                    <p>Velocidad Gigabit Wi-Fi 6 de última generación: 2402 Mbps en 5 GHz y 574 Mbps en la banda de 2,4 GHz garantizan una transmisión más fluida y descargas más rápidas.</p>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhaUPmrLkfQU8ro-9vi0RydGknD2N5-g_47iSxcInzaL5M_vrtSXpcuSGRP-NUfwY82hBfoJwHyf4rCqEUAGsfdV8PTjCb8aNFOiaCP2MlLRYQtzy4NktFCXbzFgkoA9D6YsJf_XxU_1eqLHDLVn7vAAD1cdH4yhXWxUubRkute1nL1CSHCamppBue-P8jm/w582-h506/fibra.png" alt="TP-Link WiFi 6 AX3000 WiFi Router - 802.11ax Router, Gigabit, Dual Band, OFDMA, MU-MIMO" style="display: block; margin: 0 auto;">
                    <li>Módem inalámbrico:</li>
                    <p>Incluye varios tipos, como módems móviles y módems Wi-Fi. Los módems móviles utilizan redes móviles para el acceso inalámbrico a Internet, mientras que los módems Wi-Fi permiten la conectividad inalámbrica dentro de un área local mediante tecnología Wi-Fi.</p>
                    <p><b>EJEMPLO</b>: Quantum Bait HotSpot HS3 internet inalámbrico módem portátil mi-fi 13gb color mifi lte 4g $899 MXN.</p>
                    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhDBuk8KjgjHgDTrkNLFsdhsywnI7HTod0RPp7McOnBxSEVCZ5a1D3ieGnsJN__WVder7nyAgMfVGdQFUSlVq6v1buxPSFroTZ0dhT60-EicWrYcYascyxW-LZwKiOPIzCj6EI2xUDIdHruYQh_xofgeA5brUSVHuE6RYSLjR0Wf-uaCSweQEo21_1mJctj=w640-h304" alt="Quantum Bait HotSpot HS3 internet inalámbrico módem portátil mi-fi 13gb color mifi lte 4g" style="display: block; margin: 0 auto;">
                    <li>Módem satelital:</li>
                    <p>Facilita el acceso a Internet mediante comunicación satelital. Los módems satelitales transmiten y reciben datos hacia y desde satélites que orbitan la Tierra.</p>
                    <p><b>EJEMPLO</b>: Internet Satelital Starlink Kit Estándar Alta Velocidad $7,900 MXN. </p>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhsCMpW4iq9YycaDaWNEk4WsSv4pG-yE-70uvsBMyEjilmWHeJhmHmgsOyhTfmnXxssWhWioQDZUYm7wCxQgFfI4dx4Pr5ZtGIulf-eRw_Tcb3Av4Z0elck-bUBQfHgzdToeDOZPPivbYBMxjWlEYRffutahp6RZikKgP5NXYQkAPMB_2nKvA5TvVlEqQ5G/w545-h475/satelital.png" alt="Internet Satelital Starlink Kit Estándar Alta Velocidad" style="display: block; margin: 0 auto;">
                    <li>Módem RDSI (Módem de Red Digital de Servicios Integrados):</li>
                    <p>Se utiliza para comunicaciones digitales de alta velocidad a través de líneas telefónicas tradicionales. Los módems RDSI proporcionan velocidades de datos más rápidas en comparación con los módems de acceso telefónico. $300 USD.</p>
                    <p><b>EJEMPLO</b>: Cisco TelePresence ISDN GW 3241</p>
                    <p>Estándares de Video: H.261, H.263, H.263+, H.264.</p>
                    <p>Estándares de Audio: G.711, G.722, G.722.1, G.728, Polycom ® Siren14 ™/G.722.1 Annex C.</p>
                    <p>Otros estándares:  H.323, H.320, H.233, H.234, H.235 (AES), H.239 (dual video), H.221, FTP, RTP, HTTP, HTTPS, DHCP, SNMP, NTP</p>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhCEejnQZFKO6lVFRDOND1m_yOyc_eizxXhXHHDiJ0cNVHbtZLAW5NPnJmXbK3pFAuFk1JEoMqE30fi7yT3C51CTccAZt53SJBGsLJkVc0JOF5uxA2SpiGlQyehqY1wKYp4Mkl5hCYeojp6mTvOCeFcgG0bNMSuv-uQU1qVAOVaRjEL-N2fP4T17loZGxhD/w592-h296/rdsi.png" alt="Cisco TelePresence ISDN GW 3241" style="display: block; margin: 0 auto;">
                    <li>Módem de banda vocal:</li>
                    <p>Un tipo de módem más antiguo utilizado para comunicaciones de voz a través de líneas telefónicas. Los módems de banda vocal incluyen módems de acceso telefónico y DSL.</p>
                    <p><b>EJEMPLO</b>: Router módem ASUS DSL-N10 ADSL inalámbrico-N Wi-Fi WiFi inalámbrico ADSL inalámbrico-N- $1,049 MXN.</p>
                    <p>Estándares de Red: IEEE 802.11b, IEEE 802.11g, IEEE 802.11n, IEEE 802.3, IEEE 802.3u, IPv4</p>
                    <p>Puertos: 1 x RJ11 para ADSL 4 x RJ45 para 10/100 BaseT para LAN</p>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjgbl1QA4-q1UgiOPleBuxD5mATiajz-QSmlBKfzty3ybojboCgqZDzGkY_05tB4OW-2SxCMqNLUVXLyRtH7yeBVqGCHbhIYmTeMVUIrBf-MaF5AZIgCt8MlagIzuFx6934S_w8l9ffvH6GI5ef636TBnpbX3eNAN9uqDkJviDopd8coPDmhGLJUYZS3KK0/w635-h526/VOCAL.png" alt="Router módem ASUS DSL-N10 ADSL inalámbrico-N Wi-Fi WiFi inalámbrico ADSL inalámbrico-N" style="display: block; margin: 0 auto;">
                </ol>
                <p>La elección del módem depende del tipo específico de infraestructura de red disponible, la velocidad de transferencia de datos deseada y la aplicación prevista (por ejemplo, acceso residencial a Internet, comunicación empresarial, etc.).</p>
                <h2>Estándares</h2>
                <p>Son recomendaciones para la operación de los módems, han sido establecidas por varias organizaciones y corporaciones. Los estándares cubren la modulación y técnicas de transmisión, usados por los módems así como otros elementos de su operación.</p>
                <p>Hasta la mitad de los 80's todos los módems en Estados Unidos usaban técnicas de modulación basados en estándares de los laboratorios Bell con velocidades de 300 hasta 1200 bps. Estos son conocidos como Bell103 y Bell 212A, respectivamente.</p>
                <p>El estándar internacional es llamado ITU-T, International Telecommunications Unión-Telecommunications Sector (antes conocido como CCITT Comité Consultivo Internacional de Telegrafía y Telefonía).</p>
                <h4>Estandares de facto e internacionales</h4>
                <ul>
                    <li>V.22. Proporciona 1200 bits por segundo a 600 baudios (cambios de estado por segundo).</li>
                    <li>V.22bis. El primer estándar mundial verdadero, permite 2400 bits por segundo a 600 baudios</li>
                    <li>V.32. Proporciona 4800 y 9600 bits por segundo a 2400 baudios.</li>
                    <li>V.32bis. Proporciona 14,400 bits por segundo o baja a 12,000, 9600, 7200, y 4800 bits por segundo.</li>
                    <li>V.32terbo.. Proporciona 19,200 bits por segundo o baja a 12,000, 9600, 7200, y 4800 bits por segundo; puede operar a mayores tasas de transmisión de datos con compresión, no fue estándar de CCITT/ITU.</li>
                    <li>V.34.Proporciona 28,800 bits por segundo o baja a 24,000 y 19,200 bits por segundo y compatibilidad hacia atrás con V.32 y V.32bis.</li>
                    <li>V.34bis. Proporciona hasta 33,600 bits por segundo o baja a tasas de transferencia de 31,200 o V.34.</li>
                    <li>V.35. Interfaz troncal de paquetes entre un dispositivo de acceso a una red y una red a tasas de transmisión de datos mayores a 19.2 Kbps. El V.35 puede usar los anchos de banda de varios circuitos telefónicos como grupo. Existen Transformadores de Género y Adaptadores V.35.</li>
                    <li>V.42. La misma tasa de transferencia que V.32, V.32bis y otros estándares pero con mejor corrección de errores y por tanto más fidedigno.</li>
                    <li>V.90. Proporciona hasta 56,000 bits por segundo corriente abajo (pero algo menos en la práctica). Derivado de la tecnología x2 de 3Com (US Robotics) y la tecnología K56flex de Rockwell.</li>
                </ul>
                <h4>Estandares de control de errores</h4>
                <p>El problema de ruido puede causar pérdidas importantes de información en módem a velocidades altas, existen para ello diversas técnicas para el control de errores. Cuando se detecta un ruido en un módem con control de errores, todo lo que se aprecia es un breve inactividad o pausa en el enlace de la comunicación, mientras que si el módem no tiene control de errores lo que ocurre ante un ruido es la posible aparición en la pantalla de caracteres "basura" o, si se está transfiriendo un fichero en ese momento, esa parte del fichero tendría que retransmitirse otra vez.</p>
                <p>En algunos casos el método de control de errores está ligado a la técnica de modulación:</p>
                <ul>
                    <li>Modem Hayes V-Serie emplea modulación Hayes Express y un esquema de control errores llamado Link Access Procedure-Modem (LAP-M).</li>
                    <li>Modem US Robotics con protocolo HTS emplea una modulación y control de errores propios de US Robotics</li>
                </ul>
                <h2>Prótocolos</h2>
                <p>Los Protocolos en un ambiente de comunicación de datos sirve para dirigir la trasferencia de información entre dos entidades de comunicación.</p>
                <p>Los protocolos de transmisión son utilizados para coordinar el proceso de envío y recepción de datos y también influyen decisivamente en las velocidades que se pueden alcanzar. De manera similar, la estandarización de protocolos y métodos de conexión permiten la comunicación entre módems de diversas marcas y modelos.</p>
                <p>Los protocolos controlan todos los aspectos de la comunicación de datos, que incluye lo siguiente:</p>
                <ul>
                    <li>Cómo se construye la red física</li>
                    <li>Cómo los computadores se conectan a la red</li>
                    <li>Cómo se formatean los datos para su transmisión</li>
                    <li>Cómo se envían los datos</li>
                    <li>Cómo se manejan los errores</li>
                </ul>
                <h4>Protocolos de comprobación de errores</h4>
                <p>El control de errores: son varias técnicas mediante las cuales se chequea la fiabilidad de los bloques de datos o de los caracteres.</p>
                <ul>
                    <li>Paridad:</li>
                    <p>Función donde el transmisor añade otro bit a los que codifican un símbolo. Es paridad par, cuando el símbolo tenga un número par de bits y es impar en caso contrario. El receptor recalcula el número de par de bits con valor uno, y si el valor recalculado coincide con el bit de paridad enviado, acepta el paquete. De esta forma se detectan errores de un solo bit en los símbolos transmitidos, pero no errores múltiples.</p>
                    <li>CRC (Cyclic Redundancy Check, prueba de redundancia cíclica):</li>
                    <p>Esta técnica de detección de error consiste en un algoritmo cíclico en el cual cada bloque o trama de datos es chequeada por el módem que envía y por el que recibe. El módem que está enviando inserta el resultado de su cálculo en cada bloque en forma de código CRC.</p>
                    <li>MNP (Microcom Networking Protocol, protocolo de red Microcom):</li>
                    <p>Es un control de error desarrollado por Microcom, Inc. Este protocolo asegura transmisiones libres de error por medio de una detección de error, (CRC) y retransmisión de tramas equivocadas.</p>
                </ul>
                <h4>Protocolos de transferencia de archivos</h4>
                <ul>
                    <li>Xmodem:</li>
                    <p>Es el protocolo más popular, pero lentamente está siendo reemplazado por protocolos más fiables y más rápidos. Xmodem envía archivos en bloques de 128 caracteres al mismo tiempo. Cuando el computador que está recibiendo comprueba que el bloque ha llegado intacto, lo señala así y espera el bloque siguiente.</p>
                    <li>Xmodem-1k:</li>
                    <p>Es una pequeña variante del anteriormente mencionado, que usa bloques que poseen un kilobyte (1.024 bytes) de tamaño. Este protocolo es todavía mal llamado ‘Ymodem’ por algunos programas, pero la gente gradualmente se inclina a llamarlo correctamente.</p>
                    <li>Zmodem:</li>
                    <p>Este avanzado protocolo es muy rápido al igual que garantiza una buena fiabilidad y ofrece varias características. Zmodem usa paquetes de 1 kb en una línea limpia, pero puede reducir el tamaño del paquete según si la calidad de la línea va deteriorándose. Una vez que la calidad de la línea es recuperada el tamaño del paquete se incrementa nuevamente.</p>
                    <li>Ymodem:</li>
                    <p>Este protocolo es una variante del Xmodem, el cual permite que múltiples archivos sean enviados en una transferencia. A lo largo de ella, se guarda el nombre correcto, tamaño, y fecha del archivo. Puede usar 128 o (más comúnmente), 1.024 bytes para los bloques.</p>
                    <li>Telink:</li>
                    <p>Este protocolo es principalmente encontrado en Fido Bulletin Board Systems. Es básicamente el protocolo Xmodem usando CRC para chequear y un bloque extra enviado como cabecera del archivo diciendo su nombre, tamaño y fecha.</p>
                    <li>Kermit:</li>
                    <p>Este protocolo fue desarrollado para hacer más fácil que los diferentes tipos de computadoras intercambiasen archivos entre ellas. Casi ninguna computadora que usa Kermit puede ser configurada para enviar archivos a otra computadora que también use Kermit.</p>
                </ul>
                <h4>MARCAS MÁS RECONOCIDAS:</h4>
                <p>Cada una de estas marcas es reconocida en el mercado de equipos de redes debido a su calidad, rendimiento y confiabilidad en diferentes segmentos, desde el hogar hasta el entorno empresarial. A continuación, se explica por qué estas marcas son destacadas:</p>
                <ol>
                    <li>ASUS</li>
                    <p>Conocida por sus routers de alto rendimiento y tecnologías avanzadas para hogares y pequeñas oficinas. Ofrece características innovadoras como AiMesh (para crear redes de malla), QoS avanzado, y tecnología de gaming para reducir la latencia. Buena relación calidad-precio en el segmento de routers de alta gama para usuarios domésticos y gamers.</p>
                    <li>Linksys</li>
                    <p>Ahora propiedad de Belkin, fue una de las primeras marcas en popularizar los routers de consumo. Conocida por su facilidad de uso y diseño amigable para el usuario, especialmente para el mercado de redes domésticas. Sus routers suelen ser estables, y muchos modelos permiten configuraciones avanzadas, como redes de malla con el sistema Velop.</p>
                    <li>Huawei</li>
                    <p>Reconocida a nivel mundial, especialmente en soluciones de redes empresariales y telecomunicaciones. Se destaca por ofrecer equipos de alta calidad y con tecnología de vanguardia en redes 4G, 5G y de fibra óptica. Huawei también fabrica routers de consumo con características avanzadas, como Wi-Fi 6 y configuración remota mediante aplicaciones.</p>
                    <li>Netgear</li>
                    <p>Una marca popular en redes domésticas y pequeñas empresas, destacada por su gama de routers y dispositivos de almacenamiento en red (NAS). Sus modelos Nighthawk y Orbi (para redes de malla) son muy valorados por su rendimiento en conexiones de alta velocidad y características avanzadas. Ofrece soluciones de red fáciles de instalar y administrar, junto con opciones para usuarios avanzados.</p>
                    <li>Cisco</li>
                    <p>Es líder en soluciones de redes empresariales y profesionales, siendo la opción de referencia para grandes organizaciones y centros de datos. Ofrece productos de alta confiabilidad, seguridad avanzada y soporte técnico sólido, orientados a entornos críticos de redes. Aunque su línea de productos domésticos (Linksys) fue vendida, sigue ofreciendo soluciones de nivel empresarial como switches, routers, y firewalls de alto rendimiento.</p>
                </ol>
                <p>Cada marca sobresale en un segmento particular, ya sea para usuarios domésticos, gamers, pequeñas empresas o grandes corporaciones. La elección depende del tipo de usuario y de las necesidades de la red, pero estas marcas son líderes en sus respectivos nichos debido a su innovación y fiabilidad. </p>
                <h4>LOS 5 MEJORES MÓDEMS PARA INTERNET GIGABIT</h4>
                <p>Estos módems están considerados como los mejores para conexiones de internet gigabit debido a su rendimiento, confiabilidad y características específicas que se adaptan a distintas necesidades.</p>
                <ol>
                    <li>Mejor en general: Motorola MB8600</li>
                    <ul>
                        <li><b>Rendimiento</b>: Este módem ofrece velocidades de hasta 1 Gbps y soporta conexiones DOCSIS 3.1, que es esencial para aprovechar las velocidades de internet gigabit.</li>
                        <li><b>Estabilidad y confiabilidad</b>: Motorola tiene una sólida reputación por fabricar módems de alta calidad y durabilidad.</li>
                        <li><b>Seguridad avanzada</b>: Incluye tecnología de seguridad que ayuda a proteger la red contra ataques de denegación de servicio (DoS), lo cual es importante para mantener una conexión estable.</li>
                    </ul>
                    <li>Mejor valor: ARRIS SURFboard SB8200</li>
                    <ul>
                        <li><b>Costo-beneficio</b>: Este módem es una opción accesible para aquellos que buscan alta velocidad sin pagar un precio excesivo.</li>
                        <li><b>Compatibilidad</b>: Es compatible con la mayoría de los principales proveedores de cable, lo que lo hace fácil de integrar.</li>
                        <li><b>Velocidad y eficiencia</b>: Soporta hasta 2 Gbps en conexiones agregadas, lo cual es ideal para hogares que requieren una conexión rápida y estable sin costos adicionales.</li>
                    </ul>
                    <li>Mejor para gaming: NETGEAR Nighthawk CM2000</li>
                    <ul>
                        <li><b>Optimización para gaming</b>: Ofrece bajas latencias, que es esencial para juegos en línea en tiempo real. También tiene un potente procesador que ayuda a reducir la congestión y optimizar el tráfico.</li>
                        <li><b>Alto rendimiento</b>: Con DOCSIS 3.1, este módem está diseñado para manejar grandes volúmenes de datos y es compatible con velocidades de internet superiores a 1 Gbps, ideal para gaming.</li>
                        <li><b>Estilo y diseño</b>: La línea Nighthawk de NETGEAR también es conocida por su estética y por ofrecer opciones avanzadas de configuración.</li>
                    </ul>
                    <li>Mejor para negocios: NETGEAR Nighthawk CM1200</li>
                    <ul>
                        <li><b>Fiabilidad para el entorno profesional</b>: Está diseñado para pequeñas empresas y usuarios profesionales que necesitan una conexión estable y segura durante todo el día.</li>
                        <li><b>Soporte para múltiples dispositivos</b>: Puede gestionar altas demandas de tráfico y es compatible con redes locales robustas.</li>
                        <li><b>Opciones de configuración avanzada</b>: Ofrece características que permiten una mejor administración de la red, ideal para empresas. </li>
                    </ul>
                    <li>Mejor con Wi-Fi: ARRIS SURFboard SBG8300</li>
                    <ul>
                        <li><b>Módem y router en uno</b>: Combina un módem DOCSIS 3.1 con un router Wi-Fi AC2350, eliminando la necesidad de tener dos dispositivos separados.</li>
                        <li><b>Cobertura Wi-Fi de alta velocidad</b>: Ofrece velocidades de Wi-Fi adecuadas para conexiones gigabit, lo cual es ideal para hogares donde se necesita Wi-Fi rápido y estable.</li>
                        <li><b>Fácil configuración y gestión</b>: Con la aplicación ARRIS SURFboard, es fácil de configurar y administrar, lo que lo hace accesible para usuarios domésticos que prefieren un solo dispositivo para la red.</li>
                    </ul>
                    <p>Cada uno de estos módems es excelente en su categoría porque ofrece características específicas que cubren distintas necesidades: desde velocidad y rendimiento hasta estabilidad para juegos y negocios, y opciones con Wi-Fi para aquellos que buscan simplificar la instalación en casa.</p>
                </ol>
            <?php
            } elseif ($section == 'osi') {
            ?>
                <h2>Modelo OSI</h2>
                    <p>OSI (Open System Interconnection), creado en 1984 por ISO (Organización Internacional para la Estandarización), es otro de los estándares definidos para llevar a cabo la comunicación a nivel de red. Este coincide en su finalidad con TCP/IP, es decir, definir el proceso necesario para que los datos generados en un origen sean transportados, recibidos y legibles por el destinatario de los mismos.</p>
                    <p>Una de las principales diferencias entre ambos modelos consiste en el número de capas utilizadas para lograr su objetivo, mientras que TCP/IP hace uso de 4, OSI implementa 7, siendo las siguientes:</p>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK68MrJ_Um2TzmIiLLI0H8lz2XiaJ9yBoxUg&s" alt="Niveles OSI" height="450" style="display: block; margin: 0 auto;">
                    <p>El emisor genera los datos en la capa de aplicación y son enviados de manera sucesiva hacia las capas inferiores, en las cuales se aplicará el encapsulamiento necesario, agregando la cabecera correspondiente en cada una de ellas para posteriormente ser enviados al medio.</p>
                    <p>En el destino, el receptor analiza la información de manera ascendente, des encapsulando la información previamente agregada por el origen. Este proceso concluye en la capa 7 obteniendo los datos originales generados por el emisor.</p>
                    <img src="1.png" alt="Proceso de comunicacion en el modelo OSI" height="450" style="display: block; margin: 0 auto;">
                    <p>Además, y al igual que ocurre en TCP/IP, a medida que los datos atraviesan las diferentes capas son reconocidos mediante su propia PDU (Protocol Data Unit), siendo, en el modelo OSI, las siguientes:</p>
                    <table class="style-table">
                        <thead>
                            <tr>
                                <th>Capa</th>
                                <th>PDU</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>7 Aplicación</th>
                                <th>Datos</th>
                            </tr>
                            <tr>
                                <th>6 Presentación</th>
                                <th>Datos</th>
                            </tr>
                            <tr>
                                <th>5 Sesión</th>
                                <th>Datos</th>
                            </tr>
                            <tr>
                                <th>4 Transporte</th>
                                <th>Segmento</th>
                            </tr>
                            <tr>
                                <th>3 Red</th>
                                <th>Paquete</th>
                            </tr>
                            <tr>
                                <th>2 Enlace de datos</th>
                                <th>Trama (o Frame)</th>
                            </tr>
                            <tr>
                                <th>1 Física</th>
                                <th>Bits</th>
                            </tr>
                        </tbody>
                    </table>
                    <p>Una PDU simplemente es la nomenclatura utilizada para identificar la capa en la que se están procesando los datos, y con ello, la información manipulada.</p>
                    <p>En OSI, las capas de transporte, red, enlace de datos y física son consideradas "capas de red", mientras que aplicación, presentación y sesión, "capas de host". Cada una de ellas desarrolla una finalidad única, complementándose entre sí y realizando prácticamente las mismas funciones que en TCP/IP.</p>
                    <h3>CAPA 7-APLICACIÓN</h3>
                        <p>Es la más cercana al usuario y proporciona la interactividad de este con la red. Se encarga de proveer servicio al software instalado en el dispositivo, brindándole los protocolos necesarios para llevar a cabo la comunicación. Para ello, hace uso del modelo cliente-servidor, donde el dispositivo que inicia la solicitud es el cliente y el que la recibe el servidor.</p>
                        <p>Algunos de los protocolos más conocidos presentes en esta capa son:</p>
                        <table class="style-table">
                            <thead>
                                <tr>
                                    <th>Protocolo</th>
                                    <th>Función</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>DNS</th>
                                    <th>Resolución de nombres de hosts a direcciones IP.</th>
                                </tr>
                                <tr>
                                    <th>HTTP</th>
                                    <th>Transferencia de páginas web.</th>
                                </tr>
                                <tr>
                                    <th>SMTP</th>
                                    <th>Envío de emails.</th>
                                </tr>
                                <tr>
                                    <th>POP</th>
                                    <th>Recepción de emails.</th>
                                </tr>
                                <tr>
                                    <th>FTP</th>
                                    <th>Transferencia de ficheros.</th>
                                </tr>
                                <tr>
                                    <th>DHCP</th>
                                    <th>Proporciona a los hosts configuración automática de red.</th>
                                </tr>
                                <tr>
                                    <th>TELNET</th>
                                    <th>Conexiones virtuales para acceso remoto.</th>
                                </tr>
                            </tbody>
                        </table>
                    <h3>CAPA 6 - PRESENTACIÓN</h3>
                        <p>Se encarga de aplicar la conversión y codificación necesaria a los datos para que estos puedan ser legibles por el destino. Por ejemplo, definir el formato necesario a una determinada imagen (JPG, BMP, etc.).</p>
                    <h3>CAPA 5-SESIÓN</h3>
                        <p>La capa de sesión establece, administra y finaliza las sesiones entre un origen y un destino.</p>
                    <h3>CAPA 4-TRANSPORTE</h3>
                        <p>La capa 4 comienza a aplicar y definir funciones a nivel de red. Es la encargada de diferentes procesos, entre los que se encuentran el control de flujo, la identificación de aplicaciones, segmentación y re-ensamblaje.</p>
                        <p>El control de flujo consiste en el seguimiento de la comunicación entre el origen y el destino.</p>
                        <p>La identificación de aplicaciones es el proceso mediante el cual el dispositivo que recibe los datos conoce el software al cual va dirigida la comunicación. Esta función es posible gracias a la utilización de puertos, los cuales hacen referencia a un valor numérico comprendido entre 0 y 65535 destinado a identificar de manera única a cada una de las aplicaciones ejecutadas en el sistema. Por ejemplo, HTTP utiliza por defecto el puerto 80... cuando un cliente solicita una web a un servidor, incluirá este como destino, de tal manera que el servidor, al recibirlo, lo leerá y reenviará al software oportuno para que responda con el documento solicitado.</p>
                        <img src="2.png" alt="Identificacion de aplicaciones mediante numero de puerto" height="450" style="display: block; margin: 0 auto;">
                        <p>Esta función resulta de extrema importancia ya que sin ella la transferencia de datos no podría llevarse a cabo. En el ejemplo, el servidor ejecuta tres servicios. Cuando recibe una solicitud, ¿a cuál de ellos debe reenviarla? Gracias a que el origen ha indicado que el puerto de destino es el 80, el servidor la redirigirá al servicio web.</p>
                        <p>Los puertos son clasificados en dos tipos, bien conocidos, que son aquellos reservados para servicios y protocolos ampliamente utilizados a nivel mundial y a su vez registrados exclusivamente para ello, y dinámicos, los cuales identifican números de puerto aleatorios utilizados mayormente por los clientes para recibir la respuesta del servicio solicitado. En el ejemplo, cuando el servidor responda a la solicitud HTTP, ¿qué puerto de destino incluirá? En este caso el 55301, ya que el mismo ha sido seleccionado aleatoriamente por la aplicación del cliente (navegador web) para dicha comunicación.</p>
                        <p>Algunos ejemplos de puertos bien conocidos son:</p>
                        <table class="style-table">
                            <thead>
                                <tr>
                                    <th>Protocolo</th>
                                    <th>Número de puerto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>DNS</th>
                                    <th>Puertos TCP y UDP 53</th>
                                </tr>
                                <tr>
                                    <th>HTTP</th>
                                    <th>Puerto TCP 80</th>
                                </tr>
                                <tr>
                                    <th>SMTP</th>
                                    <th>Puerto TCP 25</th>
                                </tr>
                                <tr>
                                    <th>POP</th>
                                    <th>Puerto TCP 110</th>
                                </tr>
                                <tr>
                                    <th>FTP</th>
                                    <th>Puertos 20 y 21 TCP</th>
                                </tr>
                                <tr>
                                    <th>DHCP</th>
                                    <th>Puertos UDP 67 y 68</th>
                                </tr>
                                <tr>
                                    <th>TELNET</th>
                                    <th>Puerto TCP 23</th>
                                </tr>
                            </tbody>
                        </table>
                        <p>Otra de las funciones de la capa de transporte consiste en la segmentación y reensamblaje. Esta tarea es necesaria ya que la mayoría de redes poseen una limitación en cuanto al número total de bytes que puede contener cada PDU. En el origen, la capa 4 segmenta los datos en bloques de un tamaño adecuado para que la transmisión pueda llevarse a cabo. En el destino, la misma los reensambla y ordena antes de enviarlos a la aplicación o servicio de destino.</p>
                        <p>Por último, los protocolos que pueden ser aplicados en esta capa son TCP o UDP, ambos con características propias que serán analizadas en detalle a lo largo de este mismo capítulo.</p>
                    <h3>CAPA 3-RED</h3>
                        <p>La capa de red del modelo OSI equivale a la capa de Internet de TCP/IP, desarrollando ambas las mismas funciones, basadas principalmente en ejecutar el direccionamiento lógico desde el origen hasta el destino. Para ello, y dependiendo del tipo de red, se hace uso de diferentes protocolos, como IPv4, IPv6, IPX o AppleTalk, siendo el más común IPv4 y en el futuro IPv6. Independientemente de este, la función a realizar de todos ellos coincide, y consiste en agregar a los segmentos provenientes de la capa 4 la cabecera necesaria para que los datos puedan ser enrutados hacia su destino, la cual incluirá las direcciones de origen y destino, ambas lógicas y únicas tanto a nivel local (LAN) como global (Internet).</p>
                        <p>Además, también se incluye el campo TTL (Time to Live), compuesto por un valor numérico que establece el total de saltos que puede dar el paquete y disminuyendo su valor en 1 cada vez que atraviesa un router. Por ejemplo, si su valor es igual a 3 y el paquete tiene que atravesar 5 routers para llegar a su destino, cuando sea recibido por el cuarto será descartado porque su valor TTL es igual a 0.</p>
                        <p>Por último, el dispositivo por excelencia en esta capa es el router.</p>
                    <h3>CAPA 2-ENLACE DE DATOS</h3>
                        <p>Una vez concluido el proceso de encapsulación en capa 3 el paquete es enviado a capa 2, que desarrolla dos funciones principales: primero, aplica el protocolo necesario en relación con el medio físico disponible, y segundo, ejecuta las técnicas necesarias de control de acceso al medio. Para ello divide su modo de operar en dos subcapas, LLC y МАС.</p>
                        <ul>
                            <li>LLC (Logical Link Control): su misión consiste en identificar el protocolo aplicado en capa 3 y convertir el paquete en trama.</li>
                            <li>MAC (Media Access Control): agrega las direcciones físicas del origen y destino de la comunicación (direcciones MAC), controla el acceso al medio mediante diferentes técnicas y dispone funciones de control de flujo y detección de errores.</li>
                        </ul>
                        <p>El control de acceso al medio se encarga de examinar el medio físico antes de proceder al envío de datos, con el objetivo de que no se produzcan colisiones y la transmisión resulte fiable. Para lograrlo se puede hacer uso de dos técnicas, CSMA/CD O CSMA/CA.</p>
                        <ul>
                            <li>En CSMA/CD el dispositivo monitoriza el medio físico en busca de una señal de datos. Si no la detecta significa que está libre, por lo tanto comienza a transmitir. Sin embargo, aun así es posible que se produzcan colisiones. En estos casos todos los dispositivos detienen el envío para volverlo a intentar pasado un tiempo aleatorio definido por cada uno de ellos. Esta técnica es la aplicada mayormente en redes Ethernet.</li>
                            <li>CSMA/CA resulta bastante similar en cuanto a modo de operar pero agrega una pequeña característica, que consiste en el envío de una notificación antes de transmitir datos. Es decir, primero se examina el medio en busca de alguna señal, y si está libre, envía una notificación informando al resto de dispositivos su intención de utilizarlo. Esta técnica es la aplicada generalmente en tecnologías inalámbricas 802.11.</li>
                        </ul>
                        <p>Tanto CSMA/CD como CSMA/CA se aplican en medios compartidos como Ethernet o inalámbricos. En conexiones punto a punto la utilización de estas técnicas no es necesaria ya que ambos extremos del enlace negocian el modo de transferencia antes de llevarla a cabo, por lo que resulta casi imposible que se produzcan colisiones. Estas conexiones pueden ser de dos tipos, half-duplex o full-duplex. En la primera solo un dispositivo puede transmitir; si uno envía, el otro recibe, y viceversa. Mientras, en la segunda ambos pueden realizar las dos funciones de manera simultánea a través del mismo medio.</p>
                        <p>Por último, la trama creada incluirá una nueva cabecera y tráiler, y con ella queda definido el formato final de los datos que serán transmitidos, el cual varía en función del protocolo aplicado, que a su vez depende del medio físico. Los más comunes son:</p>
                        <ul>
                            <li>IEEE 802.3 (Ethernet)</li>
                            <li>IEEE 802.5 (Token Ring)</li>
                            <li>IEEE 802.11 (Wireless)</li>
                            <li>ITU Q.922 (Frame Relay)</li>
                            <li>ITU Q.921 (ISDN)</li>
                            <li>ITU HDCL (Control de enlace de datos de alto nivel)</li>
                        </ul>
                        <p>El dispositivo de red por excelencia en capa 2 es el switch.</p>
                        <p>La gran mayoría de protocolos de enlace de datos, incluido Ethernet, permiten un máximo de 1500 bytes recibidos desde capa 3. Este tamaño es denominado MTU (Maximum transmission unit).</p>
                    <h3>CAPA 1 - FÍSICA</h3>
                        <p>La capa 1 es aquella que conecta directamente con los medios para realizar el envío de datos, desarrollando principalmente tres funciones: identificación de componentes físicos, codificación y señalización.</p>
                        <p>La identificación de componentes hace referencia al tipo de cableado, conectores, circuitos, señales inalámbricas, etc. En definitiva, el medio disponible para transportar los bits que conforman la trama desde el origen hasta el destino. Los más comunes son el cobre, fibra o inalámbricos.</p>
                        <p>La codificación es la técnica aplicada para transformar los datos en bits. Este hecho resulta importante, ya que la capa física no transporta tramas, ni paquetes, simplemente transfiere bits. Además, también se encarga de agrupar los mismos mediante algún tipo de patrón predecible que sea reconocido tanto por el emisor como por el receptor.</p>
                        <p>Una vez codificados los datos, deben ser señalizados. Esta tarea consiste en representar los bits "0" y "1" en el medio físico, aplicando para ello diferentes estándares como NRZ o Manchester. De tal manera que:</p>
                        <img src="3.png" alt="Transmision a traves del medio fisico" height="450" style="display: block; margin: 0 auto;">
                        <p>Dependiendo del medio físico disponible la transferencia podrá llevarse a cabo a diferentes velocidades. Esta puede ser medida con relación a tres conceptos: ancho de banda, rendimiento y capacidad de transferencia útil.</p>
                        <ul>
                            <li>El ancho de banda se refiere a la capacidad total que posee un medio para transportar datos.</li>
                            <li>El rendimiento es la velocidad real de transferencia. Generalmente no coincide con el ancho de banda debido a diferentes factores entre los que se encuentran el volumen, el tipo de tráfico que atraviesa la red o la cantidad de dispositivos conectados a ella.</li>
                            <li>La capacidad de transferencia útil puede ser entendida como la medida y velocidad de transferencia de los datos generados en la capa de aplicación (eliminando la sobrecarga del tráfico generado por las encapsulaciones, acuses de recibo, establecimiento de sesiones, etc.) durante un periodo de tiempo determinado.</li>
                        </ul>
                <h2>Bibliografía:</h2>
                    <ul>
                        <li>Pérez Torrez, Daniel. (2018). Redes CISCO. Curso práctico de formación para la certificación CCNA. Alfaomega Primera Edición. Pag 10 a 17.</li>
                    </ul>
                <a href="OSI.pdf">PDF de los niveles del modelo OSI</a>
            <?php
            } elseif ($section == 'tcpip') {
            ?>
                <h2>Modelo TCP/IP</h2>
                    <p>TCP/IP es considerado el estándar por excelencia para llevar a cabo la comunicación en redes informáticas. Su función consiste en definir el procedimiento necesario para que los datos generados en el origen sean entregados y legibles en el destino. Para lograrlo hace uso de diferentes protocolos, cada uno de ellos con una función específica, las cuales serán analizadas a lo largo del capítulo.</p>
                    <p>Una manera de comprenderlo mejor es comparándolo con la telefonía. Si en nuestro hogar disponemos de un teléfono antiguo y lo sustituimos por otro de última generación, al conectarlo a la línea telefónica permitirá realizar y recibir llamadas de la misma manera que el anterior, no serían necesarias ni configuraciones especiales ni la sustitución del cableado. Ello es posible gracias a que ambos hacen uso de los mismos protocolos de comunicación, los cuales han sido definidos y aprobados para su aplicación a nivel mundial. Lo mismo ocurre con TCP/IP, cualquier dispositivo que haga uso de él podrá comunicarse con otros que también lo hagan sin importar el fabricante, el modelo o el lugar donde se encuentren.</p>
                    <p>Como otros estándares de red, TCP/IP basa su modo de operar en capas, cada una de ellas con una función específica e incluyendo los protocolos necesarios para poder Ilevar a cabo diferentes tipos de comunicación. Estas son:</p>
                    <img src="4.png" alt="Asociacion de capas TCP/IP y sus protocolos" height="450" style="display: block; margin: 0 auto;">
                    <p>En relación con las mismas queda definida la comunicación entre dos sistemas, llevando a cabo siempre el mismo procedimiento, donde los datos son generados en la capa de aplicación y enviados sucesivamente hacia las capas inferiores, aplicando cada una de ellas el protocolo correspondiente. Una vez finalizado el proceso, dichos datos son enviados al medio y recibidos por el destinatario.</p>
                    <p>Una de las grandes ventajas de TCP/IP es que es un estándar abierto, de tal manera que, si fuera necesaria la inclusión de algún nuevo protocolo, podría llevarse a cabo sin problema. Un claro ejemplo de ello fue la aparición de Word Wide Web (www), hecho que conllevó agregar HTTP en la capa de aplicación, cuyo propósito consiste en enviar solicitudes a servidores web para que estos respondan con el contenido requerido.</p>
                    <p>El proceso y las funciones llevadas a cabo en cada una de las capas son los siguientes.</p>
                    <h3>CAPA DE APLICACIÓN</h3>
                        <p>Es la encargada de brindar los protocolos necesarios a servicios o aplicaciones para que estos puedan iniciar el proceso de comunicación en red. Para una mejor comprensión, tomaremos como ejemplo el intercambio de mensajes entre un cliente y un servidor web, con el fin de analizar cómo son manipulados los datos en cada una de las capas para luego ser enviados al medio.</p>
                        <p>En este caso el proceso lo inicia el cliente a través de un navegador, por ejemplo, Firefox, haciendo uso del protocolo HTTP en la capa de aplicación. ¿Qué sucede cuando un dispositivo desea enviar una solicitud a un servidor web? Realmente lo que se generan son una serie de mensajes definidos por el propio protocolo, con el fin de que ambos sistemas se "entiendan", logrando con ello que la comunicación concluya con éxito. En el lado del cliente se generan mensajes GET, mientras que el servidor responde a estos mediante algún código (como el 200, con significado OK), además entra en juego otro protocolo, HTML, que define el formato de la página que se enviada.</p>
                        <p>La comunicación a nivel de capa de aplicación sería la siguiente...</p>
                        <img src="5.png" alt="Proceso inicial de comunicacion HTTP, capa de aplicación" height="200" style="display: block; margin: 0 auto;">
                        <p>Donde el navegador ha solicitado el documento "home.htm" y ha obtenido como respuesta el código 200. Ello significa que efectivamente dicho documento se encuentra almacenado en el servidor, que será enviado posteriormente. Cualquier otra circunstancia daría como resultado la generación de otro código, siendo el más común el 404, utilizado para indicar que el contenido solicitado no se encuentra disponible (Page not Found).</p>
                        <p>En HTTP, el cliente genera una cabecera, que incluye información y datos propios de la capa de aplicación. Esta será recibida, analizada y respondida por su homóloga en el destino. Este modo de operar también se aplica a las diferentes capas, es decir, los datos agregados por cada una de ellas solo serán analizados y comprendidos por la misma en ambos sistemas (cliente y servidor).</p>
                        <p>La capa de aplicación no identifica al software en sí, sino los protocolos que se ejecutan en él.</p>
                    <h3>CAPA DE TRANSPORTE</h3>
                        <p>Una vez la capa de aplicación ha generado sus datos estos son enviados a la capa de transporte, la cual provee diferentes funciones, entre las que se encuentra identificar la aplicación a la que va dirigida la comunicación. Para ello hace uso de dos protocolos, TCP (Transmission Control Protocol) y UDP (User datagram Protocol), ambos analizados en profundidad en este mismo capítulo.</p>
                        <p>Continuando con el ejemplo web. ¿Qué ocurriría si la solicitud enviada por el cliente no es recibida por el servidor, o viceversa? ¿Cómo sabe un dispositivo que sus datos han sido recibidos por el destinatario? TCP/IP necesita un mecanismo que garantice la entrega de datos de manera fiable de extremo a extremo. Este servicio es requerido por gran parte de las aplicaciones de red y de ello también se encarga la capa de transporte, más concretamente el protocolo TCP, que provee recuperación de errores mediante el uso de paquetes ACK (acknowledgments), basándose en una lógica bastante sencilla para lograrlo:</p>
                        <p>Cuando el origen hace uso de TCP, para cada paquete enviado se espera una respuesta de confirmación de recepción por parte del destinatario, la cual se lleva a cabo mediante un mensaje ACK.</p>
                        <p>Si transcurrido un tiempo no es recibido dicho ACK, el origen reenvía los datos.</p>
                        <p>Aplicado al ejemplo:</p>
                        <img src="6.png" alt="Comunicacion TCP, capa de transporte" height="450" style="display: block; margin: 0 auto;">
                        <p>Si tanto cliente como servidor no hubieran recibido alguno de los ACK de confirmación, TCP reenviaría los datos nuevamente.</p>
                        <p>En este proceso se demuestra cómo un protocolo de la capa de aplicación como HTTP puede servirse de otro de la capa de transporte para agregar fiabilidad y control sobre la comunicación. Ello establece una interacción entre capas adyacentes, de tal manera que todas ellas se complementan.</p>
                        <p>Hasta ahora han sido mencionados dos conceptos que no pueden confundirse: interacción entre la misma capa en diferentes dispositivos e interacción entre capas adyacentes. La primera hace referencia a que los protocolos e información generada en una capa en el origen tan solo será analizada y comprendida por su homóloga en el destino. Mientras, la segunda se refiere a que las distintas capas en un mismo dispositivo se complementan, agregando entre todas ellas las cabeceras necesarias para que la comunicación pueda llevarse a cabo.</p>
                    <h3>CAPA DE INTERNET</h3>
                        <p>La capa de Internet, que se basa mayormente en el protocolo IP, es la encargada de agregar la información necesaria a los datos para que estos puedan ser enviados al destino correcto. Esta tarea se lleva a cabo gracias a las direcciones IP, las cuales identifican a cada uno de los miembros ubicados en la red.</p>
                        <p>Imagina que deseas establecer una llamada telefónica, pero desconoces el número de destino. Sin él sería imposible realizarla. Lo mismo ocurre con los datos, requieren una dirección para que la comunicación concluya con éxito.</p>
                        <p>Continuando con el ejemplo anterior, supongamos que el cliente dispone la IP 10.10.10.10 y el servidor la 20.20.20.20.</p>
                        <img src="7.png" alt="Direccionamiento IP, capa de internet" height="450" style="display: block; margin: 0 auto;">
                        <p>En relación con la información incluida en esta capa, el router (en este caso R1) llevará a cabo el proceso de enrutamiento, mediante el cual toma la decisión de reenvío más adecuada para que los datos sean recibidos por el destinatario de la comunicación.</p>
                    <h3>CAPA DE ACCESO A LA RED</h3>
                        <p>Por último, el acceso a la red define el procedimiento y hardware necesario para que la entrega de datos de un extremo a otro pueda llevarse a cabo a través del medio físico disponible. Esta capa incluye una gran variedad de protocolos, que dependerán del tipo de red y conexiones, por ejemplo, para entornos LAN lo más común es aplicar Ethernet, sin embargo, en WAN resulta necesario PPP o HDLC, entre otros.</p>
                        <p>Es la última capa que atraviesan los datos antes de ser enviados al medio, por lo que debe definir el formato final de estos. Para ello, además de agregar una nueva cabecera al inicio, también incluye un tráiler al final.</p>
                        <p>Aplicado al ejemplo, y haciendo uso de una red LAN Ethernet (ETH):</p>
                        <img src="8.png" alt="Envio de datos, capa de acceso a la red" height="450" style="display: block; margin: 0 auto;">
                        <p>Diferentes libros y webs de documentación dividen la capa de acceso a la red de TCP/IP en dos subcapas, enlace de datos (LLC) y física. Ello es debido a la comparación con el modelo OSI, el cual será objeto de estudio a continuación.</p>
                        <h4>PROCESO DE ENCAPSULACIÓN Y ENVÍO DE DATOS</h4>
                            <p>Como se ha analizado, cada capa agrega una cabecera con información específica a los datos. Este proceso es conocido como encapsulación, y puede ser resumido de la siguiente manera:</p>
                            <ul>
                                <li>Paso 1: Los datos generados por el software son recibidos por la capa de aplicación, que ejecutará el protocolo necesario sobre los mismos. En el ejemplo de comunicación web, HTTP.</li>
                                <li>Paso 2: Una vez concluido son enviados a la capa de transporte, que agrega una nueva cabecera con información propia del protocolo aplicado. TCP, en el caso del ejemplo anterior.</li>
                                <li>Paso 3: En la capa de Internet se identifican las direcciones de origen y destino, incluidas en una nueva cabecera IP.</li>
                                <li>Paso 4: Por último, la capa de acceso a la red establece el formato final de los datos gracias a la cabecera y tráiler correspondientes. Comúnmente Ethernet (ETH) en redes LAN.</li>
                                <li>Paso 5: Tras todo ello, son generadas las señales necesarias para su posterior transmisión a través del medio físico correspondiente (cobre, fibra, wireless...).</li>
                            </ul>
                            <img src="9.png" alt="Proceso de encapsulación en TCP/IP" height="200" style="display: block; margin: 0 auto;">
                            <p>LH (Link Header) y LT (Link Trailer) corresponden a la cabecera y al tráiler.</p>
                            <p>Además, los datos, a medida que atraviesan las diferentes capas, reciben un nombre específico, siendo los siguientes:</p>
                            <img src="10.png" alt="Asociacion entre capas y nombre de PDU en TCP/IP" height="200" style="display: block; margin: 0 auto;">
                <h2>Bibliografía:</h2>
                    <ul>
                        <li>Pérez Torrez, Daniel. (2018). Redes CISCO. Curso práctico de formación para la certificación CCNA. Alfaomega Primera Edición. Pag 3 a 10.</li>
                    </ul>
                <a href="TCP_IP.pdf">PDF de niveles del modelo TCP/IP</a>
            <?php
            } elseif ($section == 'cloud') {
            ?>
                <h2>TECNOLOGÍA CLOUD</h2>
                    <p>Cloud Computing permite alquilar tecnologías de la información en lugar de comprarlas. Las empresas pueden acceder a su capacidad de computación a través de Internet, o la nube, y pagar según el uso. Los servicios en la nube incluyen servidores, almacenamiento, bases de datos, redes, software, análisis e inteligencia empresarial.</p>
                    <h3>Beneficios</h3>
                        <p>¿Cuáles son los beneficios de la computación en la nube?</p>
                        <b>Flexibilidad</b>
                            <ul>
                                <li>Escalabilidad: la infraestructura en la nube se escala según demanda para admitir cargas de trabajo fluctuantes.</li>
                                <li>Opciones de almacenamiento: los usuarios pueden elegir soluciones de almacenamiento público, privado o híbrido, según las necesidades de seguridad y otras consideraciones.</li>
                                <li>Opciones de control: las organizaciones pueden determinar su nivel de control con opciones como servicio. Estas incluyen software como servicio (SaaS), plataforma como servicio (PaaS) e infraestructura como servicio (IaaS).</li>
                                <li>Selección de herramientas: los usuarios pueden seleccionar de un menú de herramientas y características prediseñadas para crear una solución que se adapte a sus necesidades específicas.</li>
                                <li>Características de seguridad: la nube privada virtual, el cifrado y las claves de API ayudan a mantener la seguridad de los datos.</li>
                            </ul>
                        <b>Eficiencia</b>
                            <ul>
                                <li>Accesibilidad: las aplicaciones y los datos basados en la nube son accesibles desde prácticamente cualquier dispositivo conectado a Internet.</li>
                                <li>Velocidad de comercialización: el desarrollo en la nube permite que los usuarios lancen rápidamente sus aplicaciones al mercado.</li>
                                <li>Seguridad de datos: los fallos de hardware no provocan la pérdida de datos, gracias a las copias de seguridad en la red.</li>
                                <li>Ahorro en equipos: la computación en la nube utiliza recursos remotos, lo que ahorra a las organizaciones el costo de los servidores y otros equipos.</li>
                                <li>Estructura de pago: una estructura de pago de "utilidad" significa que los usuarios solo pagan por los recursos que utilizan.</li>
                            </ul>
                        <b>Valor estratégico</b>
                            <ul>
                                <li>Trabajo simplificado: los proveedores de servicios en la nube (CSP) gestionan la infraestructura subyacente, lo que permite a las organizaciones centrarse en el desarrollo de aplicaciones y otras prioridades.</li>
                                <li>Actualizaciones periódicas: los proveedores de servicios actualizan regularmente las soluciones para ofrecer a los usuarios la tecnología más actualizada.</li>
                                <li>Colaboración: el acceso global significa que los equipos pueden colaborar desde distintas ubicaciones.</li>
                                <li>Ventaja competitiva: las organizaciones pueden moverse con mayor agilidad que los competidores, que deben dedicar recursos de TI a la gestión de la infraestructura.</li>
                            </ul>
                    <h3>Tres pilares importantes del Cloud Computing</h3>
                        <p>La funcionalidad en la nube está habilitada por la convergencia de tres tecnologías clave: Internet, centros de datos distribuidos y virtualización.</p>
                        <p><b>Internet</b>: Internet proporciona una infraestructura de red global que permite un acceso generalizado a los servicios en la nube. Permite a los usuarios acceder y utilizar remotamente recursos informáticos, almacenamiento y aplicaciones desde cualquier lugar y en cualquier momento.</p>
                        <p><b>Centros de Datos Distribuidos</b>: Los centros de datos distribuidos, también conocidos como centros de datos en la nube, están ubicados estratégicamente en todo el mundo para proporcionar acceso de baja latencia y alta disponibilidad a los servicios en la nube. Estos centros de datos están diseñados para ser altamente escalables, redundantes y tolerantes a fallas, lo que garantiza que los recursos de la nube estén siempre disponibles y puedan aprovisionarse o desaprovisionarse rápidamente según sea necesario.</p>
                        <p><b>Virtualización</b>: La tecnología de virtualización permite que múltiples servidores virtuales (VM) se ejecuten en un solo host físico, lo que aumenta la utilización del hardware y reduce la necesidad de infraestructura física. La virtualización también proporciona:</p>
                        <ol>
                            <li><b>Abstracción</b>: La virtualización abstrae el hardware físico, permitiendo que múltiples VMs compartan los mismos recursos (CPU, memoria, almacenamiento) sin ser conscientes de la presencia de otros.</li>
                            <li><b>Portabilidad</b>: Las máquinas virtuales se pueden migrar fácilmente entre hosts físicos, lo que permite un escalado y equilibrio de carga sin problemas.</li>
                            <li><b>Multi-tenencia</b>: La virtualización permite que múltiples clientes o aplicaciones compartan la misma infraestructura física, mejorando la utilización de recursos y reduciendo costos.</li>
                        </ol>
                        <p>La combinación de estas tecnologías permite la funcionalidad en la nube por:</p>
                        <ol>
                            <li><b>Recursos de agrupación</b>: La virtualización y los centros de datos distribuidos permiten agrupar y agregar recursos, creando una capacidad de computación masiva bajo demanda.</li>
                            <li><b>Automatización</b>: Las plataformas de administración en la nube automatizan el aprovisionamiento, la configuración y la orquestación de recursos virtuales, asegurando una implementación eficiente y escalable.</li>
                            <li><b>Autoservicio</b>: Los usuarios pueden acceder a los servicios en la nube a través de un portal de autoservicio, seleccionando los recursos y configuraciones requeridos sin necesidad de intervención manual.</li>
                            <li><b>Escalabilidad</b>: La infraestructura en la nube puede escalar rápidamente hacia arriba o hacia abajo para que coincida con la demanda cambiante, asegurando que los recursos estén siempre disponibles y optimizados para el rendimiento.</li>
                        </ol>
                    <h3>La Nube como motor de nuevos modelos de negocio</h3>
                        <p>Los líderes de TI exitosos tratan la computación en la nube como un nuevo modelo de negocio, no como una nueva tecnología. Confundir la computación en la nube con la tecnología es un error. La nube no es una tecnología — es un nuevo modelo de negocio impulsado por nuevas tecnologías. Cloud vende infraestructura de TI, plataformas y aplicaciones como servicios. Su modelo bajo demanda, “pay as you go” reduce el tiempo, el dinero y las personas que se necesitan para construir e implementar infraestructura y aplicaciones. Los principales beneficios de la nube son la eficiencia, la agilidad y la innovación.</p>
                        <p>Cloud tiene cinco características esenciales, tres modelos de servicio y cuatro modelos de implementación, lo que hace que pasar a ella sea una iniciativa de TI compleja. Cada combinación de modelos de servicio e implementación cambia el costo, el control, la responsabilidad, la responsabilidad y la seguridad. Cada uno afecta a su infraestructura, aplicaciones y equipos de proyectos de manera diferente, haciendo de la nube un nuevo modelo de negocio para TI.</p>
                        <b>Cinco características definen el modelo de negocio en la nube:</b>
                        <ul>
                            <li>Acceso de autoservicio bajo demanda a infraestructura, plataformas y aplicaciones</li>
                            <li>Amplio acceso a través de teléfonos móviles, tabletas, computadoras portátiles y estaciones de trabajo</li>
                            <li>Agrupación de recursos y automatización para combinar recursos en servicios administrados</li>
                            <li>Rápida elasticidad que se escala automática y rápidamente con la demanda</li>
                            <li>Servicio medido con uso monitoreado, controlado e informado</li>
                        </ul>
                        <b>Principales beneficios de la computación en la nube</b>
                        <ul>
                            <li>Costo</li>
                            <p>Pasar a la nube ayuda a las empresas a optimizar Cuesta la TI. Esto se debe a que la computación en la nube elimina el gasto de capital de comprar hardware y software y configurar y ejecutar centros de datos en el sitio: los bastidores de servidores, la electricidad durante todo el día para la energía y la refrigeración, y los expertos en TI para administrar la infraestructura. Se suma rápido.</p>
                            <li>Escala global</li>
                            <p>Los beneficios de los servicios de computación en la nube incluyen la capacidad de escalar elásticamente. En la nube, eso significa entregar la cantidad correcta de recursos de TI, por ejemplo, más o menos potencia de cómputo, almacenamiento, ancho de banda, derecho cuando se necesitan, y desde la derecha ubicación geográfica.</p>
                            <li>Rendimiento</li>
                            <p>Los servicios de computación en la nube más grandes se ejecutan en una red mundial de centros de datos seguros, que se actualizan regularmente a la última generación de hardware informático rápido y eficiente. Esto ofrece varios beneficios en un único centro de datos corporativo, incluida una latencia de red reducida para aplicaciones y mayores economías de escala.</p>
                            <li>Seguridad</li>
                            <p>Muchos proveedores de nube ofrecen un amplio conjunto de políticas, tecnologías y controles que fortalece tu postura de seguridad en general, ayuda a proteger sus datos, aplicaciones e infraestructura de posibles amenazas.</p>
                            <li>Velocidad</li>
                            <p>La mayoría de los servicios de computación en la nube se proporcionan autoservicio y bajo demanda, por lo que incluso se pueden aprovisionar grandes cantidades de recursos informáticos en minutos, generalmente con solo unos pocos clics del mouse, lo que brinda a las empresas mucha flexibilidad y elimina la presión de la planificación de la capacidad.</p>
                            <li>Productividad</li>
                            <p>Los centros de datos en el sitio generalmente requieren mucha configuración de “racking y apilamiento”—hardware, parches de software y otras tareas de administración de TI que consumen mucho tiempo. La computación en la nube elimina la necesidad de muchas de estas tareas, por lo que los equipos de TI pueden dedicar tiempo a lograr objetivos comerciales más importantes.</p>
                            <li>Fiabilidad</li>
                            <p>La computación en la nube hace copias de seguridad de datos recuperación de desastresy la continuidad del negocio es más fácil y menos costosa porque los datos se pueden reflejar en múltiples sitios redundantes en la red de proveedores de la nube.</p>
                        </ul>
                    <h3>Ejemplos de aplicaciones de planificación de recursos en la nube</h3>
                        <b>¿Qué es el Software de Gestión de Recursos?</b>
                        <p>El software de gestión de recursos es una plataforma SaaS basada en la nube que ayuda a los gerentes de proyecto en la asignación de recursos durante el proceso de planificación del proyecto.</p>
                        <p>Estas herramientas te permiten ver los niveles de capacidad actuales, determinar quién está disponible, entender cuáles son sus preferencias laborales y asignar recursos de una manera que sea práctica, estratégica y efectiva. El software y las herramientas de gestión de recursos facilitan la optimización de tu programación y mantienen al equipo organizado.</p>
                        <ol>
                            <li>monay.com</li>
                                <p>Lo mejor para una planificación sencilla de carga de trabajo y capacidad</p>
                                <p>Periodo de prueba de 14 días + plan gratis</p>
                                <p>Desde $8 /usuario/mes (pago anual)</p>
                                <img src="https://global-assets.benzinga.com/es/2024/11/11155232/MONDAY.COM_.jpg" alt="monday.com imagen" height="450" style="display: block; margin: 0 auto;">
                                <p>monday.com es una plataforma de trabajo flexible que ayuda a los equipos a comunicarse en contexto y obtener una vista general de los proyectos pendientes, los recursos disponibles y los plazos proyectados.</p>
                                <p>Las características que realmente destacan a monday.com del resto incluyen sus 5+ vistas para que puedas ver la información de tu proyecto de la forma que desees. Por ejemplo, con la vista de carga de trabajo, puedes ver fácilmente quién puede asumir más trabajo y quién no. Es fácil obtener una idea visual de la capacidad de trabajo de tu equipo y realizar ajustes a los plazos o la propiedad en consecuencia y en tiempo real.</p>
                                <p>Las integraciones incluyen aplicaciones como Slack, Google Calendar, Jira, GitHub, Excel, Google Drive, Gmail, Trello, Dropbox, Typeform y miles más accesibles a través de Zapier.</p>
                            <li>Kantata</li>
                                <p>La mejor planificación integral de recursos para equipos y agencias de servicios.</p>
                                <p>Precio bajo pedido</p>
                                <p>Kantata es una herramienta completa que conecta los sistemas fundamentales de planificación, ejecución, contabilidad de proyectos y análisis en un entorno de operación único. Tiene módulos para gestión de proyectos, contabilidad, gestión de recursos, inteligencia empresarial y colaboración en equipo para equipos y agencias de servicios.</p>
                                <img src="https://cdn.elearningindustry.com/wp-content/uploads/2023/06/4cc94467b537cad210d3a2b18201a039.png" alt="kantata imagen" height="450" style="display: block; margin: 0 auto;">
                                <p>Las características que son particularmente impresionantes incluyen los servicios profesionales de Kantata. La plataforma pone a disposición de los usuarios a sus Consultores de Kantata BI, lo que significa que tienes acceso a un equipo que puede construir informes específicamente para tu negocio y proporcionar capacitación a tus recursos para ayudar a mitigar los riesgos y costos de implementación. Otras características que valen la pena incluyen la previsión de recursos, la gestión de capacidad, la gestión de habilidades, la planificación de escenarios y la planificación basada en roles.</p>
                                <p>Las integraciones incluyen integraciones preconstruidas con herramientas como Expensify, G Suite, Netsuite, Jira, Hubspot, Xero, Salesforce, Slack, Concur, Qualtrics, Dynamics 365 y Quickbooks. También proporcionan una plataforma de integración llamada M-Bridge para ayudarte a crear tus propias integraciones.</p>
                            <li>Parallax</li>
                                <p>Lo mejor para las empresas de servicios profesionales que buscan agrupar funcionalidad a través de integraciones</p>
                                <p>Demo gratis disponible</p>
                                <p>Precio bajo pedido</p>
                                <img src="https://media.licdn.com/dms/image/v2/D560BAQFtjCu4KMbCmQ/company-logo_200_200/company-logo_200_200/0/1709675132705/getparallax_logo?e=2147483647&v=beta&t=zLZ2ZP8x3sj4sYi-5DkEPHDw0CQI1Mdo6F8vSWBp_VY" alt="Parallax imagen" height="450" style="display: block; margin: 0 auto;">
                                <p>Parallax es una solución de planificación y pronóstico de recursos diseñada para ayudar a aumentar la utilización y está nativamente construida para integraciones. Es ideal para empresas de servicios digitales y equipos de desarrollo de software que buscan aprovechar al máximo la moderna planificación predictiva de recursos y el pronóstico activo para descubrir un crecimiento medido, tasas de ingresos más altas y márgenes más sólidos.</p>
                                <p>Las característicasque diferencian a Parallax de otras herramientas en esta lista incluyen la funcionalidad de gestión de recursos predictiva. La herramienta ha sido diseñada específicamente para gestores de proyectos y recursos, proporcionándote las herramientas necesarias para evaluar y optimizar eficientemente la oferta y la demanda. Con una mejor optimización de recursos, deberías ser capaz de mantener a los equipos contentos y satisfechos, mantener los proyectos y recursos en el camino correcto y alinear perfectamente a todos en el equipo y en la organización en objetivos comunes. Otras características destacadas incluyen etiquetas de habilidades con una búsqueda avanzada en la base de datos de empleados, modelos de facturación personalizables, informes en tiempo real sobre ganancias y pérdidas de proyectos y contabilidad de proyectos.</p>
                                <p>Las integraciones incluyen Hubspot, Slack, Tempo, Salesforce, Jira, Harvest, Microsoft Teams, Asana y Oracle NetSuite. El enfoque de integraciones de la plataforma garantiza que puedas agrupar las mejores características de cada herramienta en tu conjunto tecnológico actual en un solo lugar.</p>
                            <li>Runn</li>
                                <p>Lo mejor para gestionar y dar seguimiento a los recursos en tiempo real</p>
                                <p>Periodo de prueba de 14 días</p>
                                <p>Desde $10 USD /persona gestionada/mes</p>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd3ca1sl7q0PGtD903-_ZeUvKb-0kjlCyZ2w&s" alt="Runn imagen" height="200" style="display: block; margin: 0 auto;">
                                <p>Runn es una herramienta de planificación de recursos, demanda y capacidad en tiempo real con seguimiento de tiempo integrado y potentes capacidades de pronóstico. Puedes obtener una vista panorámica de todos los proyectos y personas para detectar al instante sobreasignaciones e identificar patrones de asignación de recursos.</p>
                                <p>Las características que hacen que Runn se destaque incluyen sus impresionantes visualizaciones de capacidad, carga de trabajo, disponibilidad y utilización facturable y no facturable. Puedes profundizar en diferentes roles, equipos y etiquetas para comparar tendencias y comprender qué grupos están sobreasignados. Runn te permite hacer un seguimiento de proyectos, ver pronósticos, utilización, variación en proyectos y rendimiento financiero general. Y sus hojas de tiempo integradas te ayudarán a entender cuánto tiempo se trabajó en comparación con lo que se había planeado.</p>
                                <p>Las integraciones incluyen aplicaciones como Harvest, WorkflowMax y Clockify para importar datos de proyectos, clientes y personas y sincronizar entradas de tiempo. Con la API de Runn, puedes crear tu propia integración para enviar datos a tus herramientas favoritas.</p>
                            <li>Resource Guru</li>
                                <p>Lo mejor para una programación rápida y flexible</p>
                                <p>Periodo de prueba de 30 días</p>
                                <p>Desde $3 USD/usuario/mes</p>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx5tNeZzk6ViGzsxD9d5zWYZmV0YIUVbdkRA&s" alt="resources guru imagen" height="450" style="display: block; margin: 0 auto;">
                                <p>Resource Guru es un software de gestión de recursos dedicado que tiene como objetivo hacer que la gestión de recursos sea fácil de usar con herramientas de programación rápida.</p>
                                <p>Las características que realmente destacan en Resource Guru incluyen paneles individuales de recursos que permiten a cada miembro del personal iniciar sesión y saber exactamente en qué deben estar trabajando. Para supervisar el rendimiento empresarial, informes poderosos ayudan a identificar qué proyectos y clientes están siendo sobreservidos y te asisten en el seguimiento de la utilización del equipo y la planificación futura de la capacidad. Otras características destacadas incluyen programación de arrastrar y soltar, gestión de equipos, reserva de salas de reuniones, planificación de capacidad e informes de pronóstico.</p>
                                <p>Las integraciones incluyen aplicaciones de calendario como el calendario de Outlook, Calendly y el calendario de Google. Miles de aplicaciones adicionales son accesibles a través de Zapier.</p>
                            <li>Hub Planner</li>
                                <p>Lo mejor para empresas de tamaño mediano y grande</p>
                                <p>Periodo de prueba de 30 días</p>
                                <p>Desde $7 USD/usuario/mes (pago anual)</p>
                                <img src="https://media.licdn.com/dms/image/v2/D4D0BAQFWWYB64fuPNg/company-logo_200_200/company-logo_200_200/0/1723120325154/hub_planner_logo?e=2147483647&v=beta&t=99O1WAZeMFvjjNG8zaFG1n8MmsCPavUWRgP5RACJbY4" alt="Hub Planner imagen" height="450" style="display: block; margin: 0 auto;">
                                <p>Hub Planner es un software de gestión de recursos con una suite completa de funciones de programación, registro de tiempo e informes. La característica principal es el Scheduler simple y fácil de usar, que permite la planificación y visualización de proyectos y recursos. Los usuarios pueden arrastrar y soltar para planificar proyectos y programar recursos. La herramienta también ofrece un menú multifunción, potentes filtros y una barra de capacidad de equipo dinámica. Los múltiples modos de visualización permiten tanto vistas generales de alto nivel como vistas detalladas de proyectos.</p>
                                <p>Cuenta con un potente motor de informes con más de 70 plantillas preformateadas. Si no encuentras lo que buscas en una plantilla, puedes crear informes desde cero. También cuenta con varios flujos de trabajo en línea para hojas de tiempo, solicitudes de vacaciones y una elegante opción de solicitud y aprobación de recursos. Su función de Trabajo no asignado es excelente para la programación y la previsión antes del pipeline, y los usuarios pueden crear campos personalizados a nivel de recurso o proyecto. También pueden personalizar notificaciones y recordatorios de programación.</p>
                                <p>Han adoptado un enfoque modular, por lo que tienes la opción de agregar o quitar extensiones al producto base, lo que permite a los equipos aumentar la funcionalidad o desactivar partes que no necesitan. Hay integraciones en línea con Basecamp, Slack, iCal, Rest API y Zapier disponibles. Hub Planner ofrece una prueba gratuita bastante extensa de 60 días con todo incluido. Además, cuentan con una base de conocimientos extensa con videos tutoriales, y su servicio al cliente es excelente.</p>
                            <li>Saviom</li>
                                <p>Lo mejor para la gestión de recursos y fuerza laboral empresarial</p>
                                <p>Periodo de prueba de 60 días</p>
                                <p>Precio bajo pedido</p>
                                <img src="https://images.softwaresuggest.com/software_logo/1622806863_logo-color-1200x300.png" alt="Saviom imagen" height="200" style="display: block; margin: 0 auto;">
                                <p>height="450" style="display: block; margin: 0 auto;"</p>
                                <p>Las características de Saviom que son particularmente impresionantes incluyen su inteligencia empresarial en tiempo real, que te permite cumplir con las demandas cambiantes. Puedes construir portales, análisis, informes y paneles a medida para tus necesidades, ya que Saviom es altamente expandible y configurable. También puedes controlar la visibilidad de los datos con filtros. Otras características destacadas incluyen un planificador y programador de recursos multidimensional, pronósticos avanzados y planificación de capacidad, y inteligencia empresarial en tiempo real.</p>
                                <p>Las integraciones incluyen Outlook, Google, Salesforce, Jira y las integraciones personalizadas que puedes crear utilizando su marco de intercambio de datos.</p>
                        </ol>
                    <h3>Tres modelos fundamentales del Cloud Computing</h3>
                        <p>¿Qué son IaaS, PaaS y SaaS?</p>
                        <p>IaaS, PaaS y SaaS son los tres tipos de soluciones de servicios en la nube más populares. A veces se denominan modelos de servicio en la nube o modelos de servicio de computación en la nube.</p>
                        <ul>
                            <li>IaaS, o infraestructura como servicio, es acceso por consumo a servidores, almacenamiento y redes físicos y virtuales alojados en la nube: la infraestructura de TI de backend para ejecutar aplicaciones y cargas de trabajo en la nube.</li>
                            <li>PaaS, o plataforma como servicio, es acceso por consumo a una plataforma completa, lista para usar y alojada en la nube para desarrollar, ejecutar, mantener y gestionar aplicaciones.</li>
                            <li>SaaS, o software como servicio, es acceso por consumo a software de aplicaciones alojado en la nube y listo para usar.</li>
                        </ul>
                        <p>IaaS, PaaS y SaaS no son mutuamente excluyentes. Muchas empresas medianas utilizan más de un modelo y la mayoría de las grandes empresas utilizan los tres.</p>
                        <p>"Como servicio" se refiere a la forma en que se consumen los activos de TI en estas soluciones, y a la diferencia esencial entre computación en la nube y la TI tradicional. En la TI tradicional, una organización consume activos de TI (hardware, software del sistema, herramientas de desarrollo, aplicaciones) comprándolos, instalándolos, gestionándolos y manteniéndolos en los centros de datos de sus propias instalaciones. En la computación en la nube, el proveedor del servicio en la nube posee, gestiona y mantiene los activos. El cliente los consume a través de una conexión a Internet y paga por ellos a través de una suscripción o por lo que consume.</p>
                        <p>De modo que la principal ventaja de IaaS, PaaS, SaaS o cualquier solución "como servicio" es económica: un cliente puede acceder y escalar las funcionalidades de TI que necesita por un costo predecible, sin el desembolso y los gastos generales de comprar y mantener todo en su propio centro de datos. Pero existen ventajas adicionales específicas para cada una de estas soluciones.</p>
                    <h3>Funciones de los tres modelos (IaaS, PaaS, SaaS)</h3>
                        <h4>IaaS</h4>
                            <p>IaaS es el acceso por consumo a infraestructura informática alojada en la nube: servidores, capacidad de almacenamiento y recursos de red, que los clientes pueden suministrar, configurar y usar de la misma manera que usan el hardware en las instalaciones. La diferencia es que el proveedor de servicios en la nube aloja, gestiona y mantiene el hardware y los recursos informáticos en sus propios centros de datos. Los clientes de IaaS utilizan el hardware a través de una conexión a Internet y pagan por ese uso a través de una suscripción o por lo que consumen.</p>
                            <p>Por lo general, los clientes de IaaS pueden elegir entre máquinas virtuales (VM) alojadas en hardware físico compartido (el proveedor de servicios en la nube gestiona la virtualización) o servidores bare metal en hardware físico dedicado (no compartido). Los clientes pueden suministrar, configurar y operar los servidores y los recursos de infraestructura por medio de un panel de control gráfico o programáticamente por medio de interfaces de programación de aplicaciones (API).</p>
                            <p>IaaS se puede considerar como la oferta original "como servicio": todos los principales proveedores de servicios en la nube, (Amazon Web Services, Google Cloud, IBM Cloud, Microsoft Azure) comenzaron ofreciendo alguna forma de IaaS.</p>
                            <b>Ventajas de IaaS</b>
                            <p>En comparación con la TI tradicional, IaaS brinda a los clientes más flexibilidad para desarrollar recursos informáticos cuando se necesitan, y para ampliarlos o reducirlos en respuesta a picos o ralentizaciones en el tráfico. IaaS permite a los clientes evitar los gastos iniciales y los gastos generales de comprar y mantener sus propios centros de datos en las instalaciones. También elimina la constante compensación entre el desperdicio de adquirir capacidad excedente en las instalaciones para adaptarse a los picos, frente al rendimiento deficiente o las interrupciones que son consecuencia de no tener la capacidad suficiente para aumentos o ráfagas de tráfico imprevistos.</p>
                            <p>Otras ventajas de IaaS incluyen:</p>
                            <ul>
                                <li><b>Mayor disponibilidad</b>: con IaaS, una empresa puede crear servidores redundantes fácilmente e incluso crearlos en otras zonas geográficas para garantizar la disponibilidad durante cortes locales o desastres físicos.</li>
                                <li><b>Menos latencia, rendimiento mejorado</b>: dado que los proveedores de IaaS normalmente operan centros de datos en múltiples zonas geográficas, los clientes de IaaS pueden ubicar aplicaciones y servicios más cerca de los usuarios para minimizar la latencia y maximizar el rendimiento.</li>
                                <li><b>Capacidad de respuesta mejorada</b>: los clientes pueden suministrar recursos en cuestión de minutos, además de probar y lanzar rápidamente nuevas ideas para más usuarios.</li>
                                <li><b>Seguridad integral</b>: con un alto nivel de seguridad en el sitio, en los centros de datos y mediante el cifrado, las organizaciones a menudo pueden aprovechar la seguridad y protección más avanzadas que podrían proporcionar si alojaran la infraestructura de la nube internamente.</li>
                                <li><b>Acceso más rápido a la mejor tecnología</b>: los proveedores de la nube compiten entre sí al proporcionar las últimas tecnologías a sus usuarios, los clientes de IaaS pueden aprovechar estas tecnologías mucho antes (y a un costo mucho menor) de lo que pueden implementarlas en las instalaciones</li>
                            </ul>
                            <b>Funcionalidades de IaaS:</b>
                            <ul>
                                <li>Proporciona recursos informáticos virtualizados, como servidores, almacenamiento y redes</li>
                                <li>Da a los usuarios un control total sobre la infraestructura</li>
                                <li>Permite a los usuarios configurar y administrar sus recursos según sea necesario</li>
                                <li>Admite la escala dinámica de recursos</li>
                                <li>Proporciona acceso a una amplia gama de sistemas operativos y aplicaciones</li>
                                <li>Permite a los usuarios implementar y administrar sus propias aplicaciones y servicios</li>
                            </ul>
                        <h4>PaaS</h4>
                            <p>PaaS proporciona una plataforma basada en la nube para el desarrollo, ejecución y gestión de aplicaciones. El proveedor de servicios en la nube aloja, gestiona y mantiene todo el hardware y software incluidos en la plataforma: servidores (para desarrollo, prueba e implementación), software de sistema operativo (SO), almacenamiento, redes, bases de datos, middleware, tiempos de ejecución, marcos, herramientas de desarrollo, así como servicios relacionados para la seguridad, actualizaciones de sistema operativo y software, copias de seguridad, entre otros.</p>
                            <p>Los usuarios acceden a PaaS a través de una interfaz gráfica de usuario (GUI), donde los equipos de desarrollo o DevOps pueden colaborar en todo su trabajo durante todo el ciclo de vida de la aplicación, incluida la codificación, la integración, las pruebas, la entrega, la implementación y la retroalimentación. </p>
                            <p>A continuación, mencionamos algunos ejemplos de soluciones de PaaS: AWS Elastic Beanstalk, Google App Engine, Microsoft Windows Azure y Red Hat OpenShift en IBM Cloud.</p>
                            <b>Ventajas de PaaS</b>
                            <p>La principal ventaja de PaaS es que permite a los clientes crear, probar, implementar, ejecutar, actualizar y escalar aplicaciones de manera más rápida y rentable de lo que podrían si tuvieran que desarrollar y gestionar su propia plataforma local. Otras ventajas son:</p>
                            <ul>
                                <li><b>Tiempo de comercialización más rápido</b>: PaaS permite a los equipos de desarrollo poner en marcha entornos de desarrollo, prueba y producción en minutos, en lugar de semanas o meses.</li>
                                <li><b>Pruebas de riesgo bajo o nulo y adopción de nuevas tecnologías</b>: las plataformas PaaS generalmente incluyen acceso a una amplia variedad de los recursos más recientes del lote de aplicaciones. Esto también permite a las empresas probar nuevos sistemas operativos, lenguajes y otras herramientas sin tener que realizar inversiones sustanciales en ellos ni en la infraestructura necesaria para ejecutarlos.</li>
                                <li><b>Colaboración simplificada</b>: como servicio basado en la nube, PaaS proporciona un entorno de desarrollo de software compartido, dando a los equipos de desarrollo y operaciones acceso a todas las herramientas que necesitan, desde cualquier lugar con conexión a Internet.</li>
                                <li><b>Un enfoque más escalable</b>: con PaaS, las organizaciones pueden adquirir capacidad adicional para crear, probar, preparar y ejecutar aplicaciones cuando lo necesiten.</li>
                                <li><b>Menos carga de gestión</b>: PaaS traslada la gestión de la infraestructura, los parches, las actualizaciones y otras tareas administrativas al proveedor de servicios en la nube.</li>
                            </ul>
                            <b>Funcionalidades de PaaS:</b>
                            <ul>
                                <li>Proporciona una plataforma para desarrollar, ejecutar y administrar aplicaciones</li>
                                <li>Incluye herramientas, bibliotecas e infraestructura para construir e implementar aplicaciones</li>
                                <li>Permite a los desarrolladores centrarse en escribir código, mientras que el proveedor administra la infraestructura subyacente</li>
                                <li>Apoya el desarrollo colaborativo y el despliegue de aplicaciones</li>
                                <li>Proporciona escalado automatizado y equilibrio de carga de aplicaciones</li>
                                <li>Permite a los desarrolladores implementar y administrar sus propias aplicaciones y servicios</li>
                            </ul>
                        <h4>SaaS</h4>
                            <p>SaaS (a veces denominado servicios de aplicaciones en la nube) es un software de aplicaciones alojado en la nube y listo para usar. Los usuarios pagan una tarifa mensual o anual para usar una aplicación completa desde un navegador web, cliente local o aplicación móvil. La aplicación y toda la infraestructura necesaria para entregarla: servidores, almacenamiento, redes, middleware, software de aplicaciones, almacenamiento de datos, son alojados y gestionados por el proveedor de SaaS.</p>
                            <p>El proveedor gestiona todas las actualizaciones y parches del software, normalmente de forma invisible para los clientes. Normalmente, el proveedor garantiza un nivel de disponibilidad, rendimiento y seguridad como parte de un contrato de nivel de servicio (SLA). Los clientes pueden agregar más usuarios y almacenamiento de datos por consumo con costo adicional.</p>
                            <p>Hoy en día, es casi seguro que cualquier persona que utilice un teléfono celular utilice algún tipo de SaaS. Las soluciones de e-mail, redes sociales y almacenamiento de archivos en la nube (como Dropbox o Box) son ejemplos de aplicaciones SaaS que muchas personas usan todos los días en sus vidas personales. Entre las soluciones SaaS empresariales más populares destacan Salesforce (software de gestión de relaciones con los clientes), HubSpot (software de marketing), Trello (gestión de flujos de trabajo), Slack (colaboración y mensajería) y Canva (gráficos). Muchas aplicaciones diseñadas originalmente para computadoras de desktop (p. ej., Adobe Creative Suite) ahora están disponibles como SaaS (p. ej., Adobe Creative Cloud).</p>
                            <b>Ventajas de SaaS</b>
                            <p>La principal ventaja de SaaS es que traslada toda la gestión de la infraestructura y las aplicaciones al proveedor de SaaS. Todo lo que el usuario tiene que hacer es crear una cuenta, pagar la tarifa y comenzar a usar la aplicación. El proveedor se encarga de todo lo demás, desde el mantenimiento del hardware y el software del servidor hasta la gestión del acceso y la seguridad de los usuarios, pasando por el almacenamiento y la gestión de datos, la implementación de actualizaciones y parches, y más.</p>
                            <p>Otras ventajas de IaaS incluyen:</p>
                            <ul>
                                <li><b>Riesgo mínimo</b>: muchos productos de SaaS ofrecen un período de prueba gratuito o tarifas mensuales bajas que permiten a los clientes probar el software para constatar si satisface sus necesidades, con poco o ningún riesgo financiero</li>
                                <li><b>Productividad en cualquier momento y lugar</b>: los usuarios pueden trabajar con las aplicaciones de SaaS en cualquier dispositivo con un navegador y una conexión a Internet. </li>
                                <li><b>Escalabilidad sencilla</b>: agregar usuarios es tan simple como registrarse y pagar por asientos nuevos. Los clientes pueden comprar más almacenamiento de datos por un cargo mínimo.</li>
                            </ul>
                            <p>Algunos proveedores de SaaS incluso permiten la personalización de su producto proporcionando una solución PaaS complementaria. Un ejemplo bien conocido es Heroku, una solución PaaS para Salesforce.</p>
                            <b>Funcionalidades de SaaS:</b>
                            <ul>
                                <li>Proporciona aplicaciones de software a través de Internet</li>
                                <li>Elimina la necesidad de que los usuarios instalen, configuren y mantengan software en sus propios dispositivos</li>
                                <li>Permite a los usuarios acceder a las aplicaciones a través de un navegador web o aplicación móvil</li>
                                <li>Proporciona actualizaciones automáticas y mantenimiento de aplicaciones</li>
                                <li>Permite a los usuarios acceder a las aplicaciones desde cualquier lugar, en cualquier momento</li>
                                <li>Admite multi-tenancy, donde múltiples usuarios pueden acceder a la misma instancia de aplicación.</li>
                            </ul>
                    <h3>Características comunes del Cloud Computing</h3>
                        <p>Hay muchas características de Cloud Computing aquí hay algunos de ellos:</p>
                        <ol>
                            <li>Autoservicios bajo demanda: Los servicios de computación en la nube no requieren ningún administrador humano, los propios usuarios pueden aprovisionar, monitorear y administrar los recursos informáticos según sea necesario.</li>
                            <li>Acceso a red amplia: Los servicios informáticos se proporcionan generalmente a través de redes estándar y dispositivos heterogéneos.</li>
                            <li>Elasticidad rápida: Los servicios de computación deben tener recursos de TI que puedan escalar y escalar rápidamente y según las necesidades. Cada vez que el usuario requiere servicios que se le proporciona y se amplía tan pronto como se supera su requisito.</li>
                            <li>Agrupación de recursos: El recurso de TI (por ejemplo, redes, servidores, almacenamiento, aplicaciones y servicios) presente se comparte entre múltiples aplicaciones y ocupantes de una manera no comprometida. Múltiples clientes reciben servicio desde un mismo recurso físico.</li>
                            <li>Servicio medido: La utilización de recursos se rastrea para cada aplicación y ocupante, proporcionará tanto al usuario como al proveedor de recursos una cuenta de lo que se ha utilizado. Esto se hace por varias razones, como el monitoreo de la facturación y el uso efectivo de los recursos.</li>
                            <li>Multi-tenencia: Los proveedores de computación en la nube pueden admitir múltiples inquilinos (usuarios u organizaciones) en un solo conjunto de recursos compartidos.</li>
                            <li>Virtualización: Los proveedores de computación en la nube utilizan la tecnología de virtualización para abstraer los recursos de hardware subyacentes y presentarlos como recursos lógicos para los usuarios.</li>
                            <li>Computación resistente: Los servicios de computación en la nube generalmente están diseñados teniendo en cuenta la redundancia y la tolerancia a fallas, lo que garantiza una alta disponibilidad y confiabilidad.</li>
                            <li>Modelos de precios flexibles: Los proveedores de la nube ofrecen una variedad de modelos de precios, que incluyen precios de pago por uso, basados en suscripción y spot, lo que permite a los usuarios elegir la opción que mejor se adapte a sus necesidades.</li>
                            <li>Seguridad: Los proveedores de la nube invierten mucho en medidas de seguridad para proteger los datos de sus usuarios’ y garantizar la privacidad de la información confidencial.</li>
                            <li>Automatización: Los servicios de computación en la nube a menudo están altamente automatizados, lo que permite a los usuarios implementar y administrar recursos con una intervención manual mínima.</li>
                            <li>Sostenibilidad: Los proveedores de la nube se centran cada vez más en prácticas sostenibles, como los centros de datos de eficiencia energética y el uso de fuentes de energía renovables, para reducir su impacto ambiental.</li>
                        </ol>
                        <img src="https://www.datamation.com/wp-content/uploads/2020/12/cloud-computing-services_5fceaa0a2bde3.jpeg" alt="cloud imagen" height="450" style="display: block; margin: 0 auto;">
                    <h3>Modelos de despliegue del Cloud Computing</h3>
                        <b>¿Qué es un Modelo de Implementación en la Nube?</b>
                        <p>Cloud Deployment Model funciona como un entorno informático virtual con una arquitectura de implementación que varía según la cantidad de datos que desee almacenar y quién tiene acceso a la infraestructura.</p>
                        <b>Tipos de Modelos de Implementación de Cloud Computing</b>
                        <p>El modelo de implementación en la nube identifica el tipo específico de entorno de nube basado en la propiedad, la escala y el acceso, así como la naturaleza y el propósito de la nube. La ubicación de los servidores que está utilizando y quién los controla está definida por un modelo de implementación en la nube. Especifica cómo se verá su infraestructura en la nube, qué puede cambiar y si se le darán servicios o tendrá que crear todo usted mismo. Las relaciones entre la infraestructura y sus usuarios también se definen por los tipos de implementación en la nube. Diferentes tipos de nube los modelos de despliegue informático se describen a continuación.</p>
                        <ul>
                            <li>Nube Pública</li>
                            <li>Nube Privada</li>
                            <li>Nube Híbrida</li>
                            <li>Comunidad Cloud</li>
                            <li>Multi-Nube</li>
                        </ul>
                        <h4>Nube Pública</h4>
                            <p>La nube pública hace posible que cualquiera pueda acceder a sistemas y servicios. La nube pública puede ser menos segura ya que está abierta a todos. La nube pública es aquella en la que los servicios de infraestructura en la nube se proporcionan a través de Internet a las personas en general o a los principales grupos de la industria. La infraestructura en este modelo de nube es propiedad de la entidad que ofrece los servicios en la nube, no del consumidor. Es un tipo de alojamiento en la nube que permite a los clientes y usuarios acceder fácilmente a sistemas y servicios. Esta forma de computación en la nube es un excelente ejemplo de alojamiento en la nube, en el que los proveedores de servicios suministran servicios a una variedad de clientes. En esta disposición, los servicios de copia de seguridad y recuperación de almacenamiento se brindan de forma gratuita, como suscripción o por usuario. Por ejemplo, Google App Engine, etc.</p>
                            <img src="CloudServiceProvider.png" alt="Cloud service provider" height="450" style="display: block; margin: 0 auto;">
                            <b>Ventajas del Modelo de Nube Pública</b>
                            <ul>
                                <li>Inversión Mínima: Debido a que es un servicio de pago por uso, no hay una tarifa inicial sustancial, por lo que es excelente para las empresas que requieren acceso inmediato a los recursos.</li>
                                <li>Sin costo de configuración: Toda la infraestructura está totalmente subsidiada por los proveedores de servicios en la nube, por lo que no es necesario configurar ningún hardware.</li>
                                <li>No se requiere gestión de infraestructura: El uso de la nube pública no requiere la gestión de la infraestructura.</li>
                                <li>Sin mantenimiento: El trabajo de mantenimiento lo realiza el proveedor del servicio (no los usuarios).</li>
                                <li>Escalabilidad Dinámica: Para satisfacer las necesidades de su empresa, los recursos a pedido son accesibles.</li>
                            </ul>
                            <b>Desventajas del Modelo de Nube Pública</b>
                            <ul>
                                <li>Menos seguro: La nube pública es menos segura ya que los recursos son públicos, por lo que no hay garantía de seguridad de alto nivel.</li>
                                <li>Baja personalización: Es accedido por muchos públicos por lo que puede ser personalizado de acuerdo a los requisitos personales.</li>
                            </ul>
                        <h4>Nube Privada</h4>
                            <p>El modelo de implementación de nube privada es exactamente lo contrario del modelo de implementación de nube pública. Es un entorno individual para un solo usuario (cliente). No hay necesidad de compartir su hardware con nadie más. La distinción entre nubes privadas y públicas está en cómo manejas todo el hardware. También se llama “cloud” interna y se refiere a la capacidad de acceder a sistemas y servicios dentro de una frontera u organización determinada. La plataforma en la nube se implementa en un entorno seguro basado en la nube que está protegido por poderosos firewalls y bajo la supervisión de un departamento de TI de los organizativos. La nube privada ofrece una mayor flexibilidad de control sobre los recursos de la nube.</p>
                            <img src="CloudServiceProviderPrivate.png" alt="Nube Privada imagen" height="450" style="display: block; margin: 0 auto;">
                            <b>Ventajas del Modelo de Nube Privada</b>
                            <ul>
                                <li><b>Mejor Control</b>: Usted es el único propietario de la propiedad. Obtiene un comando completo sobre la integración del servicio, las operaciones de TI, las políticas y el comportamiento del usuario. </li>
                                <li><b>Seguridad de Datos y Privacidad</b>: Es adecuado para almacenar información corporativa a la que solo tiene acceso el personal autorizado. Al segmentar los recursos dentro de la misma infraestructura, se puede lograr un mejor acceso y seguridad.</li>
                                <li><b>Soporta Sistemas Legacy</b>: Este enfoque está diseñado para funcionar con sistemas heredados que no pueden acceder a la nube pública.</li>
                                <li><b>Personalización</b>: A diferencia de una implementación de nube pública, una nube privada permite a una empresa adaptar su solución para satisfacer sus necesidades específicas.</li>
                            </ul>
                            <b>Desventajas del Modelo de Nube Privada</b>
                            <ul>
                                <li><b>Menos escalable</b>: Las nubes privadas se escalan dentro de un cierto rango, ya que hay menos número de clientes.</li>
                                <li><b>Costoso</b>: Las nubes privadas son más costosas ya que proporcionan instalaciones personalizadas.</li>
                            </ul>
                        <h4>Nube Híbrida</h4>
                            <p>Al unir los mundos público y privado con una capa de software propietario, la computación en la nube híbrida ofrece lo mejor de ambos mundos. Con una solución híbrida, puede alojar la aplicación en un entorno seguro mientras aprovecha los ahorros de costos de las nubes públicas. Las organizaciones pueden mover datos y aplicaciones entre diferentes nubes utilizando una combinación de dos o más métodos de implementación en la nube, dependiendo de sus necesidades.</p>
                            <img src="CloudServiceProviderNubeHibrida.png" alt="Nube hibrida" height="450" style="display: block; margin: 0 auto;">
                            <b>Ventajas del Modelo de Nube Híbrida</b>
                            <ul>
                                <li><b>Flexibilidad y control</b>: Las empresas con más flexibilidad pueden diseñar soluciones personalizadas que satisfagan sus necesidades particulares.</li>
                                <li><b>Costo</b>: Debido a que las nubes públicas proporcionan escalabilidad, usted solo será responsable de pagar la capacidad adicional si la necesita.</li>
                                <li><b>Seguridad</b>: Debido a que los datos están correctamente separados, las posibilidades de robo de datos por parte de los atacantes se reducen considerablemente.</li>
                            </ul>
                            <b>Desventajas del Modelo de Nube Híbrida</b>
                            <ul>
                                <li><b>Difícil de manejar</b>: Las nubes híbridas son difíciles de administrar, ya que es una combinación de nubes públicas y privadas. Entonces, es complejo.</li>
                                <li><b>Transmisión de datos lenta</b>: La transmisión de datos en la nube híbrida tiene lugar a través de la nube pública, por lo que se produce la latencia.</li>
                            </ul>
                        <h4>Comunidad Cloud</h4>
                            <p>Permite que los sistemas y servicios sean accesibles por un grupo de organizaciones. Es un sistema distribuido que se crea integrando los servicios de diferentes nubes para atender las necesidades específicas de una comunidad, industria o negocio. La infraestructura de la comunidad podría ser compartida entre la organización que ha compartido preocupaciones o tareas. Generalmente es administrado por un tercero o por la combinación de una o más organizaciones en la comunidad.</p>
                            <img src="ComunidadCloud.png" alt="Comunidad cloud" height="450" style="display: block; margin: 0 auto;">
                            <b>Ventajas del Modelo de Nube Comunitaria</b>
                            <ul>
                                <li><b>Costo Efectivo</b>: Es rentable porque la nube es compartida por múltiples organizaciones o comunidades.</li>
                                <li><b>Seguridad</b>: La nube comunitaria proporciona una mejor seguridad.</li>
                                <li><b>Recursos compartidos</b>: Le permite compartir recursos, infraestructura, etc. con múltiples organizaciones.</li>
                                <li><b>Colaboración e intercambio de datos</b>: Es adecuado tanto para la colaboración como para el intercambio de datos.</li>
                            </ul>
                            <b>Desventajas del Modelo de Nube Comunitaria</b>
                            <ul>
                                <li>Escalabilidad Limitada: La nube comunitaria es relativamente menos escalable, ya que muchas organizaciones comparten los mismos recursos de acuerdo con sus intereses de colaboración. </li>
                                <li>Rígido en personalización: A medida que los datos y recursos se comparten entre diferentes organizaciones de acuerdo con sus intereses mutuos si una organización quiere algunos cambios de acuerdo con sus necesidades, no pueden hacerlo porque tendrá un impacto en otras organizaciones.</li>
                            </ul>
                        <h4>Multi-Nube</h4>
                            <p>Hablando de emplear múltiples proveedores de nube al mismo tiempo bajo este paradigma, como su nombre lo indica. Es similar al enfoque de implementación de nube híbrida, que combina recursos de nube pública y privada. En lugar de fusionar nubes privadas y públicas, la nube múltiple utiliza muchas nubes públicas. Aunque los proveedores de nube pública proporcionan numerosas herramientas para mejorar la confiabilidad de sus servicios, aún ocurren contratiempos. Es bastante raro que dos nubes distintas tengan un incidente en el mismo momento. Como resultado, la implementación de múltiples nubes mejora aún más la alta disponibilidad de sus servicios.</p>
                            <img src="MultiCloud.png" alt="Multi-Nube" height="450" style="display: block; margin: 0 auto;">
                            <b>Ventajas del Modelo Multi-Cloud</b>
                            <ul>
                                <li>Puede mezclar y combinar las mejores características de los servicios de cada proveedor de servicios en la nube para satisfacer las demandas de sus aplicaciones, cargas de trabajo y negocios eligiendo diferentes proveedores en la nube. </li>
                                <li><b>Latencia Reducida</b>: Para reducir la latencia y mejorar la experiencia del usuario, puede elegir regiones y zonas en la nube que estén cerca de sus clientes. </li>
                                <li><b>Alta disponibilidad de servicio</b>: Es bastante raro que dos nubes distintas tengan un incidente en el mismo momento. Por lo tanto, la implementación de múltiples nubes mejora la alta disponibilidad de sus servicios.</li>
                            </ul>
                            <b>Desventajas del Modelo Multi-Cloud</b>
                            <ul>
                                <li>Complejo: La combinación de muchas nubes hace que el sistema sea complejo y pueden ocurrir cuellos de botella.</li>
                                <li>Problema de seguridad: Debido a la compleja estructura, puede haber lagunas a las que un hacker puede aprovechar, por lo tanto, hace que los datos sean inseguros.</li>
                            </ul>
                    <h3>Concepto de Servicialización en la Nube</h3>
                        <b>Perspectiva del Usuario</b>
                        <p>Desde el punto de vista de los usuarios, la servitización en la computación en la nube ofrece varios beneficios:</p>
                        <ul>
                            <li>Personalización: Los servicios basados en la nube permiten a los usuarios adaptar sus experiencias de acuerdo con sus necesidades específicas, con características como escalabilidad bajo demanda y modelos de precios flexibles.</li>
                            <li>Accesibilidad: Los servicios están disponibles bajo demanda, lo que permite a los usuarios acceder a ellos desde cualquier lugar, en cualquier momento y en varios dispositivos.</li>
                            <li>Costo-efectividad: Los usuarios solo pagan por los recursos que consumen, reduciendo los gastos de capital y los costos operativos.</li>
                            <li>Mayor agilidad: Los servicios basados en la nube facilitan la innovación rápida y la adaptación a las condiciones cambiantes del mercado y las preferencias de los consumidores.</li>
                        </ul>
                        <b>Perspectiva del Proveedor</b>
                        <p>Desde el punto de vista de los proveedores, la servitización en la computación en la nube presenta oportunidades:</p>
                        <ul>
                            <li><b>Nuevas fuentes de ingresos</b>: Los proveedores pueden generar ingresos recurrentes a través de servicios basados en suscripción, en lugar de depender únicamente de las ventas de productos.</li>
                            <li><b>Relaciones mejoradas con los clientes</b>: Los proveedores pueden construir relaciones más fuertes e íntimas con los clientes al ofrecer servicios y soporte personalizados.</li>
                            <li><b>Mayor competitividad</b>: Los proveedores pueden diferenciarse de los competidores ofreciendo servicios innovadores basados en la nube que satisfacen las necesidades cambiantes de los clientes.</li>
                            <li><b>Escalabilidad y flexibilidad</b>: La infraestructura en la nube permite a los proveedores escalar sus servicios hacia arriba o hacia abajo rápidamente, adaptándose a las cambiantes demandas del mercado.</li>
                        </ul>
                    <h3>Balanceo de cargas en redes y en la nube</h3>
                        <p>El equilibrio de carga es una técnica utilizada para distribuir el tráfico de red a través de un grupo de servidores conocidos como granja de servidores. Optimiza el rendimiento, la fiabilidad y la capacidad de la red, reduciendo latencia como la demanda se distribuye equitativamente entre múltiples servidores y recursos de cómputo.</p>
                        <p>El equilibrio de carga utiliza un dispositivo, ya sea físico o virtual – para identificar en tiempo real qué servidor en un grupo puede cumplir mejor con un determinado cliente solicitud, mientras se asegura tráfico de red pesado no abruma indebidamente a un solo servidor.</p>
                        <p>Además de maximizar la capacidad de la red y garantizar un alto rendimiento, el equilibrio de carga proporciona conmutación por error. Si un servidor falla, un equilibrador de carga redirige inmediatamente sus cargas de trabajo a un servidor de respaldo, mitigando así el efecto en los usuarios finales.</p>
                        <p>El balanceo de carga generalmente se clasifica como soporte Capa 4 o Capa 7 de la Interconexión de Sistemas Abiertos (OSI) modelo de comunicación. Los equilibradores de carga de capa 4 distribuyen el tráfico en función de los datos de transporte, como IP direcciones y TCP números de puerto. Los dispositivos de equilibrio de carga de capa 7 toman decisiones de enrutamiento basadas en características de nivel de aplicación, que incluyen el Protocolo de Transferencia de Hipertexto (HTTP) información del encabezado y el contenido real del mensaje, como URL y cookies. Los equilibradores de carga de capa 7 son más comunes, pero los equilibradores de carga de capa 4 siguen siendo populares, particularmente en implementaciones de borde.</p>
                        <b>Cómo funciona el equilibrio de carga</b>
                        <p>Los equilibradores de carga manejan las solicitudes entrantes de los usuarios de información y otros servicios. Se sientan entre los servidores que manejan esas solicitudes e Internet. Una vez que se recibe una solicitud, el equilibrador de carga primero determina qué servidor en un grupo está disponible y en línea y luego enruta la solicitud a ese servidor. En tiempos de cargas pesadas, un equilibrador de carga actúa con prontitud y puede agregar servidores dinámicamente en respuesta a los picos en el tráfico. Por el contrario, los equilibradores de carga pueden soltar servidores si la demanda es baja.</p>
                        <img src="HowLoadBalancingWorks.png" alt="HowLoadBalancingWorks" height="450" style="display: block; margin: 0 auto;">
                        <b>Equilibrador de carga de red</b>
                        <p>Los equilibradores de carga de red examinan las direcciones IP y otra información de red para redirigir el tráfico de manera óptima. Realizan un seguimiento del origen del tráfico de la aplicación y pueden asignar una dirección IP estática a varios servidores. Los equilibradores de carga de red usan los algoritmos de equilibrio de carga estáticos y dinámicos descritos anteriormente para equilibrar la carga del servidor.</p>
                        <b>Un equilibrador de carga es una solución que actúa como un proxy de tráfico y distribuye el tráfico de red o aplicación a través de puntos finales en varios servidores. Los equilibradores de carga se utilizan para distribuir la capacidad durante los tiempos pico de tráfico y para aumentar la confiabilidad de las aplicaciones. Mejoran el rendimiento general de las aplicaciones al disminuir la carga sobre los servicios individuales o las nubes, y distribuyen la demanda a través de diferentes superficies de cómputo para ayudar a mantener las sesiones de aplicaciones y redes.</b>
                        <p>Las aplicaciones modernas deben procesar millones de sesiones simultáneamente y devolver el texto correcto, videos, imágenes y otros datos a cada usuario de una manera rápida y confiable. Para manejar volúmenes tan altos de tráfico, la mayoría de las aplicaciones tienen muchos servidores de recursos con datos duplicados entre ellos.</p>
                        <p>El equilibrio de carga distribuye el tráfico de red dinámicamente a través de un red de recursos que soportan una aplicación. Un equilibrador de carga es el dispositivo o servicio que se encuentra entre el usuario y el grupo de servidores y actúa como un facilitador invisible, asegurando que todos los servidores de recursos se utilicen por igual. Un equilibrador de carga ayuda a aumentar la confiabilidad y la disponibilidad, incluso en tiempos de alto uso y demanda, y garantiza más tiempo de actividad y una mejor experiencia de usuario.</p>
                        <p>En algunos casos, es esencial que todas las solicitudes de un cliente se envíen al mismo servidor durante la duración de una sesión, por ejemplo, cuando un cliente coloca artículos en un carrito de compras y luego completa la compra. Mantener la conexión entre el cliente y el servidor se conoce como <b>persistencia de sesión</b>. Sin persistencia de la sesión, la información debe sincronizarse entre servidores y potencialmente obtenerse varias veces, creando ineficiencias de rendimiento.</p>
                        <b>Beneficios del Equilibrio de Carga</b>
                        <p>Los usuarios y clientes dependen de la capacidad casi en tiempo real para encontrar información y realizar transacciones. Tiempo de retraso o respuestas poco confiables e inconsistentes—incluso durante la demanda máxima y los tiempos de uso—puede alejar a un cliente para siempre. Y los altos picos en la necesidad de cómputo pueden causar estragos en un servidor interno o sistema de servidor si la demanda entrante—o “load”—es demasiado alta para ser acomodada fácilmente.</p>
                        <p>Ventajas de usar un equilibrador de carga incluir:</p>
                        <ul>
                            <li><b>Disponibilidad de la aplicación</b>: Los usuarios tanto internos como externos deben poder confiar en la disponibilidad de la aplicación. Si una aplicación o función está caída, rezagada o congelada, se pierde un tiempo precioso y se introduce una fuente potencial de fricción que podría llevar a un cliente a un competidor.</li>
                            <li><b>Escalabilidad de la aplicación</b>: Imagine que dirige una empresa de venta de boletos, y se anuncia que los boletos para una actuación popular estarán disponibles en una fecha y hora determinadas. Podría haber miles o incluso más personas tratando de acceder a su sitio para comprar boletos. Sin un equilibrador de carga, su sitio se limitaría a lo que sea que su único/primer servidor pueda acomodar—, lo que probablemente no será mucho con tanta demanda. En su lugar, puede planificar este gran aumento en el tráfico al tener un equilibrador de carga para dirigir las solicitudes y el tráfico a otras superficies de cómputo disponibles. Y eso significa que más clientes pueden obtener los boletos deseados.</li>
                            <li><b>Seguridad de la aplicación</b>: El equilibrio de carga también permite a las organizaciones escalar sus soluciones de seguridad. Una de las formas principales es mediante la distribución de tráfico a través de múltiples sistemas de backend, lo que ayuda a minimizar la superficie de ataque y hace que sea más difícil agotar los recursos y saturar los enlaces. Los equilibradores de carga también pueden redirigir el tráfico a otros sistemas si un sistema es vulnerable o comprometido. Además, los equilibradores de carga pueden ofrecer una capa adicional de protección contra ataques DDoS al redirigir el tráfico entre servidores si un servidor en particular se vuelve vulnerable.</li>
                            <li><b>Rendimiento de la aplicación</b>: Al hacer todo lo anterior, un equilibrador de carga aumenta el rendimiento de la aplicación. Al aumentar la seguridad, al optimizar el tiempo de actividad y al permitir la escalabilidad a través de picos en la demanda, los equilibradores de carga mantienen sus aplicaciones funcionando como se diseñó y como usted y sus clientes desean.</li>
                        </ul>
                        <b>Algoritmos de Equilibrio de Carga</b>
                        <p>Hay dos tipos de algoritmos de equilibrio de carga en términos de cómo funcionan: estático y dinámico. El balanceo de carga estático mide la carga entrante en un servidor utilizando algoritmos que tienen información de capacidad de rendimiento sobre los servidores existentes en la red distribuida. El equilibrio dinámico de carga puede identificar dinámicamente la cantidad de carga que debe eliminarse durante el tiempo de ejecución y qué sistema debe soportar la carga.  Está diseñado para sistemas con alta fluctuación en la carga entrante. </p>
                        <p>Los siguientes son algunos de los tipos comunes de algoritmos de equilibrio de carga.</p>
                        <ul>
                            <li><b>Robin redondo</b>: Este algoritmo envía tráfico a una lista de servidores en rotación utilizando el Sistema de Nombres de Dominio (DNS). (Nota: El equilibrio de carga DNS también puede ser una solución dinámica.)</li>
                            <li><b>Umbral</b>: Este algoritmo distribuye tareas en función de un valor umbral establecido por el administrador.</li>
                            <li><b>Aleatorio con dos opciones</b>: El “poder de dos” el algoritmo selecciona dos servidores al azar y envía la solicitud al que se selecciona aplicando el algoritmo de Conexiones Mínimas o el algoritmo de Tiempo Mínimo, si así se configura.</li>
                            <li><b>Conexiones mínimas</b>: Se envía una nueva solicitud al servidor con la menor cantidad de conexiones actuales a los clientes. La capacidad de computación relativa de cada servidor se tiene en cuenta para determinar cuál tiene menos conexiones o cuál está utilizando la menor cantidad de ancho de banda o recursos.</li>
                            <li><b>Tiempo mínimo</b>: En este algoritmo, se envía una solicitud al servidor seleccionado por una fórmula que combina el tiempo de respuesta más rápido y la menor cantidad de conexiones activas. </li>
                            <li><b>hash URL</b>: Este algoritmo genera un valor hash basado en la URL presente en las solicitudes de los clientes. Las solicitudes se reenvían a servidores en función del valor hash. El equilibrador de carga almacena en caché el valor hash de la URL, por lo que las solicitudes posteriores que usan la misma URL dan como resultado un golpe de caché y se reenvían al mismo servidor.</li>
                            <li><b>Fuente IP hash</b>: Este algoritmo utiliza las direcciones IP de origen y destino de la clientela para generar una clave hash única para vincular al cliente a un servidor en particular. Como la clave se puede regenerar si la sesión se desconecta, esto permite que las solicitudes de reconexión se redirijan al mismo servidor utilizado anteriormente.</li>
                            <li><b>hashing consistente</b>: Este algoritmo mapea tanto clientes como servidores en una estructura de anillo, con cada servidor asignado múltiples puntos en el anillo en función de su capacidad. Cuando entra una solicitud de cliente, se acelera a un punto en el anillo y luego se enruta dinámicamente en sentido horario al siguiente servidor disponible.</li>
                        </ul>
                        <b>¿Cómo Funciona el Equilibrio de Carga?</b>
                        <p>El equilibrio de carga funciona respondiendo de forma estática o dinámica a una solicitud de usuario y distribuyendo esa solicitud a uno de los servidores de backend capaces de cumplir con la solicitud. Si uno de los servidores se cae, el equilibrador de carga redirige el tráfico a los servidores en línea restantes.</p>
                        <b>Ejemplos de Equilibrio de Carga</b>
                        <p><b>Un ejemplo de equilibrio de carga estática</b>: Una empresa alberga un sitio web con contenido que es en gran medida estático. Este escenario sería ideal para un equilibrador de carga estática porque las necesidades de tráfico son predecibles y consistentes. La compañía puede usar dos (o más) servidores web idénticos a través de los cuales el equilibrador de carga estática puede distribuir tráfico.</p>
                        <p><b>Un ejemplo de equilibrio de carga dinámico</b>: Una empresa experimenta oleadas, picos y caídas en el tráfico. Algunos son predecibles y otros no. Estas organizaciones se beneficiarían de equilibrio de carga dinámico. Tales compañías podrían incluir un minorista de comercio electrónico que anuncie las horas y fechas del Viernes Negro; una compañía de atención médica que acaba de anunciar que puede programar citas en línea para una vacuna estacional; una agencia de desempleo del gobierno que requiere que los beneficiarios del seguro de desempleo presenten un reclamo semanal en un cierto día de la semana; una organización de ayuda que puede necesitar responder rápidamente en línea a un desastre natural. Algunas de estas oleadas y picos en el tráfico y la demanda pueden ser planeados, pero algunos no pueden. En estos escenarios, un algoritmo de equilibrio de carga dinámico ayudará a garantizar el acceso a aplicaciones y recursos cuando los clientes y usuarios más los necesitan.</p>
                        <b>Diferentes Tipos de Balancers de Carga</b>
                        <p>Diferentes tipos de equilibradores de carga con diferentes capacidades residen en la arquitectura llamada Interconexión de Sistema Abierto (OSI) modelo. En este modelo hay siete capas. Los firewalls de red están en los niveles uno a tres (Cableado físico L1, enlace de datos L2 y red L3). Mientras tanto, el equilibrio de carga ocurre en las capas cuatro a siete (L4-transporte, L5-sesión, L6-presentación y L7-aplicación). <b>Los equilibradores de carga se usan generalmente en la Capa 4 y la Capa 7.</b></p>
                        <ul>
                            <li><b>Balancers de carga de capa 4</b> tráfico directo basado en datos de protocolos de red y capa de transporte (IP, TCP, FTP, UDP). El balanceo de carga en la capa IP se refiere a una implementación donde la dirección IP de balanceo de carga es la que se anuncia a los clientes para un sitio web y, por lo tanto, se registra como la dirección de destino. Cuando el equilibrador de carga recibe la solicitud, cambia la dirección IP de destino registrada a la del servidor de contenido que ha elegido.</li>
                            <li><b>Los equilibradores de carga de capa 7 distribuyen solicitudes en función de los datos encontrados en los protocolos de capa de aplicación como encabezados HTTP, cookies, etc</b> identificador uniforme de recursos, ID de sesión SSL y datos de formularios HTML. También permiten decisiones de enrutamiento basadas en datos <b>dentro del mensaje de la aplicación en sí, como el valor de un parámetro específico. La capa 7 agrega el cambio de contenido al equilibrio de carga.</b></li>
                        </ul>
                        <b>Balancers de Carga Basados en la Nube</b>
                        <p>Balancers de carga basados en la nube no son solo controladores de tráfico para picos en el tráfico y para optimizar el uso del servidor. Los equilibradores de carga nativos de la nube también pueden proporcionar análisis predictivos para ayudarlo a visualizar los cuellos de botella del tráfico antes de que ocurran. Eso a su vez ofrece información procesable para ayudar a cualquier empresa a optimizar sus soluciones de TI.</p>
                        <p>Balance de Carga de Aplicación: A medida que las empresas confían cada vez más en el rendimiento y la disponibilidad de las aplicaciones balanceo de carga de aplicación puede ayudarlos a escalar, optimizar las operaciones y ahorrar dinero.</p>
                        <p>Equilibrio de Carga Global del Servidor: Con usuarios y clientes de todo el mundo, las empresas pueden mejorar su disponibilidad de carga con equilibrio de carga global del servidor, que envía a los usuarios al punto final más cercano a ellos. </p>
                        <p>balanceo de carga DNS: Se llama a la práctica de configurar un dominio en el Sistema de Nombres de Dominio (DNS) para que las solicitudes de usuario al dominio se distribuyan en un grupo de máquinas servidor Equilibrio de carga DNS.</p>
                        <p>Equilibrio de Carga de Red: Controladores de entrega de aplicaciones (ADC), dispositivos físicos o virtuales que funcionan como proxies para servidores físicos, administran funciones de aplicaciones o redes y se basan en equilibrio de carga de red solución para apoyarlos. Los ADC también utilizan otras técnicas, incluido el almacenamiento en caché compresión, y descarga de procesamiento SSL, para mejorar el rendimiento de las aplicaciones web. En la configuración habitual, el ADC se sienta frente a un grupo de servidores web y de aplicaciones y media las solicitudes y respuestas entre ellos y sus clientes, haciendo que el grupo parezca un solo servidor virtual para el usuario final.</p>
                        <p>HTTP(S) Balance de Carga: Se llama a la técnica para distribuir tráfico a través de múltiples grupos de servidores web o de aplicaciones para optimizar la utilización de recursos equilibrio de carga HTTP(S). </p>
                        <p>Equilibrio de Carga Interna: An equilibrador de carga interno se asigna a una subred privada y no tiene una IP pública. Por lo general, funciona dentro de una granja de servidores.</p>
                        <p>Diámetro: Un equilibrador de carga de diámetro distribuye el tráfico de señalización a través de múltiples servidores en una red. Una de las formas más rentables de hacerlo es escalar el plano de control de diámetro en lugar de la capa de transporte de datos. (El equilibrio de carga del diámetro también puede ser estático o dinámico.)</p>
                    <h3>Principales anomalías en servicios Cloud</h3>
                        <ol>
                            <li><b>Privacidad</b>: La empresa anfitriona puede acceder a los datos del usuario con o sin permiso. El proveedor de servicios puede acceder a los datos que se encuentran en la nube en cualquier momento. Podrían alterar o incluso eliminar información accidental o deliberadamente. </li>
                            <li><b>Cumplimiento</b>: Hay muchas regulaciones en lugares relacionados con los datos y el alojamiento. Para cumplir con las regulaciones (Ley Federal de Gestión de Seguridad de la Información, Ley de Portabilidad y Responsabilidad del Seguro de Salud, etc.), el usuario puede tener que adoptar modos de implementación que son caros. </li>
                            <li><b>Seguridad</b>: Los servicios basados en la nube involucran a terceros para el almacenamiento y la seguridad. ¿Se puede suponer que una empresa basada en la nube protegerá y protegerá los datos de oneals si está utilizando sus servicios a un nivel muy bajo o de forma gratuita? Pueden compartir información de users’ con otros. La seguridad representa una amenaza real para la nube. </li>
                            <li><b>Sostenibilidad</b>: Este problema se refiere a minimizar el efecto de la computación en la nube en el medio ambiente. Citando los efectos de las plataformas sobre los efectos ambientales de la computación en la nube, en áreas donde el clima favorece el enfriamiento natural y la electricidad renovable está fácilmente disponible, los países con condiciones favorables, como Finlandia, Suecia y Suiza, están tratando de atraer centros de datos de computación en la nube. Pero aparte de los favores de los naturales, ¿tendrían estos países suficiente infraestructura técnica para sostener las nubes de gama alta? </li>
                            <li><b>Abuso</b>: Al proporcionar servicios en la nube, se debe determinar que el cliente no está comprando los servicios de computación en la nube para un propósito nefasto. En 2009, un troyano bancario utilizó ilegalmente el popular servicio de Amazon como un canal de comando y control que emitía actualizaciones de software e instrucciones maliciosas a las PC infectadas por el malware, por lo que las empresas de alojamiento y los servidores deberían tener las medidas adecuadas para abordar estos problemas.</li>
                                <img src="IssuesInCloud.png" alt="IssuesInCloud" height="450" style="display: block; margin: 0 auto;">
                            <li><b>Mayor Costo</b>: Si desea utilizar los servicios en la nube de forma ininterrumpida, debe tener una red potente con mayor ancho de banda que las redes de Internet normales, y también si su organización es amplia y grande, por lo que la suscripción al servicio en la nube normal no se adaptará a su organización. De lo contrario, podría enfrentar problemas al utilizar un servicio en la nube ordinario mientras trabaja en proyectos y aplicaciones complejas. Este es un problema importante ante las organizaciones pequeñas, que les impide sumergirse en la tecnología de la nube para su negocio.</li>
                            <li><b>Recuperación de datos perdidos en contingencia</b>: Antes de suscribirse, cualquier proveedor de servicios en la nube revisa todas las normas y documentaciones y verifica si sus servicios coinciden con sus requisitos y la infraestructura de recursos suficiente y bien mantenida con el mantenimiento adecuado. Una vez que se suscribió al servicio, casi entrega sus datos a manos de un tercero. Si puede elegir el servicio en la nube adecuado, en el futuro no tendrá que preocuparse por la recuperación de datos perdidos en ninguna contingencia.</li>
                            <li><b>Upkeeping(gestión) de Cloud</b>: Mantener una nube es una tarea de herculina porque una arquitectura de nube contiene una gran infraestructura de recursos y otros desafíos y riesgos, así como la satisfacción del usuario, etc. Como los usuarios generalmente pagan por cuánto han consumido los recursos. Por lo tanto, a veces resulta difícil decidir cuánto se debe cobrar en caso de que el usuario quiera escalabilidad y extender los servicios.</li>
                            <li><b>Falta de recursos/experiencia calificada</b>: Uno de los principales problemas que las empresas y las empresas están atravesando hoy en día es la falta de recursos y empleados calificados. Cada segunda organización parece interesada o ya ha sido trasladada a servicios en la nube. Es por eso que la carga de trabajo en la nube está aumentando, por lo que las empresas de alojamiento de servicios en la nube necesitan un avance rápido y continuo. Debido a estos factores, las organizaciones están teniendo dificultades para mantenerse al día con las herramientas. A medida que surgen nuevas herramientas y tecnologías todos los días, los empleados más capacitados/capacitados deben crecer. Estos desafíos solo se pueden minimizar a través de la capacitación adicional del personal de TI y desarrollo.</li>
                            <li><b>Gastos de servicio de pago por uso</b>: Los servicios de computación en la nube son servicios a pedido que un usuario puede extender o comprimir el volumen del recurso según las necesidades, por lo que pagó por cuánto ha consumido los recursos. Es difícil definir un cierto coste predefinido para una cantidad particular de servicios. Tales tipos de altibajos y variaciones de precios hacen que la implementación de la computación en la nube sea muy difícil e intrincada. No es fácil para el propietario de una empresa estudiar la demanda constante y las fluctuaciones con las estaciones y los diversos eventos. Por lo tanto, es difícil construir un presupuesto para un servicio que pueda consumir varios meses del presupuesto en unos pocos días de uso intensivo.</li>
                        </ol>
                    <h3>Flujo de Trabajo (WorkFlow) en Software como Servicio</h3>
                        <b>¿Qué es Workflow SaaS?</b>
                        <p>El flujo de trabajo es una tecnología importante para la automatización de procesos y se ha utilizado en sistemas de aplicación durante bastante tiempo. El concepto de Software como Servicio (SaaS) se está volviendo popular en los últimos años. El flujo de trabajo se considera una tecnología importante en el software SaaS. Por lo general, el software SaaS se ejecuta en un entorno de servicio habilitado para múltiples inquilinos y puede existir muchos usuarios finales para una aplicación en particular.</p>
                        <p>Los flujos de trabajo son como desarrollo de software proceso que ayuda a las empresas a automatizar las operaciones y procesos de una organización. El software funciona por automatización de tareas repetitivas y utilizando una interfaz de programación de aplicaciones (API) para conectarse con diferentes sistemas en toda la organización. Permite a las organizaciones mejorar la eficiencia, reducir los errores manuales, aumentar la visibilidad de los flujos de trabajo y mejorar la productividad general.</p>
                    <h3>Papel de SOA en la arquitectura Cloud</h3>
                        <p>La Arquitectura Orientada a Servicios (SOA) es una etapa en la evolución del desarrollo y/o integración de aplicaciones. Define una forma de hacer que los componentes de software sean reutilizables utilizando las interfaces. </p>
                        <p>Formalmente, SOA es un enfoque arquitectónico en el que las aplicaciones hacen uso de los servicios disponibles en la red. En esta arquitectura, los servicios se proporcionan para formar aplicaciones, a través de una llamada de red a través de Internet. Utiliza estándares de comunicación comunes para acelerar y agilizar las integraciones de servicios en las aplicaciones. Cada servicio en SOA es una función comercial completa en sí misma. Los servicios se publican de tal manera que facilita a los desarrolladores ensamblar sus aplicaciones utilizando esos servicios. Tenga en cuenta que SOA es diferente de la arquitectura de microservicios.</p>
                        <ul>
                            <li>SOA permite a los usuarios combinar una gran cantidad de instalaciones de servicios existentes para formar aplicaciones.</li>
                            <li>SOA abarca un conjunto de principios de diseño que estructuran el desarrollo del sistema y proporcionan medios para integrar componentes en un sistema coherente y descentralizado.</li>
                            <li>La informática basada en SOA empaqueta las funcionalidades en un conjunto de servicios interoperables, que pueden integrarse en diferentes sistemas de software pertenecientes a dominios comerciales separados.</li>
                        </ul>
                        <p><b>Las diferentes características de SOA son las siguientes</b>:  o Proporciona interoperabilidad entre los servicios.  o Proporciona métodos para encapsulación de servicio, descubrimiento de servicio, composición de servicio, etc reutilización del servicio e integración del servicio.  o Facilita la QoS (Calidad de los Servicios) a través de un contrato de servicio basado en el Nivel de Servicio Acuerdo (SLAo Proporciona servicios de parejas sueltas.  o Proporciona transparencia de ubicación con mejor escalabilidad y disponibilidad.  o Facilidad de mantenimiento con costo reducido de desarrollo de aplicaciones y despliegue. Hay dos roles principales dentro de la Arquitectura orientada al Servicio:</p>
                        <ol>
                            <li>Proveedor de servicios: El proveedor de servicios es el mantenedor del servicio y la organización que pone a disposición uno o más servicios para que otros los utilicen. Para anunciar los servicios, el proveedor puede publicarlos en un registro, junto con un contrato de servicio que especifica la naturaleza del servicio, cómo usarlo, los requisitos para el servicio y las tarifas cobradas.</li>
                            <li>Consumidor de servicios: El consumidor del servicio puede localizar los metadatos del servicio en el registro y desarrollar los componentes del cliente necesarios para enlazar y utilizar el servicio.</li>
                            <img src="ConsumidorDeServicios.png" alt="Consumidor de servicios" height="150" style="display: block; margin: 0 auto;">
                        </ol>
                        <p>Los servicios pueden agregar información y datos recuperados de otros servicios o crear flujos de trabajo de servicios para satisfacer la solicitud de un consumidor de servicios determinado. Esta práctica se conoce como orquestación de servicios Otro patrón de interacción importante es la coreografía de servicios, que es la interacción coordinada de servicios sin un solo punto de control.</p>
                        <p>Componentes de SOA:</p>
                        <img src="ComponentesDeSOA.png" alt="Componentes de SOA" height="450" style="display: block; margin: 0 auto;">
                        <br>
                        <b>Principios Rectores de SOA: </b>
                        <ol>
                            <li><b>Contrato de servicio estandarizado</b>: Especificado a través de uno o más documentos de descripción de servicio.</li>
                            <li><b>Acoplamiento suelto</b>: Los servicios están diseñados como componentes autónomos, mantienen relaciones que minimizan las dependencias de otros servicios.</li>
                            <li><b>Abstracción</b>: Un servicio está completamente definido por contratos de servicio y documentos de descripción. Ocultan su lógica, que está encapsulada dentro de su implementación.</li>
                            <li><b>Reusabilidad</b>: Diseñados como componentes, los servicios se pueden reutilizar de manera más efectiva, reduciendo así el tiempo de desarrollo y los costos asociados.</li>
                            <li><b>Autonomía</b>: Los servicios tienen control sobre la lógica que encapsulan y, desde el punto de vista del consumidor de servicios, no hay necesidad de saber sobre su implementación.</li>
                            <li><b>Descubribilidad</b>: Los servicios se definen por documentos de descripción que constituyen metadatos complementarios a través de los cuales se pueden descubrir de manera efectiva. El descubrimiento de servicios proporciona un medio eficaz para utilizar recursos de terceros.</li>
                            <li><b>Composabilidad</b>: Utilizando servicios como bloques de construcción, se pueden implementar operaciones sofisticadas y complejas. La orquestación de servicios y la coreografía proporcionan un soporte sólido para componer servicios y lograr objetivos comerciales.</li>
                        </ol>
                        <b>Ventajas de SOA:</b>
                        <ul>
                            <li><b>Reutilización del servicio</b>: En SOA, las aplicaciones se realizan a partir de servicios existentes. Por lo tanto, los servicios se pueden reutilizar para hacer muchas aplicaciones.</li>
                            <li><b>Mantenimiento fácil</b>: Como los servicios son independientes entre sí, pueden actualizarse y modificarse fácilmente sin afectar a otros servicios.</li>
                            <li><b>Plataforma independiente</b>: SOA permite hacer una aplicación compleja combinando servicios seleccionados de diferentes fuentes, independientemente de la plataforma.</li>
                            <li><b>Disponibilidad</b>: Las instalaciones de SOA están fácilmente disponibles para cualquier persona bajo petición.</li>
                            <li><b>Fiabilidad</b>: Las aplicaciones SOA son más confiables porque es fácil depurar servicios pequeños en lugar de códigos enormes</li>
                            <li><b>Escalabilidad</b>: Los servicios pueden ejecutarse en diferentes servidores dentro de un entorno, esto aumenta la escalabilidad</li>
                        </ul>
                        <b>Desventajas de SOA:</b>
                        <ul>
                            <li><b>Alto techo</b>: Una validación de los parámetros de entrada de los servicios se realiza cada vez que los servicios interactúan, esto disminuye el rendimiento a medida que aumenta la carga y el tiempo de respuesta.</li>
                            <li><b>Alta inversión</b>: Se requiere una gran inversión inicial para SOA.</li>
                            <li><b>Gestión de servicios complejos</b>: Cuando los servicios interactúan, intercambian mensajes a tareas. El número de mensajes puede ir en millones. Se convierte en una tarea engorrosa manejar una gran cantidad de mensajes.</li>
                        </ul>
                        <p><b>Aplicaciones prácticas de SOA</b>: SOA se usa de muchas maneras a nuestro alrededor, ya sea que se mencione o no.</p>
                        <ol>
                            <li>La infraestructura SOA es utilizada por muchos ejércitos y fuerzas aéreas para desplegar sistemas de conciencia situacional.</li>
                            <li>SOA se utiliza para mejorar la prestación de atención médica.</li>
                            <li>Hoy en día muchas aplicaciones son juegos y utilizan funciones incorporadas para ejecutarse. Por ejemplo, una aplicación puede necesitar GPS, por lo que utiliza las funciones GPS incorporadas del dispositivo. Esto es SOA en soluciones móviles.</li>
                            <li>SOA ayuda a mantener a los museos un grupo de almacenamiento virtualizado para su información y contenido.</li>
                        </ol>
                    <h3>Diferencia entre Cloud y Hosting dedicado</h3>
                        <b>Servidores Cloud</b>
                        <p>Servidores en la nube se puede configurar para proporcionar niveles de rendimiento, seguridad y control similares a los de un servidor dedicado. Pero en lugar de estar alojados en hardware físico que solo usa usted, residen en un entorno compartido de “virtualized” que es administrado por su proveedor de alojamiento en la nube. Se beneficia de las economías de escala de compartir hardware con otros clientes. Y, solo paga por la cantidad exacta de espacio de servidor utilizado. Los servidores en la nube también le permiten escalar los recursos hacia arriba o hacia abajo, dependiendo de la demanda, de modo que no esté pagando los costos de infraestructura inactivos cuando la demanda es baja.</p>
                        <p>Con los servidores en la nube, puede optimizar el rendimiento de TI sin los enormes costos asociados con la compra y administración de infraestructura totalmente dedicada. Las empresas con demandas y cargas de trabajo variables a menudo encuentran que los servidores en la nube son un ajuste ideal.</p>
                        <b>Servidores Dedicados</b>
                        <p>Un servidor dedicado es un servidor físico que se compra o alquila por completo para sus propias necesidades comerciales. Los servidores dedicados suelen ser utilizados por grandes empresas y organizaciones que requieren niveles excepcionalmente altos de seguridad de datos u organizaciones que tienen demandas constantes y altas de capacidad de servidor.</p>
                        <p>Con servidores dedicados, las empresas aún necesitan la capacidad y la experiencia de TI para administrar el mantenimiento continuo, los parches y las actualizaciones. Las empresas que utilizan aplicaciones pesadas de E/S, como bases de datos y plataformas de big data, encuentran un valor significativo en el hardware dedicado de metal desnudo.</p>
                        <table class="style-table">
                            <thead>
                                <tr>
                                    <th>Aspecto</th>
                                    <th>Servidores Cloud</th>
                                    <th>Servidores Dedicados</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Infraestructura</th>
                                    <th>Compartida en un entorno virtual administrado por un proveedor de servicios en la nube.</th>
                                    <th>Físico y dedicado exclusivamente para una empresa u organización.</th>
                                </tr>
                                <tr>
                                    <th>Escalabilidad</th>
                                    <th>Permite escalar recursos hacia arriba o hacia abajo según la demanda, pagando solo por el espacio utilizado.</th>
                                    <th>Limitada al hardware físico; para aumentar recursos se necesita actualizar o reemplazar el hardware.</th>
                                </tr>
                                <tr>
                                    <th>Costo</th>
                                    <th>Más económico debido a que se comparte el hardware; paga solo por lo que se usa.</th>
                                    <th>Más costoso porque requiere compra o renta exclusiva del servidor, además de costos de mantenimiento.</th>
                                </tr>
                                <tr>
                                    <th>Mantenimiento</th>
                                    <th>Gestionado por el proveedor de la nube, sin necesidad de experiencia interna en TI para parches o actualizaciones.</th>
                                    <th>Requiere experiencia interna de TI para administrar mantenimiento, actualizaciones y parches.</th>
                                </tr>
                                <tr>
                                    <th>Flexibilidad</th>
                                    <th>Ideal para empresas con cargas de trabajo variables y necesidades cambiantes.</th>
                                    <th>Adecuado para empresas con cargas de trabajo constantes y altas.</th>
                                </tr>
                                <tr>
                                    <th>Seguridad</th>
                                    <th>Ofrece seguridad adecuada, pero puede no ser ideal para empresas que requieren niveles excepcionalmente altos de control y privacidad.</th>
                                    <th>Proporciona niveles más altos de seguridad, adecuado para datos sensibles o regulaciones estrictas.</th>
                                </tr>
                                <tr>
                                    <th>Uso recomendado</th>
                                    <th>Empresas que buscan optimizar el rendimiento de TI sin costos altos y con necesidades variables.</th>
                                    <th>Empresas que usan aplicaciones intensivas en E/S (bases de datos, big data) o necesitan control total sobre la infraestructura.</th>
                                </tr>
                                <tr>
                                    <th>Economía de escala</th>
                                    <th>Beneficia de compartir hardware con otros clientes, reduciendo costos generales.</th>
                                    <th>No aplica; todo el hardware es exclusivo para un solo cliente.</th>
                                </tr>
                                <tr>
                                    <th>Ejemplo de carga de trabajo</th>
                                    <th>Sitios web, aplicaciones con tráfico variable, pequeñas empresas en crecimiento.</th>
                                    <th>Plataformas de big data, bases de datos corporativas o aplicaciones críticas para grandes empresas.</th>
                                </tr>
                            </tbody>
                        </table>
                <h2>Bibliografía</h2>
                    <ul>
                        <li>¿Qué significa. (s. f.). <a href="https://www.oracle.com/mx/cloud/what-is-cloud-computing/">https://www.oracle.com/mx/cloud/what-is-cloud-computing/</a></li>
                        <li>what-is-cloud-computing. (s. f.). [Vídeo]. Amazon Web Services, Inc. <a href="https://aws.amazon.com/es/what-is-cloud-computing/">https://aws.amazon.com/es/what-is-cloud-computing/</a></li>
                        <li>Ibm. (2023, 5 mayo). Beneficios de la computación en la nube | IBM. IBM. Recuperado 7 de diciembre de 2024, de <a href="https://www.ibm.com/mx-es/topics/cloud-computing-benefits">https://www.ibm.com/mx-es/topics/cloud-computing-benefits</a></li>
                        <li>What role does virtualization play in cloud data centers? (s. f.). Quora. <a href="https://www.quora.com/What-role-does-virtualization-play-in-cloud-data-centers">https://www.quora.com/What-role-does-virtualization-play-in-cloud-data-centers</a></li>
                        <li>Reselman, B. (2023, 12 enero). Distributed systems and ISPs push the data center forward. quora. Recuperado 7 de diciembre de 2024, de <a href="https://www.redhat.com/architect/history-distributed-systems-and-isps">https://www.redhat.com/architect/history-distributed-systems-and-isps</a></li>
                        <li>GeeksforGeeks. (2024d, julio 13). Virtualization in Cloud Computing and Types. GeeksforGeeks. <a href="https://www.geeksforgeeks.org/virtualization-cloud-computing-types/">https://www.geeksforgeeks.org/virtualization-cloud-computing-types/</a></li>
                        <li>Moris. (s. f.). What is data center virtualization | FS Community. Knowledge. <a href="https://community.fs.com/article/what-is-data-center-virtualization.html">https://community.fs.com/article/what-is-data-center-virtualization.html</a></li>
                        <li>Why You Need to Treat Cloud Computing as a New Business Model. (s. f.). <a href="https://www.globalknowledge.com/us-en/resources/case-studies/why-you-need-to-treat-cloud-computing-as-a-new-business-model/">https://www.globalknowledge.com/us-en/resources/case-studies/why-you-need-to-treat-cloud-computing-as-a-new-business-model/</a></li>
                        <li>What is cloud computing? | Microsoft Azure. (s. f.). <a href="https://azure.microsoft.com/en-us/resources/cloud-computing-dictionary/what-is-cloud-computing">https://azure.microsoft.com/en-us/resources/cloud-computing-dictionary/what-is-cloud-computing</a></li>
                        <li>Las 10 mejores herramientas y software de gestión de recursos de 2024. (2023, 3 diciembre). The Digital Project Manager. Recuperado 9 de diciembre de 2024, de <a href="https://thedigitalprojectmanager.com/es/tools/herramientas-de-software-de-gestion-de-recursos/">https://thedigitalprojectmanager.com/es/tools/herramientas-de-software-de-gestion-de-recursos/</a></li>
                        <li>Ibm. (2023b, mayo 9). Iaas paas saas. IBM. Recuperado 10 de diciembre de 2024, de <a href="https://www.ibm.com/mx-es/topics/iaas-paas-saas">https://www.ibm.com/mx-es/topics/iaas-paas-saas</a></li>
                        <li>GeeksforGeeks. (2024c, mayo 18). Difference between IAAS, PAAS and SAAS. GeeksforGeeks. <a href="https://www.geeksforgeeks.org/difference-between-iaas-paas-and-saas/">https://www.geeksforgeeks.org/difference-between-iaas-paas-and-saas/</a></li>
                        <li>GeeksforGeeks. (2024d, mayo 24). Characteristics of Cloud Computing. GeeksforGeeks. <a href="https://www.geeksforgeeks.org/characteristics-of-cloud-computing/">https://www.geeksforgeeks.org/characteristics-of-cloud-computing/</a></li>
                        <li>GeeksforGeeks. (2023, 3 mayo). Cloud deployment models. GeeksforGeeks. <a href="https://www.geeksforgeeks.org/cloud-deployment-models/">https://www.geeksforgeeks.org/cloud-deployment-models/</a></li>
                        <li>Yasar, K., & Irei, A. (2023, 3 enero). load balancing. Search Networking. <a href="https://www.techtarget.com/searchnetworking/definition/load-balancing">https://www.techtarget.com/searchnetworking/definition/load-balancing</a></li>
                        <li>What is Load Balancing? - Load Balancing Algorithm Explained - AWS. (s. f.). Amazon Web Services, Inc. <a href="https://aws.amazon.com/what-is/load-balancing/">https://aws.amazon.com/what-is/load-balancing/</a></li>
                        <li>What Is a Load Balancer? (s. f.). F5, Inc. <a href="https://www.f5.com/glossary/load-balancer">https://www.f5.com/glossary/load-balancer</a></li>
                        <li>GeeksforGeeks. (2022, 17 enero). Issues in Cloud Computing. GeeksforGeeks. <a href="https://www.geeksforgeeks.org/issues-in-cloud-computing/">https://www.geeksforgeeks.org/issues-in-cloud-computing/</a></li>
                        <li>Developer, W. (2024, 22 octubre). Workflow SaaS: Building a Successful Business with Software as a Service. Cflow. <a href="https://www.cflowapps.com/saas-workflow/">https://www.cflowapps.com/saas-workflow/</a></li>
                        <li>GeeksforGeeks. (2023a, enero 10). ServiceOriented architecture. GeeksforGeeks. <a href="https://www.geeksforgeeks.org/service-oriented-architecture/">https://www.geeksforgeeks.org/service-oriented-architecture/</a></li>
                        <li>Cloud Server vs Dedicated Server Comparison | Rackspace. (s. f.). Rackspace Technology. <a href="https://www.rackspace.com/en-gb/library/cloud-vs-dedicated">https://www.rackspace.com/en-gb/library/cloud-vs-dedicated</a></li>
                    </ul>
                <a href="III_TECNOLOGÍA CLOUD.pdf">Link a descarga del archivo en formato PDF</a>
            <?php
            } elseif ($section == 'articulo') {
            ?>
                <h2>RESUMEN</h2>
                    <p>La tecnología Cloud se encuentra en un estado avanzado, con 
                        modelos escalables (IaaS, PaaS, SaaS), soporte para IA, Big Data y edge computing, y un enfoque en sostenibilidad. Su financiamiento proviene de iniciativas
                        privadas, subsidios gubernamentales, comercialización directa y alianzas público-privadas. Es atractiva por su capacidad de reducir costos, 
                        ofrecer escalabilidad, modernizar sistemas, soportar trabajo remoto, facilitar análisis de datos masivos y respaldar tecnologías emergentes 
                        como IoT y blockchain. Su flexibilidad y adaptabilidad la convierten en una herramienta esencial para la transformación digital y la expansión 
                        global de empresas, siendo clave en la economía moderna.</p>
                    <p>Palabras clave: escalabilidad, transformación digital, reducción de costos, seguridad, tecnologías emergentes (IA, IoT, Blockchain).</p>
                <h2>ESTADO ACTUAL DE DESARROLLO</h2>
                    <p>El estado actual de la tecnología en la nube (Cloud) sigue evolucionando rápidamente, impulsada por avances en infraestructura, software y modelos de negocio. 
                        A continuación, se presenta un panorama general de las áreas clave en las que se encuentra la nube actualmente:</p>
                    <h3>Modelos de servicio ampliados</h3>
                        <p><b>IaaS (Infraestructura como Servicio)</b>: Ofrece recursos computacionales básicos como servidores virtuales, almacenamiento y redes. 
                        Ejemplo: Amazon EC2, Google Compute Engine.</p>
                        <p><b>PaaS (Plataforma como Servicio)</b>: Brinda un entorno para desarrollar, probar y desplegar aplicaciones. Ejemplo: Google App Engine, 
                        Azure App Services.</p>
                        <p><b>SaaS (Software como Servicio)</b>: Aplicaciones completas listas para ser usadas por el cliente. Ejemplo: Gmail, Salesforce, Microsoft 365.</p>
                        <b>Nuevos modelos:</b>
                        <ul>
                            <li><p><b>FaaS (Function as a Service)</b>: Ejecuta funciones individuales en respuesta a eventos, sin preocuparse por la infraestructura. 
                            Ejemplo: AWS Lambda.</p></li>
                            <li><p><b>CaaS (Containers as a Service)</b>: Gestión simplificada de contenedores para desplegar aplicaciones. Ejemplo: Azure Kubernetes Service.</p></li>
                        </ul>
                    <h3>Hiperescalabilidad</h3>
                        <p><b>Infraestructura elástica</b>: Permite a las empresas aumentar o reducir automáticamente los recursos según la demanda, por ejemplo, 
                        en picos de tráfico.</p>
                        <p><b>Optimización de costos</b>: Herramientas como AWS Auto Scaling o Google Cloud Operations permiten mantener eficiencia y minimizar costos.</p>
                        <p><b>Casos de uso:</b></p>
                            <ul>
                                <li><p>Servicios de streaming como Netflix, que ajustan la capacidad de servidores según la cantidad de usuarios.</p></li>
                                <li>Procesamiento de big data y entrenamiento de modelos de IA, que requieren gran capacidad computacional momentáneamente.</li>
                            </ul>
                    <h3>Multinube e híbrida</h3>
                        <p><b>Multinube</b>: Uso simultáneo de múltiples proveedores de nube para evitar el riesgo de dependencia (lock-in). 
                        Ejemplo: combinar AWS para almacenamiento y Azure para machine learning.</p>
                        <p><b>Híbrida</b>: Integra la nube pública con infraestructura privada, permitiendo mantener datos sensibles en un entorno privado mientras 
                        se usan recursos públicos para tareas menos críticas. Ejemplo: VMware Cloud en AWS.</p>
                        <p><b>Soluciones destacadas:</b></p>
                            <ul>
                                <li>Google Anthos para gestionar aplicaciones en entornos híbridos y multinube.</li>
                                <li>Azure Arc para integrar datos y aplicaciones desde diversas plataformas.</li>
                            </ul>
                    <h3>IA y ML en la nube</h3>
                        <p>Los servicios basados en inteligencia artificial y aprendizaje automático han ganado popularidad, con herramientas como AutoML y 
                            plataformas que simplifican la integración de algoritmos avanzados.
                            <br> Se utilizan ampliamente en análisis de datos, automatización de tareas y personalización de experiencias de usuario.</p>
                        <b>Herramientas de ML:</b>
                        <p>AWS SageMaker, Google AutoML y Azure Machine Learning permiten entrenar, implementar y gestionar modelos de IA con facilidad.</p>
                        <b>Casos de uso:</b>
                        <ul>
                            <li>Recomendaciones personalizadas (Netflix, Amazon).</li>
                            <li>Reconocimiento facial y análisis de imágenes (Google Vision AI).</li>
                            <li>Predicción de demanda y análisis de riesgos (Azure AI).</li>
                        </ul>
                        <p><b>Democratización de la IA</b>: Proveedores ofrecen bibliotecas preentrenadas y modelos listos para usar, lo que facilita la 
                        integración en empresas pequeñas.</p>
                    <h3>Seguridad y cumplimiento</h3>
                        <p>La seguridad sigue siendo una prioridad crítica. Los proveedores están integrando medidas como cifrado avanzado, Zero Trust 
                            architectures y controles de acceso granulares.
                        <br>Las regulaciones como GDPR, HIPAA y CCPA impulsan un mayor enfoque en la privacidad y cumplimiento normativo.</p>
                        <b>Características avanzadas:</b>
                        <ul>
                            <li>Cifrado extremo a extremo para datos en reposo y en tránsito.</li>
                            <li>Autenticación multifactor (MFA) y gestión de identidad con servicios como AWS IAM y Azure Active Directory.</li>
                            <li>Arquitecturas Zero Trust: Asumen que cada solicitud es potencialmente maliciosa y verifican continuamente.</li>
                        </ul>
                        <b>Cumplimiento normativo:</b>
                        <ul>
                            <li>Proveedores alineados con regulaciones globales como GDPR (Unión Europea), HIPAA (salud en EE. UU.) y CCPA (privacidad en California).</li>
                            <li>Servicios como Azure Compliance Manager facilitan auditorías y certificaciones.</li>
                        </ul>
                    <h3>Edge Computing</h3>
                        <p>Con la necesidad de baja latencia, el procesamiento en el borde se está integrando con la nube para tareas como IoT, 
                            videojuegos en línea y vehículos autónomos.</p>
                        <p><b>Definición</b>: Procesamiento de datos cerca de su origen para reducir la latencia y la dependencia de la nube central.</p>
                        <b>Aplicaciones clave:</b>
                        <ul>
                            <li><b>Dispositivos IoT</b>: Sensores en fábricas, cámaras inteligentes.</li>
                            <li><b>Vehículos autónomos</b>: Procesan datos de sensores en tiempo real.</li>
                            <li><b>Gaming</b>: Servicios como Google Stadia utilizan Edge Computing para reducir el input lag.</li>
                        </ul>
                        <b>Proveedores destacados:</b>
                        <p>AWS Outposts, Azure Stack y Google Distributed Cloud Edge.</p>
                    <h3>Contenedores y Kubernetes</h3>
                        <p>Son unidades ligeras que empaquetan aplicaciones y dependencias para ejecutarse en cualquier entorno.<br>
                        Docker lidera este espacio, siendo compatible con múltiples entornos.</p>
                        <b>Orquestación:</b>
                        <ul>
                            <li>Kubernetes (K8s) automatiza la gestión de contenedores, escalamiento y balanceo de carga.</li>
                            <li>Herramientas como Google Kubernetes Engine (GKE) simplifican esta administración.</li>
                        </ul>
                        <b>Casos de uso:</b>
                        <p>Empresas como Spotify despliegan microservicios en contenedores para ofrecer funciones de manera modular y escalable.dores y Kubernetes.</p>
                    <h3>Computación sin servidor (Serverless)</h3>
                        <p>La computación sin servidor permite a los desarrolladores enfocarse exclusivamente en el código, dejando la infraestructura totalmente gestionada 
                            por el proveedor de nube.</p>
                        <p><b>Modelo serverless</b>: Ejecuta código en función de eventos sin necesidad de gestionar servidores.</p>
                        <b>Ejemplos:</b>
                        <ul>
                            <li>AWS Lambda, que escala automáticamente y cobra por tiempo de ejecución.</li>
                            <li>Google Cloud Functions para crear aplicaciones basadas en eventos.</li>
                        </ul>
                        <b>Usos principales:</b>
                        <ul>
                            <li>Procesamiento de datos en tiempo real.</li>
                            <li>Automatización de tareas repetitivas.</li>
                            <li>APIs sin estado que responden a solicitudes bajo demanda.</li>
                        </ul>
                        <h3>Sostenibilidad</h3>
                            <p>Los proveedores están trabajando para hacer sus centros de datos más eficientes energéticamente y reducir su huella de carbono, con un creciente 
                                interés en la nube "verde".</p>
                            <b>Data centers ecológicos:</b>
                            <ul>
                                <li>Google y AWS utilizan energía renovable para alimentar sus centros de datos.</li>
                                <li>Diseño eficiente para reducir el consumo de agua y electricidad.</li>
                            </ul>
                            <b>Modelos de carbono neutral:</b>
                            <p>Microsoft se ha comprometido a ser carbono negativo para 2030.</p>
                            <b>Optimización energética:</b>
                            <p>Servicios que ayudan a los clientes a reducir el impacto de sus cargas de trabajo en la nube.</p>
                        <h3>Casos emergentes</h3>
                            <p>El metaverso, la realidad aumentada y las tecnologías relacionadas están usando la nube para procesar y almacenar datos masivos en tiempo real.
                                <br>La computación cuántica basada en la nube está en sus primeras etapas, con servicios experimentales disponibles.</p>
                            <p><b>Metaverso</b>: Procesamiento masivo de datos 3D en tiempo real para experiencias inmersivas.</p>
                            <p><b>Realidad aumentada/virtual</b>: Juegos y aplicaciones como Pokémon GO utilizan la nube para manejar datos geoespaciales y renderizado.</p>
                            <b>Computación cuántica:</b>
                            <ul>
                                <li>IBM y Google Cloud ofrecen acceso experimental a procesadores cuánticos.</li>
                                <li>Aún en fases iniciales, promete revolucionar áreas como la criptografía y la optimización logística.</li>
                            </ul>
                <h2>FUENTES DE FINANCIAMIENTO</h2>
                    <p>Las fuentes de financiamiento para la tecnología Cloud provienen de diversos sectores y actores económicos, dependiendo del contexto en el 
                        que se desarrolla o se utiliza. Se muestra una lista de las principales fuentes de financiamiento que contribuyen al desarrollo y operación 
                        de los servicios de computación en la nube:</p>
                    <h3>Iniciativa Privada</h3>
                        <p><b>Grandes corporaciones tecnológicas</b>: Empresas como Amazon, Microsoft, Google e IBM financian sus plataformas cloud (AWS, Azure, GCP, IBM Cloud) 
                        a través de inversiones internas, ingresos de otras líneas de negocio y capitalización del mercado.</p>
                        <p><b>Startups y PYMEs tecnológicas</b>: Innovan con servicios específicos en la nube mediante financiamiento de:</p>
                        <ul>
                            <li>Fondos de venture capital.</li>
                            <li>Inversionistas ángeles interesados en tecnologías disruptivas.</li>
                            <li>Incubadoras y aceleradoras de negocios.</li>
                        </ul>
                    <h3>Gobierno</h3>
                        <b>Subsidios e incentivos:</b>
                        <p>Algunos gobiernos proporcionan subsidios para fomentar la adopción de la nube en industrias estratégicas o pequeñas empresas.</p>
                        <p><b>Ejemplo</b>: Programas europeos como Horizon 2020 financian investigación e innovación en tecnologías emergentes, incluyendo cloud.</p>
                        <b>Contratos públicos:</b>
                        <p>Los gobiernos contratan servicios en la nube para modernizar su infraestructura tecnológica (por ejemplo, almacenamiento de datos públicos, 
                            plataformas de salud o educación).</p>
                        <p><b>Ejemplo</b>: El contrato JEDI de $10 mil millones para servicios cloud del Departamento de Defensa de EE. UU.</p>
                        <b>Proyectos de investigación:</b>
                        <p>Universidades y centros de investigación reciben financiamiento público para explorar aplicaciones de la nube.</p>
                    <h3>Comercialización y ventas directas</h3>
                        <b>Modelo de negocio basado en suscripciones:</b>
                        <p>Servicios cloud como IaaS, PaaS y SaaS generan ingresos recurrentes mediante tarifas mensuales o por uso.</p>
                        <p><b>Ejemplo</b>: Un cliente paga por instancias EC2 en AWS o por licencias de Google Workspace.</p>
                        <b>Estrategias de escalamiento:</b>
                        <p>Proveedores ofrecen versiones gratuitas limitadas (freemium) para atraer usuarios y luego los convierten en clientes pagos.</p>
                    <h3>Cuotas e impuestos</h3>
                        <b>Cuotas de uso por parte de los usuarios finales:</b>
                        <p>En entornos gubernamentales o de cooperación, las cuotas pueden financiar plataformas de nube comunitaria.</p>
                        <p><b>Ejemplo</b>: Universidades públicas que cargan una tarifa de tecnología a sus estudiantes para servicios basados en la nube.</p>
                        <b>Impuestos específicos para innovación tecnológica:</b>
                        <p>Algunos países asignan impuestos recaudados a proyectos relacionados con la digitalización y tecnologías en la nube.</p>
                    <h3>Consorcios y colaboraciones</h3>
                        <b>Asociaciones público-privadas:</b>
                        <p>Empresas privadas colaboran con gobiernos o instituciones públicas para implementar infraestructuras cloud compartidas.</p>
                        <p><b>Ejemplo</b>: Microsoft y OpenAI colaboraron para escalar soluciones de inteligencia artificial en la nube.</p>
                        <b>Fondos compartidos:</b>
                        <p>Organizaciones globales como la Unión Europea financian plataformas abiertas en la nube para fomentar estándares comunes y mejorar la 
                            interoperabilidad.</p>
                    <h3>Impulsos del mercado y comercio</h3>
                        <b>Cloud Marketplace:</b>
                        <p>Proveedores permiten a terceros vender software y servicios complementarios en sus plataformas, generando ingresos por comisiones.</p>
                        <p><b>Ejemplo</b>: AWS Marketplace o Google Cloud Marketplace.</p>
                        <b>Integraciones comerciales:</b>
                        <p>Servicios en la nube son financiados indirectamente al integrarse con hardware y dispositivos (como servidores optimizados para la nube).</p>
                    <h3>Subsidios y cooperación internacional</h3>
                        <b>Organismos internacionales:</b>
                        <p>El Banco Mundial y otras organizaciones multilaterales financian infraestructuras cloud para promover la transformación digital en países 
                            en desarrollo.</p>
                        <p>Ejemplo: Proyectos de e-Government basados en la nube en África y Asia.</p>
                        <b>Fondos específicos:</b>
                        <p>Subsidios a empresas para migrar a la nube como parte de estrategias de transformación digital.</p>
                <h2>NECESIDADES DEL MERCADO QUE BENEFICIAN ESTA TECNOLOGÍA</h2>
                    <p>La tecnología Cloud se ha convertido en una solución clave para satisfacer diversas necesidades del mercado en múltiples sectores. 
                        Estas son algunas de las principales necesidades que hacen que la computación en la nube sea atractiva:</p>
                    <h3>Reducción de costos</h3>
                        <p><b>Ahorro en infraestructura</b>: Las empresas no necesitan invertir grandes sumas en servidores, almacenamiento físico y mantenimiento. 
                            La nube ofrece modelos de pago por uso que reducen costos iniciales.</p>
                        <p><b>Ejemplo</b>: Una startup puede iniciar operaciones utilizando servicios de nube sin necesidad de adquirir equipos costosos.</p>
                        <p><b>Escalabilidad económica</b>: Se paga únicamente por los recursos utilizados, lo que es ideal para negocios con demandas fluctuantes, 
                        como el comercio electrónico o el streaming.</p>
                    <h3>Flexibilidad y escalabilidad</h3>
                        <p><b>Escalamiento dinámico</b>: Las empresas pueden aumentar o reducir su capacidad de cómputo según las necesidades en tiempo real.</p>
                        <p><b>Ejemplo</b>: Durante un evento de ventas masivas como el Black Friday, los servicios cloud permiten manejar el tráfico masivo en 
                        tiendas en línea.</p>
                        <p><b>Adaptación a la demanda global</b>: Empresas con operaciones internacionales pueden ofrecer servicios a usuarios en diferentes 
                            zonas geográficas, gracias a la infraestructura distribuida.</p>
                    <h3>Transformación digital</h3>
                        <p><b>Demanda de modernización</b>: Muchas empresas buscan migrar sus sistemas heredados a la nube para ser más competitivas y eficientes.</p>
                        <p><b>Ejemplo</b>: Bancos que modernizan sus plataformas para ofrecer servicios en línea más rápidos y seguros.</p>
                        <p><b>Nuevas capacidades</b>: La nube facilita el desarrollo e implementación rápida de aplicaciones innovadoras, como servicios móviles, IoT, y AI.</p>
                    <h3>Trabajo remoto y colaboración</h3>
                        <p><b>Demanda post-pandemia</b>: El teletrabajo impulsó la necesidad de herramientas que permitan colaborar en tiempo real desde cualquier lugar.</p>
                        <p><b>Ejemplo</b>: Herramientas como Google Workspace o Microsoft 365, que utilizan la nube para almacenamiento y colaboración.</p>
                        <p><b>Acceso global a recursos</b>: Los empleados pueden acceder a datos y aplicaciones desde cualquier dispositivo conectado a Internet.</p>
                    <h3>Gestión eficiente de grandes volúmenes de datos (Big Data)</h3>
                        <p><b>Necesidad de análisis avanzado</b>: Las empresas recopilan cada vez más datos y necesitan herramientas para procesarlos y 
                        analizarlos rápidamente.</p>
                        <p><b>Ejemplo</b>: Retailers utilizan la nube para analizar datos de clientes y crear estrategias de marketing personalizadas.</p>
                        <p><b>Capacidades masivas de almacenamiento</b>: Servicios como AWS S3 permiten almacenar grandes cantidades de datos a costos accesibles.</p>
                    <h3>Innovación y desarrollo rápido</h3>
                        <p><b>Entornos de desarrollo y prueba</b>: Los desarrolladores pueden crear, probar y desplegar aplicaciones más rápido sin necesidad de 
                        infraestructura propia.</p>
                        <p><b>Ejemplo</b>: Empresas de videojuegos que usan la nube para probar nuevos títulos en múltiples configuraciones.</p>
                        <p><b>Facilidad para implementar IA y ML</b>: Plataformas como AWS SageMaker o Google AI ofrecen herramientas listas para entrenar modelos avanzados.</p>
                    <h3>Seguridad y recuperación ante desastres</h3>
                        <p><b>Protección de datos</b>: Muchas empresas necesitan soluciones robustas para protegerse contra pérdidas de datos y ciberataques.</p>
                        <p><b>Ejemplo</b>: Backup y recuperación en la nube aseguran la continuidad del negocio en caso de fallos.</p>
                        <p><b>Cumplimiento normativo</b>: La nube permite mantener los datos en regiones específicas para cumplir con regulaciones como GDPR o HIPAA.</p>
                    <h3>Expansión del mercado global</h3>
                        <p><b>Acceso a nuevos mercados</b>: Empresas pequeñas pueden competir a nivel global al aprovechar la infraestructura de nube para ofrecer sus 
                            servicios en cualquier lugar.</p>
                        <p><b>Ejemplo</b>: Una tienda de comercio electrónico que utiliza la nube para manejar pedidos internacionales.</p>
                <h2>REFERENCIAS BIBLIOGRÁFICAS</h2>
                    <ul>
                        <li>Erl., T. (2012). Cloud Computing: Concepts, technology & architecture (1.a ed.). Mark L. Taub. 
                            <a href="https://ptgmedia.pearsoncmg.com/images/9780133387520/samplepages/0133387526.pdf">
                                https://ptgmedia.pearsoncmg.com/images/9780133387520/samplepages/0133387526.pdf</a></li>
                        <li>Reznik, P., & Dobson, J. (2019). Cloud Native Transformation. O’Reilly Media, Inc.</li>
                        <li>NIST. (2024, December 4). NIST. <a href="https://www.nist.gov/">https://www.nist.gov/</a></li>
                        <li>Better policies for better lives. (n.d.). OECD. <a href="https://www.oecd.org/en.html">https://www.oecd.org/en.html</a></li>
                        <li>Molisch, A. F. (n.d.). IEEE Xplore. <a href="https://ieeexplore.ieee.org/Xplore/home.jsp">https://ieeexplore.ieee.org/Xplore/home.jsp</a></li>
                        <li>Cloud Computing: Web-Based Applications That Change the Way You Work and Collaborate Online | Guide books | ACM Digital Library. (n.d.). Guide Books. 
                            <a href="https://dl.acm.org/doi/book/10.5555/1481454">https://dl.acm.org/doi/book/10.5555/1481454</a></li>
                        <li>Xia, Y. (2024). Cloud-based control systems: towards the control architecture in cloud computing era. Science China Information Sciences, 67(10). 
                            <a href="https://doi.org/10.1007/s11432-023-4156-5">https://doi.org/10.1007/s11432-023-4156-5</a></li>
                    </ul>
                <a href="punto4.pdf">PDF de articulo de tecnologia cloud.</a>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="content" style="background: #444; height: 100px; display: flex; justify-content: center; align-items: center;">
        <footer>
            <h2>Integrantes:</h2>
            <ul>
                <li>Castillo González Denny</li>
                <li>Ponce Galicia Fanny Belén</li>
                <li>Hernández Heredia Kevin</li>
            </ul>
        </footer>
    </div>
</body>
</html>
