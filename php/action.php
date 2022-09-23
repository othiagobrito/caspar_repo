<?php

include('fileRows.php');
include('arrayGenerator.php');

function fileHandler($file)
{
    if ($file['name']) {
        $tempFile = fopen($file['tmp_name'], 'r');
        $fileRows = getRows($tempFile);
        // echo fread($tempFile, filesize($file['tmp_name']));

        $fileContent = file_get_contents($file['tmp_name']);

        // HDR ARQUIVO
        $banco_hdrArquivo = substr($fileRows[0], 0, 3);
        $loteServico_hdrArquivo = substr($fileRows[0], 3, 4);
        $tipoRegistro_hdrArquivo = substr($fileRows[0], 7, 1);
        $tipoInscricao_hdrArquivo = substr($fileRows[0], 17, 1);
        $numeroInscricaoEmpresa = substr($fileRows[0], 18, 14);
        $nomeEmpresa_hdrArquivo = substr($fileRows[0], 72, 30);
        $codigoRemessaRetorno_hdrArquivo = substr($fileRows[0], 142, 1);
        $versaoLayoutArquivo_hdrArquivo = substr($fileRows[0], 163, 3);

        // TRL ARQUIVO
        $banco_trlArquivo = substr($fileRows[6], 0, 3);
        $loteServico_trlArquivo = substr($fileRows[6], 3, 4);
        $tipoRegistro_trlArquivo = substr($fileRows[6], 7, 1);
        $quantidadeLotesArquivo_trlArquivo = substr($fileRows[6], 17, 6);
        $quantidadeRegistrosArquivo_trlArquivo = substr($fileRows[6], 23, 6);

        // HDR LOTE
        $banco_hdrLote = substr($fileRows[1], 0, 3);
        $tipoRegistro_hdrLote = substr($fileRows[1], 7, 1);
        $modalidadeAverbacao_hdrLote = substr($fileRows[1], 8, 1);
        $tipoServico_hdrLote = substr($fileRows[1], 9, 2);
        $versaoLayoutLote_hdrLote = substr($fileRows[1], 11, 3);
        $loteServico_hdrLote = substr($fileRows[1], 20, 4);
        $tipoInscricao_hdrLote = substr($fileRows[1], 31, 1);
        $numeroInscricaoEmpresa_hdrLote = substr($fileRows[1], 32, 14);

        // TRL LOTE
        $banco_trlLote = substr($fileRows[5], 0, 3);
        $loteServico_trlLote = substr($fileRows[5], 3, 4);
        $tipoRegistro_trlLote = substr($fileRows[5], 7, 1);
        $quantidadeRegistrosLote_trlLote = substr($fileRows[5], 15, 6);
        $totalParcelasEnviadas_trlLote = substr($fileRows[5], 21, 5);
        $totalValoresParcelas_trlLote = substr($fileRows[5], 26, 13);

        // REGISTRO DETALHE
        $banco_registroDetalhe = substr($fileRows[3], 0, 3);
        $loteServico_registroDetalhe = substr($fileRows[3], 3, 4);
        $tipoRegistro_registroDetalhe = substr($fileRows[3], 7, 1);
        $numeroSequencialRegistro_registroDetalhe = substr($fileRows[3], 8, 5);
        $codigoSegmento_registroDetalhe = substr($fileRows[3], 13, 1);
        $tipoMovimento_registroDetalhe = substr($fileRows[3], 14, 1);
        $nomeMutuario_registroDetalhe = substr($fileRows[3], 15, 30);
        $codigoUnidade_registroDetalhe = substr($fileRows[3], 45, 6);
        $cpfMutuario_registroDetalhe = substr($fileRows[3], 51, 11);
        $idMutuario_registroDetalhe = substr($fileRows[3], 62, 12);
        $tipoOperacaoCredito_registroDetalhe = substr($fileRows[3], 96, 1);
        $dataVencimentoParcela_registroDetalhe = substr($fileRows[3], 99, 6);
        $quantidadeParcelasContrato_registroDetalhe = substr($fileRows[3], 107, 2);
        $dataInicioContrato_registroDetalhe = substr($fileRows[3], 109, 8);
        $dataFimContrato_registroDetalhe = substr($fileRows[3], 117, 8);
        $valorTotalLiberado_registroDetalhe = substr($fileRows[3], 125, 7);
        $valorTotalOperacao_registroDetalhe = substr($fileRows[3], 134, 7);
        $valorParcela_registroDetalhe = substr($fileRows[3], 143, 7);
        $idContrato_registroDetalhe = substr($fileRows[3], 161, 20);
        $agenciaMantenedoraConta_registroDetalhe = substr($fileRows[3], 202, 5);
        $numeroContaCorrente_registroDetalhe = substr($fileRows[3], 208, 12);
        $digitoVerificadorConta_registroDetalhe = substr($fileRows[3], 220, 1);

        // echo readfile($file['tmp_name']);

        $salvarComo = "../files/{$file['name']}";
        // move_uploaded_file($file['tmp_name'], $salvarComo);

        // var_dump($file);
        // echo $file['name'] . '<br>';
    }
}

$files = [$_FILES['input1'], $_FILES['input2']];

foreach ($files as $file) {
    fileHandler($file);
}

// header('Location: ../');
// die();
