<?php 

namespace App\Utils;

class Utilitaire {

    // Methode pour supprimer les espaces, les balises HTML et convertir les caractères spéciaux

    public static function sanitize(string $value) {
        return htmlspecialchars(strip_tags(trim($value)), ENT_NOQUOTES);
    }
}