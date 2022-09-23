<?php

function hdrArquivo(string $banco, string $loteServico, string $tipoRegistro, string $tipoInscricao, string $numeroInscricaoEmpresa, string $nomeEmpresa, string $codigoRemessaRetorno, string $versaoLayoutArquivo): array
{
    $hdrArquivo = [
        'Código bancário' => $banco,
        'Lote de serviço' => $loteServico,
        'Tipo de registro' => $tipoRegistro,
        'Tipo de inscrição' => $tipoInscricao,
        'Número de inscrição da empresa' => $numeroInscricaoEmpresa,
        'Nome da empresa' => $nomeEmpresa,
        'Código remessa/retorno' => $codigoRemessaRetorno,
        'Versão do layout de arquivo' => $versaoLayoutArquivo,
    ];

    return $hdrArquivo;
}

function trlArquivo(string $banco, string $loteServico, string $tipoRegistro, string $quantidadeLotesArquivo, string $quantidadeRegistrosArquivo): array
{
    $trlArquivo = [
        'Código bancário' => $banco,
        'Lote de serviço' => $loteServico,
        'Tipo de registro' => $tipoRegistro,
        'Quantidade de lotes no arquivo' => $quantidadeLotesArquivo,
        'Quantidade de registros do arquivo' => $quantidadeRegistrosArquivo,
    ];

    return $trlArquivo;
}

function hdrLote(string $banco, string $tipoRegistro, string $modalidadeAverbacao, string $tipoServico, string $versaoLayoutLote, string $loteServico, string $tipoInscricao, string $numeroInscricaoEmpresa): array
{
    $hdrLote = [
        'Código bancário' => $banco,
        'Tipo de registro' => $tipoRegistro,
        'Modalidade de averbação' => $modalidadeAverbacao,
        'Tipo de serviço' => $tipoServico,
        'Versão do layout do lote' => $versaoLayoutLote,
        'Lote de serviço' => $loteServico,
        'Tipo de inscrição' => $tipoInscricao,
        'Numero de inscrição da empresa' => $numeroInscricaoEmpresa,
    ];

    return $hdrLote;
}

function trlLote(string $banco, string $loteServico, string $tipoRegistro, string $quantidadeRegistrosLote, string $totalParcelasEnviadas, string $totalValoresParcelas): array
{
    $trlLote = [
        'Código bancário' => $banco,
        'Lote de serviço' => $loteServico,
        'Tipo de registro' => $tipoRegistro,
        'Quantidade de registros de lote' => $quantidadeRegistrosLote,
        'Total de parcelas enviadas' => $totalParcelasEnviadas,
        'Total dos valores das parcelas' => $totalValoresParcelas,
    ];

    return $trlLote;
}

function registroDetalhe(
        string $banco, string $loteServico, string $tipoRegistro, string $numeroSequencialRegistro, string $codigoSegmento, string $tipoMovimento, string $nomeMutuario, string $codigoUnidade,
        string $cpfMutuario, string $idMutuario, string $tipoOperacaoCredito, string $dataVencimentoParcela, string $quantidadeParcelasContrato, string $dataInicioContrato, string $dataFimContrato, string $valorTotalLiberado,
        string $valorTotalOperacao, string $valorParcela, string $idContrato, string $agenciaMantenedoraConta, string $numeroContaCorrente, string $digitoVerificadorConta
    ): array
{
    $registroDetalhe = [
        'Código bancário' => $banco,
        'Lote de serviço' => $loteServico,
        'Tipo de registro' => $tipoRegistro,
        'Num. sequencial do registro' => $numeroSequencialRegistro,
        'Cód. De segmento' => $codigoSegmento,
        'Tipo de movimento' => $tipoMovimento,
        'Nome do mutuário' => $nomeMutuario,
        'Cód. de unidade' => $codigoUnidade,
        'CPF do mutuário' => $cpfMutuario,
        'ID do mutuário' => $idMutuario,
        'Tipo de operação de crédito' => $tipoOperacaoCredito,
        'Data vencimento da parcela' => $dataVencimentoParcela,
        'Qtd. Parcelas do contrato' => $quantidadeParcelasContrato,
        'Data início do contrato' => $dataInicioContrato,
        'Data fim do contrato' => $dataFimContrato,
        'Valor total liberado' => $valorTotalLiberado,
        'Valor total operação' => $valorTotalOperacao,
        'Valor da parcela' => $valorParcela,
        'ID do contrato' => $idContrato,
        'Agencia mantenedora da conta' => $agenciaMantenedoraConta,
        'Num. da conta corrente' => $numeroContaCorrente,
        'Digito verificador da conta' => $digitoVerificadorConta,
    ];

    return $registroDetalhe;
}
