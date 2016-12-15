<?php namespace word\Message\Models;

use Model;

/**
 * Model
 */
class Word extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
/*       'id' => 'required',
       'content' => 'required',
       'subject' => 'required',*/
    /*   'reply_content' => 'required',*/
    ];

    /*public $rules = [
      'name' => 'required|between:3,64',
    ];*/

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'word_message_jiandu';


    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];


    protected $primaryKey = 'id';

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}