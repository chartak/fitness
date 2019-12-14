<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class ContactContact extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'contact_contacts';

    protected $appends = [
        'logo',
        'favicon',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'latitude',
        'longitude',
        'open_hour',
        'company_id',
        'contact_vk',
        'updated_at',
        'created_at',
        'close_hour',
        'contact_tw',
        'deleted_at',
        'contact_fb',
        'contact_ins',
        'branch_name',
        'description',
        'contact_city',
        'contact_skype',
        'contact_email',
        'contact_phone_2',
        'contact_phone_1',
        'contact_address',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function branchServices()
    {
        return $this->hasMany(Service::class, 'branch_id', 'id');
    }

    public function branchClubCarts()
    {
        return $this->hasMany(ClubCart::class, 'branch_id', 'id');
    }

    public function branchStocks()
    {
        return $this->hasMany(Stock::class, 'branch_id', 'id');
    }

    public function branchContentCategories()
    {
        return $this->hasMany(ContentCategory::class, 'branch_id', 'id');
    }

    public function branchContentTags()
    {
        return $this->hasMany(ContentTag::class, 'branch_id', 'id');
    }

    public function branchContentPages()
    {
        return $this->hasMany(ContentPage::class, 'branch_id', 'id');
    }

    public function branchTreainers()
    {
        return $this->belongsToMany(Treainer::class);
    }

    public function company()
    {
        return $this->belongsTo(ContactCompany::class, 'company_id');
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function getFaviconAttribute()
    {
        $file = $this->getMedia('favicon')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
}
