
<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <title>Haru Store</title>
    <base href="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="assentes/img/item4.jpg" type="">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="javaScript/jquery-3.2.1.min.js"></script>
    <script src="javaScript/alertifyjs/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="stylesheet" type="text/css" href="assents\styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


</head>

<!-- Primer encabezado -->
<header>
    <div class="header-container1">
        <div class="welcome-text">Alimentos para perro</br></div>
        <div class="logo-container">
            <img src="./../assent" title="Haru Store" alt="Haru Store">
        </div>
        <div class="login-registro">
            <img src="./assents/img/logo1.jpg" alt="" style="width: 50px; height: 50px;">
            <a href="./loginusuario.php">Ingresa /</a>
            <a href="./registro.php">Regístrate</a>
        </div>
        <div class="redes-sociales">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <!-- Agrega más íconos de redes sociales según sea necesario -->
        </div>
    </div>
</header>

<!-- Segundo encabezado -->
<header class="menu-container1">
    <div class="menu-item">
        <a href="./index.php">
            <i class="fas fa-home"></i> Inicio
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <i class="fas fa-home"></i> Adopción
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <i class="fas fa-home"></i> Informacion de Mascotas
        </a>
    </div>
    



	<body>
		<div class="container">




<div id="notification"></div>
<div id="content-w">
<div id="content" class="with-left" >
  <div class="breadcrumb">
        <a href="/index.php">Inicio</a>
         &raquo; <a href="./vistas/perro.php">Perro</a>
         &raquo; <a href="./alimentoperro.php">Alimento</a>
      </div>
    <div class="category-info">
        <div class="image">
    <img src="/assents/img/perro/comida.perro.jpg" width="1400" height="500" alt="Alimento" />
    <h1>Alimento</h1>
    </div>
          </div>
    <style type="text/css">
    .bf-responsive.bf-active.bf-layout-id-9 .bf-check-position {
        top: 160px;
    }
    .bf-responsive.bf-active.bf-layout-id-9 .bf-btn-show, 
    .bf-responsive.bf-active.bf-layout-id-9 .bf-btn-reset {
        top: 160px;
    }
    .bf-layout-id-9 .bf-btn-show {
            background: #19A3DF;
        }
    .bf-layout-id-9 .bf-btn-reset {
            background: #F53838;
        }
    .bf-layout-id-9 .bf-attr-header{
       background:#f7f7f7; 
       color:#000000; 
    }
    .bf-layout-id-9 .bf-count{
        background:#F46234; 
       color:#ffffff; 
    }
   .bf-layout-id-9 .ui-widget-header {
        background:#f6a828; 
   }
   .bf-layout-id-9 .ui-widget-content {
         background:#eeeeee; 
         border:1px solid #dddddd; 
   }
.bf-layout-id-9 .ui-state-default {
         background:#f6f6f6; 
         border:1px solid #cccccc; 
   }
  .bf-layout-id-9 .bf-attr-group-header{
        background:#CECBCB; 
       color:#000000; 
  }
    .bf-layout-id-9 .bf-row.bf-disabled, 
  .bf-layout-id-9 .bf-horizontal .bf-row.bf-disabled {
      display: none;
  }
  </style>
