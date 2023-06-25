<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;
    protected $table = "name";
    protected $casts = [
        'titledata' => 'json',
    ];


    /**
     * Undocumented function
     *
     * @param [type] $value
     * @return void
     */
    public function getColumnNameAttribute($value)
    {
        return array_values(json_decode($value, true) ?: []);
    }

    /**
     * Undocumented function
     *
     * @param [type] $value
     * @return void
     */
    public function setColumnNameAttribute($value)
    {
        $this->attributes['titledata'] = json_encode(array_values($value));
    }
}
