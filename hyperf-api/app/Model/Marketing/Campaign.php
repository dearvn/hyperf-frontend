<?php

declare(strict_types=1);

namespace App\Model\Marketing;

use App\Model\Model;

/**
 * Character model class
 * Class Campaign
 * @package App\Model\Marketing
 * @Author donald
 * @Date: 2023/5/05
 */
class Campaign extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marketing_campaigns';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'default';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    protected $guarded = [];  
}