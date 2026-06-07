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
 * Strings for component 'local_lessonexport', language 'pt', version '4.4'.
 *
 * @package     local_lessonexport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotatepermission'] = 'anotar-formulários';
$string['annotatepermission_desc'] = 'Anotar/comentar documentos';
$string['assemblepermission'] = 'montar';
$string['assemblepermission_desc'] = 'Agrupar/montar o documento';
$string['copypermission'] = 'copiar';
$string['copypermission_desc'] = 'Copiar conteúdo do documento';
$string['covercolour'] = 'Cor do banner da capa';
$string['covercolour_desc'] = 'A cor do banner na capa que contém o título da lição.';
$string['created'] = 'Criado em {$a}';
$string['customfont'] = 'Tipo de letra predefinido';
$string['customfont_desc'] = 'Tipo de letra predefinido para usar no PDF impresso. As opções incluem: times (Times-Roman), timesb (Times-Bold), timesi (Times-Italic), timesbi (Times-BoldItalic), helvetica (Helvetica), helveticab (Helvetica-Bold), helveticai, helveticabi, courier (Courier), courierb (Courier-Bold), courieri (Courier-Oblique), courierbi (Courier-BoldOblique), symbol (Symbol), zapfdingbats (ZapfDingbats)';
$string['essay'] = 'Desenvolvimento';
$string['exportpdf'] = 'Exportar como PDF';
$string['exportstrict'] = 'Exportação rigorosa';
$string['exportstrict_desc'] = 'Se os documentos devem, ou não, emitir exceções ou suprimi-las se ocorrerem erros.';
$string['extractpermission'] = 'extrair';
$string['extractpermission_desc'] = 'Extrair páginas do documento';
$string['failedinsertimage'] = 'Erro ao inserir a imagem: {$a}';
$string['filename'] = 'Exportar {$a->lessonname} {$a->timestamp}';
$string['fonts'] = 'tipos de letra';
$string['fontspage'] = 'Tipos de letra PDF';
$string['formfillpermission'] = 'preencher-formulários';
$string['formfillpermission_desc'] = 'Preencher formulários do documento';
$string['highdefpermission'] = 'imprimir-alta-resolução';
$string['highdefpermission_desc'] = 'Imprimir documento em alta resolução';
$string['landscape'] = 'Horizontal';
$string['landscape_desc'] = 'Horizontal (paisagem)';
$string['language'] = 'Idioma';
$string['language_desc'] = 'Se o seu idioma permitir determinadas regras (texto RTL, caracteres especiais), selecione o seu idioma aqui.';
$string['lessonexport:exportpdf'] = 'Exportar lição em PDF';
$string['lessonexportfailed'] = 'Erro ao exportar a lição \'{$a}\'';
$string['lessonexportfailed_body'] = 'A lição \'{$a->name}\' foi atualizada mas a tentativa de exportar e enviar por e-mail falhou após {$a->exportattempts} tentativas. Se a lição for novamente atualizada, outras tentativas serão feitas para exportá-la. A lição pode ser encontrada em: {$a->url}.';
$string['lessonpage'] = 'Páginas da Lição';
$string['lessonupdated'] = 'A lição \'{$a}\' foi atualizada';
$string['lessonupdated_body'] = 'Atualizada a exportação anexada';
$string['matching'] = 'Correspondência';
$string['modified'] = 'Última modificação por {$a->modifiedby}, {$a->timemodified}';
$string['modifypermission'] = 'modificar';
$string['modifypermission_desc'] = 'Modificar o documento';
$string['multichoice'] = 'Escolha múltipla';
$string['numerical'] = 'Numérica';
$string['pdfcoverdownloaded'] = 'Informações da descarga na capa';
$string['pdfcoverdownloaded_desc'] = 'Mostrar, ou não, na capa, a data em que o documento foi descarregado.';
$string['pdfcoverupdated'] = 'Informações da atualização na capa';
$string['pdfcoverupdated_desc'] = 'Mostrar, ou não, na capa, a data em que o documento foi atualizado pela última vez.';
$string['pdfexcludepages'] = 'Tipos de página excluídos';
$string['pdfexcludepages_desc'] = 'Tipos de página a serem excluídos da exportação.';
$string['pdfexportanswers'] = 'Exportar as respostas das perguntas';
$string['pdfexportanswers_desc'] = 'Se deve ou não exportar as respostas das perguntas.';
$string['pdffooterbottomleft'] = 'Secção esquerda-inferior do rodapé';
$string['pdffooterbottomleft_desc'] = 'A secção esquerda-inferior do rodapé que pode ser preenchida com texto. Pode incluir tags HTML para formatação, hiperligações, etc.';
$string['pdffooterbottommiddle'] = 'Secção central-inferior do rodapé';
$string['pdffooterbottommiddle_desc'] = 'A secção central-inferior do rodapé que pode ser preenchida com texto. Pode incluir tags HTML para formatação, hiperligações, etc.';
$string['pdffooterbottomright'] = 'Secção direita-inferior do rodapé';
$string['pdffooterbottomright_desc'] = 'A secção direita-inferior do rodapé que pode ser preenchida com texto. Pode incluir tags HTML para formatação, hiperligações, etc.';
$string['pdffootertopleft'] = 'Secção esquerda-superior do rodapé';
$string['pdffootertopleft_desc'] = 'A secção esquerda-superior do rodapé que pode ser preenchida com texto. Pode incluir tags HTML para formatação, hiperligações, etc.';
$string['pdffootertopmiddle'] = 'Secção central-superior do rodapé';
$string['pdffootertopmiddle_desc'] = 'A secção central-superior do rodapé que pode ser preenchida com texto. Pode incluir tags HTML para formatação, hiperligações, etc.';
$string['pdffootertopright'] = 'Secção direita-superior do rodapé';
$string['pdffootertopright_desc'] = 'A secção direita-superior do rodapé que pode ser preenchida com texto. Pode incluir tags HTML para formatação, hiperligações, etc.';
$string['pdffrontcoverpagenumbers'] = 'Números de página na capa';
$string['pdffrontcoverpagenumbers_desc'] = 'Se os números de página devem, ou não, ser mostrados na capa do documento.';
$string['pdfownerpassword'] = 'Senha de proprietário dos PDF';
$string['pdfownerpassword_desc'] = 'Senha de proprietário para proteger os documentos PDF. Deixe em branco para nenhuma.';
$string['pdfpageorientation'] = 'Orientação da página';
$string['pdfpageorientation_desc'] = 'A orientação das páginas do documento (vertical ou horizontal).';
$string['pdfprotection'] = 'Permissões PDF';
$string['pdfprotection_desc'] = 'Permissões a aplicar sempre que gerar documentos PDF.';
$string['pdfuserpassword'] = 'Senha de utilizador dos PDF';
$string['pdfuserpassword_desc'] = 'Senha de utilizador para proteger os documentos PDF. Deixe em branco para nenhuma.';
$string['plugingroup'] = 'Exportar lição';
$string['pluginname'] = 'Exportar Lição em PDF';
$string['portrait'] = 'Vertical';
$string['portrait_desc'] = 'Retrato (vertical)';
$string['printed'] = 'Este documento foi descarregado {$a}';
$string['printpermission'] = 'imprimir';
$string['printpermission_desc'] = 'Imprimir documento';
$string['publishemail'] = 'E-mail do destinatário';
$string['publishemail_desc'] = 'Endereço de e-mail para onde serão enviados automaticamente os documentos PDF sempre que uma lição for alterada.';
$string['publishername'] = 'Desconhecido';
$string['righttoleft'] = 'Da direita para a esquerda';
$string['righttoleft_desc'] = 'Se pretende imprimir, ou não, o texto da direita para a esquerda.';
$string['shortanswer'] = 'Resposta curta';
$string['truefalse'] = 'Verdadeiro/Falso';
