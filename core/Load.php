<?php

class Load extends PYT_Core {

    /**
     * Loads model
     * 
     * @param string $modal
    */
    public static function modal($modal) 
    {
        $path = PYT_MODALS_FOLDER.$modal.'.php';
        include_once( $path );
    }

    /**
     * Returns a view file
     * 
     * @param string $page - name of the file minus extension
     * @param string $data - passed data from source
    */
    public static function view($page, $data = null) 
    {
        $path = PYT_VIEWS_FOLDER.$page.'.php';
        include_once( $path );
    }

    public function view2()
    {
        return "view2 yay";
    }

}