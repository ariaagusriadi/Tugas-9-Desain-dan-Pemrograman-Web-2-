<?php  

namespace App\Models;
use App\Models\user;


class Produk extends  Model {
  protected $table = "produk";

  protected $casts = [
    'created_at' => 'datetime',
    'berat' => 'decimal:2',
  ];

  function seller(){
    return $this->belongsTo(User::class , 'id_user');
  }

  function getHargaStringAttribute(){
    return "Rp.".number_format($this->attributes['harga']);
  }



}