@php
    $now = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $hutao = new DateTime('2023-02-07 00:00:00', new DateTimeZone('America/Sao_Paulo')); 
@endphp

{{$hutao<=$now ? "Ela chegou!!!" : "$dif->d"."D" . " $dif->h"."H" . " $dif->i"."min" . " $dif->s"."seg"}}