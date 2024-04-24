<?php

namespace App\Models;

use App\Models\Traits\ActiveTrait;
use App\Models\Traits\ImageThumb;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends AdminModel
{
    use HasFactory, SoftDeletes, ActiveTrait, ImageThumb;

    protected $table = 'announcements';

    protected $guarded = ['id'];

    protected $casts = [
        'active_from' => 'datetime',
        'active_to' => 'datetime'
    ];

    public static $LARGE_SIZE = [920, 400];

    public static $THUMB_SIZE = [460, 200];

    public static $IMAGE_SIZE = ['o' => [1920, 900], 'tn' => [400, 250]];

    /**
     * Validation rules for this model
     */
    static public $rules = [
        'title'        => 'required|min:3|max:191',
        'small_description' => 'nullable',
        'action_name' => 'nullable|max:191',
        'action_url'  => 'nullable|max:191',
        'page_url'  => 'nullable|max:191',
        'active_from' => 'nullable|date',
        'active_to'   => 'nullable|date',
        'photo'       => 'required|max:14000|mimes:jpg,jpeg,png,bmp,mp4',
    ];

    /**
     * Get all the rows as an array (ready for dropdowns)
     *
     * @return array
     */
    public static function getAllList()
    {
        return self::isActiveDates()->orderBy('name')->get()->pluck('name', 'id')->toArray();
    }
}
