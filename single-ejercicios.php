<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package primerapagina
 */

		get_header();  

?>

	<div id="primary" class="content-area col-md-12">
		<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :  
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?> 

		<div class="col-md-8">
		<?php
		echo "<h2>Clase Echo</h2>";
			echo 'Hola Mundo'; // primer echo
			echo "<br></br>"; //salto de pagina
			echo 'hola 2'; // segundo echo
			echo "<br></br>";
			echo 20 * 50; //operacion con echo
			echo "<br></br>"
		?>
		<?php
		echo "<h2>Clase Variables y estructuras de control</h2>";
		

			$variable = 'Max'; //variable

			echo $variable;//impresion de variable
			echo "<br>";

			$numero_1 = 60;
			$numero_2 = 50;

			if($numero_1 > $numero_2)
			{
				echo "El numero 1 es mayor";
			} 
			elseif($numero_1 == $numero_2)
			{
				"los numeros son iguales";
			}
			else 
			{
				echo "El numero es menor";
			}
			echo "<br>";
			// estructuras de control de php
		



		echo "<h2>Clase Arreglos</h2>";
		////        arays
			$fruta = array('manzana', 'pera');
			$fruta2 = array('papaya', 'mango');

			array_push($fruta, 'manzana');

			unset($fruta[2]);

			echo "<pre>";
			var_dump($fruta);
			echo "</pre>";

			echo "<pre>";
			var_dump($fruta2);
			echo "</pre>";

		echo "<h2>Clase areglos asosciativos</h2>"; 
			//array asosiativos
			$estudiante = [
				'nombre' => 'Pablo',
				'apellido' => 'De la madrid',
				'pais' => 'USA',
				'edad' => 18,
				'autentificado' => true
			];

			echo $estudiante['nombre'] . " " .  $estudiante['apellido'] . " Del pais " . $estudiante['pais'];


		

			echo "<h2>Clase Var dump y print_r</h2>";
			//// ----------- var_dump, print_r-------------////
			$fruta = array('manzana', 'pera');
			$estudiante = [
				'nombre' => 'Pablo',
				'apellido' => 'De la madrid',
				'pais' => 'USA'
			];

			echo "<pre>";
			var_dump($estudiante);
			echo "</pre>";

			echo "<pre>";
			print_r($estudiante);
			echo "</pre>";


			echo $fruta[1];

		
			echo "<h2>Clase Concatenacion de html y Arreglos asociativos</h2>";
			/// concatenacion de html y php con arrays asociativos
			$estudiante = [
				'nombre' => 'Pablo',
				'apellido' => 'De la madrid',
				'pais' => 'USA'
			];

			echo "<h5> Hola! " . $estudiante['nombre'] . "</h5>"; /// php y html


			echo "<h2>Clase For</h2>";
			/// ejercicio for
			for( $i = 0; $i <= 50; $i++  ) 
			{
				if($i == 10)
				{
					echo "El numero es DIEZ"; "<br />";
					continue;

				}

				echo "El numero es " . $i . "<br></br>";
			}


			echo "<h2>Clase Foreach</h2>";
			////ejercicio foreach
			$frutas = ['manzana', 'pera', 'papaya', 'guayaba'];
			for(  $i = 0; $i < count($frutas); $i++  ) 
			{

				echo $frutas[$i] . "<br />";
			}	
			echo "<p></p>";

			foreach($frutas as $frutass) 
			{
				echo $frutass . "<br>";
			}

		
			echo "<h2>Clase While</h2>";
			///ejercicio while
			$frutas = ['manzana', 'pera', 'papaya', 'guayaba'];

			for(  $i = 0; $i < count($frutas); $i++  ) 
			{

				echo $frutas[$i] . "<br />";
			}	
			echo "<p></p>";
			$i = 0;

			while($i < count($frutas)) 
			 {
				echo $frutas[$i] . '<br>';
				$i++;
			 }

		
			echo "<h2>Clase Libreria de php</h2>";
			//// libreria de php
			$frutas = ['manzana', 'pera', 'papaya', 'guayaba'];

			echo count($frutas);

			echo "<br>";

			$mi_nombre = 'Ricardo Flores Perez';

			echo strtoupper($mi_nombre);
			echo "<br>";
			echo strtolower($mi_nombre);

			echo "<br>";
			$password = '              password';
			if(strlen(($password)) < 10) 
			{
				echo 'El Password es muy debil';
			} else {
				echo 'El password es muy fuerte';
			}



			echo "<h2>Clase Funciones</h2>";
			function saludar()
			{
				echo 'Hola bienvenido al sitio web <br>';
			}
			saludar();
			saludar();
			
			function suma()
			{
				echo 2 + 2 . "<br>";
			}
			suma();

			echo "<h2>Clase Funciones con parametros</h2>";
			/// funcion saludar con parametros
   			function saludars($nombres) 
			{
				echo 'bienvenido al sitio web ' . $nombres . "<br />";
			}
			saludars('Ricardo');
			saludars('Marco Antonio');
			saludars('Carlos');


			echo '<p></p>';

			function suma2($num1, $num2)
			{
				echo $num1 + $num2 . "<br />";
			}

			suma2(20, 10);
			suma2(50, 110);
			suma2(1100, 2002);
			//funcion suma con parametros
		

			echo "<h2>Clase Funciones de retorno de valores</h2>";
			function calcular_total($cantidad) {
				$total = $cantidad * 1.16;
				return $total;
			}
			$cantidad_pagar = calcular_total(1000);

			echo $cantidad_pagar;
			echo "<p></p>";

			function pagar($total) 
			{
				$balance = 500;

				if($total > $balance)
				{
					echo 'hubo un error al pagar';
				} else {
					echo 'Pago exitoso';
				}
			}

			pagar($cantidad_pagar);
		

			echo "<h2>Clase Contructores de php</h2>";
			class Cliente {
				public function __construct()
				{
					echo 'Cliente';
				}
			}
			$cliente = new Cliente('pancho');
			$cliente = new Cliente('antonio');


			echo "<pre>";
			var_dump($cliente);
			echo "</pre>";

			echo "<pre>";
			var_dump($cliente);
			echo "</pre>";
		
		?>
	</div>
	</main><!-- #main -->
	</div><!-- #primary -->


