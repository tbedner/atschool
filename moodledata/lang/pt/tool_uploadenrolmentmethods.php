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
 * Strings for component 'tool_uploadenrolmentmethods', language 'pt', version '4.4'.
 *
 * @package     tool_uploadenrolmentmethods
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnotfound'] = 'Grupo global não encontrado.';
$string['csvfile_help'] = 'O formato do ficheiro CSV deve ser o seguinte:

* Cada linha do ficheiro contém um registo.
* Cada registo é uma série de dados em qualquer ordem, separados por vírgulas ou outro delimitador padrão.
* Os campos são: operação, método de inscrição, nome curto da disciplina de destino, nome curto da disciplina ascendente ou ID do Grupo global, estado desativado[, group name, role].
* Todos os campos são obrigatórios, exceto o grupo e o papel.
* As operações são add, del(ete) e upd(ate) (adicionar, apagar, atualizar).
* Métodos de inscrição suportados: meta e Grupo global.
* Valores de estado: 1 (desativado) ou 0 (ativado).
* Alunos inscritos através do método serão colocados no grupo especificado no campo nome do grupo.
   O grupo será criado se ainda não existir.
* O campo de papel deve ser um nome válido de papel, como professor editor, aluno, etc.';
$string['heading'] = 'Carregar métodos de inscrição através de um ficheiro CSV';
$string['invalidmethod'] = 'Método inválido.';
$string['invalidop'] = 'Operação inválida.';
$string['method'] = 'Método';
$string['methoddisabledwarning'] = 'Método de inscrição "{$a}" destivado.';
$string['methodscreated'] = 'Criado: {$a}';
$string['methodsdeleted'] = 'Apagado: {$a}';
$string['methodserrors'] = 'Erros: {$a}';
$string['methodstotal'] = 'Total: {$a}';
$string['methodsupdated'] = 'Atualizado: {$a}';
$string['operation'] = 'Operação';
$string['parentnotfound'] = 'Meta disciplina não foi encontrada.';
$string['pluginname'] = 'Carregar métodos de inscrição';
$string['pluginname_help'] = 'Carregar métodos de inscrição através de um ficheiro CSV de modo a definir métodos de inscrição para várias disciplinas numa única operação.';
$string['privacy:metadata'] = 'A ferramenta de administração Carregar métodos de inscrição não armazena dados pessoais.';
$string['reladderror'] = 'Erro ao vincular o método à disciplina.';
$string['relalreadyexists'] = 'Método já vinculado à disciplina.';
$string['reldoesntexist'] = 'Método não existente.';
$string['result'] = 'Resultado';
$string['results'] = 'Resultados do carregamento dos métodos de inscrição';
$string['targetisparent'] = 'O método é ascendente da disciplina e por isso, não pode ser adicionada como destino.';
$string['targetnotfound'] = 'Disciplina não encontrada';
