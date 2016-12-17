<?php

class AnimeController extends Controller{


	public function index(){
        
        $rss = new RssDisplay("http://feeds.feedburner.com/crunchyroll/rss/anime");
     
        $html = "";
        $data = $rss->getFeedItems(10);
    
        foreach($data as $value) {
            $read_date = strtotime($value->pubDate);
            date_default_timezone_set('America/New_York');
            $read_date =  date("F j, Y, g:i a",$read_date);

            $html.= '<div><h4><a href="'.$value->link.'">'.$value -> title.'</a> ('.$read_date.')</h4><p>'.$value->description.'</p></div><hr/>';
        }



        $this->set('data',$html);

	}

        

}

?>