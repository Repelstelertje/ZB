<?php
$baseApiUrl = getenv('BASE_API_URL') ?: 'https://20fhbe2020.be';

return [
    'BASE_API_URL' => $baseApiUrl,
    // When APP_DEBUG is set to 'true', development error reporting is enabled
    'DEBUG' => getenv('APP_DEBUG') === 'true',
    'BANNER_ENDPOINT' => $baseApiUrl . '/profile/banner9/120',
    'PROFILE_ENDPOINT' => $baseApiUrl . '/profile/get0/9/',
    'PROVINCE_ENDPOINT' => $baseApiUrl . '/profile/province/be',
];

