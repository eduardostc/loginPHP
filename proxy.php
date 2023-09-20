<?php

$atuacao = $_POST["atuacao"] ?? "";
$principais_produtos = $_POST["principais_produtos"] ?? "";
$desafios = $_POST["desafios"] ?? "";
$objetivos = $_POST["objetivos"] ?? "";
$prompt = $_POST["prompt"] ?? "";

function enviar_dados($atuacao, $principais_produtos, $desafios, $objetivos, $prompt) {
    $response = null;
    try {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://webhook-n8n-dev-conectarecife.recife.pe.gov.br/webhook/d10df557-b5ed-472c-9712-d2b4c9290bf5',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                "atuacao" => $atuacao,
                "principais_produtos" => $principais_produtos,
                "desafios" => $desafios,
                "objetivos" => $objetivos,
                "prompt" => $prompt
            ],
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
    } catch (\Throwable $th) {
        //throw $th;
    }
    return $response;
}

$result = ["result" => null];

if ($atuacao !== "" && $principais_produtos !== "" && $desafios !== "" && $objetivos !== "" && $prompt !== "") {
    $result = enviar_dados($atuacao, $principais_produtos, $desafios, $objetivos, $prompt);
}

die(json_encode($result));
