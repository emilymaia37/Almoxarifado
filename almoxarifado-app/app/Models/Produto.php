<?php

namespace app\Models\Movimento;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movimento;
{
    protected $fillable = [
        'nome ',
        'marca',
        'estoque',

    ];
    
    public function movimentos()
    {
        return $this->belongsTo(Movimento::class);
    }
}