<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Haru Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="../assents/styles.css" rel="stylesheet">
</head>


<style>
    .navbar {
        padding: 20px;
        /* Ajusta el espaciado de la barra de navegación */

        font-size: 20px;
        /* Ajusta el tamaño de fuente según tus preferencias */
        color: #6f4e37;
        /* Color del texto */
    }
</style>
</head>

<body>

    <div class="header-container">
        <div class="welcome-text">¡Bienvenido!</div>
        <div class="img-logo">
            <img src="../assents/img/logo3" title="Haru Store" alt="Haru Store" style="width: 200px; height: auto;">
        </div>
        <div class="login-registro">
            <img src="../assents/img/descarga.png" class="img-fluid" style="width: 50px; height: 50px;">
            <a href="../loginusuario.php">Ingresa /</a>
            <a href="../registro.php">Regístrate</a>
        </div>
        <div class="social-icons">
            <a href="#" class="social-icon">
                <img src="../assents/img/facebook.png" alt="Facebook">
            </a>
            <a href="#" class="social-icon">
                <img src="../assents/img/twitter.png" alt="Twitter">
            </a>
            <a href="#" class="social-icon">
                <img src="../assents/img/instagram.png" alt="Instagram">
            </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e0766d; font-weight: bold;">

        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php" style="color: #6f4e37;">
                <img src="../assents/img/logo.jpg" alt="Haru Store" width="100" height="100" style="margin-right: 10px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 30px;">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #6f4e37;">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #6f4e37;">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #6f4e37;">Informacion</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6f4e37;">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Alimento</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Snacks</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Paseo</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Camas</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Platos</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Vestuario</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Transporte</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="font-size: 30px;">OFERTAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6f4e37;">
                            Salud y bienestar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Comida especial</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Agua Fresca</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Ejercicio Regular</a></li>

                        </ul>
                    </li>
                </ul>
                <form class="d-flex" id="search-form">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="button" id="search-button" style="background-color: #e0766d; color: #6f4e37; padding: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h0a6.5 6.5 0 0 0 1.397-1.398Zm1.207-1.207h0L14.02 12.02h0l-2.878 2.88h0a1 1 0 0 1-1.32-1.32l2.88-2.88Z" />
                        </svg>
                    </button>
                </form>
            </div>
    </nav>
    
        </div>

  <div class="content">
        <div class="empty">Su carro de compras está vacío!</div>
      </div>
</div>  <div id="search">
  <div class="button-search"></div>
    <input class="search-input" type="text" name="search" placeholder="Buscar" value="catalogo" />
  </div>
 

