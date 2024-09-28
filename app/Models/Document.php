<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['no', 'nama', 'file_path','mime_type', 'link'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($document) {
            $document->assignNumber();
        });

        static::deleted(function () {
            static::reorderNumbers();
        });
    }

    public function assignNumber()
    {
        $maxNumber = static::max('no') ?? 0;
        $this->no = $maxNumber + 1;
    }

    public static function reorderNumbers()
    {
        $documents = static::orderBy('no')->get();
        foreach ($documents as $index => $document) {
            $document->no = $index + 1;
            $document->save();
        }
    }

    public function getFormattedNoAttribute()
    {
        return sprintf('%02d', $this->no);
    }

    // private static function generateDocumentNumber()
    // {
    //     $lastDocument = self::orderBy('id', 'desc')->first();
    //     $lastNumber = $lastDocument ? intval(substr($lastDocument->no, 3)) : 0;
    //     $newNumber = $lastNumber + 1;
    //     return 'DOC' . str_pad($newNumber, 5, '0', STR_PAD_LEFT);
    // }
}
