<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property integer $age
 * @property integer $address
 * @property integer $card_no
 * @property integer $image_base_url
 * @property integer $image_base_path
 * @property boolean $gender
 * @property boolean $status
 */
class Customer extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name', 'phone',
        'email', 'age',
        'address', 'card_no',
        'image_base_url',
        'image_base_path', 'gender',
        'status'
    ];

}
