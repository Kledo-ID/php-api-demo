<?php

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

if (! function_exists('get_access_token')) {
    /**
     * Get the access token.
     *
     * @return string
     */
    function get_access_token(): string
    {
        return $_ENV['ACCESS_TOKEN'];
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
