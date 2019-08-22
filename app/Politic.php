<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Politic
 *
 * @package App
 * @property string $caption
 * @property text $text
*/
class Politic extends Model
{
    use SoftDeletes;

    protected $fillable = ['caption', 'text'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Politic::observe(new \App\Observers\UserActionsObserver);
    }
    
}
