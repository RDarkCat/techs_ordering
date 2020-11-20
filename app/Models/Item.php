<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'settlement_id',
        'name'
    ];

    public function characteristic()
    {
        return $this->hasOne(Characteristic::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function settlement()
    {
        return $this->belongsTo(Settlement::class);
    }

    public function saveRelations($parameters, $files, int $user_id = 0)
    {
        $isUpdate = empty($user_id);
        if (!$isUpdate) {
            $user = User::find($user_id);
            $user->items()->attach($this->id);
        }

        if ($isUpdate) {
            $this->characteristic->fill($parameters)->save();
            $this->tags()->sync($parameters['tag_ids']);
        } else {
            $this->characteristic()->create($parameters);
            
            foreach ($parameters['tag_ids'] as $tag_id) {
                $this->tags()->attach($tag_id);
            }
        }

        if ($files) {
            foreach ($files as $images) {
                foreach ($images as $image) {
                    $path = $image->store('items_files');
                    $media = new Media();
                    $media->item_id = $this->id;
                    $media->filename = $path;

                    $metadata = '{"name":"' . $image->getClientOriginalName() . '", "extension" :"' . $image->extension() . '"}';
                    $media->metadata = $metadata;

                    $media->save();
                }
            }
        }
    
    public function category()
    {
        return $this->belongsToMany(Category::class, 'item_category');
    }
}
