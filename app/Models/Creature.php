<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Creature
 *
 * @property $id
 * @property $name
 * @property $species
 * @property $age
 * @property $habitat
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Creature extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'species', 'age', 'habitat'];


}