<div class="bf-panel-wrapper bf-left bf-layout-id-9">
    <div class="bf-btn-show"></div>
    <a class="bf-btn-reset" onclick="BrainyFilter.reset();"></a>
    <div class="box bf-check-position bf-horizontal">
        <div class="box-heading">Filtros<a class="bf-toggle-filter-arrow"></a><input type="reset" class="bf-buttonclear" onclick="BrainyFilter.reset();" value="Reiniciar Todo" /></div>
        <div class="brainyfilter-panel box-content bf-hide-panel">
            <form class="bf-form 
                     bf-with-counts 
                                                            "
                  data-height-limit="144"
                  data-visible-items="4"
                  data-hide-items="2"
                  data-submit-type="auto"
                  data-submit-delay="1000"
                  data-resp-max-width="0"
                  data-resp-collapse="1"
                  data-resp-max-scr-width ="700"
                  method="get" action="index.php">
                                <input type="hidden" name="route" value="product/category" />
                                                <input type="hidden" name="path" value="92_93" />
                                
                                        
                                            
                                                                                                                                    <div class="bf-attr-block">
                            <div class="bf-attr-header bf-w-line">
                                Tipo Alimento<span class="bf-arrow"></span>
                            </div>
                            <div class="bf-attr-block-cont">
                                                                
                                                                
                                                                                                            <div class="bf-attr-filter bf-attr-f3 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f3_19_9"
                                                   data-filterid="bf-attr-f3_19"
                                                   type="checkbox" 
                                                   name="bfp_f3_19"
                                                   value="19" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">19</span>
                                            <label for="bf-attr-f3_19_9">
                                                                                                    Alimento Seco                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f3 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f3_20_9"
                                                   data-filterid="bf-attr-f3_20"
                                                   type="checkbox" 
                                                   name="bfp_f3_20"
                                                   value="20" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">20</span>
                                            <label for="bf-attr-f3_20_9">
                                                                                                    Alimento Húmedo                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                </div>
                            </div>
                                                                                                            <div class="bf-attr-block">
                            <div class="bf-attr-header bf-w-line">
                                Marcas<span class="bf-arrow"></span>
                            </div>
                            <div class="bf-attr-block-cont">
                                                                
                                                                
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_64_9"
                                                   data-filterid="bf-attr-f2_64"
                                                   type="checkbox" 
                                                   name="bfp_f2_64"
                                                   value="64" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">64</span>
                                            <label for="bf-attr-f2_64_9">
                                                                                                    Ama                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_85_9"
                                                   data-filterid="bf-attr-f2_85"
                                                   type="checkbox" 
                                                   name="bfp_f2_85"
                                                   value="85" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">85</span>
                                            <label for="bf-attr-f2_85_9">
                                                                                                    Belcando                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_41_9"
                                                   data-filterid="bf-attr-f2_41"
                                                   type="checkbox" 
                                                   name="bfp_f2_41"
                                                   value="41" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">41</span>
                                            <label for="bf-attr-f2_41_9">
                                                                                                    Bravery                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_80_9"
                                                   data-filterid="bf-attr-f2_80"
                                                   type="checkbox" 
                                                   name="bfp_f2_80"
                                                   value="80" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">80</span>
                                            <label for="bf-attr-f2_80_9">
                                                                                                    DocKennedy                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_84_9"
                                                   data-filterid="bf-attr-f2_84"
                                                   type="checkbox" 
                                                   name="bfp_f2_84"
                                                   value="84" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">84</span>
                                            <label for="bf-attr-f2_84_9">
                                                                                                    Nutrience                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_7_9"
                                                   data-filterid="bf-attr-f2_7"
                                                   type="checkbox" 
                                                   name="bfp_f2_7"
                                                   value="7" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">7</span>
                                            <label for="bf-attr-f2_7_9">
                                                                                                    Oven Baked                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_83_9"
                                                   data-filterid="bf-attr-f2_83"
                                                   type="checkbox" 
                                                   name="bfp_f2_83"
                                                   value="83" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">83</span>
                                            <label for="bf-attr-f2_83_9">
                                                                                                    Poema                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_82_9"
                                                   data-filterid="bf-attr-f2_82"
                                                   type="checkbox" 
                                                   name="bfp_f2_82"
                                                   value="82" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">82</span>
                                            <label for="bf-attr-f2_82_9">
                                                                                                    Vetlife                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                            <div class="bf-attr-filter bf-attr-f2 bf-row">
                                        <span class="bf-cell bf-c-1">
                                            <input id="bf-attr-f2_139_9"
                                                   data-filterid="bf-attr-f2_139"
                                                   type="checkbox" 
                                                   name="bfp_f2_139"
                                                   value="139" 
                                                    />
                                        </span>
                                        <span class="bf-cell bf-c-2 ">
                                            <span class="bf-hidden bf-attr-val">139</span>
                                            <label for="bf-attr-f2_139_9">
                                                                                                    Amity                                                                                            </label>
                                        </span>
                                        <span class="bf-cell bf-c-3"></span>
                                    </div>
                                                                                                </div>
                            </div>
                                                                
                                            </form>
        </div>
    </div>
