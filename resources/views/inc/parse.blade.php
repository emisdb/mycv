<?php
$words = explode(' ', $sample);
$stack = [];
echo $sample;
$in_tag = [false, ''];
$cur = 0;
foreach ($words as $word) {
    if ((stripos($word, '<') == 0) && (($close = strrpos($word, '>')) > 0)) {

        $tag['text'] = substr($word, $close + 1);
        $word = substr(substr($word, 1), 0, $close - 1);
        $tag['tags'] = explode('_', $word);
        $in_tag = [true, $tag['tags'][0]];
         array_push($stack, $tag);
    } else {
        array_push($stack, $word);

    }
}
?>
<ul>
</ul>
<?php var_dump($stack); ?>




