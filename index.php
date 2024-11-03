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
            <a href="?section=3.4" class="tab <?php echo (isset($_GET['section']) && $_GET['section'] == '3.4') ? 'active' : ''; ?>">Tema 3.4 Códigos de línea</a>
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
                <img src="https://miro.medium.com/v2/resize:fit:1020/1*XCgMOyHXSqsC4YhnJQ2auw.png" alt="Modulacion en Amplitud (AM)">

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
                <img src="https://www.textoscientificos.com/imagenes/redes/frecuencia.jpg" alt="Modulacion en Frecuencia (FM)">

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
                <img src="https://www.textoscientificos.com/imagenes/redes/moduladora.jpg" alt="Modulacion en Fase (PM)">

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
                <img src="https://i0.wp.com/www.cctvsg.net/wp-content/uploads/2019/11/maxresdefault-1.jpg?fit=1024%2C576&ssl=1" alt="Codecs">

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
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/RZcode.png" alt="RZ (Return to Zero)">

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
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/NRZcode.png" alt="NRZ (Non-Return to Zero)">

                <h3>AMI (Alternate Mark Inversion)</h3>
                <p>Codifica los unos con pulsos alternantes en polaridad (positiva y negativa), mientras que los ceros se representan con la ausencia de señal.</p>
                <ul>
                    <li><b>Ventajas</b>: Ayuda a mantener un balance de señal (sin componente de corriente continua).</li>
                    <li><b>Aplicaciones</b>: Sistemas de telecomunicaciones que requieren balance de carga.</li>
                </ul>
                <img src="https://slideplayer.com/slide/17887552/106/images/3/AMI+WAVEFORM.jpg" alt="AMI (Alternate Mark Inversion)" width="300" height="200">

                <h3>Manchester</h3>
                <p>Cada bit tiene una transición en el medio del intervalo de bit.</p>
                <ul>
                    <li><b>Ventajas</b>: Proporciona sincronización de reloj, lo que permite una detección más precisa de bits.</li>
                    <li><b>Desventajas</b>: Utiliza más ancho de banda que NRZ.</li>
                    <li><b>Aplicaciones</b>: Común en redes de computadoras como Ethernet.</li>
                </ul>
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Manchester_code.png" alt="Manchester">

                <h3>Manchester Diferencial</h3>
                <p>Similar al Manchester, pero las transiciones se utilizan para representar bits de forma diferente, lo que mejora la robustez 
                    contra errores de inversión de polaridad.</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Manchester_code.png" alt="Manchester diferencial">

                <h3>B8ZS (Bipolar 8-Zero Substitution)</h3>
                <p>Introduce un patrón de sustitución para evitar largas secuencias de ceros, manteniendo la sincronización.</p>
                <ul>
                    <li><b>Ventajas</b>: Mantiene la sincronización sin aumentar el ancho de banda.</li>
                    <li><b>Aplicaciones</b>: Líneas de transmisión de alta velocidad.</li>
                </ul>
                <img src="https://codes.pratikkataria.com/wp-content/uploads/2016/09/Line-coding8-700x398.jpg" alt="B8ZS (Bipolar 8-Zero Substitution)">

                <h3>HDB3 (High-Density Bipolar 3-Zero)</h3>
                <p>Similar a B8ZS, pero para líneas de transmisión europeas. Sustituye secuencias de ceros para mantener la sincronización y el balance de carga.</p>
                <img src="https://www.physicsforums.com/attachments/upload_2017-6-6_22-16-24-png.205018/" alt="HDB3 (High-Density Bipolar 3-Zero)">
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
