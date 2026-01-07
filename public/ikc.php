<?php

use App\myappenv;

$terminalID = '08129120';
$password = 'BACFCF62FD769985';
$acceptorId = "992180008129120";
$pub_key = myappenv::pub_key;
if (isset($_POST['fromkookbaz']) && $_POST['fromkookbaz'] != "") {
    $amount = $_POST['amount'];
    echo 'amount = ' .$amount;
    $amount = (int)$amount;
} 
function generateAuthenticationEnvelope($pub_key, $terminalID, $password, $amount)
{
    $data = $terminalID . $password . str_pad($amount, 12, '0', STR_PAD_LEFT) . '00';
    $data = hex2bin($data);
    $AESSecretKey = openssl_random_pseudo_bytes(16);
    $ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext_raw = openssl_encrypt($data, $cipher, $AESSecretKey, $options = OPENSSL_RAW_DATA, $iv);
    $hmac = hash('sha256', $ciphertext_raw, true);
    $crypttext = '';
    openssl_public_encrypt($AESSecretKey . $hmac, $crypttext, $pub_key);
    return array(
        "data" => bin2hex($crypttext),
        "iv" => bin2hex($iv),
    );
}
if (isset($_POST['token']) && $_POST['token'] != "") {
    if ($_POST['responseCode'] != "00") {
        echo "failed: code " . $_POST['responseCode'];
        exit;
    }
    $data = array(
        "terminalId" => $terminalID,
        "retrievalReferenceNumber" => $_POST['retrievalReferenceNumber'],
        "systemTraceAuditNumber" => $_POST['systemTraceAuditNumber'],
        "tokenIdentity" => $_POST['token'],
        
    );
    $data_string = json_encode($data);
    $ch = curl_init('https://ikc.shaparak.ir/api/v3/confirmation/purchase');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string)
    ));
    $result = curl_exec($ch);
    if ($result === false) {
        echo curl_error($ch);
        exit;
    }
    curl_close($ch);
    $response = json_decode($result, JSON_OBJECT_AS_ARRAY);
    $status =  $response['status'];
    if($status == '1'){
        $result = $response['result'];
        $systemTraceAuditNumber = $result['systemTraceAuditNumber'];
        $amount = $result['amount'];
        
    }

    exit;
}
$token = generateAuthenticationEnvelope($pub_key, $terminalID, $password, $amount);
$data = [];
$data["request"] = [
    "acceptorId" => $acceptorId,
    "amount" => $amount,
    "billInfo" => null,
    "paymentId" => null,
    "requestId" => uniqid(),
    "requestTimestamp" => time(),
    "revertUri" => "https://kookted.ir/ikc.php",
    "terminalId" => $terminalID,
    "transactionType" => "Purchase"
];
$data['authenticationEnvelope'] = $token;
$data_string = json_encode($data);
$ch = curl_init('https://ikc.shaparak.ir/api/v3/tokenization/make');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string)
));
$result = curl_exec($ch);
curl_close($ch);
$response = json_decode($result, JSON_OBJECT_AS_ARRAY);
if ($response["responseCode"] != "00") {
    echo $response["description"];
    exit;
}
?>
<form method="post" id="mainform" action="https://ikc.shaparak.ir/iuiv3/IPG/Index/" enctype="Äā‚¬Ā«Äā‚¬Å–multipart/form-dataÄā‚¬Ā¬Äā‚¬Ā¬">
    <input type="hidden" name="tokenIdentity" value="<?php echo  $response['result']['token'] ?>">
    <input type="submit" value="DoPayment">
    <script>
        document.getElementById('mainform').submit();
    </script>
</form>