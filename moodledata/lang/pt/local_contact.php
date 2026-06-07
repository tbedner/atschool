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
 * Strings for component 'local_contact', language 'pt', version '4.4'.
 *
 * @package     local_contact
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attachment'] = 'Ativar anexos de ficheiro';
$string['attachment_description'] = 'Se ativar esta opção, o Formulário de contacto suportará um anexo. Consulte README.md para mais detalhes sobre como adicionar suporte para um anexo ao seu formulário.';
$string['configure'] = 'Configurações do módulo';
$string['confirmationemail'] = '<p>Olá [fromname],</p>
<p>Obrigado por nos contactar. Se necessário, entraremos em contacto consigo o mais brevemente possível.</p>
<p>Cumprimentos,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Obrigado por nos contactar. Se necessário, entraremos em contacto consigo o mais brevemente possível.';
$string['confirmationpage'] = 'Estado';
$string['confirmationsent'] = 'Um e-mail foi enviado para o seu endereço em {$a}.';
$string['defaultsubject'] = 'Nova mensagem';
$string['duplicateemailaddresses'] = 'Existem vários utilizadores com o mesmo endereço de e-mail.';
$string['errorsending'] = 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.';
$string['errorsendingtitle'] = 'Falha ao enviar e-mail';
$string['extrainfo'] = '<hr>
<p><strong>Informação Adicional do Utilizador</strong></p>
<ul>
<li><strong>Site:</strong> [userstatus]</li>
<li><strong>Idioma preferencial:</strong> [lang]</li>
<li><strong>Do endereço IP:</strong> [userip]</li>
<li><strong>Navegador web:</strong> [http_user_agent]</li>
<li><strong>Formulário web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'e-mail';
$string['field-message'] = 'mensagem';
$string['field-name'] = 'nome';
$string['field-subject'] = 'assunto';
$string['forbidden'] = 'Não permitido';
$string['globalhelp'] = 'Formulário de contacto é um módulo para o Moodle que permite ao seu site processar informações enviadas através de formulários HTML para o endereço de e-mail do suporte do site.';
$string['lockedout'] = 'BLOQUEADO';
$string['loginrequired'] = 'Autenticação obrigatória';
$string['loginrequired_description'] = 'Permitir que apenas os utilizadores autenticados enviem formulários de contacto. Os visitantes não são considerados como autenticados.';
$string['norecaptcha'] = 'Sem reCAPTCHA';
$string['norecaptcha_description'] = 'Não usar o ReCAPTCHA em formulários processados pelo Formulário de contacto.';
$string['noreplyto'] = 'Não responder';
$string['noreplyto_description'] = 'Alguns servidores SMTP rejeitam e-mails se os campos De e Não responder no cabeçalho forem diferentes. Ative esta opção para garantir que o campo Não responder corresponde ao endereço De, em vez do endereço de e-mail do remetente.';
$string['nosubjectsitename'] = 'Não incluir o nome do site no campo do assunto do e-mail';
$string['nosubjectsitename_description'] = 'Não incluir como prefixo o nome do site no campo do assunto do e-mail. Não afeta a configuração do <strong>Texto do prefixo do assunto do e-mail</strong> do próprio Moodle.';
$string['notconfirmed'] = 'NÃO CONFIRMADO';
$string['pluginname'] = 'Formulário de contacto';
$string['privacy:metadata'] = 'O módulo Formulário de Contacto não armazena quaisquer dados pessoais dos utilizadores.';
$string['recapchainfo'] = 'Usar ReCAPTCHA';
$string['recapchainfo_description'] = 'O ReCAPTCHA está atualmente ativado no Moodle. <strong>Tem de </strong>:<br>
<ul>
<li>Certificar-se de que a etiqueta {recaptcha} está incluída em todos os formulários processados pelo Formulário de contacto para o Moodle.</li>
<li>Certificar-se de que o módulo <a href="https://moodle.org/plugins/filter_filtercodes">Etiquetas de filtro</a> está instalado e ativado.</li>
</ul>';
$string['recipient_list'] = 'Lista dos destinatários disponíveis';
$string['recipient_list_description'] = 'Pode configurar uma lista de possíveis destinatários, qualquer um pode ser usado nos Formulário de contacto para especificar o destinatário usando um campo de texto oculto ou uma lista pendente para permitir que os utilizadores possam selecionar o destinatário sem divulgar o real endereço de e-mail do destinatário. Se a lista estiver vazia, os e-mails serão enviados para o endereço de e-mail do Moodle, seja para o endereço de e-mail de suporte seja para o administrador principal do Moodle.
Cada linha deve consistir num único alias/etiqueta, um único endereço de e-mail e um nome, cada um separado por uma barra vertical. Por exemplo:
<pre>
Suporte técnico|support@example.com|Joe Fixit
Webmaster|admin@example.com|Mr. Moodle
Eletricidade|nikola.tesla@example.com|Nikola
Direito|issac.newton@example.com|Isaac Newton
Matemática|galileo.galilei@example.com|Galileo
Inglês|mark.twain@example.com|Mark Twain
Física|albert.einstein@example.com|Albert
Ciências|thomas.edison@example.com|Mr. Edison
Filosofia |aristotle@example.com|Aristotle
</pre>';
$string['senderaddress'] = 'Remetente personalizado';
$string['senderaddress_description'] = 'Os e-mails serão entregues a partir deste endereço de email. Se este campo estiver em branco, os e-mails serão entregues do endereço de e-mail "Não responder".';
