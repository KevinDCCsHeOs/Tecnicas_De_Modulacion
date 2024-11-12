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
            <a href="?section=3.4" class="tab <?php echo (isset($_GET['section']) && $_GET['section'] == '3.4') ? 'active' : ''; ?>">Tema 3.4 Códigos de línea</a>
            <a href="?section=3.5" class="tab <?php echo (!isset($_GET['section']) || $_GET['section'] == '3.5') ? 'active' : ''; ?>">Tema 3.5 Módems, Estándares y Prótocolos.</a>
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
