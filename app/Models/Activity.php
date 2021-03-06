<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status', 'date', 'activity'
    ];
    
    public function User()
    {
        return $this->hashOne(User::class, 'id','user_id');
    }
    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    } 

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    } 
}
