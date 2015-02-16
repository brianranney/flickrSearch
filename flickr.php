<?php

    class Flickr { 
        private $apiKey = '15b2f18ad586576189baa04711c0ef14';

        public function __construct() {
        } 

        public function search($query = null) { 
            $search = 'http://flickr.com/services/rest/?method=flickr.photos.search&api_key=' . $this->apiKey . '&text=' . urlencode($query) . '&sort=relevance&per_page=20&format=php_serial'; 
            $result = file_get_contents($search); 
            $result = unserialize($result); 
            return $result; 
        } 
    }

?>
