<?php

namespace App\Entities;

use Jenssegers\Mongodb\Eloquent\Model;


/**
 * 文章
 * Class VideoRecord
 * @package App\Entities
 * @author reccachao
 */
class Article extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level_group',
        'url',
        'content'
    ];

    /**
     * The connection name for the model.
     *
     * @var string
     * @author reccachao
     */
    protected $connection = 'mongodb';
}
