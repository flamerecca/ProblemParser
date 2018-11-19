<?php

namespace App\Entities;

use Jenssegers\Mongodb\Eloquent\Model;


/**
 * 單字
 * Class VideoRecord
 * @package App\Entities
 * @author reccachao
 */
class Vocabulary extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level',
        'content',
        'traditional_meaning',
        'simplified_meaning',
    ];

    /**
     * The connection name for the model.
     *
     * @var string
     * @author reccachao
     */
    protected $connection = 'mongodb';
}
