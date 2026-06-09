<?php

namespace app\Models\Produto;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
{
    protected $fillable = [
        'produto_id',
        'quantidade',
        'tipo',

    ];
    
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
}