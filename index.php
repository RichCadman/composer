<?php
class Str{
    public function stringToInt($data)
    {
        $tmp = $data;
        foreach ((array)$tmp as $k => $v) {
            $tmp[$k] = is_array($v) ? $this->stringToInt($v)
                : (is_numeric($v) ? intval($v) : $v);
        }

        return $tmp;
    }
    public function str()
    {
        echo '看不见我';
    }
}

$str = new \Str();
$data = array(
    '0' =>  '123',
    '1' =>  array(
        '0' =>  '23423423423',
    ),
);
$res = $str->stringToInt($data);
var_dump($res);
var_dump($data);
