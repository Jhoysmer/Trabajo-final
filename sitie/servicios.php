<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Final</title>
    <link rel="stylesheet" href="../css/sevicios.css"/>
</head>
<body>
  <nav class="navbar">
    <div class="container nav-container">
<img src="../SRC/vetex.png" alt="Logo de tu empresa" width="100" height="100">
      <ul class="nav-links">
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto-formulario.php">Contacto - Formulario</a></li>
        <script>
       
        </script>
      </ul>
      <button class="nav-toggle" aria-label="Abrir menú">
        ☰
      </button>

<section id="servicios" class="servicios container">
    <h2>Nuestros Servicios</h2>
    <div class="grid">
      <div class="card" onclick="toggleInfo(this)">
        <h3>Vacunación</h3>
        <p>Protege a tu mascota contra enfermedades comunes.</p>

        <div class="extra">
      <h3><u>VACUNAS PARA PERROS:</u></h3>
      <p>-Quíntuple (5 en 1) o séxtuple (6 en 1): protege contra moquillo, parvovirus, adenovirus, parainfluenza y leptospira.
        <br>
         $ Precio: $15.000 – $22.000 cada dosis.</p>
      <p>-Antirrábica: obligatoria por ley, protege contra la rabia.
        <br>
         $ Precio: $10.000 – $15.000.</p>
        <h3><u>VACUNAS PARA GATOS:</u></h3>
        <p>-Triple felina (3 en 1): protege contra rinotraqueítis, calicivirus y panleucopenia.
          <br>
         $ Precio: $15.000 – $22.000 cada dosis.</p>
        <p>-Antirrábica: también obligatoria en gatos.
        <br>
         $ Precio: $10.000 – $15.000.
         <br>
         Refuerzos: igual que en perros, se aplican cada año.</p>
      </div>
      </div>

      <div class="card" onclick="toggleInfo(this)">
        <h3>Consultas Generales</h3>
        <p>Diagnóstico completo y tratamiento personalizado.</p>
          <div class="extra">
        <p>-Revisión clínica completa: ojos, oídos, piel, dientes, corazón, pulmones y abdomen.</p>
          <br>
         <p>-Control de peso, temperatura y chequeo del estado general.</p>
          <br>
          <p>-Asesoramiento en vacunación, desparasitación y nutrición.</p>
          <br>
          <p>-Detección temprana de enfermedades y plan de prevención.</p>
          <br>
            <p>$ Precio: $10.000 – $18.000 (consulta estándar).</p>
          </div>
      </div>

      <div class="card" onclick="toggleInfo(this)">
        <h3>Cirugía</h3>
        <p>Procedimientos modernos y cuidados post-operatorios.</p>
        <div class="extra">
      <h3><u>Cirigia Reproducticas:</u></h3>
      <p>-Castración de machos: extracción de testículos para evitar reproducción.
          <br>-Esterilización de hembras: extracción de ovarios o útero + ovarios.
         <br>-Cesárea: parto quirúrgico en hembras con complicaciones.</p>
              
      <h3><u>Cirugías digestivas / abdominales:</u></h3>
      <p>-Extracción de cuerpos extraños: objetos ingeridos que obstruyen intestino o estómago.
     <br>-Tumores abdominales: eliminación de masas benignas o malignas.
     <br>-Hernias: reparación de hernias umbilicales, inguinales o diafragmáticas.</p>
             
       <h3><u>Cirugías traumatológicas/ortopédicas:</u></h3>     
       <p>-Fracturas: colocación de placas, tornillos o fijadores.
     <br>-Luxaciones y displasias: corrección de cadera, rodilla o ligamentos.
     <br>-Amputaciones: en casos de accidentes graves, tumores o infecciones.</p>
             
      <h3><u>Cirugías de piel y tejidos blandos:</u></h3> 
      <p>-Extracción de tumores cutáneos o subcutáneos.
      <br>Corrección de heridas profundas o accidentes.
      <br>Cirugía reconstructiva o plástica en casos especiales.</p>
    
      <h3><u>Cirugías de Emergencias:</u></h3>
       <p>-Traumatismos graves (accidentes, mordeduras).
      <br>-Obstrucciones intestinales o torsión gástrica.
      <br>-Hemorragias internas o accidentes graves.</p>
        
      <h3>Esterilizaciones/castraciones: $18.000 – $80.000 según sexo y tamaño.</h3>
      <h3>Cirugías mayores (fracturas, tumores, cesáreas): $70.000 – $150.000 según complejidad.</h3>
       </div>
    </div>
      <div class="card" onclick="toggleInfo(this)">
        <h3>Estetica e higiene</h3>
        <p>Baño, peluqueria, corte de uñas y limpieza de oídos.</p>
          <div class="extra">
        <p>-Baños sanitarios: especiales para pulgas, hongos o problemas de piel.
        <br>
         <p>Precio de baños sanitarios:$12.000 - $18.000</p>
        <br>Peluquería: cortes según la raza o por comodidad del animal.
        <br>
         <p>Precio de Peluqueria:$10.000 - $15.000</p>
        <br>Otros cuidados: corte de uñas, limpieza de oídos, vaciado de glándulas anales.</p>
        </div>
      </div>
    </div>
  </section>
<script src="jsj.js"></script>
</body>
</html>