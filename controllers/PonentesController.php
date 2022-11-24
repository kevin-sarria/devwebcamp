<?php


namespace Controllers;

use MVC\Router;
use Model\Ponente;
use Intervention\Image\ImageManagerStatic as Image;

class PonentesController {


    public static function index( Router $router ) {

        $ponentes = Ponente::all();

        $router->render('admin/ponentes/index', [
            'titulo' => 'Ponentes / Conferencistas',
            'ponentes' => $ponentes
        ]);

    }

    public static function crear( Router $router ) {

        $alertas = [];
        $ponente = new Ponente;

        if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

            // Leer imagen
            if( !empty($_FILES['imagen']['tmp_name']) ) {

                $carpeta_imagenes = '../public/img/speakers';

                // Crear la carpeta si no existe
                if( !is_dir($carpeta_imagenes) ) {
                    mkdir( $carpeta_imagenes, 0777, true );
                }

                $imagen_pgn = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen = md5( uniqid(rand(), true) );

                $_POST['imagen'] = $nombre_imagen;

            }

            $_POST['redes'] = json_encode($_POST['redes'], JSON_UNESCAPED_SLASHES);

            $ponente->sincronizar($_POST);

            // Validar
            $alertas = $ponente->validar();

            // Guardar el registro
            if( empty($alertas) ) {

                // Guardar las imagenes
                $imagen_pgn->save( $carpeta_imagenes . '/' . $nombre_imagen . '.png' );
                $imagen_webp->save( $carpeta_imagenes . '/' . $nombre_imagen . '.webp' );
                
                
                // Guardar el la BD
                $reusltado = $ponente->guardar();

                if( $reusltado ) {
                    header('Location: /admin/ponentes');
                }

            }

        }

        $router->render('admin/ponentes/crear', [
            'titulo' => 'Registrar Ponente',
            'alertas' => $alertas,
            'ponente' => $ponente
        ]);

    }
    

    public static function editar( Router $router ) {

        $alertas = [];
        // Validar el ID
        $id = filter_var( $_GET['id'], FILTER_VALIDATE_INT );

        if( !$id ) {
            header('Location: /admin/ponentes');
        }

        // Obtener Ponente a editar
        $ponente = Ponente::find($id);

        if( !$ponente ) {
            header('Location: /admin/ponentes');
        }

        if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

        }

        $router->render('/admin/ponentes/editar', [
            'titulo' => 'Editar Ponente',
            'ponente' => $ponente,
            'alertas' => $alertas
        ]);

    }

}