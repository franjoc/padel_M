<?php

namespace Vistas\Plantillas;

class Plantilla
{
    private string $encabezado;
    private string $nav;
    private string $footer;

    public function __construct($titulo,
        $opcionesMenu=['Inicio'=>'index.php',
            'Contacto'=>'contacto.php',
            'Sobre Nosotros'=>'about.php'])
    {
        $this->generarEncabezado($titulo);
        $this->generarBarraNavegacion($opcionesMenu);
        $this->generarFooter();
    }

    public function generarEncabezado($titulo){

        $this->encabezado="<!DOCTYPE html>
            <html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
                <meta charset='utf-8' />
                <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
                <meta name='description' content='' />
                <meta name='author' content='' />
                <title>$titulo</title>
                <!-- BOOTSTRAP CORE STYLE CSS -->
                <link href='Vistas/Plantillas/assets/css/bootstrap.css' rel='stylesheet' />
                <!-- FONT AWESOME CSS -->
                <link href='Vistas/Plantillas/assets/css/font-awesome.min.css' rel='stylesheet' />
                <!-- STYLE SWITCHER  CSS -->
                <link href='Vistas/Plantillas/assets/css/styleSwitcher.css' rel='stylesheet' />
                <!-- CUSTOM STYLE CSS -->
                <link href='Vistas/Plantillas/assets/css/style.css' rel='stylesheet' />
                <!--GREEN STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM TWO STYLESHEETS (green or red) HERE-->
                <link href='Vistas/Plantillas/assets/css/themes/green.css' id='mainCSS' rel='stylesheet' />
                <!-- Google	Fonts -->
                <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
            </head>
            <body >";
    }
    public function generarBarraNavegacion(array $opcionesMenu,string $dirLogo="Vistas/Plantillas/assets/img/logo.png"){
        $this->nav="
            <div class='navbar navbar-inverse navbar-fixed-top move-me' id='menu'>
            <div class='container'>
            <div class='navbar-header'>
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand' href='index.php'><img class='logo-custom' src='$dirLogo' alt='logo discosis'  /></a>
        </div>
        <div class='navbar-collapse collapse'>
            <ul class='nav navbar-nav navbar-right'>";

        foreach ($opcionesMenu as $opcion=>$enlace) {
            $this->nav.= "<li ><a href='$enlace'>".strtoupper($opcion)."</a></li>";
        }

        $this->nav.="
        <li><a href='mailto:info@cobrapadel.es?Subject=Contacto' target='_top'> <i class='fa fa-envelope-o'></i><span class='home-mail'>e-mail: info@cobrapadel.es</span></a></li>
        </ul>
        </div>
        
        </div>
        </div>
                ";

    }

    public function generarFooter(){
        $this->footer="    <div class='myfooter' >
                     &copy;";

        $fecha = new \DateTime();
        $anyo = $fecha->format('Y');
        $this->footer.=$anyo.
         "cobrapadel.es | by: <a href='http://binarytheme.com' style='color:#fff;' target='_blank'  >www.binarytheme.com</a>

    </div>
    <!--FOOTER SECTION END-->
    <!--  Jquery Core Script -->
    <script src='Vistas/Plantillas/assets/js/jquery-1.10.2.js'></script>
    <!--  Core Bootstrap Script -->
    <script src='Vistas/Plantillas/assets/js/bootstrap.js'></script>
     <!--  Scrolling Reveal Script -->
    <script src='Vistas/Plantillas/assets/js/scrollReveal.js'></script>
    <!--  Scroll Scripts --> 
    <script src='Vistas/Plantillas/assets/js/jquery.easing.min.js'></script>
     <!--  Style Switcher Scripts -->
    <script src='Vistas/Plantillas/assets/js/styleSwitcher.js'></script>
        <!--  Custom Scripts -->    
    <script src='Vistas/Plantillas/assets/js/custom.js'></script>
   
</body>
</html>";
    }

    public function generarTodaLaPagina():string{
        $salida=$this->encabezado;
        $salida.=$this->nav;
        $salida.=$this->footer;
        return $salida;

    }

    /**
     * @return string
     */
    public function getEncabezado(): string
    {
        return $this->encabezado;
    }

    /**
     * @return string
     */
    public function getNav(): string
    {
        return $this->nav;
    }

    /**
     * @return string
     */
    public function getFooter(): string
    {
        return $this->footer;
    }



}