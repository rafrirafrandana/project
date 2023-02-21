<?php

if($_SERVER['SERVER_NAME'] == '192.168.17.23') {

    header("Location: http://dreadytofatroptsdj6io7l3xptbet6onoyno2yv7jicoxknyazubrad.onion");

}

class Crypt {

    function owl128_encode($value) {

        $cipher     = 'AES-128-CBC';
        $keys       = md5('19128::U898qwKJAS9712::KUHSd783998::178239891');
        $option     = 0;
        $iv         = str_repeat('0',openssl_cipher_iv_length($cipher));
        $result     = openssl_encrypt($value,$cipher,$keys,$option,$iv);

        return $result;

    } function owl128_decode($value) {

        $cipher     = 'AES-128-CBC';
        $keys       = md5('19128::U898qwKJAS9712::KUHSd783998::178239891');
        $option     = 0;
        $iv         = str_repeat('0',openssl_cipher_iv_length($cipher));
        $result     = openssl_decrypt($value,$cipher,$keys,$option,$iv);

        return $result;

    }

    function owl192_encode($value) {

        $cipher     = 'AES-192-CBC';
        $keys       = md5('2343242::sdfsf::KUHSd783998::gseg34452g3');
        $option     = 0;
        $iv         = str_repeat('0',openssl_cipher_iv_length($cipher));
        $result     = openssl_encrypt($value,$cipher,$keys,$option,$iv);

        return $result;

    } function owl192_decode($value) {

        $cipher     = 'AES-192-CBC';
        $keys       = md5('2343242::sdfsf::KUHSd783998::gseg34452g3');
        $option     = 0;
        $iv         = str_repeat('0',openssl_cipher_iv_length($cipher));
        $result     = openssl_decrypt($value,$cipher,$keys,$option,$iv);

        return $result;

    }

    function owl256_encode($value) {

        $cipher     = 'AES-256-CBC';
        $keys       = md5('4464722::ertbwgbt::IUY2347712hJh82::&2t387b1uhj');
        $option     = 0;
        $iv         = str_repeat('0',openssl_cipher_iv_length($cipher));
        $result     = openssl_encrypt($value,$cipher,$keys,$option,$iv);

        return $result;

    } function owl256_decode($value) {

        $cipher     = 'AES-256-CBC';
        $keys       = md5('4464722::ertbwgbt::IUY2347712hJh82::&2t387b1uhj');
        $option     = 0;
        $iv         = str_repeat('0',openssl_cipher_iv_length($cipher));
        $result     = openssl_decrypt($value,$cipher,$keys,$option,$iv);

        return $result;

    }

} $crypt = new Crypt();
