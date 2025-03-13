<?php

namespace App\Services;

use App\Models\Feeds\FeedInterface;

class DataParser implements ParserInterface
{
    protected $text;
    protected $data;
    protected $names;

    public function __construct(FeedInterface $feed)
    {
        $this->text = $feed->getText();
        $this->data = $feed->getData();
        $this->names = array_column($this->data, 'name');
    }

    /**
     * @return array
     */
    public function handle(): array
    {
        $result = [];
        foreach ($this->text as $par) {
            $result[] = $this->breakParagraph($par);
        }
        return [$result, $this->data];
    }

    /**
     * @param string $par
     * @return array
     */
    protected function breakParagraph(string $par, $symbol = '<>'): array
    {
        $result = [];
        $startSymbol = $symbol[0];
        $lastSymbol = $symbol[1];

        $arr = explode($startSymbol, $par);
        foreach ($arr as $pitem) {
            if ($pos = strpos($pitem, $lastSymbol)) {
                $arr = $this->getType(substr($pitem, 0, $pos));
                if ($arr['type'] == 'pop') {
                    $arr['text'] = $this->getPop($arr);
                }
                $result[] = $arr;
                $text = substr($pitem, $pos + 1);
                if (!empty($text)) $result[] = ['type' => 'text', 'data' => str_replace("\n", '', $text)];
            } else {
                $result[] = ['type' => 'text', 'data' => str_replace("\n", '', $pitem)];
            }
        }
        return $result;
    }

    /**
     * @param string $par
     * @return array
     */
    protected function breakList(string $par): array
    {
        $result = [];
        $arr = explode("[[", $par);
        foreach ($arr as $litem) {
            if ($pos = strpos($litem, ']]')) {
                $result[] = $this->breakParagraph(substr($litem, 0, $pos),'[]');
            }
        }
        return $result;

    }

    protected function getType($text)
    {
        $symbol = substr($text, 0, 1);
        $route = "";
        switch ($symbol) {
            case '@':
                $tag = "badge";
                $text = substr($text, 1);
                break;
            case 'i':
                $tag = "ul";
                $text = $this->breakList(substr(str_replace("\n", '', $text), 1));
                break;
            case 'a':
                $tag = "link";
                $route = substr($text, 2, strpos($text, " ") - 2);
                $text = substr($text, strpos($text, " ") + 1);
                break;
            default:
                $tag = "pop";
        }

        $result = ['type' => $tag, 'data' => $text];
        if (!empty($route)) $result['route'] = $route;
        return $result;
    }

    protected function getPop($value)
    {
        if ($value['type'] == 'pop') {
            $pos = array_search($value['data'], $this->names);
            if (!($pos === false)) {
                $arr['text'] = $this->breakParagraph($this->data[$pos]['text']);
                $arr['color'] = $this->data[$pos]['color'];
                return $arr;
            }
        }
        return '';
    }
}

