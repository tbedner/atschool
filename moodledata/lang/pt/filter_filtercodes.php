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
 * Strings for component 'filter_filtercodes', language 'pt', version '4.4'.
 *
 * @package     filter_filtercodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['brief'] = 'Resumido';
$string['categorycardshowpic'] = 'Mostrar fundo';
$string['categorycardshowpic_desc'] = 'Se ativar esta opção, será exibida uma cor/padrão de fundo para a tag {categorycards} semelhante às imagens da disciplina quando for especificada qualquer imagem.';
$string['chartprogressbarlabel'] = '{$a->label}: {$a->value}';
$string['contentmissing'] = '<h1>Conteúdo em falta.</h1><p>Por favor, notifique o webmaster.</p>';
$string['coursecardsbyenrol'] = 'Máximo de cartões';
$string['coursecardsbyenrol_desc'] = 'Número máximo de cartões de disciplinas a serem exibidos para a tag {coursecardsbyenrol}. Defina como zero para ilimitado (não recomendado).';
$string['coursecardsformat'] = 'Estrutura dos cartões da disciplina';
$string['coursecardsformat_desc'] = 'Mostrar qualquer {coursecards}, {coursecardsbyenrol} e {mycoursescards}:<br>
<ul>
<li><strong>Vertical</strong>: Imagem da disciplina acima do nome.</li>
<li><strong>Horizontal</strong>: Imagem da disciplina à esquerda do nome, categoria e resumo; ou</li>
<li><strong>Lista</strong> em tabela: Nome da disciplina, categoria e resumo.</li>
</ul>';
$string['coursecontactlinktype'] = 'Tipo de hiperligação de contacto';
$string['coursecontactlinktype_desc'] = 'Escolha o tipo de hiperligação para a hiperligação de contactos nas tags {coursecontacts}.';
$string['coursecontactshowdesc'] = 'Mostrar a descrição do perfil do contacto';
$string['coursecontactshowdesc_desc'] = 'Se ativar esta opção, será mostrada a descrição do perfil do contacto nas tags {coursecontacts}.';
$string['coursecontactshowpic'] = 'Mostrar imagem do contacto';
$string['coursecontactshowpic_desc'] = 'Se ativar esta opção, será mostrada a foto do perfil do contacto nas tags {coursecontacts}.';
$string['disabled_customnav_description'] = '<strong>Nota sobre o suporte ao menu personalizado</strong> - Para ativar o suporte ao Filtro Códigos no menu personalizado do seu site Moodle, pode ser necessário personalizar o seu tema ou núcleo do Moodle. <a href="https://github.com/michael-milette/moodle-filter_filtercodes#can-i-use-filtercodes-in-moodles-custom-menus">Informações sobre como adicionar suporte ao Filtro Códigos em menus personalizados</a>.';
$string['enable_scrape'] = 'Suporte à tag Scrape';
$string['enable_scrape_description'] = 'Ativar o suporte à tag Scrape (obter conteúdo de URL)';
$string['enable_sesskey'] = 'Suporte à tag \'sesskey\'';
$string['enable_sesskey_description'] = 'Se ativar esta opção, a tag \'sesskey\' estará ativa globalmente. Esta funcionalidade está desativada em fóruns mesmo quando ativada globalmente.';
$string['escapebraces'] = 'Ignorar tags';
$string['escapebraces_desc'] = 'Se ativar esta opção, será possível exibir as tags do Filtro Códigos sem que elas sejam interpretadas pelo filtro, se as escrever entre [parênteses retos]. Pode ser muito útil ao criar a documentação do Filtro Códigos para os professores e criadores de disciplinas no seu site Moodle.<br><br>Exemplo: [{fullname}] não mostrará o nome completo do utilizador, mas exibirá a tag {fullname} sem os parênteses.';
$string['filtername'] = 'Filtro Códigos';
$string['formcheckin'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf check-in">
    <fieldset>
        <input type="hidden" id="subject" name="subject" value="Presente!">
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
  {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Estou aqui!">
    </div>
</form>';
$string['formcontactus'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Nome <strong class="required">(required)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mínimo 3 letras/espaços." required="required" {readonly} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">E-mail <strong class="required">(required)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60"
                    required="required" {readonly} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Assunto <strong class="required">(required)</strong></label>
            <input id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Mínimo 5 caracteres." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Mensagem <strong class="required">(required)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <div class="form-group">
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Enviar">
    </div>
</form>';
$string['formcourserequest'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf new-course-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Nome <strong class="required">(required)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mínimo 3 letras/espaços." required="required" {readonly} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">E-mail <strong class="required">(required)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly} value="{email}">
        </div>
        <div class="form-group">
            <label for="new_course_name" id="new_course_namelabel" class="d-block">Nome proposto para a nova disciplina <strong class="required">(required)</strong></label>
            <input id="new_course_name" name="new_course_name" type="text" size="57" maxlength="80" minlength="5"
                    title="Mínimo 5 caracteres." required="required">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Descrição da disciplina <strong class="required">(required)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
{recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Enviar solicitação para esta disciplina">
    </div>
</form>';
$string['formquickquestion'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
<fieldset>
    <div class="form-group">
        <label for="subject" id="subjectlabel" class="d-block">Assunto <strong class="required">(required)</strong></label>
        <input class="block" id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                title="Mínimo 5 caracteres." required="required">
    </div>
    <div class="form-group">
        <label for="message" id="messagelabel" class="d-block">Mensagem <strong class="required">(required)</strong></label>
        <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                title="Mínimo 5 caracteres." required="required"></textarea>
    </div>
    <input type="hidden" id="sesskey" name="sesskey" value="">
    <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
 {recaptcha}
</fieldset>
<div>
    <input type="submit" name="submit" id="submit" value="Enviar">
</div>
</form>';
$string['formsupport'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf support-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Nome <strong class="required">(required)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Mínimo 3 letras/espaços." required="required" {readonly} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">E-mail <strong class="required">(required)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Assunto <strong class="required">(required)</strong></label>
            <select id="subject" name="subject" required="required">
                <option label="Escolha o assunto"></option>
                <option>Não consigo alterar a minha senha</option>
                <option>Não consigo autenticar-me</option>
                <option value="Sugestão">Tenho uma sugestão</option>
                <option value="Mensagem de erro">Apareceu uma mensagem de erro</option>
                <option value="Erro do sistema">Funcionamento anormal</option>
                <option value="Disciplina">Dificuldades para aceder a uma disciplina ou a algum conteúdo da disciplina</option>
                <option value="Outro motivo">Outro (especifique)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="specific_subject" id="specifylabel" class="d-block">Assunto específico ou o nome da disciplina&nbsp;<strong class="required">(required)</strong></label>
            <input type="text" id="specific_subject" name="specific_subject" size="57" maxlength="80" required="required">
        </div>
        <div class="form-group">
            <label for="url" id="urllabel" class="d-block">Especifique o endereço URL</label>
            <input type="url" id="url" name="url" size="57" maxlength="80" value="{referer}">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Descrição e detalhes passo a passo sobre como reproduzir o problema&nbsp;<strong class="required">(required)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Mínimo 5 caracteres." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
 {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Enviar pedido de ajuda">
    </div>
</form>';
$string['globaltagcontentdesc'] = 'Este é o conteúdo que a sua tag global substituirá. Exemplo: se a sua tag se chamar "{global_address}", essa tag será substituída pelo conteúdo inserido neste campo.';
$string['globaltagcontenttitle'] = 'Conteúdo';
$string['globaltagcount'] = 'Número de tags globais';
$string['globaltagcountdesc'] = 'Selecione o número de tags que pretende definir. Para um ótimo desempenho, selecione apenas o número necessário.';
$string['globaltagheadingdesc'] = 'Defina as suas próprias tags globais, às vezes também chamadas de blocos globais.';
$string['globaltagheadingtitle'] = 'Tags personalizadas globais';
$string['globaltagnamedesc'] = 'Isto fará parte do nome da sua tag, com o prefixo "global_". Exemplo: Se inserir "address" aqui, a sua tag será chamada {global_address} ". Tem de ser uma sequência única de apenas letras. Espaços, números e caracteres especiais não são permitidos.';
$string['globaltagnametitle'] = 'Tag: global_';
$string['hidecompletedcourses'] = 'Ocultar disciplinas concluídas';
$string['hidecompletedcourses_desc'] = 'Se ativar esta opção, será possível filtrar as disciplinas concluídas nas listas de tags do {mycoursesmenu}.';
$string['ifprofilefiedonlyvisible'] = '{ifprofile_field_} apenas visível';
$string['ifprofilefiedonlyvisible_desc'] = 'Se ativar esta opção, a tag {ifprofile_field_...} apenas poderá aceder aos campos de perfil visíveis. Os campos ocultos comportar-se-ão como se estivessem vazios. Se desativada, esta tag será capaz de verificar os campos ocultos do utilizador.';
$string['moremenu'] = 'Mais';
$string['narrowpage'] = 'Página estreita';
$string['narrowpage_desc'] = 'Se ativar esta opção, será otimizada a exibição das informações se o Moodle estiver a usar um tema com largura de página limitada (por exemplo: Boost no Moodle 4.0+).';
$string['nocompletedcourses'] = 'Nenhuma das disciplinas em que está inscrito foi marcada como concluída.';
$string['notavailable'] = 'Indisponível';
$string['pagebuilder'] = 'Criador de páginas';
$string['pagebuilderlink'] = 'https://www.layoutit.com/build';
$string['photoeditor'] = 'Editor de fotos';
$string['photoeditorlink'] = 'https://pixlr.com/editor/';
$string['pluginname'] = 'Filtro Códigos';
$string['privacy:metadata'] = 'O módulo Filtro Códigos não armazena quaisquer dados pessoais dos utilizadores.';
$string['screenrec'] = 'Gravador de ecrã';
$string['screenreclink'] = 'https://screenapp.io/#/recording';
$string['showhiddenprofilefields'] = 'Mostrar campos de perfil ocultos';
$string['showhiddenprofilefields_desc'] = 'Se ativar esta opção, a tag {profile_field_...} processará todos os campos do perfil, incluindo aqueles ocultos para o utilizador.';
$string['sizeb'] = 'B';
$string['sizeeb'] = 'EB';
$string['sizegb'] = 'GB';
$string['sizekb'] = 'KB';
$string['sizemb'] = 'MB';
$string['sizetb'] = 'TB';
$string['sizeyb'] = 'YB';
$string['sizezb'] = 'ZB';
$string['teamcardsformat'] = 'Formato dos cartões de equipa';
$string['teamcardsformat_desc'] = 'Escolha como os membros da equipa aparecerão na tag {teamcards}.<br>
<ul>
<li><strong>Nenhum</strong>: Exibe apenas a imagem e o nome como um cartão sem a descrição do utilizador.</li>
<li><strong>Ícone</strong>: Igual a nenhum, exceto que a descrição do utilizador aparece num balão pop-up de informações.</li>
<li><strong>Resumido</strong>: Igual a nenhum, mas exibe a descrição abaixo da imagem e do nome do utilizador.</li>
<li><strong>Detalhado</strong>: Formato de lista. Recomendado se os membros da sua equipa têm grandes descrições de utilizador.</li>
</ul>';
$string['teamcardslinktype'] = 'Tipo de hiperligação de equipa';
$string['teamcardslinktype_desc'] = 'Escolha o tipo de hiperligação para a hiperligação do membro da equipa na tag {teamcards}. Nota: A foto será automaticamente vinculada ao perfil quando o utilizador estiver autenticado, independentemente da escolha aqui.';
$string['unenrolme'] = 'Cancelar a minha inscrição nesta disciplina';
$string['verbose'] = 'Detalhado';
$string['wishlist'] = 'Favoritos';
$string['wishlist_add'] = 'Adicionar esta disciplina à lista';
$string['wishlist_nocourses'] = 'Nenhuma disciplina na lista';
$string['wishlist_remove'] = 'Remover esta disciplina da lista';
