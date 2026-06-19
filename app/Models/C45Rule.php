<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C45Rule extends Model
{
    use HasFactory;

    protected $fillable = ['parent_node', 'attribute', 'condition', 'label', 'entropy', 'gain'];
}
