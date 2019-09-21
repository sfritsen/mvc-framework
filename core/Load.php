<?php if (!defined('BASE_PATH')) exit('No direct script access allowed');

class Load {

    public function __construct()
    {
        
    }

    /**
     * Returns a view file
     * 
     * @param string $page - name of the file minus extension
     * @param array $data - array passed data from source
    */
    public function view($page, $data = null)
    {
        // Function to loop array for cleaning
        function array_map_r( $func, $arr ) {
            $newArr = array();

            foreach( $arr as $key => $value ) {
                $newArr[ $key ] = ( is_array( $value ) ? array_map_r( $func, $value ) : ( is_array($func) ? call_user_func_array($func, $value) : $func( $value ) ) );
            }

            return $newArr;
        }

        // If data was supplied, stip tags and extract
        if ($data !== null) {
            // Strip tags
            $pyt_cleaned = array_map_r('strip_tags', $data);

            // Extract $data
            extract($pyt_cleaned);
        }

        $path = PYT_VIEWS_FOLDER.$page.'.php';
        include_once( $path );
    }
    
    /**
     * Loads requested model
     * 
     * @param string $model
    */
    public function model($model) 
    {
        $path = PYT_MODELS_FOLDER.$model.'.php';
        include_once( $path );
        $this->model = new $model();
    }

}