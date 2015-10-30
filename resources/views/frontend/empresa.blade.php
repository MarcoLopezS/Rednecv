@extends('layouts.frontend')

@section('contenido_body')

<!-- banner -->
<section id="banner" class="inner-b"> <img src="images/404_01.png" alt=""/> </section>

<!-- Content -->
<section class="content-holder1 inner-pages">

    <section class="container">

      <section class="help-holder">

        <article class="left">

          <h2> <span class="txt-left">Empresa</span> <span class="bg-right"></span> </h2>

            <section class="row-fluid">

            	<div id="tabs">
            		
            		<figure class="span3">

						<ul class="left-col-list">
							<li><a href="#nosotros">Nosotros</a> </li>
							<li><a href="#equipo">Equipo</a> </li>
							<li><a href="#clientes">Clientes</a> </li>
							<li><a href="#testimonios">Testimonios</a> </li>
						</ul>

	              	</figure>

	              	<figure class="span9">

              		<div id="nosotros">

              			<h1>Nosotros</h1>

	              		<p>Somos una empresa que integra  la <strong>Educación y las Neurociencias</strong> en todos los niveles y modalidades, <strong>midiendo</strong> de manera constante los resultados obtenidos producto de las capacitaciones brindadas a través de talleres, charlas, seminarios, conferencias, encuentros, monitoreos, asesorías y acompañamientos a fin de crear y recrear nuevos planes de acción que permitan a nuestros participantes alcanzar las <strong>competencias generales o específicas propuestas.</strong></p>

	              		<h2>Objetivo</h2>
	              		<p>Generar el cambio en la sociedad a  través de la educación de capacidades, habilidades y actitudes de las personas, mediante estructuras metodológicas y estrategias didácticas adecuadas a la realidad de cada institución y/o persona teniendo como base fundamental los aportes que las Neurociencias vienen brindando a la educación, entendiendo el aprendizaje como la construcción de redes neuronales producto de la información social que recibe el cerebro a través de las experiencias brindadas por el entorno, promoviendo a través de la educación y capacitación,  la práctica de los valores dictados por los principios éticos fundamentales que la sociedad requiere para una sana y pacífica convivencia.</p>

						<h2>Visión</h2>

						<p>Propiciar un cambio en el mundo a través de la educación en valores, en todos los niveles y modalidades, llevando a la práctica los aportes de las Neurociencias y el Coaching Ontológico.</p>

						<h2>Misión</h2>

						<p><strong>REDNECV</strong> tiene por finalidad estimular a través del aporte de las Neurociencias a la Educación, el desarrollo de  capacidades, habilidades y actitudes que permitan a los participantes  de las diversas capacitaciones, alcanzar el desarrollo de competencias generales y específicas, que contribuyan a su desarrollo profesional y personal en beneficio de sí mismo y del entorno en el cual se desenvuelve.</p>
              			
              		</div>

              		<div id="equipo">

              			<h1>Equipo</h1>

              			<p>La conforman distintos profesionales que como parte de su formación académica tienen conocimientos de Neurociencias, Educación y Coaching. Asimismo los profesionales tienen principalmente un perfil ético que los distingue y que demuestran a través de su buen trato y comportamiento.</p>

              			<div class="team">
              				
              				<div class="imagen">

              					<img src="/imagenes/nathaly-canales.jpg" alt="Nathaly Canales">

              					<h2>Nathaly Canales</h2>

              					Elementum ultrices integer auctor. Aenean nec parturient sit sagittis augue diam ac, mid. Duis ultricies nascetur tincidunt parturient, elementum, mauris et velit, enim vut vel eu parturient diam, ultricies! Vel sagittis ac urna placerat? Hac scelerisque est dapibus in dignissim? Pid lorem pid sed augue magnis aenean in! Proin placerat.
              					
              				</div>

              				<div class="datos">

              					<div>
              						
              						<h2>Formación Académica</h2>

              						<ul>
              							<li>Licenciada en Educación</li>
              							<li>Magister en Educación con mención en Trastornos de la Comunicación Humana</li>
              							<li>Doctorado en Neurociencias</li>
              							<li>Especializaciones relacionadas a la Didáctica y a la Gestión</li>
              							<li>Coach de equipos</li>
              							<li>Consultora y capacitadora</li>										
              						</ul>

              					</div>

              					<div>
              						
              						<h2>Experiencia</h2>
              						
              						<ul>
              							<li>Planificación, ejecución y evaluación de proyectos en el marco de presupuesto por resultados</li>
              							<li>Líder de equipos de trabajo de diversas tareas y funciones</li>
              							<li>Asesora de investigación de pre grado, segunda especialidad y maestría</li>
              							<li>Coordinadora académica de programas de capacitación</li>
              							<li>Catedrática universitaria y de post grado</li>
              						</ul>

              					</div>
              					
              				</div>

              			</div>
              			
              		</div>

              		<div id="clientes">

              			<h1>Clientes</h1>
              			
              		</div>

              		<div id="testimonios">

              			<h1>Testimoinios</h1>
              			
              		</div>                	

              	</figure>

            	</div>              	

            </section>

        </article>

      </section>

    </section>

  </section>

@stop

@section('contenido_footer')

<script>
	var jTabs = jQuery.noConflict();

	jTabs(document).on("ready", function(){

		jTabs("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
		jTabs("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");

	});

</script>

@stop