<div id="notification"></div>
<div id="content-w">
<div id="content" class="with-left" >  <div class="breadcrumb">
        <a href="///">Inicio</a>
         &raquo; <a href="///product/search&amp;search=catalogo">Buscar</a>
      </div>
  <h1>Buscar - catalogo</h1>
  <b>Criterio de Búsqueda</b>
  <div class="content">
    <p>Buscar:<br />
          <input type="text" name="search" value="catalogo" />
      <br /><br />
      En:<br />
      <select name="category_id">
        <option value="0">Todas las Categorías</option>
                        <option value="132">Clientes</option>
                                <option value="133">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regalo para Perro</option>
                                        <option value="134">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regalo para Gato</option>
                                                <option value="85">Inicio</option>
                                        <option value="92">Perro</option>
                                <option value="93">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alimento</option>
                                        <option value="118">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Snacks</option>
                                        <option value="94">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Higiene</option>
                                        <option value="96">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paseo</option>
                                        <option value="95">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Juguetes</option>
                                        <option value="98">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camas</option>
                                        <option value="99">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Platos</option>
                                        <option value="97">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vestuario</option>
                                        <option value="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transporte</option>
                                        <option value="101">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salud y Bienestar</option>
                           
                                <option value="144">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bodys</option>
                                                <option value="102">Gato</option>
                                <option value="103">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alimento</option>
                                        <option value="119">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Snacks</option>
                                        <option value="104">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Higiene</option>
                                        <option value="105">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paseo</option>
                                        <option value="106">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Juguetes</option>
                                        <option value="107">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camas</option>
                                        <option value="108">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Platos</option>
                                        <option value="109">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vestuario</option>
                                        <option value="110">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Transporte</option>
                                        <option value="111">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salud y Bienestar</option>
                                <option value="143">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bodys</option>
                                              
                                       
                                      </select>
      <br />
            <br />
      <input type="checkbox" name="sub_category" value="1" id="sub_category" />
            <label for="sub_category">Buscar en SubCategorías</label>
    </p>
        <input type="checkbox" name="description" value="1" id="description" />
        <label for="description">Buscar en las descripciones de los productos</label>
  </div>
  <div class="buttons">
    <div class="right"><input type="button" value="Buscar" id="button-search" class="button" /></div>
  </div>
  <h2>Productos que cumplen los criterios de búsqueda</h2>
    <div class="content">No hay productos que coincidan con el criterio de búsqueda.</div>
    </div>
  <div id="column-left">
    <div class="box">
  <div class="box-heading">Últimos Productos</div>
  <div class="box-content">
    <div class="box-product">
            <div>
                <div class="image"><a href="///poema-senior--pollo-y-arroz-12kg"><img src="https://image.bestfriends.cl/cache/data/productos/Poema/Pollo Senior-120x120.jpg" width="120" height="120" alt="Poema Senior / Pollo y Arroz 12kg" /></a></div>
                <div class="name"><a href="///poema-senior--pollo-y-arroz-12kg">Poema Senior / Pollo y Arroz 12kg</a></div>
                <div class="price">
                    $49.900                  </div>
                        
			<div class="cart"><a href="///poema-senior--pollo-y-arroz-12kg" class="button">+ Ver Más</a></div>
            
      </div>
            <div>
                <div class="image"><a href="///wanpy-creamy-atun-y-camaron"><img src="https://image.bestfriends.cl/cache/data/productos/Wanpy/wanpy creamy atun camaron-120x120.jpg" width="120" height="120" alt="Wanpy Creamy Atun y Camaron" /></a></div>
                <div class="name"><a href="///wanpy-creamy-atun-y-camaron">Wanpy Creamy Atun y Camaron</a></div>
                <div class="price">
                    $2.690                  </div>
                        
			<div class="cart"><a href="///wanpy-creamy-atun-y-camaron" class="button">+ Ver Más</a></div>
            
      </div>
            <div>
                <div class="image"><a href="///wanpy-creamy-tuna-scallop"><img src="https://image.bestfriends.cl/cache/data/productos/Wanpy/wanpy creamy atun ostion-120x120.jpg" width="120" height="120" alt="Wanpy Creamy Tuna Scallop" /></a></div>
                <div class="name"><a href="///wanpy-creamy-tuna-scallop">Wanpy Creamy Tuna Scallop</a></div>
                <div class="price">
                    $2.690                  </div>
                        
			<div class="cart"><a href="///wanpy-creamy-tuna-scallop" class="button">+ Ver Más</a></div>
            
      </div>
            <div>
                <div class="image"><a href="///wanpy-creamy-atun-salmon"><img src="https://image.bestfriends.cl/cache/data/productos/Wanpy/wanpy creamy atun salmon-120x120.jpg" width="120" height="120" alt="Wanpy Creamy Atun Salmon" /></a></div>
                <div class="name"><a href="///wanpy-creamy-atun-salmon">Wanpy Creamy Atun Salmon</a></div>
                <div class="price">
                    $2.690                  </div>
                        
			<div class="cart"><a href="///wanpy-creamy-atun-salmon" class="button">+ Ver Más</a></div>
            
      </div>
          </div>
  </div>
</div>
  </div>
<script type="text/javascript">
$('#content input[name=\'search\']').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#button-search').trigger('click');
	}
});

$('select[name=\'category_id\']').bind('change', function() {
	if (this.value == '0') {
		$('input[name=\'sub_category\']').attr('disabled', 'disabled');
		$('input[name=\'sub_category\']').removeAttr('checked');
	} else {
		$('input[name=\'sub_category\']').removeAttr('disabled');
	}
});

$('select[name=\'category_id\']').trigger('change');

$('#button-search').bind('click', function() {
	url = 'index.php?route=product/search';
	
	var search = $('#content input[name=\'search\']').attr('value');
	
	if (search) {
		url += '&search=' + encodeURIComponent(search);
	}

	var category_id = $('#content select[name=\'category_id\']').attr('value');
	
	if (category_id > 0) {
		url += '&category_id=' + encodeURIComponent(category_id);
	}
	
	var sub_category = $('#content input[name=\'sub_category\']:checked').attr('value');
	
	if (sub_category) {
		url += '&sub_category=true';
	}
		
	var filter_description = $('#content input[name=\'description\']:checked').attr('value');
	
	if (filter_description) {
		url += '&description=true';
	}

	location = url;
});

