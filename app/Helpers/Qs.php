<?php
namespace App\Helpers;

use Hashids\Hashids;
use App\Models\Profil;
use Illuminate\Support\Str;
use App\Models\EtablissementType;

class Qs{
    
    public static function getAllProfiles()
    {
        return Profil::All();
    }

    public static function unique_code()
    {
        return strtoupper(Str::random(13));
    }

    public static function getUserRecord($remove = [])
    {
        //'role_id','user_type',
        $data = ['name','last_name','email','phone1','phone2','profil_id','phone_verification_code','last_login_at','last_login_ip','city','state','address','password'
    ];


        return $remove ? array_values(array_diff($data, $remove)) : $data;
    }

    public static function getAllTypeEts()
    {
        return EtablissementType::all();
    }


    public static function hash($id)
    {
        $date = date('dMY') . 'CJ';
        $hash = new Hashids($date, 14);
        return $hash->encode($id);
    }

    public static function decodeHash($str, $toString = true)
    {
        $date = date('dMY') . 'CJ';
        $hash = new Hashids($date, 14);
        $decoded = $hash->decode($str);
        return $toString ? implode(',', $decoded) : $decoded;
    }
}