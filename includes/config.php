<?php
$baseUrl = getenv('ONL_BASE_URL') ?: 'https://zoekertjesbelgie.be';
$api_url = getenv('BASE_API_URL') ?: 'https://20fhbe2020.be';

return [
    'BASE_API_URL' => $api_url,
    // When APP_DEBUG is set to 'true', development error reporting is enabled
    'DEBUG' => getenv('APP_DEBUG') === 'true',
    'BANNER_ENDPOINT' => $api_url . '/profile/banner9/120',
    'PROFILE_ENDPOINT' => $api_url . '/profile/get0/9/',
    'PROVINCE_ENDPOINT' => $api_url . '/profile/province/be',
];
?>