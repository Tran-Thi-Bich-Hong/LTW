<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Province extends Model
{
 use HasFactory;
 protected $table = "ward";
public $timestamps = false;
protected $fillable=['id','info','district_id' ];

 public function Address()
 {
 return $this->hasMany("address::class");
 }

public function District()
{
    return $this->belongsTo("district::class");
} 
}