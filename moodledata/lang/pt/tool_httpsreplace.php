<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_httpsreplace', language 'pt', version '4.4'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Concluída';
$string['count'] = 'Número de itens de conteúdo incorporados';
$string['disclaimer'] = 'Compreendo os riscos desta operação';
$string['doclink'] = 'Ferramenta de conversão HTTPS';
$string['doit'] = 'Proceder à conversão';
$string['domain'] = 'Domínio problemático';
$string['domainexplain'] = 'Quando um site é alterado de HTTP para HTTPS, todos os conteúdos HTTP incorporados deixarão de funcionar. Esta ferramenta permite que converta automaticamente o conteúdo HTTP para o HTTPS.

Antes de realizar a conversão, o conteúdo será digitalizado para encontrar qualquer URL que possa não funcionar após a conversão. Pode querer verificar se há HTTPS disponível ou encontrar recursos alternativos.';
$string['domainexplainhelp'] = 'Estes domínios foram encontrados no conteúdo do site, mas parecem não suportar o conteúdo HTTPS. Depois de mudar para o HTTPS, o conteúdo incluído nestes sites não será mostrado no Moodle para utilizadores com navegadores modernos seguros. É possível que estes sites estejam temporariamente ou permanentemente indisponíveis e não funcionem com nenhuma das configurações de segurança. Prossiga apenas após rever estes resultados e determinar se  é ou não essencial este conteúdo hospedado externamente. Nota: Este conteúdo não funcionará depois de mudar para HTTPS de qualquer maneira.';
$string['httpwarning'] = 'Esta instância ainda está em execução em HTTP. Ainda pode executar esta ferramenta e o conteúdo externo será alterado para HTTPS, mas o conteúdo interno permanecerá em HTTP. É necessário executar este script novamente depois de mudar para HTTPS para converter o conteúdo interno.';
$string['notimplemented'] = 'Lamentamos, mas esta função não está implementada no driver da sua bases de dados.';
$string['oktoprocede'] = 'A verificação não encontrou problemas com o conteúdo. Pode atualizar qualquer conteúdo HTTP para usar o HTTPS.';
$string['pageheader'] = 'Atualizar URLs de conteúdo hospedados externamente para HTTPS';
$string['pluginname'] = 'Ferramenta de conversão HTTPS';
$string['privacy:metadata'] = 'O módulo Ferramenta de conversão HTTPS não armazena dados pessoais.';
$string['replacing'] = 'A substituir o conteúdo HTTP por HTTPS...';
$string['searching'] = 'A procurar {$a}';
$string['takeabackupwarning'] = 'Aviso: depois de executar esta ferramenta, as alterações não podem ser revertidas. Recomenda-se que faça uma cópia de segurança do site antes de prosseguir, pois existe um pequeno risco de substituição de conteúdo incorreto.';
$string['toolintro'] = 'Se planear converter o seu site para HTTPS, pode usar a <a href="{$a}">Ferramenta de conversão HTTPS</a> para converter o conteúdo incorporado em HTTPS.';
