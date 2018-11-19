<?php

namespace App\Entities;

use Jenssegers\Mongodb\Eloquent\Model;


/**
 * 題目
 * Class VideoRecord
 * @package App\Entities
 * @author reccachao
 */
class Problem extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level',
        'article_id',
        'content',
        'option',
        'answer'
    ];

    /**
     * The connection name for the model.
     *
     * @var string
     * @author reccachao
     */
    protected $connection = 'mongodb';
}
