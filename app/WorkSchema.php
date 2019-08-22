<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WorkSchema
 *
 * @package App
 * @property string $digit
 * @property text $text
*/
class WorkSchema extends Model
{
    use SoftDeletes;

    protected $fillable = ['digit', 'text'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        WorkSchema::observe(new \App\Observers\UserActionsObserver);
    }
    
}
