<?php

namespace App;

class Status
{
    public static function text($status): string
    {
        if ($status === 0)
            return 'Bueno';

        if ($status === 1)
            return 'Afectado';

        if ($status === 2)
            return 'Averiado';

        return 'Desconocido';
    }
}
