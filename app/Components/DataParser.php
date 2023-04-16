<?php

namespace App\Components;

use App\Models\Feeds\FeedInterface;

class DataParser
{
    protected $text;
    protected $data;
    protected $names;

    public function __construct(FeedInterface $feed)
    {
        $this->text =$feed->getText();
        $this->data = $feed->getData();
        $this->names = array_column($this->data,'name');
    }

    /**
     * @return array
     */
    public function handle(): array
    {
        $result = [];
        foreach ($this->text as $par ) {
            $result[] = $this->breakPar($par);
        }
        return $result;
    }
    private function breakPar($par) : array
    {
        $result = [];
        $arr = explode("<", $par);
        foreach($arr as $pitem){
            if($pos = strpos($pitem,'>')){
                $arr = $this->getType(substr($pitem, 0,$pos)) ;
                if($arr['type'] == 'pop') $arr['text'] = $this->getPop($arr);
                $result[] = $arr;
                $text = substr($pitem, $pos+1);
                if(!empty($text))   $result[] = ['type' => 'text', 'data' => $text]  ;
            }else{
                $result[] = ['type' => 'text','data' => $pitem];
            }
        }
        return $result;
    }
    private function getType($text)  {
        $symbol = substr($text,0,1);
        $route = "";
        switch($symbol){
            case '@':
                $tag = "badge";
                $text = substr($text,1);
                break;
            case 'a':
                $tag = "link";
                $route = substr($text, 2,strpos($text," ")-2);
                $text = substr($text, strpos($text," ")+1);
                break;
            default:
               $tag = "pop";
        }

        $result = ['type' => $tag, 'data' => $text];
        if(!empty($route)) $result['route'] = $route;
        return $result;
    }

    private function getPop($value){
        if($value['type']== 'pop') {
            $pos = array_search($value['data'],$this->names);
            if(!($pos === false)){
                $arr['text'] = $this->breakPar($this->data[$pos]['text']);
                $arr['color'] = $this->data[$pos]['color'];
                $arr['dialog'] = $this->data[$pos]['dialog'];
                 return $arr;
            }
        }
        return '';
    }
}

