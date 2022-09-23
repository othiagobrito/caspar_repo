<?php

function fileHandler($file)
{
    if ($file['name']) {
        // $tempFile = fopen($file['tmp_name'], 'r');
        // echo fread($tempFile, filesize($file['tmp_name']));

        $fileContent = file_get_contents($file['tmp_name']);

        // HDR ARQUIVO
        $banco_hdrArquivo = substr($fileContent, 0, 3);
        $loteServico_hdrArquivo = substr($fileContent, 3, 4);
        $tipoRegistro_hdrArquivo = substr($fileContent, 7, 1);
        $tipoInscricao_hdrArquivo = substr($fileContent, 17, 1);
        $numeroInscricaoEmpresa = substr($fileContent, 18, 14);
        $nomeEmpresa_hdrArquivo = substr($fileContent, 72, 30);
        $codigoRemessaRetorno_hdrArquivo = substr($fileContent, 142, 1);
        $versaoLayoutArquivo_hdrArquivo = substr($fileContent, 163, 3);

        // TRL ARQUIVO
        $banco_trlArquivo = substr($fileContent, 0, 3);
        $loteServico_trlArquivo = substr($fileContent, 3, 4);
        $tipoRegistro_trlArquivo = substr($fileContent, 7, 1);
        $quantidadeLotesArquivo_trlArquivo = substr($fileContent, 17, 6);
        $quantidadeRegistrosArquivo_trlArquivo = substr($fileContent, 23, 6);

        // HDR LOTE
        $banco_hdrLote = substr($fileContent, 0, 3);
        $tipoRegistro_hdrLote = substr($fileContent, 7, 1);
        $modalidadeAverbacao_hdrLote = substr($fileContent, 8, 1);
        $tipoServico_hdrLote = substr($fileContent, 9, 2);
        $versaoLayoutLote_hdrLote = substr($fileContent, 11, 3);
        $loteServico_hdrLote = substr($fileContent, 20, 4);
        $tipoInscricao_hdrLote = substr($fileContent, 31, 1);
        $numeroInscricaoEmpresa_hdrLote = substr($fileContent, 32, 14);

        // TRL LOTE
        $banco_trlLote = substr($fileContent, 0, 3);
        $loteServico_trlLote = substr($fileContent, 3, 4);
        $tipoRegistro_trlLote = substr($fileContent, 7, 1);
        $quantidadeRegistrosLote_trlLote = substr($fileContent, 15, 6);
        $totalParcelasEnviadas_trlLote = substr($fileContent, 21, 5);
        $totalValoresParcelas_trlLote = substr($fileContent, 26, 13);

        // REGISTRO DETALHE
        $banco_registroDetalhe = substr($fileContent, 0, 3);
        $loteServico_registroDetalhe = substr($fileContent, 3, 4);
        $tipoRegistro_registroDetalhe = substr($fileContent, 7, 1);
        $numeroSequencialRegistro_registroDetalhe = substr($fileContent, 8, 5);
        $codigoSegmento_registroDetalhe = substr($fileContent, 13, 1);
        $tipoMovimento_registroDetalhe = substr($fileContent, 14, 1);
        $nomeMutuario_registroDetalhe = substr($fileContent, 15, 30);
        $codigoUnidade_registroDetalhe = substr($fileContent, 45, 6);
        $cpfMutuario_registroDetalhe = substr($fileContent, 51, 11);
        $idMutuario_registroDetalhe = substr($fileContent, 62, 12);
        $tipoOperacaoCredito_registroDetalhe = substr($fileContent, 96, 1);
        $dataVencimentoParcela_registroDetalhe = substr($fileContent, 99, 6);
        $quantidadeParcelasContrato_registroDetalhe = substr($fileContent, 107, 2);
        $dataInicioContrato_registroDetalhe = substr($fileContent, 109, 8);
        $dataFimContrato_registroDetalhe = substr($fileContent, 117, 8);
        $valorTotalLiberado_registroDetalhe = substr($fileContent, 125, 7);
        $valorTotalOperacao_registroDetalhe = substr($fileContent, 134, 7);
        $valorParcela_registroDetalhe = substr($fileContent, 143, 7);
        $idContrato_registroDetalhe = substr($fileContent, 161, 20);
        $agenciaMantenedoraConta_registroDetalhe = substr($fileContent, 202, 5);
        $numeroContaCorrente_registroDetalhe = substr($fileContent, 208, 12);
        $digitoVerificadorConta_registroDetalhe = substr($fileContent, 220, 1);

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
