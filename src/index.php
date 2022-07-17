<?php

function add_version($url, $throwException = true)
{
    if (!$url) {
        throw new Exception(sprintf('%s > url obligatoire', __FUNCTION__));
    }

    if (@file_exists($url)) {
        $url .= '?dm=' . @filemtime($url);
    } else if ($throwException) {
        throw new Exception(
            sprintf("%s > Fichier non trouvé pour l'URL %s", __FUNCTION__, $url) . ($_SESSION['ISADMIN'] ? ' << ' . $_SERVER['PHP_SELF'] : ''
            )
        );
    }

    return $url;
}

$title = "test nav bar";
$table = [
    'css' => [
        'rel' => 'stylesheet',
        'listSRC' => [
            './css/menudeux.css'
        ],
    ],
    'js' => [
        'type' => 'text/javascript',
        'listSCRTop' => [
            // './'
        ],
        'listSCRBottom' => [
            './js/menudeux.mobile.js'
        ],
    ],
];

$nav = [
    'home' => [ 
        'titre' => 'Accueil',
        'src' => './'
    ],
    'listProjet' => [ 
        'titre' => 'Liste',
        'src' => './'
    ],
    'projetFini' => [ 
        'titre' => 'Fini',
        'src' => './'
        ]
];

require_once('./structure/top.vue.php');
require_once('./structure/menudeux.vue.php');
require_once('./structure/bottom.vue.php');