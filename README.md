Maquetar el archivo adjunto “boceto_frontend.jpg” utilizando un archivo html y otro css.	


Agregar al menú del ejercicio 	anterior un menu desplegable en “Productos” con los sub ítems 	“Pantalones, Remeras, Camperas” (sin utilizar Javascript).


Agregar Javascript al ejercicio 	anterior para que suceda lo siguiente:	
Al hacer click en el botón  “Inicio”, desaparezcan todos los ítems del contenido	
Al hacer over en el botón “Compras”, cambie de color el sidebar, y al hacer mouseout, 	vuelva al color original.	
Al hacer click en el botón “Nosotros” se agregue al sidebar el texto “Hola Mundo!”	


Generar el submenú para el 	botón “Productos” iterando los datos en el siguiente array php. 
        $sub_menu = array(
            array(
                'titulo' => 'Ropa',
                'url' => '/ropa.html
            '),
            array(
                'titulo' =>'Electronica',
                'url' => '/electronica.html'
            ),
            array(
                'titulo' => 'Higiene',
                'url' =>'/higiene.html'
            ),
            array(
                'titulo' => 'Alimentos',
                'url' => '/alimentos.html'
            ),
            array(
                'titulo' => 'Otros',
                'url' => '/otros.html'
            )
        );



Generar el mismo submenú, pero 	esta vez en javascript utilizando los datos del siguiente JSON.

        var JSON ={
                submenu:[
                    {titulo: 'Ropa', url: '/ropa.html'},
                    {titulo: 'Electronica', url: '/electronica.html'},
                    {titulo: 'Higiene', url: '/higiene.html'},
                    {titulo: 'Alimentos', url: '/alimentos.html'},
                    {titulo: 'Otros', url: '/otros.html'}
                ]
        }



