<?php

namespace App\Models\Sale;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SaleAddres extends Model
{
    use HasFactory;
    protected $fillable = [
        "sale_id",
        "name",
        "surname",
        "company",
        "country_region",
        "address",
        "street",
        "city",
        "postcode_zip",
        "phone",
        "email"
    ];

    public function setCreatedAtAttribute($value){
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $this->attributes["created_at"] = Carbon::now();
    }
    public function setUpdatedtAttribute($value){
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $this->attributes["updated_at"] = Carbon::now();
    }
}
