<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageVisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'method', 'ip_address', 'user_id', 'country_name', 'region_name', 'city_name', 'user_agent', 'visitor_type'
    ];

    // Define the BOTS constant to store bot user agents
    const BOTS = [
        'bot', 'crawl', 'spider', 'slurp', 'googlebot', 'bingbot', 'baidu', 'yandex',
        'duckduckbot', 'facebook', 'twitterbot', 'linkedinbot', 'pinterestbot', 'telegrambot', 'bingpreview'
    ];

    /**
     * Check if the user agent corresponds to a bot/spider.
     *
     * @param string $userAgent
     * @return bool
     */
    public static function isBot(string $userAgent): bool
    {
        foreach (self::BOTS as $bot) {
            if (stripos($userAgent, $bot) !== false) {
                return true;
            }
        }

        return false;
    }

}
