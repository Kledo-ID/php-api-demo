<?php

use Josantonius\Session\Facades\Session;

if (! function_exists('random_string')) {
    /**
     * Generate a more truly "random" alpha-numeric string.
     *
     * @param  int  $length
     * @return string
     * @throws \Random\RandomException
     */
    function random_string(int $length = 16): string
    {
        $string = '';

        while (($len = strlen($string)) < $length) {
            $size = $length - $len;

            $bytes = random_bytes($size);

            $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
    }
}

if (! function_exists('set_token')) {
    /**
     * Store token details to session.
     *
     * @param  string  $tokenType
     * @param  string  $accessToken
     * @param  string  $refreshToken
     * @param  string  $expiresIn
     * @return void
     * @throws \Josantonius\Session\Exceptions\SessionNotStartedException
     */
    function set_token(string $tokenType, string $accessToken, string $refreshToken, string $expiresIn): void
    {
        Session::set('oauth2', [
            'token_type' => $tokenType,
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken,
            'expires_in' => $expiresIn,
        ]);
    }
}

if (! function_exists('get_access_token')) {
    /**
     * Get the access token.
     *
     * @return string
     */
    function get_access_token(): string
    {
        return (new Josantonius\Session\Session)->get('oauth2')['access_token'];
    }
}

if (! function_exists('get_refresh_token')) {
    /**
     * Get the refresh token.
     *
     * @return string
     */
    function get_refresh_token(): string
    {
        return (new Josantonius\Session\Session)->get('oauth2')['refresh_token'];
    }
}

if (! function_exists('is_collapsed')) {
    function is_collapsed($key): void
    {
        if ((isset($_GET['request']) && $_GET['request'] === $key)
            || (isset($_GET['code']) && $_GET['code'] === $key)
        ) {
            echo 'show';
        }

        echo '';
    }
}

if (! function_exists('json_pretty')) {
    /**
     * @throws \JsonException
     */
    function json_pretty($response): false|string
    {
        return json_encode($response, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
