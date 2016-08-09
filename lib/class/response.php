<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/3 0003
 * Time: 4:39
 */

class Response
{
    const JSON = 'json';

    public static function show($code, $message, $data = '', $type = self::JSON)
    {
        if (!is_numeric($code)) {
            return '';
        }

        $result = [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];

        $type = isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : self::JSON;

        echo self::$type($result);
        exit;

    }

    public static function json($result)
    {
        return json_encode($result);
    }

    public static function xml($result)
    {
        header('Content-Type:text/xml');
        $xml = "<?xml version='1.0' encoding='UTF-8'?>";
        $xml .= "<root>";
        //$xml .= self::xmlToEncode($result);

        $xml .= "<code>200</code>";
        $xml .= self::xmlToEncode($result);
        $xml .= "</root>";

        return $xml;
    }

    public static function xmlToEncode($data)
    {
        $xml = $attr = '';

        foreach ($data as $key => $value){
            if (is_numeric($key)) {
                $attr = " id='{$key}'";
                $key = 'item';
            }

            $xml .= "<{$key}{$attr}>";
            $xml .= is_array($value) ? self::xmlToEncode($value) : $value ;
            $xml .= "</{$key}>";
        }

        return $xml;
    }

}