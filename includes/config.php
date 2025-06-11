<?php
$baseApiUrl = getenv('BASE_API_URL') ?: 'https://20fhbe2020.be';

return [
    'BASE_API_URL' => $baseApiUrl,
    'BANNER_ENDPOINT' => $baseApiUrl . '/profile/banner9/120',
    'PROFILE_ENDPOINT' => $baseApiUrl . '/profile/get0/9/',
    'PROVINCE_ENDPOINT' => $baseApiUrl . '/profile/province/be',
];

