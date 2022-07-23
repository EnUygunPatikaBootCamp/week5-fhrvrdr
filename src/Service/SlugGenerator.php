<?php

namespace App\Service;

use Symfony\Component\String\UnicodeString;


class SlugGenerator
{
    public function generateSlug($message)
    {
        // String Servisini kullanarak, alınan mesajdaki boşlukları '-' ile değiştiriyoruz.
        $text = (new UnicodeString($message))->replace(' ', '-');
        return $text;
    }
}