</div>
<script>
var bfLang = {
    show_more : 'Mostrar más',
    show_less : 'Contraer',
    empty_list : 'No hay productos para mostrar en esta categoría.'
};
BrainyFilter.requestCount = BrainyFilter.requestCount || true;
BrainyFilter.requestPrice = BrainyFilter.requestPrice || false;
BrainyFilter.min = BrainyFilter.min || 0;
BrainyFilter.max = BrainyFilter.max || 0;
BrainyFilter.lowerValue = BrainyFilter.lowerValue || 0; 
BrainyFilter.higherValue = BrainyFilter.higherValue || 0;
BrainyFilter.currencySymb = BrainyFilter.currencySymb || '$';
BrainyFilter.hideEmpty = BrainyFilter.hideEmpty || 1;
BrainyFilter.baseUrl = BrainyFilter.baseUrl || "/";
BrainyFilter.currentRoute = BrainyFilter.currentRoute || "product/category";
BrainyFilter.selectors = BrainyFilter.selectors || {
    'container' : '.product-list, .product-grid',
    'paginator' : '.pagination, .paging'
};
jQuery(function() {
    if (! BrainyFilter.isInitialized) {  
        BrainyFilter.isInitialized = true;
        if (typeof jQuery.fn.slider === 'undefined') {
            jQuery.getScript('catalog/view/javascript/jquery-ui.slider.min.js', function(){
                jQuery('head').append('<link rel="stylesheet" href="catalog/view/theme/default/stylesheet/jquery-ui.slider.min.css" type="text/css" />');
                BrainyFilter.init();
            });
        } else {
            BrainyFilter.init();
        }
    }
});
BrainyFilter.sliderValues = BrainyFilter.sliderValues || {};
</script>
      <div class="product-filter">
    <div class="display"><b>Mostrar:</b> Listado <b>/</b> <a onclick="display('grid');">Cuadrícula</a></div>
    <div class="limit"><b>Mostrar:</b>
      <select onchange="location = this.value;">
                        <option value="https:///perro/alimento-para-perros?limit=25">25</option>
                                <option value="https:///perro/alimento-para-perros?limit=36" selected="selected">36</option>
                                <option value="https:///perro/alimento-para-perros?limit=50">50</option>
                                <option value="https:///perro/alimento-para-perros?limit=75">75</option>
                                <option value="https:///perro/alimento-para-perros?limit=100">100</option>
                      </select>
    </div>
    <div class="sort"><b>Ordenar por:</b>
      <select onchange="location = this.value;">
                        <option value="https:///perro/alimento-para-perros?sort=p.sort_order&order=ASC" selected="selected">Predeterminado</option>
                                <option value="https:///perro/alimento-para-perros?sort=pd.name&order=ASC">Nombre (A - Z)</option>
                                <option value="https:///perro/alimento-para-perros?sort=pd.name&order=DESC">Nombre (Z - A)</option>
                                <option value="https://alimento-para-perros?sort=p.price&order=ASC">Precio (Menor &gt; Mayor) </option>
                                <option value="https://perro/alimento-para-perros?sort=p.price&order=DESC">Precio (Mayor &gt; Menor) </option>
                                <option value="https:///perro/alimento-para-perros?sort=p.model&order=ASC">Modelo (A - Z)</option>
                                <option value="https:///perro/alimento-para-perros?sort=p.model&order=DESC">Modelo (Z - A)</option>
                      </select>
    </div>
  </div>
  
				<!--<div class="product-compare"><a href="https:/product/compare" id="compare-total">Comparación de Productos (0)</a></div>-->
  <div class="product-list">
        <div>
            <div class="image"><a href=""><img src="./assents/img/alimentoperro/natureaadult-120x120.jpg" width="120" height="120" title="Naturea Elements Adult Chicken 12 Kg" alt="Naturea Elements Adult Chicken 12 Kg" /></a></div>
            <div class="name"><a href="">Naturea Elements Adult Chicken 12 Kg</a></div>
      <div class="description">Naturea Pollo para perros adultos es un alimento completo para perros adultos&nbsp;de todas las raza..</div>
            <div class="price">
                $45.990                      </div>
                  <div class="cart">
			<a href="https:/perro/alimento-para-perros/naturea-elements-adult-chicken-12-kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1406');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1406');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/naturea-elements-adult-chicken-2-kg"><img src="./assents/img/alimentoperro/naturea%2012k%20adult-120x120.jpg" width="120" height="120" title="Naturea Elements Adult Chicken 2 Kg" alt="Naturea Elements Adult Chicken 2 Kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/naturea-elements-adult-chicken-2-kg">Naturea Elements Adult Chicken 2 Kg</a></div>
      <div class="description">Naturea Pollo para perros adultos es un alimento completo para perros adultos&nbsp;de todas las raza..</div>
            <div class="price">
                $14.990                      </div>
                  <div class="cart">
			<a href="https:/perro/alimento-para-perros/naturea-elements-adult-chicken-2-kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1404');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1404');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/naturea-elements-puppy-chicken-12-kg"><img src="./assents/img/alimentoperro/naturea%202k%20puppy-120x120.jpg" width="120" height="120" title="Naturea Elements Puppy Chicken 12 Kg" alt="Naturea Elements Puppy Chicken 12 Kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/naturea-elements-puppy-chicken-12-kg">Naturea Elements Puppy Chicken 12 Kg</a></div>
      <div class="description">Naturea Pollo para Cachorros es un alimento completo para cachorros de todas las razas.

Ingredien..</div>
            <div class="price">
                $49.990                      </div>
                  <div class="cart">
			<a href="https://perro/alimento-para-perros/naturea-elements-puppy-chicken-12-kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1407');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1407');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/naturea-elements-puppy-chicken-2-kg"><img src="https://image..cl/cache/data/productos/Naturea/naturea 2k puppy-120x120.jpg" width="120" height="120" title="Naturea Elements Puppy Chicken 2 Kg" alt="Naturea Elements Puppy Chicken 2 Kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/naturea-elements-puppy-chicken-2-kg">Naturea Elements Puppy Chicken 2 Kg</a></div>
      <div class="description">Naturea Pollo para Cachorros es un alimento completo para cachorros de todas las razas.

