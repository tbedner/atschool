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
 * Strings for component 'klassenbuch', language 'pt', version '4.4'.
 *
 * @package     klassenbuch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Adicionar novo capítulo';
$string['addnewfield'] = 'Adicionar novo campo';
$string['addsubscriber'] = 'Adicionar';
$string['allowchoice'] = 'Permitir que todos possam escolher';
$string['allowsallsubscribe'] = 'Todos podem subscrever este livro';
$string['attachment'] = 'Anexo(s)';
$string['attachments'] = 'Anexos';
$string['autosavedon'] = 'Guardado automaticamente às';
$string['autosaveseconds'] = 'Guardar automaticamente a cada (em segundos)';
$string['backtochapter'] = 'Voltar ao capítulo';
$string['bynameondate'] = 'por {$a->name} em {$a->date}';
$string['chapter'] = 'Capítulo';
$string['chapters'] = 'Capítulos';
$string['chapterscount'] = 'Capítulos';
$string['chaptertitle'] = 'Título do capítulo';
$string['collapsesubchapters'] = 'Contrair subcapítulos';
$string['confchapterdelete'] = 'Pretende realmente apagar este capítulo?';
$string['confchapterdeleteall'] = 'Pretende realmente apagar este capítulo e todos os seus sub-capítulos?';
$string['configreplytouser'] = 'Os e-mails de notificação vêm do utilizador que atualizou o livro e não do e-mail "Não responder"';
$string['content'] = 'Conteúdo';
$string['customfieldswarning'] = 'Atualmente não existem campos definidos para o módulo Livro Escolar - visite {$a->globalfieldslink} para configurá-los (também pode ser encontrado através da hiperligação {$a->settingslink}).';
$string['customtitles'] = 'Títulos personalizados';
$string['customtitles_help'] = 'Os títulos dos capítulos apenas são mostrados automaticamente na opção TOC.';
$string['disallowsubscribe'] = 'Não é permitido subscrever este livro';
$string['duplicatenewchaptererror'] = 'Novo capítulo já guardado - não é possível criar duplicado';
$string['editingchapter'] = 'A editar capítulo';
$string['editsubscribersoff'] = 'Parar a edição de subscrições';
$string['editsubscriberson'] = 'Editar subscrições';
$string['errorchapter'] = 'Erro ao ler o capítulo do livro.';
$string['eventchaptercreated'] = 'Capítulo criado';
$string['eventchapterdeleted'] = 'Capítulo apagado';
$string['eventchapterupdated'] = 'Capítulo atualizado';
$string['eventchapterviewed'] = 'Capítulo visualizado';
$string['eventsubscriptioncreated'] = 'Subscrição do livro criada';
$string['eventsubscriptiondeleted'] = 'Subscrição do livro apagada';
$string['everyonecannowchoose'] = 'Todos podem optar por subscrever este livro';
$string['everyoneisnowsubscribed'] = 'Todos estão subscritos a este livro.';
$string['everyoneissubscribed'] = 'Todos estão subscritos';
$string['existingsubscribers'] = 'Subscritores atuais';
$string['exportpdf'] = 'Exportar como PDF';
$string['faq'] = 'Perguntas Frequentes (FAQ)';
$string['faq_help'] = '*Porquê apenas dois níveis?*

Dois níveis são geralmente suficientes para todos os livros, três níveis levaria a documentos mal estruturados. O módulo Livro está indicado para criar  materiais de estudo com múltiplas páginas. Geralmente é melhor usar o formato PDF para documentos mais longos. A maneira mais fácil de criar PDFs é através de impressoras virtuais (ver
<a href="http://sector7g.wurzel6.de/pdfcreator/index_en.htm" target="_blank">PDFCreator</a>,
<a href="http://fineprint.com/products/pdffactory/index.html" target="_blank">PDFFactory</a>,
<a href="http://www.adobe.com/products/acrobatstd/main.html" target="_blank">Adobe Acrobat</a>,
etc.).

*Os alunos podem editar livros?*

Somente os professores podem criar e editar livros. Não há planos para implementar edição de livros para os alunos, mas alguém pode criar algo
semelhante para os alunos (Portfolio?). A principal razão é manter o módulo livro tão simples quanto possível.

*Como faço para pesquisar os livros?*

De momento, há apenas uma maneira, use a capacidade de pesquisa do navegador na página de impressão. A pesquisa global agora só é possível nos fóruns do Moodle.
Seria bom ter pesquisa global de todos os recursos, incluindo livros, algum voluntário?

*Os títulos não cabem numa linha.*

