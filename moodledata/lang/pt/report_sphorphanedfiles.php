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
 * Strings for component 'report_sphorphanedfiles', language 'pt', version '4.4'.
 *
 * @package     report_sphorphanedfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessruleviolationmessage'] = 'O relatório não está ativado ou não tem permissão';
$string['confighandleractivitiescore'] = 'Nem todas as <b>atividades base do Moodle</b> suportam a descrição. Esta lista separada por vírgulas de atividades base do Moodle será verificada quanto a ficheiros órfãos na descrição. Novas atividades base do Moodle devem ser adicionadas a esta lista se suportarem a descrição.';
$string['confighandleractivitiesplugin'] = 'Nem todas as <b>atividades adicionais</b> suportam a descrição. Esta lista separada por vírgulas de atividades adicionais será verificada quanto a ficheiros órfãos na descrição. Novas atividades adicionais devem ser adicionadas a esta lista se suportarem a descrição.';
$string['confighandlermaterialscore'] = 'Nem todos os <b>recursos base do Moodle</b> suportam a descrição. Esta lista separada por vírgulas de recursos adicionais será verificada quanto a ficheiros órfãos na descrição. Novos recursos base do Moodle devem ser adicionados a esta lista se suportarem a descrição.';
$string['confighandlermaterialsplugin'] = 'Nem todos os <b>recursos adicionais</b> suportam a descrição. Esta lista separada por vírgulas de recursos adicionais será verificada quanto a ficheiros órfãos na descrição. Novos recursos adicionais devem ser adicionados a esta lista se suportarem a descrição.';
$string['configisactive'] = 'Se ativar esta opção, o relatório pode ser iniciado na navegação da disciplina.';
$string['configisactiveforadmin'] = 'Se ativar esta opção, um administrador pode iniciar o relatório na navegação da disciplina, independentemente do estado estar ativo para utilizadores normais.';
$string['deleteMessage'] = 'Ficheiros órfão apagados com sucesso';
$string['description'] = 'Se um professor adicionar um ficheiro ao editor e apagar o ficheiro, o ficheiro continuará armazenado em plano de fundo deste contexto (por exemplo, Separador). O professor pode apagar o ficheiro com a caixa de diálogo "Gerir ficheiros" no editor, mas não é muito confortável.
Este relatório ajuda a mostrar ficheiros órfãos que podem não estar a ser usados em descrições de atividades ou recursos e ajuda a apagá-los.';
$string['handleractivitiescore'] = 'Verificar estas atividades base do Moodle para ficheiros órfãos na descrição';
$string['handleractivitiesplugin'] = 'Verificar estas atividades adicionais do Moodle para ficheiros órfãos na descrição';
$string['handlermaterialscore'] = 'Verificar estes recursos base do Moodle para ficheiros órfãos na descrição';
$string['handlermaterialsplugin'] = 'Verificar estes recursos adicionais do Moodle para ficheiros órfãos na descrição';
$string['header.code'] = 'Código fonte';
$string['header.content'] = 'Conteúdo';
$string['header.filename'] = 'Ficheiro';
$string['header.modName'] = 'Módulo';
$string['header.moduleContent'] = 'Descrição, ...';
$string['header.tool'] = 'apagar sem pedir!';
$string['invalidcourseidmessage'] = 'courseid inválido';
$string['isactive'] = 'Ativar o relatório';
$string['isactiveforadmin'] = 'Ativar relatório para administrador do site';
$string['isallowedtodeleteallfiles'] = 'O utilizador tem permissão para apagar todos os ficheiros desta disciplina.';
$string['isgridlayoutfilehint'] = 'Este ficheiro talvez tenha sido usado pelo módulo gridlayout, mas parece não estar em uso.';
$string['pluginname'] = 'Relatório de ficheiros órfãos';
$string['sphorphanedfiles:delete'] = 'Permissão para adicionar um ícone a cada ficheiro órfão para poder apagar.';
$string['sphorphanedfiles:view'] = 'Permissão de visualizar este relatório.';
