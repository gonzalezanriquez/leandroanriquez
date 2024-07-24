<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