Ingredien..</div>
            <div class="price">
                $14.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/naturea-elements-puppy-chicken-2-kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1403');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1403');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/oven-baked-cachorro-raza-pequena--pollo-deshuesado-567kg"><img src="https://image..cl/cache/data/productos/Oven-Baked/oven-baked-perro/crp-pollo/crp-pollo2-120x120.jpg" width="120" height="120" title="OVEN BAKED Cachorro Raza Pequeña / Pollo deshuesado 5.67kg" alt="OVEN BAKED Cachorro Raza Pequeña / Pollo deshuesado 5.67kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-cachorro-raza-pequena--pollo-deshuesado-567kg">OVEN BAKED Cachorro Raza Pequeña / Pollo deshuesado 5.67kg</a></div>
      <div class="description">Oven-Baked Tradition único cocinado en horno (baja temperatura), por lo que mantiene íntegramente su..</div>
            <div class="price">
                $40.990                      </div>
                  <div class="cart">
			<a href="https://perro/alimento-para-perros/oven-baked-cachorro-raza-pequena--pollo-deshuesado-567kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1346');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1346');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-fresco-227kg"><img src="https://image.cl/cache/data/productos/Oven-Baked/oven-baked-perro/arp-pescado/arp pescado 2-120x120.jpg" width="120" height="120" title="OVEN BAKED Adulto Raza Pequeña / Pescado fresco 2.27kg" alt="OVEN BAKED Adulto Raza Pequeña / Pescado fresco 2.27kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-fresco-227kg">OVEN BAKED Adulto Raza Pequeña / Pescado fresco 2.27kg</a></div>
      <div class="description">Oven-Baked Tradition único alimento cocinado en horno (baja temperatura), por lo que mantiene íntegr..</div>
            <div class="price">
                $24.990                      </div>
                  <div class="cart">
			<a href="https://perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-fresco-227kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1341');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1341');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-fresco-567kg"><img src="https://image..cl/cache/data/productos/Oven-Baked/oven-baked-perro/arp-pescado/arp pescado 2-120x120.jpg" width="120" height="120" title="OVEN BAKED Adulto Raza Pequeña / Pescado fresco 5.67kg" alt="OVEN BAKED Adulto Raza Pequeña / Pescado fresco 5.67kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-fresco-567kg">OVEN BAKED Adulto Raza Pequeña / Pescado fresco 5.67kg</a></div>
      <div class="description">Oven-Baked Tradition único alimento cocinado en horno (baja temperatura), por lo que mantiene íntegr..</div>
            <div class="price">
                $41.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-fresco-567kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('62');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('62');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-libre-de-granos-227kg"><img src="https://image.cl/cache/data/productos/Oven-Baked/oven-baked-perro/arp-pescado-sin-grano/arp pescado sg2-120x120.jpg" width="120" height="120" title="OVEN BAKED Adulto Raza Pequeña / Pescado libre de granos 2.27kg" alt="OVEN BAKED Adulto Raza Pequeña / Pescado libre de granos 2.27kg" /></a></div>
            <div class="name"><a href="https://perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-libre-de-granos-227kg">OVEN BAKED Adulto Raza Pequeña / Pescado libre de granos 2.27kg</a></div>
      <div class="description">Oven-Baked Tradition&nbsp;único cocinado en horno (baja temperatura), por lo que mantiene íntegramen..</div>
            <div class="price">
                $26.490                      </div>
                  <div class="cart">
			<a href="https://l/perro/alimento-para-perros/oven-baked-adulto-raza-pequena--pescado-libre-de-granos-227kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('183');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('183');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-cachorro-todas-las-razas--pollo-deshuesado-1134kg"><img src="https://image..cl/cache/data/productos/Oven-Baked/oven-baked-perro/ctlr-pollo/ctlr-pollo2-120x120.jpg" width="120" height="120" title="OVEN BAKED Cachorro Todas las Razas / Pollo Deshuesado 11.34kg" alt="OVEN BAKED Cachorro Todas las Razas / Pollo Deshuesado 11.34kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-cachorro-todas-las-razas--pollo-deshuesado-1134kg">OVEN BAKED Cachorro Todas las Razas / Pollo Deshuesado 11.34kg</a></div>
      <div class="description">Oven-Baked Tradition único cocinado en horno (baja temperatura), por lo que mantiene íntegramente su..</div>
            <div class="price">
                $62.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-cachorro-todas-las-razas--pollo-deshuesado-1134kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('59');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('59');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pollo-libre-de-granos-1134kg"><img src="https://image.cl/cache/data/productos/Oven-Baked/oven-baked-perro/atlr-pollo-sin-grano/atl-pollo-sg2-120x120.jpg" width="120" height="120" title="OVEN BAKED Adulto Todas las Razas / Pollo libre de granos 11.34kg" alt="OVEN BAKED Adulto Todas las Razas / Pollo libre de granos 11.34kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pollo-libre-de-granos-1134kg">OVEN BAKED Adulto Todas las Razas / Pollo libre de granos 11.34kg</a></div>
      <div class="description">Oven-Baked Tradition&nbsp;único cocinado en horno (baja temperatura), por lo que mantiene íntegramen..</div>
            <div class="price">
                $73.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pollo-libre-de-granos-1134kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('203');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('203');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pescado-libre-de-granos-1134kg"><img src="https://image.cl/cache/data/productos/Oven-Baked/oven-baked-perro/atlr-pescado-sin-grano/atr pescado sg2-120x120.jpg" width="120" height="120" title="OVEN BAKED Adulto Todas las Razas / Pescado libre de granos 11.34kg" alt="OVEN BAKED Adulto Todas las Razas / Pescado libre de granos 11.34kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pescado-libre-de-granos-1134kg">OVEN BAKED Adulto Todas las Razas / Pescado libre de granos 11.34kg</a></div>
      <div class="description">Oven-Baked Tradition&nbsp;único cocinado en horno (baja temperatura), por lo que mantiene íntegramen..</div>
            <div class="price">
                $73.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pescado-libre-de-granos-1134kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('184');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('184');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pato-libre-de-granos-1134kg"><img src="https://image.s.cl/cache/data/productos/Oven-Baked/oven-baked-perro/atlr-pato-sin-grano/atlr pato sg2-120x120.jpg" width="120" height="120" title="OVEN BAKED Adulto Todas las Razas / Pato libre de granos 11.34kg" alt="OVEN BAKED Adulto Todas las Razas / Pato libre de granos 11.34kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pato-libre-de-granos-1134kg">OVEN BAKED Adulto Todas las Razas / Pato libre de granos 11.34kg</a></div>
      <div class="description">Oven-Baked Tradition&nbsp;único alimento cocinado en horno (baja temperatura), por lo que mantiene í..</div>
            <div class="price">
                $73.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-adulto-todas-las-razas--pato-libre-de-granos-1134kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('65');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('65');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/oven-baked-senior-y-light-todas-las-razas--pollo-deshuesado-1134-kg"><img src="https://image.cl/cache/data/productos/Oven-Baked/oven-baked-perro/str-pollo/Senior grande 2-120x120.jpg" width="120" height="120" title="OVEN BAKED Senior y Light Todas las Razas / Pollo deshuesado 11.34 kg" alt="OVEN BAKED Senior y Light Todas las Razas / Pollo deshuesado 11.34 kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-senior-y-light-todas-las-razas--pollo-deshuesado-1134-kg">OVEN BAKED Senior y Light Todas las Razas / Pollo deshuesado 11.34 kg</a></div>
      <div class="description">Oven-Baked Tradition&nbsp;único alimento cocinado en horno (baja temperatura), por lo que mantiene í..</div>
            <div class="price">
                $62.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-senior-y-light-todas-las-razas--pollo-deshuesado-1134-kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('182');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('182');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://l/perro/alimento-para-perros/poema-cachorro--salmon-y-arroz-12kg"><img src="https://image..cl/cache/data/productos/Poema/Salmón Cachorro-120x120.jpg" width="120" height="120" title="Poema Cachorro / Salmón y Arroz 12kg" alt="Poema Cachorro / Salmón y Arroz 12kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/poema-cachorro--salmon-y-arroz-12kg">Poema Cachorro / Salmón y Arroz 12kg</a></div>
      <div class="description">


