<?hh <<__EntryPoint>> function main(): void {
$dir = dirname(__FILE__);
$file_pub = $dir . '/bug37820cert.pem';
$file_key = $dir . '/bug37820key.pem';

$priv_key = file_get_contents($file_key);
$priv_key_id = openssl_get_privatekey($priv_key);



$pub_key = file_get_contents($file_pub);
$pub_key_id = openssl_get_publickey($pub_key);
$data = "some custom data";
$signature = null;
if (!openssl_sign($data, inout $signature, $priv_key_id, OPENSSL_ALGO_MD5)) {
    echo "openssl_sign failed.";
}

$ok = openssl_verify($data, $signature, $pub_key_id, OPENSSL_ALGO_MD5);
if ($ok == 1) {
   echo "Ok";
} else if ($ok == 0) {
   echo "openssl_verify failed.";
}
}
