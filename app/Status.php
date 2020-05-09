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

    public static function background($percentage): string
    {
        if ($percentage === '-')
            return '';

        $danger = Parameter::where('name', 'availability_red')->value('value');
        $warning = Parameter::where('name', 'availability_yellow')->value('value');

        if ($percentage < $danger)
            return 'bg-danger';

        if ($percentage < $warning)
            return 'bg-warning';

        return 'bg-success';
    }
}
