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
 * Strings for component 'tool_courserating', language 'pt', version '4.4'.
 *
 * @package     tool_courserating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = 'Classificar';
$string['barwithrating'] = '{$a->rating} estrela(s) representa {$a->percent} da classificação';
$string['cannotrate'] = 'Não tem permissão para classificar esta disciplina';
$string['cannotview'] = 'Não tem permissão para ver as classificações desta disciplina';
$string['cfielddescription'] = 'Não edite. O conteúdo será preenchido automaticamente sempre que alguém classificar esta disciplina.';
$string['colorrating'] = 'Cor da classificação';
$string['colorratingconfig'] = 'Normalmente é um pouco mais escuro que a cor da estrela para um melhor efeito visual.';
$string['colorstar'] = 'Cor das estrelas';
$string['courserating:delete'] = 'Apagar classificações e opiniões, ver as classificações sinalizadas';
$string['courserating:rate'] = 'Classificar a disciplina';
$string['courserating:reports'] = 'Ver relatórios de classificação da discplina';
$string['coursereviews'] = 'Opiniões da disciplina';
$string['datasource_courseratings'] = 'Classificações da disciplina';
$string['deleterating'] = 'Apagar definitivamente';
$string['deletereason'] = 'Motivo para apagar';
$string['displayempty'] = 'Nenhuma classificação com estrelas a cinzento';
$string['displayemptyconfig'] = 'Nas disciplinas em que a classificação está ativada, mas ainda não existem classificações, mostrar estrelas a cinzento. Se não ativar esta opção, nessas disciplinas não será exibida a classificação.';
$string['editrating'] = 'Alterar a classificação';
$string['entity_rating'] = 'Classificação da disciplina por utilizador';
$string['entity_summary'] = 'Resumo da classificação da disciplina';
$string['event:flag_created'] = 'Sinalizada a classificação da disciplina';
$string['event:flag_deleted'] = 'Revogada a sinalização da classificação da disciplina';
$string['event:rating_created'] = 'Classificação da disciplina criada';
$string['event:rating_deleted'] = 'Classificação da disciplina apagada';
$string['event:rating_updated'] = 'Classificação da disciplina atualizada';
$string['flagrating'] = 'Sinalizar';
$string['parentcss'] = 'Seletor CSS para elemento ascendente';
$string['parentcssconfig'] = 'A classificação da disciplina será exibida na página da disciplina como o último descendente do elemento DOM que corresponde a este seletor. Pode ser necessário substituí-lo se o site usar um tema personalizado e se pretender especificar um ascendente personalizado. Se deixar em branco, será usado o valor predefinido. Para Moodle 4.0, a predefinição é "#page-header" e para o Moodle 3.11, a predefinição é "#page-header .card-body, #page-header #course-header, #page-header".';
$string['percourseoverride'] = 'Substituição na disciplina';
$string['percourseoverrideconfig'] = 'Se ativar esta opção, será criado um campo personalizado da disciplina que permitirá definir se uma disciplina pode, ou não, ser classificada. O valor da configuração "Momento da classificação das disciplinas" será utilizado como predefinido.';
$string['pluginname'] = 'Classificações da disciplina';
$string['privacy:metadata:tool_courserating:reason'] = 'Motivo';
$string['privacy:metadata:tool_courserating:reasoncode'] = 'Código do motivo';
$string['privacy:metadata:tool_courserating:timecreated'] = 'Data/hora de criação';
$string['privacy:metadata:tool_courserating:timemodified'] = 'Data/hora de modificação';
$string['privacy:metadata:tool_courserating_flag'] = 'Classificações sinalizadas';
$string['privacy:metadata:tool_courserating_flag:id'] = 'ID';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = 'ID da classificação';
$string['privacy:metadata:tool_courserating_flag:userid'] = 'ID do utilizador';
$string['privacy:metadata:tool_courserating_rating'] = 'Classificações da disciplina';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = 'ID da disciplina';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = 'Tem opinião';
$string['privacy:metadata:tool_courserating_rating:id'] = 'ID';
$string['privacy:metadata:tool_courserating_rating:rating'] = 'Classificação';
$string['privacy:metadata:tool_courserating_rating:review'] = 'Opinião';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = 'Data/hora de criação';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = 'Data/hora de modificação';
$string['privacy:metadata:tool_courserating_rating:userid'] = 'Utilizador';
$string['ratebyanybody'] = 'Os alunos podem classificar a disciplina a qualquer momento';
$string['ratebycompleted'] = 'Os alunos só podem classificar após concluirem a disciplina';
$string['ratebydefault'] = 'Valor predefinido: "{$a}"';
$string['ratebynoone'] = 'A classificação da disciplina está desativada';
$string['ratedcategory'] = 'Categorias de disciplinas onde são permitidas classificações';
$string['rating'] = 'Classificação';
$string['rating_actions'] = 'Ações';
$string['rating_hasreview'] = 'Tem opinião';
$string['rating_nofflags'] = 'Número de sinalizações';
$string['rating_rating'] = 'Classificação da disciplina';
$string['rating_review'] = 'Revisão';
$string['rating_timecreated'] = 'Data/hora de criação';
$string['rating_timemodified'] = 'Data/hora de modificação';
$string['ratingasstars'] = 'Classificação da disciplina com estrelas';
$string['ratingdeleted'] = 'Classificação apagada';
$string['ratinglabel'] = 'Classificação da disciplina';
$string['ratingmode'] = 'Momento da classificação das disciplinas';
$string['ratingmodeconfig'] = 'A permissão para avaliar disciplinas é sempre verificada.';
$string['reindextask'] = 'Reindexar as classificações da disciplina';
$string['review'] = 'Opinião (opcional)';
$string['revokeratingflag'] = 'Revogar';
$string['settingsdescription'] = 'Alterar algumas das configurações podem exigir a reindexação de todas as disciplinas e classificações das disciplinas. Ocorrerá automaticamente na próxima execução do cron.';
$string['showallratings'] = 'Mostrar tudo';
$string['showmorereviews'] = 'Mostrar mais';
$string['summary_avgrating'] = 'Classificação da disciplina';
$string['summary_cnt01'] = 'Rácio das classificações de 1 estrela';
$string['summary_cnt02'] = 'Rácio das classificações de 2 estrelas';
$string['summary_cnt03'] = 'Rácio das classificações de 3 estrelas';
$string['summary_cnt04'] = 'Rácio das classificações de 4 estrelas';
$string['summary_cnt05'] = 'Rácio das classificações de 5 estrelas';
$string['summary_cntall'] = 'Número de classificações';
$string['summary_cntreviews'] = 'Número de opiniões';
$string['summary_ratingmode'] = 'Modo de classificação da disciplina';
$string['summary_sumrating'] = 'Total de todas as classificações';
$string['usehtml'] = 'Usar editor \'Rich Text\'';
$string['usehtmlconfig'] = 'Permitir que os alunos usem o editor \'Rich Text\' para as opiniões, incluam hiperligações e anexem ficheiros.';
$string['usersflagged'] = '{$a} utilizadores sinalizaram esta classificação como inapropriada/ofensiva.';
$string['viewallreviews'] = 'Ver todas as opiniões';
$string['youflagged'] = 'Sinalizou esta classificação como inapropriada/ofensiva.';