Ou reformula os títulos ou pede ao seu administrador do site para alterar a
largura do TOC. O valor  é definido globalmente para todos os livros na configuração do módulo Página.';
$string['fieldtitle'] = 'Título do campo';
$string['forcessubscribe'] = 'Este livro obriga todos a subscreverem.';
$string['forcesubscribe'] = 'Todos ficarão subscritos a este livro';
$string['globalfields'] = 'Campos globais';
$string['globalfieldspage'] = 'a página de campos globais';
$string['globalsettingspage'] = 'A página de configurações globais do Livro Escolar';
$string['hiddenbydefault'] = 'Oculto por predefinição';
$string['hiddentostudent'] = 'Oculto para os alunos';
$string['klassenbuch'] = 'livro escolar';
$string['klassenbuch:addinstance'] = 'Adicionar novo Livro Escolar';
$string['klassenbuch:edit'] = 'Editar capítulos do livro';
$string['klassenbuch:initialsubscriptions'] = 'Inicialmente subscrito ao livro';
$string['klassenbuch:managesubscriptions'] = 'Subscrever/Cancelar subscrição de outros utilizadores';
$string['klassenbuch:read'] = 'Ler livro';
$string['klassenbuch:viewhiddenchapters'] = 'Ver capítulos ocultos dos livros';
$string['klassenbuch:viewsubscribers'] = 'Ver os utilizadores subscritos';
$string['klassenbuchs'] = 'livro escolar';
$string['mailsent'] = 'O capítulo {$a->chapter} foi enviado a {$a->count} participante(s)';
$string['manageglobalfields'] = 'Gerir campos globais';
$string['missingfilemanagement'] = 'Caros utilizadores do módulo Livro, eu suponho que já tenha notado que não é possível apagar ou gerir ficheiros usados em capítulos dos livros. Por favor, vote em {$a} para obter esta correção, obrigado. Petr Škoda';
$string['modulename'] = 'Livro Escolar';
$string['modulename_help'] = 'Livro Escolar (Klassenbuch) é um material de estudo com múltiplas páginas.';
$string['modulenameplural'] = 'Livros Escolares';
$string['navexit'] = 'Sair do livro';
$string['navnext'] = 'Seguinte';
$string['navprev'] = 'Anterior';
$string['newfieldtitle'] = 'Novo título do campo';
$string['nosubscribers'] = 'Ninguém subscreveu este livro.';
$string['nownotsubscribed'] = '{$a->name} NÃO irá receber cópias deste livro \'{$a->book}\' por e-mail.';
$string['nowsubscribed'] = '{$a->name} irá receber cópias deste livro \'{$a->book}\' por e-mail.';
$string['numbering'] = 'Numeração dos capítulos';
$string['numbering0'] = 'Nenhum';
$string['numbering1'] = 'Números';
$string['numbering2'] = 'Marcadores';
$string['numbering3'] = 'Avançado';
$string['numbering_help'] = '* Nenhum - os títulos dos capítulos e sub-capítulos não são formatados, use se quiser definir estilos especiais de numeração. Por exemplo letras: no título do capítulo digite "A - Primeiro Capítulo", "A.1 - Um sub-capítulo", ...
* Números - capítulos e sub-capítulos são numerados (1, 1.1, 1.2, 2, ...)
* Marcadores - sub-capítulos estão adiantados e exibidos com marcadores
* Avançado - sub-capítulos estão adiantados';
$string['numberingoptions'] = 'Opções de numeração disponíveis';
$string['numberingoptions_help'] = 'Selecione as opções de numeração que devem estar disponíveis ao criar novos livros.';
$string['page-mod-klassenbuch-x'] = 'Qualquer página do módulo Livro Escolar';
$string['pluginadministration'] = 'Administração do Livro Escolar';
$string['pluginname'] = 'Livro Escolar';
$string['potentialsubscribers'] = 'Potenciais subscritores';
$string['removesubscriber'] = 'Remover';
$string['reply'] = 'Ler o livro todo';
$string['replytouser'] = 'E-mails do utilizador';
$string['send'] = 'Enviar';
$string['showall'] = 'Mostrar todos os utilizadores';
$string['showclassplan'] = 'Mostrar plano de aula no menu';
$string['showsubscribers'] = 'Mostrar subscritores';
$string['subchapter'] = 'Sub-capítulo';
$string['subscribe'] = 'Pretendo subscrever este livro';
$string['subscribers'] = 'Subscritores';
$string['subscribersto'] = 'Subscritores de \'{$a}\'';
$string['toc'] = 'Tabela de conteúdos';
$string['top'] = 'topo';
$string['unsubscribe'] = 'Pretendo cancelar a minha subscrição deste livro';
$string['viewclassplan'] = 'Visualizar o plano de aula';
$string['withselectedfields'] = 'Com os selecionados';
