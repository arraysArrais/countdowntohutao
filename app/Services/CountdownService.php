<?php

namespace App\Services;

use DateTime;
use DateTimeZone;
//'2023-02-07 00:00:00'

class CountdownService
{
    public function hutaoCountdown(){
        $now = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $hutao = new DateTime('2023-02-07 00:00:00', new DateTimeZone('America/Sao_Paulo'));

        $dif = $now->diff($hutao);
        $dif->format("d/m/y - G:i:s");

        return $dif;
    }
}