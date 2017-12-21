<?php

defined( '_PHP_CONGES' ) or die( 'Restricted access' );
$message = NIL_INT;

if (getpost_variable('notice') !== "") {
    $notice = getpost_variable('notice');
    switch ($notice) {
        case 'inserted':
            $message = _('Utilisateur ajouté');
            break;
        case 'modified':
            $message = _('Utilisateur modifié');
            break;
        case 'deleted':
            $message = _('Utilisateur supprimé');
            break;
        default:
            break;
    }
}

echo \App\ProtoControllers\HautResponsable\Utilisateur::getFormListeUsers($message);