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
 * Strings for component 'coursecertificate', language 'pt', version '4.4'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = 'De momento, esta atividade está oculta. Ao torná-la visível, os alunos que cumpram as restrições de acesso receberão automaticamente uma cópia do certificado em PDF.';
$string['archivecertificates'] = 'Arquivar certificados emitidos';
$string['archivecertificates_help'] = 'Os certificados arquivados ainda podem ser verificados e continuam a ser mostrados na página de perfil do utilizador. No entanto, quando um certificado de disciplina existente é arquivado, um utilizador pode receber o certificado assim que cumprir as restrições de acesso à atividade.';
$string['automaticsend_helptitle'] = 'Ajuda com o envio automático';
$string['automaticsenddisabled'] = 'O envio automático do certificado está desativado.';
$string['automaticsenddisabled_help'] = 'Se esta opção estiver desativada, os alunos têm de clicar no atalho da atividade mostrado na página da disciplina para receber o certificado, assim que cumprirem as restrições de acesso desta atividade.<br/><br/>
Ao ativá-la, os alunos receberão automaticamente uma cópia em PDF do certificado assim que cumprirem as restrições de acesso à atividade. Tenha em atenção que todos os alunos que já cumprem as restrições de acesso desta atividade receberão o certificado quando esta opção for ativada.';
$string['automaticsenddisabledalert'] = 'Os alunos que cumprem as restrições de acesso desta atividade receberão o seu certificado assim que a acederem.';
$string['automaticsendenabled'] = 'O envio automático deste certificado está ativado.';
$string['automaticsendenabled_help'] = 'Se esta opção estiver ativada, os alunos receberão automaticamente uma cópia em PDF do certificado assim que cumprirem as restrições de acesso à atividade.<br/><br/>
Ao desativá-la, os alunos têm de clicar no atalho da atividade mostrado na página da disciplina para receber o certificado, desde que cumpram as restrições de acesso desta atividade.';
$string['certificateissues'] = 'Emissão de certificado';
$string['certificatesarchived'] = 'Certificados arquivados';
$string['certifiedusers'] = 'Utilizadores certificados';
$string['chooseatemplate'] = 'Escolha um modelo...';
$string['code'] = 'Código';
$string['coursecertificate:addinstance'] = 'Adicione uma nova atividade de Certificado de disciplina';
$string['coursecertificate:receive'] = 'Receber certificados emitidos';
$string['coursecertificate:view'] = 'Ver o certificado de disciplina';
$string['coursecertificate:viewreport'] = 'Ver o relatório da emissão de certificados';
$string['coursecompletiondate'] = 'Data de conclusão';
$string['courseinternalid'] = 'ID interno da disciplina usado nos URL';
$string['courseurl'] = 'URL da disciplina';
$string['disableautomaticsend'] = 'Os alunos deixaram de receber automaticamente uma cópia em PDF do certificado assim que cumprirem as restrições de acesso desta atividade. Em vez disso, têm de clicar no atalho da atividade mostrado na página da disciplina para receber o certificado, desde que cumpram as restrições de acesso desta atividade.';
$string['enableautomaticsendpopup'] = 'Os alunos receberão automaticamente uma cópia em PDF do certificado assim que cumprirem as restrições de acesso desta atividade. <br/><br/>
Os alunos que já cumprem essas restrições de acesso, mas ainda não acederam a esta atividade, também receberão imediatamente a sua cópia.<br/><br/>
Os alunos que já acederam a esta atividade não receberão novamente o certificado.';
$string['expirydate'] = 'Data de validade';
$string['filterswarning'] = 'Os filtros definidos no contexto da atividade são usados apenas para o título e a descrição da atividade.';
$string['filterswarninglist'] = 'Apenas o(s) filtro(s) "{$a->list}" será(ão) usado(s) ao gerar os ficheiros PDF do certificado e apenas se estiverem ativados ao nível da <a href="{$a->link}">disciplina</a> .';
$string['filterswarningnone'] = 'Nenhum filtro será usado ao gerar ficheiros PDF de certificado.';
$string['issueddate'] = 'Data de emissão';
$string['managetemplates'] = 'Gerir modelos de certificado';
$string['modulename'] = 'Certificado de disciplina';
$string['modulename_help'] = 'O módulo Certificado da disciplina oferece uma oportunidade para os alunos comemorarem as suas conquistas com a obtenção de certificados.<br/><br/>Permite que escolha entre diferentes modelos de certificado que exibirão automaticamente os dados do utilizador, tais como: nome completo, disciplina, etc.<br/><br/>Os utilizadores poderão descarregar uma cópia do certificado em PDF acedendo a esta atividade e também existem opções para enviar uma cópia em PDF automaticamente por e-mail.<br/><br/>Se o modelo usado nesta atividade contiver um código QR, os utilizados poderão ler o código para validar os seus certificados.';
$string['modulename_link'] = 'mod/coursecertificate/view';
$string['modulenameplural'] = 'Certificados de disciplina';
$string['notemplateselected'] = 'O modelo selecionado não foi encontrado. Por favor, selecione outro nas configurações da atividade.';
$string['notemplateselecteduser'] = 'O certificado não está disponível. Por favor, contacte o administrador da disciplina.';
$string['notemplateswarning'] = 'Não existem modelos disponíveis. Por favor, contacte o administrador do site.';
$string['notemplateswarningwithlink'] = 'Não existem modelos disponíveis. Por favor, aceda à <a href="{$a}">página de gestão de modelos de certificados</a> e crie um novo.';
$string['nouserscertified'] = 'Não há utilizadores certificados.';
$string['open'] = 'Abrir';
$string['page-mod-coursecertificate-x'] = 'Qualquer página do módulo de certificado de disciplina';
$string['pluginadministration'] = 'Administração do certificado de disciplina';
$string['pluginname'] = 'Certificado de disciplina';
$string['previewcoursefullname'] = 'Nome completo da disciplina';
$string['previewcourseshortname'] = 'Nome curto da disciplina';
$string['privacy:metadata'] = 'A atividade Certificado de disciplina não armazena quaisquer dados pessoais.';
$string['revoke'] = 'Revogar';
$string['revokeissue'] = 'Tem a certeza de que pretende revogar a emissão do certificado deste utilizador?';
$string['selectdate'] = 'Selecione a data';
$string['selecttemplatewarning'] = 'Assim que esta atividade emitir pelo menos um certificado, este campo ficará bloqueado e deixará de ser possível editar.';
$string['status'] = 'Estado';
$string['taskissuecertificates'] = 'Emitir certificados de disciplina';
$string['template'] = 'Modelo';
