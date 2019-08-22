<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RelationshipHistory
 *
 * @package App
 * @property integer $year
 * @property string $caption1
 * @property string $caption2
*/
class RelationshipHistory extends Model
{
    use SoftDeletes;

    protected $fillable = ['year', 'caption1', 'caption2'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        RelationshipHistory::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setYearAttribute($input)
    {
        $this->attributes['year'] = $input ? $input : null;
    }
    
}