Producto&nbsp;hipoalergénico&nbsp;desarrollado para cada etapa de vida. El ingrediente princip..</div>
            <div class="price">
                $49.900                      </div>
                  <div class="cart">
			<a href="https:/perro/alimento-para-perros/poema-cachorro--salmon-y-arroz-12kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1109');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1109');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/poema-adulto--pollo-y-arroz-12kg"><img src="https://image..cl/cache/data/productos/Poema/Pollo Adulto-120x120.jpg" width="120" height="120" title="Poema Adulto / Pollo y Arroz 12kg" alt="Poema Adulto / Pollo y Arroz 12kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/poema-adulto--pollo-y-arroz-12kg">Poema Adulto / Pollo y Arroz 12kg</a></div>
      <div class="description">

Alimento Poema premium de origen Chileno. Uno de sus ingredientes principales es el&nbsp;hidroli..</div>
            <div class="price">
                $49.900                      </div>
                  <div class="cart">
			<a href="https://perro/alimento-para-perros/poema-adulto--pollo-y-arroz-12kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1094');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1094');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/poema-adulto--salmon-y-arroz-12kg"><img src="https://image..cl/cache/data/productos/Poema/Salmón Adulto-120x120.jpg" width="120" height="120" title="Poema Adulto / Salmón y Arroz 12kg" alt="Poema Adulto / Salmón y Arroz 12kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/poema-adulto--salmon-y-arroz-12kg">Poema Adulto / Salmón y Arroz 12kg</a></div>
      <div class="description">


