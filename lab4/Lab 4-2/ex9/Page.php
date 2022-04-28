<?php
    class Page {
        private $page;
        private $title;
        private $year;
        private $copyright;

        private function addHeader() {
            print '<head><title>' . $this->title . '</title></head>';
        }
        public function addContent() {
            print $this->page ;
        }
        private function addFooter() {
            print '<div style="text-align:center;">'. $this->year . 'and' .$this->copyright . '</div>';
        }
        public function get() {
            self::addHeader();
            self::addContent();
            self::addFooter();
        }

        function __construct( $page, $title, $year, $copyright) {
            $this->page = $page;
            $this->title = $title;
            $this->year = $year;
            $this->copyright = $copyright;
        }
    }

?>