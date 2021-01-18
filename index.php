<?php
$sub_menu = array(
    array(
        'titulo' => 'Ropa',
        'url' => '/ropa.html'
    ),
    array(
        'titulo' => 'Electronica',
        'url' => '/electronica.html'
    ),
    array(
        'titulo' => 'Higiene',
        'url' => '/higiene.html'
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
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Lyracons</title>
</head>
<body>
<div class="container">
    <header>
        <img src="assets/images/logo.png" alt="Logo" class="logo"/>
    </header>



    <nav>
        <div id="header">
			<ul class="navegador">
				<li>
                    <a class="inicio-btn" href="#">INICIO <span class="sr-only">(current)</span></a>
               
                </li>
				<li><a href="#">PRODUCTOS</a>
					<ul class="menuJSON">
						<li class="menuPHP">
                            <a href="#">PHP</a>
							<ul>
                                <?php
                                    foreach ($sub_menu as $item) {
                                        echo "<a class='dropdown-item' href='" . $item['url'] . "'>" . $item['titulo'] . "</a>";
                                    }
                                ?>
							</ul>
						</li>
					</ul>
				</li>
				<li><a class="nosotros-btn" href="#">NOSOTROS</a></li>
				<li><a class="compras-btn" href="#">COMPRAS</a></li>
			</ul>
		</div>
    </nav>
    <!-- <nav class="navbar navbar-expand-lg navbar-light menu-items">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link inicio-btn" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Pantalones</a>
                        <a class="dropdown-item" href="#">Remeras</a>
                        <a class="dropdown-item" href="#">Camperas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled">PHP</a>
                        <?php
                        foreach ($sub_menu as $item) {
                            echo "<a class='dropdown-item' href='" . $item['url'] . "'>" . $item['titulo'] . "</a>";
                        }
                        ?> -->
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled">JavaScript</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nosotros-btn" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link compras-btn" href="#">Compras</a>
                </li>
            </ul>
        </div>
    </nav>  -->


    <main class="contenido">
        <div class="aside">
            <ul class="">
                <li class="aside-placeholder"></li>
            </ul>
        </div>
        <div class="producto">
            <p>producto1</p>
        </div>
        <div class="producto">
            <p>producto2</p>
        </div>
        <div class="producto">
            <p>producto3</p>
        </div>
        <div class="producto">
            <p>producto4</p>
        </div>
        <div class="producto">
            <p>producto5</p>
        </div>
        <div class="producto">
            <p>producto6</p>
        </div>
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
    crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
    crossorigin="anonymous">
</script>
<script src="skin/script.js"></script>




</body>
</html>