Producto&nbsp;hipoalergénico&nbsp;desarrollado para cada etapa de vida. El ingrediente princip..</div>
            <div class="price">
                $49.900                      </div>
                  <div class="cart">
			<a href="https://perro/alimento-para-perros/poema-adulto--salmon-y-arroz-12kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1095');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1095');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/poema-senior--pollo-y-arroz-12kg"><img src="https://image.cl/cache/data/productos/Poema/Pollo Senior-120x120.jpg" width="120" height="120" title="Poema Senior / Pollo y Arroz 12kg" alt="Poema Senior / Pollo y Arroz 12kg" /></a></div>
            <div class="name"><a href="https://perro/alimento-para-perros/poema-senior--pollo-y-arroz-12kg">Poema Senior / Pollo y Arroz 12kg</a></div>
      <div class="description">

Alimento Poema premium de origen Chileno. Uno de sus ingredientes principales es el&nbsp;hidroli..</div>
            <div class="price">
                $49.900                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/poema-senior--pollo-y-arroz-12kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('2253');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('2253');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/poema-senior--salmon-y-arroz-12kg"><img src="https://image.cl/cache/data/productos/Poema/Salmón Senior-120x120.jpg" width="120" height="120" title="Poema Senior / Salmón y Arroz 12kg" alt="Poema Senior / Salmón y Arroz 12kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/poema-senior--salmon-y-arroz-12kg">Poema Senior / Salmón y Arroz 12kg</a></div>
      <div class="description">


Producto&nbsp;hipoalergénico&nbsp;desarrollado para cada etapa de vida. El ingrediente princip..</div>
            <div class="price">
                $49.900                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/poema-senior--salmon-y-arroz-12kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1410');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1410');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/belcando-adult-dinner---pollo-125kg"><img src="https://image..cl/cache/data/productos/Belcando/3Dinner 12kg-120x120.jpg" width="120" height="120" title="Belcando Adult Dinner - Pollo 12.5kg" alt="Belcando Adult Dinner - Pollo 12.5kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/belcando-adult-dinner---pollo-125kg">Belcando Adult Dinner - Pollo 12.5kg</a></div>
      <div class="description">
PARA PERROS CON UN NIVEL DE ACTIVIDAD NORMAL - RAZA MEDIANA Y GRANDE

La cuidadosa selección de ..</div>
            <div class="price">
                $59.490                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/belcando-adult-dinner---pollo-125kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('800');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('800');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/belcando-finest-light---pollo-125kg-para-consumo-en-octubre"><img src="https://image..cl/cache/data/productos/Belcando/1Finest 4k-120x120.jpg" width="120" height="120" title="Belcando Finest Light - Pollo 12.5kg (para consumo en octubre)" alt="Belcando Finest Light - Pollo 12.5kg (para consumo en octubre)" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/belcando-finest-light---pollo-125kg-para-consumo-en-octubre">Belcando Finest Light - Pollo 12.5kg (para consumo en octubre)</a></div>
      <div class="description">Para consumo en octubre (fecha de vencimiento octubre/2023)

&nbsp;


PARA PERROS ADULTOS, CON ..</div>
            <div class="price">
                <span class="price-old">$69.900</span> <span class="price-new">$45.000</span>
                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/belcando-finest-light---pollo-125kg-para-consumo-en-octubre" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1281');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1281');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/belcando-adult-iberico--rice---cerdo-125kg"><img src="https://image..cl/cache/data/productos/Belcando/Iberico 4kg-120x120.jpg" width="120" height="120" title="Belcando Adult Iberico &amp; Rice - Cerdo 12.5kg" alt="Belcando Adult Iberico &amp; Rice - Cerdo 12.5kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/belcando-adult-iberico--rice---cerdo-125kg">Belcando Adult Iberico &amp; Rice - Cerdo 12.5kg</a></div>
      <div class="description">
Para perros adultos de razas medianas a grandes con actividad normal.

Cerdo ibérico: sabor espe..</div>
            <div class="price">
                <span class="price-old">$72.900</span> <span class="price-new">$60.900</span>
                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/belcando-adult-iberico--rice---cerdo-125kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('802');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('802');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/amity-chicken-puppy-sp-low-grain-14kg"><img src="https://image..cl/cache/data/productos/Amity/Amity Chicken Puppy SP Low Grain 14kg-120x120.jpg" width="120" height="120" title="Amity Chicken Puppy SP Low Grain 14kg" alt="Amity Chicken Puppy SP Low Grain 14kg" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/amity-chicken-puppy-sp-low-grain-14kg">Amity Chicken Puppy SP Low Grain 14kg</a></div>
      <div class="description">


