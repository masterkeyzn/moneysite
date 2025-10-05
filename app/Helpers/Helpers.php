<?php

use Illuminate\Support\Facades\File;
use Jenssegers\Agent\Agent;

if (! function_exists('json_data_filter')) {
    function json_data_filter($jsonPath)
    {
        $path = resource_path($jsonPath);

        if (! File::exists($path)) {
            return [];
        }

        $json = file_get_contents($path);

        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return [];
        }

        $filteredData = array_filter($data, function ($item) {
            return ! is_null($item['link']) && ! is_null($item['description']);
        });

        $data = array_values($filteredData);

        return $data;
    }
}

if (! function_exists('format_duration')) {
    function format_duration($dateString)
    {
        $date = DateTime::createFromFormat('d-m-Y', $dateString);

        if (! $date) {
            return 'Invalid date format';
        }

        $now      = new DateTime();
        $interval = $now->diff($date);

        $years  = $interval->y;
        $months = $interval->m;
        $days   = $interval->d;
        $hours  = $interval->h;

        return "{$years} Tahun {$months} Bulan {$days} Hari {$hours} Jam";
    }
}

if (! function_exists('user_agent')) {
    function user_agent()
    {
        $agent = new Agent();

        return $agent->isMobile() ? 'mobile' : 'desktop';
    }
}
