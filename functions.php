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