Amity Chicken Puppy SP Low Grain es un alimento para cachorros de todas las razas y tamaños fo..</div>
            <div class="price">
                $53.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/amity-chicken-puppy-sp-low-grain-14kg" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1265');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1265');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/alimento-humedo-pollo-y-atun-para-perros"><img src="https://image..cl/cache/data/productos/Ama/Pescado para perros-120x120.jpg" width="120" height="120" title="Alimento Húmedo Pollo y Atún para Perros" alt="Alimento Húmedo Pollo y Atún para Perros" /></a></div>
            <div class="name"><a href="https://perro/alimento-para-perros/alimento-humedo-pollo-y-atun-para-perros">Alimento Húmedo Pollo y Atún para Perros</a></div>
      <div class="description">Alimento húmedo Pollo y Atún para perros&nbsp;Ama,&nbsp;formulado por veterinarios expertos en nutri..</div>
            <div class="price">
                $4.690                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/alimento-humedo-pollo-y-atun-para-perros" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('766');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('766');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/alimento-humedo-vacuno-para-perros"><img src="https://image..cl/cache/data/productos/Ama/Carne para perros-120x120.jpg" width="120" height="120" title="Alimento Húmedo Vacuno para Perros" alt="Alimento Húmedo Vacuno para Perros" /></a></div>
            <div class="name"><a href="https://perro/alimento-para-perros/alimento-humedo-vacuno-para-perros">Alimento Húmedo Vacuno para Perros</a></div>
      <div class="description">Alimento húmedo Vacuno para perros&nbsp;Ama,&nbsp;formulado por veterinarios expertos en nutrición n..</div>
            <div class="price">
                $4.990                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/alimento-humedo-vacuno-para-perros" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('767');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('767');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/alimento-humedo-cerdo-para-perros"><img src="https://image..cl/cache/data/productos/Ama/ama cerdo para perros-120x120.jpg" width="120" height="120" title="Alimento Húmedo Cerdo para Perros" alt="Alimento Húmedo Cerdo para Perros" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/alimento-humedo-cerdo-para-perros">Alimento Húmedo Cerdo para Perros</a></div>
      <div class="description">Alimento húmedo Cerdo&nbsp;para perros&nbsp;Ama,&nbsp;formulado por veterinarios expertos en nutrici..</div>
            <div class="price">
                $4.690                      </div>
                  <div class="cart">
			<a href="https://perro/alimento-para-perros/alimento-humedo-cerdo-para-perros" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('1170');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('1170');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-pate-pavo-perros-354g"><img src="https://image.cl/cache/data/productos/OBT Pate/TURKEY - w_plate - large_1-120x120.jpg" width="120" height="120" title="Oven Baked Paté Pavo Perros 354g" alt="Oven Baked Paté Pavo Perros 354g" /></a></div>
            <div class="name"><a href="https:// de&nbsp;Oven-Baked Tradition,&nbsp;contiene&nbsp;pavo y vegetales&nbsp;fresco&nbsp;co..</div>
            <div class="price">
                $4.690                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-pate-pavo-perros-354g" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('239');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('239');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https://perro/alimento-para-perros/oven-baked-pate-salmon-para-perros-354g"><img src="https://image..cl/cache/data/productos/OBT Pate/SALMON - w_plate - large_1-120x120.jpg" width="120" height="120" title="Oven Baked Paté Salmón para Perros 354g" alt="Oven Baked Paté Salmón para Perros 354g" /></a></div>
            <div class="name"><a href="https://l/perro/alimento-para-perros/oven-baked-pate-salmon-para-perros-354g">Oven Baked Paté Salmón para Perros 354g</a></div>
      <div class="description">Delicioso Paté de&nbsp;Oven-Baked Tradition,&nbsp;contiene&nbsp;salmón fresco&nbsp;con&nbsp;aminoáci..</div>
            <div class="price">
                $4.690                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-pate-salmon-para-perros-354g" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('237');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('237');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/oven-baked-pate-pato-para-perro-354g"><img src="https://image.cl/cache/data/productos/OBT Pate/DUCK - w_plate - large_1-120x120.jpg" width="120" height="120" title="Oven Baked Paté Pato para Perro 354g" alt="Oven Baked Paté Pato para Perro 354g" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/oven-baked-pate-pato-para-perro-354g">Oven Baked Paté Pato para Perro 354g</a></div>
      <div class="description">Delicioso Paté de&nbsp;Oven-Baked Tradition,&nbsp;contiene&nbsp;pato fresco&nbsp;con&nbsp;aminoácido..</div>
            <div class="price">
                $4.690                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/oven-baked-pate-pato-para-perro-354g" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('241');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('241');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/belcando-lata-junior---pollo-y-huevo-400gr"><img src="https://image.cl/cache/data/productos/Belcando/Lata junior-120x120.jpg" width="120" height="120" title="Belcando Lata Junior - Pollo y Huevo 400gr" alt="Belcando Lata Junior - Pollo y Huevo 400gr" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/belcando-lata-junior---pollo-y-huevo-400gr">Belcando Lata Junior - Pollo y Huevo 400gr</a></div>
      <div class="description">
ALIMENTO HÚMEDO COMPLETO -&nbsp;LATAS SUPER PREMIUM JUNIOR CON AVE Y HUEVO

