<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index'); // login soll trotzdem einen normalen Pfad haben

// Hier sind meine eigenen Routen, alles außer Startseite
$routes->get('/aufgaben', 'Aufgaben::index');
$routes->get('/reiter', 'Reiter::index');
$routes->get('/mitglieder', 'Mitglieder::index');
$routes->get('/projekte', 'Projekte::index');
$routes->get('/profil', 'Profil::index');
$routes->get('/aktuellesProjekt', 'AktuellesProjekt::index');
$routes->get('/profile', 'Profil::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/delete_and_logout', 'Login::delete_and_logout');
$routes->get('/register', 'Register::index');
$routes->get('/newProjekt', 'NewProjekt::index');
$routes->get('/project_delete', 'Projekte::delete_project');
$routes->get('/edit_projekt', 'EditProjekt::index');
$routes->get('/newAufgabe', 'NewAufgabe::index');
$routes->get('/edit_aufgaben', 'EditAufgaben::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