function display(view) {
	if (view == 'list') {
		$('.product-grid').attr('class', 'product-list');
		
		$('.product-list > div').each(function(index, element) {
			html  = '<div class="right">';
			html += '  <div class="cart">' + $(element).find('.cart').html() + '</div>';
			
				// html += '  <div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
			
				// html += '  <div class="compare">' + $(element).find('.compare').html() + '</div>';
			html += '</div>';			
			
			html += '<div class="left">';
			
			var image = $(element).find('.image').html();
			
			if (image != null) { 
				html += '<div class="image">' + image + '</div>';
			}
			
			var price = $(element).find('.price').html();
			
			if (price != null) {
				html += '<div class="price">' + price  + '</div>';
			}
						
			html += '  <div class="name">' + $(element).find('.name').html() + '</div>';
			html += '  <div class="description">' + $(element).find('.description').html() + '</div>';
			
			var rating = $(element).find('.rating').html();
			
			if (rating != null) {
				html += '<div class="rating">' + rating + '</div>';
			}
				
			html += '</div>';
						
			$(element).html(html);
		});		
		
		$('.display').html('<b>Mostrar:</b> Listado <b>/</b> <a onclick="display(\'grid\');">Cuadrícula</a>');
		
		$.totalStorage('display', 'list'); 
	} else {
		$('.product-list').attr('class', 'product-grid');
		
		$('.product-grid > div').each(function(index, element) {
			html = '';
			
			var image = $(element).find('.image').html();
			
			if (image != null) {
				html += '<div class="image">' + image + '</div>';
			}
			
			html += '<div class="name">' + $(element).find('.name').html() + '</div>';
			html += '<div class="description">' + $(element).find('.description').html() + '</div>';
			
			var price = $(element).find('.price').html();
			
			if (price != null) {
				html += '<div class="price">' + price  + '</div>';
			}	
					
			var rating = $(element).find('.rating').html();
			
			if (rating != null) {
				html += '<div class="rating">' + rating + '</div>';
			}
						
			html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
			
				// html += '<div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
			
				// html += '<div class="compare">' + $(element).find('.compare').html() + '</div>';
			
			$(element).html(html);
		});	
					
		$('.display').html('<b>Mostrar:</b> <a onclick="display(\'list\');">Listado</a> <b>/</b> Cuadrícula');
		
		$.totalStorage('display', 'grid');
	}
}

view = $.totalStorage('display');

if (view) {
	display(view);
} else {
	display('list');
}
//--></script> 
<div class="clear"></div>
</div>
<div id="footer-w">
<div id="footer">
    <div class="column">
    <h3>Información</h3>
    <ul>
            <li><a href="///quienes-somos">Quienes Somos</a></li>
            <li><a href="///terminos-condiciones">Términos y Condiciones</a></li>
            <li><a href="///medios-de-pago">Medios de Pago</a></li>
            <li><a href="///envios">Envíos</a></li>
            <li><a href="///alianzas-d">Alianzas  :D</a></li>
            <li><a href="///adopta">#adopta</a></li>
      <li><a href="///information/news">Noticias</a></li></ul></div>
    <div class="column">
    <h3>Servicio al Cliente</h3>
    <ul>
      <li><a href="///information/contact">Contacto</a></li>
      <li><a href="///account/return/insert">Devoluciones</a></li>
      <li><a href="///information/sitemap">Mapa del Sitio</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>Extras</h3>
    <ul>
      <li><a href="///product/manufacturer">Marcas</a></li>
      <li><a href="///account/voucher">Vouchers de Regalo</a></li>
      <!-- <li><a href="///affiliate/account">Afiliados</a></li> -->
      <li><a href="///product/special">Ofertas</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>Mi Cuenta</h3>
    <ul>
      <li><a href="///account/account">Mi Cuenta</a></li>
      <li><a href="///account/order">Historial de Órdenes</a></li>
      
				<!--<li><a href="///account/wishlist">Lista de Deseos</a></li>-->
      <li><a href="///account/newsletter">Boletín de Noticias</a></li>
    </ul>
  </div>
  <div class="clear"></div>
<div id="powered">Best Friends &copy; 2023, todos los derechos reservados. <br /><a href="http://www.prpdesigns.cl" title="Diseño Tiendas Virtuales">Tienda Virtual por PrP Designs</a></div>
</div>
</div>
</div>
<script>
$(window).load(function() {
$('#compartelo').share({
networks: ['facebook','googleplus','twitter','linkedin','pinterest','email']
});

$('.linklog').click(function() {
$('.ingreso').toggle();
});

$('.searchshow').click(function() {
$(this).toggleClass('mostrado');
$('#header #search').toggleClass('mostrado');
$('#menu ul.clearfix').hide();
$('#pull, #menu ul.mostrado').removeClass('mostrado');
$('#cart').removeClass('active');
});

var resizeTimer;
$(window).resize(function(){
    if (resizeTimer) clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        if ($('#cboxOverlay').is(':visible')) {
            $.colorbox.load(true);
        }
    }, 300)
});
$(function() {
    var pull        = $('#pull');
        menu        = $('#menu ul.clearfix');
        menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
        event.preventDefault();
        menu.slideToggle();
        $(this).toggleClass('mostrado');
        $('#menu ul.clearfix').toggleClass('mostrado');
        $('.searchshow, #header #search.mostrado').removeClass('mostrado');
        $('#cart').removeClass('active');
    });
});
$(window).resize(function(){
    var w = $(window).width();
    if(w > 680 && menu.is(':hidden')) {
        menu.removeAttr('style');
        $('#menu ul.mostrado').removeClass('mostrado');
    }
});
$( "#tab-description table" ).wrap( "<div class='tabla'></div>" );
$("#preloader").fadeOut(1000);
});
</script>
</body>
</html>
