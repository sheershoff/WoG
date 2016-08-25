<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
//    protected $dateFormat = 'U';
            
    /**
     * Error message bag
     * 
     * @var Illuminate\Support\MessageBag
     */
    protected $errors;

    /**
     * Set error message bag
     * 
     * @var Illuminate\Support\MessageBag
     */
    protected function setErrors($errors) {
        $this->errors = $errors;
    }

    /**
     * Retrieve error message bag
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * Inverse of wasSaved
     */
    public function hasErrors() {
        return !empty($this->errors);
    }

//    public static function boot() {
//        static::creating(function ($model) {
//            // blah blah
//        });
//
//        static::created(function ($model) {
//            // blah blah
//        });
//
//        static::updating(function ($model) {
//            // bleh bleh
//        });
//
//        static::updated(function ($model) {
//            // bleh bleh
//        });
//
//        static::deleting(function ($model) {
//            // bluh bluh
//        });
//
//        static::deleted(function ($model) {
//            // bluh bluh
//        });
//
//        parent::boot();
//    }

}
