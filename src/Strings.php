<?php


namespace shhgun\phputils;


/**
 * Class Strings
 *
 * @author shhgun <g3devmain@gmail.com>
 */
class Strings
{
    private $string;
    private $length;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function startsWidth($needle)
    {
        $substr = substr($this->string, 0, strlen($needle));
        return $substr === $needle;
    }

    public function endsWidth($needle)
    {
        $substr = substr($this->string, $this->length() - strlen($needle));
        return $substr === $needle;
    }

    public function length()
    {
        if (is_null($this->length)) {
            $this->length = strlen($this->string);
        }
        return $this->length;
    }

    public function replace($search, $replace)
    {
        return new Strings(str_replace($search, $replace, $this->string));
    }

    public function __toString()
    {
        return $this->string;
    }
}
