<?php 

function plz_assets(){

    // Para registrar estilos, primero colocamos el nombre, luego la fuente, posteriormente las dependencias si no hay ninguna se coloca un array vacio, luego la version si no tenemos colocamos false, ultimo media es decir en que resolucion en que query se puede visualizar esto si queremos que sea en todo solo agregamos un "all"


    //Si tenemos was que un estilo de font lo dividimos en varios
    wp_register_style("google-font", "https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700", array(), false, "all");
    wp_register_style("google-font-2", "https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap", array(), false, "all");

    wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css", array(), "5-1", "all");

    // Luego lo colocamos en la cola de ciclo de vida de wordpress, va a recibir los mismos argumentos que register pero aquí cargamos nuestro archivo personalizado de estilos
    wp_enqueue_style("estilos", get_template_directory_uri()."/assets/css/style.css", array("google-font", "bootstrap"));

    wp_enqueue_script("yardsale-js", get_template_directory_uri()."/assets/js/script.js");
}

// Para ejecutar las funciones, se usa un action para que se ejecute cuando incorpore los estilos. Primer argumento es donde quiero que se cargue el hook que se llama "wp_enqueue_scripts", segundo argumento son las funciones que quiero ejecutar.
add_action("wp_enqueue_scripts","plz_assets");

//Codigo para el body open del header
function plz_analytics(){
    ?>

    <?php
}

add_action("wp_body_open","plz_analytics");


//Theme supports necesarios para agregar
function plz_theme_supports(){
    //Agregar el titulo de la página de manera dinamica 
    add_theme_support("title-tag");
    //Agregar imagen destacada
    add_theme_support("post-thumbnails");
    //Agregar logo
    add_theme_support("custom-logo",
    array(
        "width" => 170,
        "height" => 35,
        "flex-width" => true,
        "flex-height" => true,
    )
    );
}

add_action("after_setup_theme", "plz_theme_supports");

//Menus
function plz_add_menus(){
    //Fregistrar los menus
    register_nav_menus(
        array(
        "menu-principal" => "Menu Principal",
        "menu-responsive" => "Menu Responsive"
        )
    );
}

add_action("after_setup_theme", "plz_add_menus");


//Sidebar
function plz_add_sidebar(){
    register_sidebar(
        array(
            "name" => "Pie de página",
            "id" => "pie-pagina",
            "before_widget" => "",
            "after_widget" => ""
        )
    );
}

add_action("widgets_init", "plz_add_sidebar");