La comida húmeda de ..</div>
            <div class="price">
                $4.590                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/belcando-lata-junior---pollo-y-huevo-400gr" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('803');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('803');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/belcando-lata-pollo-y-pato-400gr"><img src="https://image..cl/cache/data/productos/Belcando/Lata pollo+pato-120x120.jpg" width="120" height="120" title="Belcando Lata Pollo y Pato 400gr" alt="Belcando Lata Pollo y Pato 400gr" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/belcando-lata-pollo-y-pato-400gr">Belcando Lata Pollo y Pato 400gr</a></div>
      <div class="description">
ALIMENTO HÚMEDO COMPLETO -&nbsp;LATAS SUPER PREMIUM POLLO Y PATO

La comida húmeda de alta calid..</div>
            <div class="price">
                $4.590                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/belcando-lata-pollo-y-pato-400gr" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('805');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('805');">Añadir a Comparar</a></div>-->
    </div>
        <div>
            <div class="image"><a href="https:///perro/alimento-para-perros/belcando-lata-ternera-y-papas-400gr"><img src="https://image..cl/cache/data/productos/Belcando/Lata vacuno-120x120.jpg" width="120" height="120" title="Belcando Lata Ternera y Papas 400gr" alt="Belcando Lata Ternera y Papas 400gr" /></a></div>
            <div class="name"><a href="https:///perro/alimento-para-perros/belcando-lata-ternera-y-papas-400gr">Belcando Lata Ternera y Papas 400gr</a></div>
      <div class="description">
ALIMENTO HÚMEDO COMPLETO-&nbsp;LATAS SUPER PREMIUM TERNERA CON PAPAS Y GUISANTES

La comida húme..</div>
            <div class="price">
                <span class="price-old">$4.890</span> <span class="price-new">$4.590</span>
                      </div>
                  <div class="cart">
			<a href="https:///perro/alimento-para-perros/belcando-lata-ternera-y-papas-400gr" class="button">+ Ver Más</a>
            </div>
      
				<!--<div class="wishlist"><a onclick="addToWishList('804');">Añadir a Lista de Deseos</a></div>-->
      
				<br /><!--<div class="compare"><a onclick="addToCompare('804');">Añadir a Comparar</a></div>-->
    </div>
      </div>
  <div class="pagination"><div class="results">Mostrando 1 a 31 de 31 (1 Páginas)</div></div>
      </div>
<div id="column-left">
    <div class="box">
  <div class="box-heading">Últimos Productos</div>
  <div class="box-content">
    <div class="box-product">
            <div>
                <div class="image"><a href="https:///poema-senior--pollo-y-arroz-12kg"><img src="https://image..cl/cache/data/productos/Poema/Pollo Senior-120x120.jpg" width="120" height="120" alt="Poema Senior / Pollo y Arroz 12kg" /></a></div>
                <div class="name"><a href="https:///poema-senior--pollo-y-arroz-12kg">Poema Senior / Pollo y Arroz 12kg</a></div>
                <div class="price">
                    $49.900                  </div>
                        
			<div class="cart"><a href="https://w/poema-senior--pollo-y-arroz-12kg" class="button">+ Ver Más</a></div>
            
      </div>
            <div>
                <div class="image"><a href="https:///wanpy-creamy-atun-y-camaron"><img src="https://image..cl/cache/data/productos/Wanpy/wanpy creamy atun camaron-120x120.jpg" width="120" height="120" alt="Wanpy Creamy Atun y Camaron" /></a></div>
                <div class="name"><a href="https:///wanpy-creamy-atun-y-camaron">Wanpy Creamy Atun y Camaron</a></div>
                <div class="price">
                    $2.690                  </div>
                        
			<div class="cart"><a href="https://wanpy-creamy-atun-y-camaron" class="button">+ Ver Más</a></div>
            
      </div>
            <div>
                <div class="image"><a href="https:///wanpy-creamy-tuna-scallop"><img src="https://image..cl/cache/data/productos/Wanpy/wanpy creamy atun ostion-120x120.jpg" width="120" height="120" alt="Wanpy Creamy Tuna Scallop" /></a></div>
                <div class="name"><a href="https:///wanpy-creamy-tuna-scallop">Wanpy Creamy Tuna Scallop</a></div>
                <div class="price">
                    $2.690                  </div>
                        
			<div class="cart"><a href="https:///wanpy-creamy-tuna-scallop" class="button">+ Ver Más</a></div>
            
      </div>
            <div>
                <div class="image"><a href="https:///wanpy-creamy-atun-salmon"><img src="https://image..cl/cache/data/productos/Wanpy/wanpy creamy atun salmon-120x120.jpg" width="120" height="120" alt="Wanpy Creamy Atun Salmon" /></a></div>
                <div class="name"><a href="https:///wanpy-creamy-atun-salmon">Wanpy Creamy Atun Salmon</a></div>
                <div class="price">
                    $2.690                  </div>
                        
			<div class="cart"><a href="https:///wanpy-creamy-atun-salmon" class="button">+ Ver Más</a></div>
            
      </div>
          </div>
  </div>
</div>
  </div>
<script type="text/javascript">
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