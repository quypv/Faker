<?php

namespace Faker\Provider;

class WosPlayer extends Base
{

    public static function wFbId()
    {
        return (string) static::numerify('##########');
    }

    public static function wFbToken()
    {
        return (string) static::bothify('******************************');
    }

    // public static function wFbName()
    // {
    //     return (string) static::name();
    // }

    public static function wFbPicture()
    {
        $rand = static::numberBetween(1, 85);

        return "/uploads/sample/100x100/fb-ava-$rand.jpg";
    }

    public static function wUuid()
    {
        return (string) static::bothify('******************************');
    }

    public static function wCoin()
    {
        return static::numerify('##00000');
    }

}
