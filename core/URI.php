<?php defined('BASE_PATH') OR exit('No direct script access allowed');

class URI {

    private $get_uri;
    private $seg;
    private $uri_segments = [];

    /**
     * Gets the uri segement value
     * 
     * Can handle up to 5 segments currently
     * 
     * @param string $section - segment wanted
     * @return string 
    */
    public function segment($section)
    {
        // Retrieves the current URI and explodes it
        $get_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $get_uri);

        // Find the requested section from $section
        // RESEARCH ternary operator for shorthand usage
        if ($section === 1) {
            $seg = isset($uri_segments[3]) ? $uri_segments[3] : '';
        } elseif ($section === 2) {
            $seg = isset($uri_segments[4]) ? $uri_segments[4] : '';
        } elseif ($section === 3) {
            $seg = isset($uri_segments[5]) ? $uri_segments[5] : '';
        } elseif ($section === 4) {
            $seg = isset($uri_segments[6]) ? $uri_segments[6] : '';
        } elseif ($section === 5) {
            $seg = isset($uri_segments[7]) ? $uri_segments[7] : '';
        }

        // Returns the segment found
        return $seg;
    }

}
