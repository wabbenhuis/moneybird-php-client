<?php namespace Picqer\Financials\Moneybird\Entities;

use Picqer\Financials\Moneybird\Actions\FindAll;
use Picqer\Financials\Moneybird\Actions\Removable;
use Picqer\Financials\Moneybird\Actions\Storable;
use Picqer\Financials\Moneybird\Model;

/**
 * Class Webhook
 * @package Picqer\Financials\Moneybird\Entities
 */
class Webhook extends Model {

    use FindAll, Storable, Removable;

    const JSON_OPTIONS = 0;
    
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'url',
        'events',
        'last_http_status',
        'last_http_body',
    ];

    /**
     * @var string
     */
    protected $endpoint = 'webhooks';
}
