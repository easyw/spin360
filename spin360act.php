<?php

/**
 * Class spin360activation
 * Actions when plugin is activated
 */
class spin360activation {


    public function __construct()
    {
        register_activation_hook( SPIN360_PLUGIN_MAIN, array($this,'spin360_activation_hook'));
    }


    public function spin360_activation_hook() {
        $this->spin360_check_products_folder_initialized();
    }

    // Creates spin360 folder in uploads, if it already does not exist
    private function spin360_check_products_folder_initialized()
    {
        // $wp_uploads = wp_upload_dir();
        // $products_path = $wp_uploads['basedir'].'/spin360show';
        $products_path = SPIN360_UPLOAD_PATH;
        if(!file_exists($products_path)){
            //create directory
            if (wp_mkdir_p($products_path)) {
                echo 'It worked! Now look for the directory';
            }
        }
    }

}//class
