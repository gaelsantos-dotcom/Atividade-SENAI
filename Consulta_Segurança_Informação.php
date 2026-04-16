<?php

while (true) {
    
    echo "\nSISTEMA DE CONSULTA  PSI \n";
    echo "1  Objetivos da PSI\n";
    echo "2  Escopo da Política\n";
    echo "3  Responsabilidades\n";
    echo "4  Boas Práticas de Segurança\n";
    echo "5  Consequências do Descumprimento\n";
    echo "6  Dicas Rápidas de Segurança\n";
    echo "0  Sair\n";

    $escolha = readline("Escolha uma opção: ");

    if ($escolha == 0) {
        echo "Encerrando sistema...\n";
        break;
    }

    switch ($escolha) {
        case 1:
            echo "\nOBJETIVOS DA PSI:\n";
            echo "Os principais objetivos de uma PSI incluem:";
            echo "PROTEGER OS ATIVOS DE INFORMAÇÃO: Proteger informações da empresa, Garantir a confidencialidade, integridade e disponibilidade da informação \n";
            echo " CONFORMIDADE LEGAL: Adequar a organização a leis vigentes, como a LGPD (Lei Geral de Proteção de Dados), e normas internacionais (como ISO/IEC 27001).\n";
            echo "MITIGAÇÃO DE RISCOS : Identificar ameaças, reduzir riscos de vazamentos e ataques cibernéticos\n";
            break;

        case 2:
            echo "\nESCOPO DA POLÍTICA:\n";
            echo "A PSI deve ter abrangência total na organização, aplicando-se a:";
            echo "COLABORADORES: Funcionários CLT, estagiários, terceirizados e prestadores de serviço.\n";
            echo "RECURSOS TECNOLÓGICOS: Sistemas, redes, computadores, e-mails, dispositivos móveis e infraestrutura de TI.\n";
            echo "AMBIENTES: Atividades executadas internamente ou remotamente (home office).\n";
            break;

        case 3:
            echo "\nRESPONSABILIDADES:\n";
            echo "A segurança da informação é uma responsabilidade compartilhada, mas hierarquizada: ";
            echo "ALTA ADMINISTRAÇÃO: Comprometimento em aprovar a política, fornecer recursos e apoiar as iniciativas de segurança.\n";
            echo "GESTÃO DE TI/SEGURANÇA: Responsável por implementar os controles, monitorar ameaças e manter os sistemas atualizados.\n";
            echo "Usuários: Responsáveis por cumprir as normas, utilizar os recursos de forma ética e segura, e relatar qualquer suspeita de incidente. \n";
            break;

        case 4:
            echo "\nBOAS PRÁTICAS:\n";
            echo "A PSI geralmente incorpora boas práticas baseadas na norma ISO/IEC 27002, tais como: ";
            echo "GESTÃO DE ACESSOS: Uso de senhas fortes, autenticação de dois fatores (2FA) e concessão de privilégios baseada na necessidade de saber (need-to-know).\n";
            echo "RPOTEÇÃO DE DADOS: Criptografia de dados sensíveis e realização periódica de backups\n";
            echo "SEGURANÇA FÍSICA:Controle de acesso a áreas restritas e bloqueio automático de estações de trabalho.\n";
            echo "CONSCIENTIZAÇÃO: Treinamentos periódicos para colaboradores sobre phishing e engenharia social. \n";
            break;

        case 5:

            echo "\nCONSEQUÊNCIAS DO DESCUMPRIMENTO:\n";
            echo "A inobservância das diretrizes da PSI gera violação das regras internas e sujeita o usuário a: ";
            echo "MEDIDAS ADMINISTRATIVAS: Advertências, suspensões ou desligamento por justa causa.\n";
            echo "MEDIDAS LEGAIS: Ações cíveis ou penais, dependendo da gravidade do dano (ex: vazamento de dados pessoais), tanto para a organização quanto para o colaborador..\n";
            echo "Demissão.\n";
            echo "RESCISÃO CONTRATUAL:Imediato desligamento de prestadores de serviço ou estagiários.\n";
            break;

        case 6:
            echo "\nDICAS RÁPIDAS:\n";
            echo "Use senhas fortes.\n";
            echo "Não use Wi-Fi público para dados sensíveis.\n";
            echo "Bloqueie seu computador ao sair.\n";
            break;

        default:
            echo "Opção inválida! Tente novamente.\n";
            break;
    }
}
?>