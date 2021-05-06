<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

public function infoAbout()
{
    \DB::table('users')->select('about')->get();
}

public function getInfoById(int $id)
{
return \DB::table('users')
    ->select('about')
    ->where('id' == $id)
    ->get();
}

}
