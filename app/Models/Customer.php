<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Bills;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory,Notifiable;
    protected $table='customer';

    protected $fillable =[' name','email','phone_number','password','address','birthday','gender','status','token'];
    public function bills(){
        return $this->hasMany(Bill::class,'id_customer','id');
    }
}
