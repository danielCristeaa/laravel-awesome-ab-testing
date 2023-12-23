<?php

namespace DanielCristeaa\AwesomeAbTesting\Models;

use DanielCristeaa\AwesomeAbTesting\Database\Factories\AbTestFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbTest extends Model {
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return AbTestFactory::new();
    }

    public function variations() {
        return $this->hasMany(ABVariation::class);
    }
}
