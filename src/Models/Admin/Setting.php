<?php

namespace SujanSht\LaraAdmin\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    use HasFactory;

    protected $guarded = [];

    const STRING = 1;
    const INTEGER = 2;
    const TEXT = 3;
    const TEXTEDITOR = 4;
    const SWITCH = 5;
    const CHECKBOX = 6;
    const SELECT = 7;
    const MULTIPLE = 8;
    const TAG = 9;
    const IMAGE = 10;

    // Mutators
    public function setSettingNameAttribute($value)
    {
        $this->attributes['setting_name'] = strtolower(str_replace(' ', '_', $value));
    }

    public function setSettingGroupAttribute($value)
    {
        $this->attributes['setting_group'] = strtolower(str_replace(' ', '_', $value));
    }

    // Accessors
    public function getSettingNameAttribute($value)
    {
        return ucwords(str_replace('_', ' ', $value));
    }

    public function getSettingGroupAttribute($value)
    {
        return ucwords(str_replace('_', ' ', $value));
    }

    public function getSettingTypeAttribute($attribute)
    {
        return [
            Setting::STRING => 'string',
            Setting::INTEGER => 'integer',
            Setting::TEXT => 'text',
            Setting::TEXTEDITOR => 'text editor',
            Setting::SWITCH => 'switch',
            Setting::CHECKBOX => 'checkbox',
            Setting::SELECT => 'select',
            Setting::MULTIPLE => 'multiple',
            Setting::TAG => 'tag',
            Setting::IMAGE => 'image',
        ][$attribute];
    }


}
