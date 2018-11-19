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
        'level_group',
        'part_of_speech',
        'word',
        'KK_phonemic_transcription',
        'DJ_phonemic_transcription',
        'english_meaning',
        'traditional_chinese_meaning',
        'simplified_chinese_meaning',
        'english_sentence',
        'traditional_chinese_sentence',
        'simplified_chinese_sentence',
        'antonym',
        'synonym',
        'extension',
    ];

    /**
     * The connection name for the model.
     *
     * @var string
     * @author reccachao
     */
    protected $connection = 'mongodb';
}
