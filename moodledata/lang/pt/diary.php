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
 * Strings for component 'diary', language 'pt', version '4.4'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acesso negado';
$string['addtofeedback'] = 'Adicionar ao feedback';
$string['alias'] = 'Palavra-chave';
$string['aliases'] = 'Palavras-chave';
$string['aliases_help'] = 'Cada entrada do diário pode ter uma lista de palavras-chave associada (ou sinónimos).

Insira cada palavra-chave numa nova linha (não separadas por vírgulas).';
$string['alwaysopen'] = 'Sempre aberto';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativar esta opção, a descrição do diário acima só ficará visível para os alunos na data de "Abertura".';
$string['and'] = '&nbsp;e&nbsp;';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = 'Pode opcionalmente anexar um ou mais ficheiros a uma entrada do diário.';
$string['autorating'] = 'Avaliação automática';
$string['autorating_descr'] = 'Se ativar esta opção, a avaliação de uma entrada será inserida automaticamente com base nas outras configurações das contagens Mín./Máx.';
$string['autorating_help'] = 'Estas configurações juntamente com as contagens Mín/Máx definem os valores predefinidos para a avaliação automática em todos os novos diários.';
$string['autorating_title'] = 'Ativar avaliação automática';
$string['autoratingbelowmaxitemdetails'] = 'A avaliação automática requer {$a->one} ou mais {$a->two} com uma possível penalização de {$a->three}% para cada um em falta.<br>De momento, tem {$a->four}. Tem de ter {$a->five}. A possível penalização é de {$a->six} pontos.';
$string['autoratingitempenaltymath'] = 'A penalização da avaliação automática do item é (max({$a->one} - {$a->two}, 0)) * {$a->three} =  {$a->four}.<br>Nota: max evita números negativos causados por ter mais do que o necessário.';
$string['autoratingitempercentset'] = 'Percentagem por item de avaliação automática: {$a}%';
$string['autoratingovermaxitemdetails'] = 'O limite máximo da avaliação automática é de {$a->one} {$a->two} com uma possível penalização de {$a->three}% para cada um extra.<br>De momento, tem {$a->four}, que é {$a->five} a mais. A possível penalização é de {$a->six} pontos.';
$string['availabilityhdr'] = 'Disponibilidade';
$string['avgsylperword'] = 'Média de sílabas por palavra {$a}';
$string['avgwordlenchar'] = 'Tamanho médio das palavras {$a} caracteres';
$string['avgwordpara'] = 'Média de palavras por parágrafo {$a}';
$string['blankentry'] = 'Entrada em branco';
$string['calendarend'] = 'Fecha {$a}';
$string['calendarstart'] = 'Abre {$a}';
$string['cancel'] = 'Cancelar transferência';
$string['chars'] = 'Caracteres';
$string['charspersentence'] = 'Caracteres por frase';
$string['clearfeedback'] = 'Apagar feedback';
$string['commonerrorpercentset'] = 'Percentagem por erro comum {$a}%';
$string['commonerrors'] = 'Erros comuns';
$string['commonerrors_help'] = 'Os erros comuns são definidos no "Glossário de erros" associado a esta pergunta.';
$string['configdateformat'] = 'Define como as datas são mostradas nos relatórios dos diários. O valor predefinido, "M d, Y G: i" corresponde ao mês, dia, ano e formato de hora de 24 horas. Consulte "Date" no manual do PHP para mais exemplos e constantes de data predefinidas.';
$string['created'] = 'Criada há {$a->one} dias e {$a->two} horas atrás.';
$string['crontask'] = 'Processamento em segundo plano do módulo Diário+';
$string['csvexport'] = 'Exportar para .csv';
$string['currententry'] = 'Entradas atuais do diário';
$string['currpotrating'] = 'A sua potencial avaliação atual: {$a->one} pontos ou {$a->two}%.';
$string['dateformat'] = 'Formato de data predefinido';
$string['daysavailable'] = 'Dias disponíveis';
$string['daysavailable_help'] = 'Se estiver a usar o formato Semanal, pode definir quantos dias o diário está aberto para uso.';
$string['deadline'] = 'Dias aberto';
$string['details'] = 'Detalhes:';
$string['detectcommonerror'] = 'Detetados pelo menos {$a->one}, {$a->two}. São: {$a->three}
<br>Se permitido, deve corrigir e voltar a submeter.';
$string['diary:addentries'] = 'Adicionar entradas no diário';
$string['diary:addinstance'] = 'Adicionar instâncias de Diário+';
$string['diary:manageentries'] = 'Gerir entradas do diário';
$string['diary:rate'] = 'Avaliar entradas do diário';
$string['diaryclosetime'] = 'Fecho';
$string['diaryclosetime_help'] = 'Se ativar esta opção, pode definir uma data e hora para o diário ser fechado e deixar de estar aberto para uso.';
$string['diarydescription'] = 'Descrição do diário';
$string['diaryentrydate'] = 'Definir a data para esta entrada';
$string['diaryid'] = 'Transferir para o Diário+ com ID (diaryid)';
$string['diarymail'] = 'Olá {$a->user},<br />
{$a->teacher} publicou algum feedback na sua entrada no diário \'{$a->diary}\'.

Pode vê-lo anexado à sua entrada no diário:
{$a->url}';
$string['diarymailhtml'] = 'Olá {$a->user},<br />
{$a->teacher} publicou algum feedback na sua entrada no diário \'<i>{$a->diary}</i>\'.<br /><br />
Pode vê-lo anexado à sua <a href="{$a->url}">entrada no diário</a>.';
$string['diaryname'] = 'Nome';
$string['diaryopentime'] = 'Abertura';
$string['diaryopentime_help'] = 'Se ativar esta opção, pode definir uma data e hora para o diário ser aberto para uso.';
$string['editall'] = 'Editar todas as entradas';
$string['editall_help'] = 'Se ativar esta opção, os utilizadores podem editar qualquer entrada.';
$string['editdates'] = 'Editar datas da entrada';
$string['editdates_help'] = 'Se ativar esta opção, os utilizadores podem editar a data de qualquer entrada.';
$string['editingended'] = 'O período de edição já terminou';
$string['editingends'] = 'O período de edição termina';
$string['editthisentry'] = 'Editar esta entrada';
$string['edittopoflist'] = 'Editar o topo da lista';
$string['enableautorating'] = 'Ativar avaliação automática';
$string['enableautorating_help'] = 'Ativa, ou desativa, a avaliação automática';
$string['enablestats'] = 'Ativar estatísticas';
$string['enablestats_descr'] = 'Se ativar esta opção, serão mostradas as estatísticas de cada entrada.';
$string['enablestats_help'] = 'Ativar ou desativar a visualização das estatísticas de cada entrada.';
$string['enablestats_title'] = 'Ativar estatísticas';
$string['entries'] = 'Entradas';
$string['entry'] = 'Entrada';
$string['entrybgc'] = 'Cor de fundo da entrada/feedback do diário';
$string['entrybgc_colour'] = '#93FC84';
$string['entrybgc_descr'] = 'Define a cor de fundo de uma entrada/feedback do diário.';
$string['entrybgc_help'] = 'Definição da cor de fundo global de cada entrada e feedback do diário.';
$string['entrybgc_title'] = 'Cor de fundo de uma entrada/feedback do diário';
$string['entrycomment'] = 'Comentário da entrada';
$string['entrytextbgc'] = 'Cor de fundo do texto do diário';
$string['entrytextbgc_colour'] = '#93FC84';
$string['entrytextbgc_descr'] = 'Define a cor de fundo do texto de uma entrada do diário.';
$string['entrytextbgc_help'] = 'Define a cor de fundo do texto de uma entrada do diário.';
$string['entrytextbgc_title'] = 'Cor do texto de uma entrada do diário';
$string['errorbehavior'] = 'Comportamento de correspondência de erros';
$string['errorbehavior_help'] = 'Estas configurações aperfeiçoam o comportamento de correspondência para entradas no Glossário de erros comuns.';
$string['errorcmid'] = 'Glossário dos erros';
$string['errorcmid_help'] = 'Selecione o glossário que contém a lista dos erros comuns. Cada vez que um dos erros for encontrado na resposta, a penalização especificada será deduzida da avaliação do aluno para esta entrada.';
$string['errorpercent'] = 'Penalização por erro';
$string['errorpercent_help'] = 'Selecione a percentagem da avaliação total que deve ser deduzida por cada erro encontrado na resposta.';
$string['eventdiarycreated'] = 'Evento do diário criado';
$string['eventdiarydeleted'] = 'Evento do diário apagado';
$string['eventdiaryviewed'] = 'Evento do diário visualizado';
$string['eventdownloadentriess'] = 'Descarregar entradas';
$string['evententriesviewed'] = 'Entradas do diário visualizadas';
$string['evententrycreated'] = 'Entrada do diário criada';
$string['evententryupdated'] = 'Entrada do diário atualizada';
$string['eventfeedbackupdated'] = 'Feedback do diário atualizado';
$string['eventinvalidentryattempt'] = 'Tentativa de entrada inválida no diário';
$string['eventxfrentries'] = 'Transferência de Diário para entrada de Diário+';
$string['exportfilename'] = 'entradas.csv';
$string['exportfilenamep1'] = 'Todo_Site';
$string['exportfilenamep2'] = '_Entradas_Diario_Exportadas_';
$string['feedbackupdated'] = 'Atualizado o feedback de {$a} entradas';
$string['files'] = 'Ficheiros';
$string['firstentry'] = 'Primeiras entradas do diário';
$string['fkgrade'] = 'Nota FK';
$string['fkgrade_help'] = 'O nível de escolaridade de Flesch Kincaid indica o número de anos de educação geralmente necessários para entender este texto. Tente obter um valor abaixo de 10.';
$string['fogindex'] = 'Índice Fog';
$string['fogindex_help'] = 'O índice Fog de Gunning é uma medida de legibilidade. É calculado usando a seguinte fórmula:

((palavras por frase) + (palavras longas por frase)) x 0,4

Tente obter um nível de nota abaixo de 10. Para mais informações, consulte: https://en.wikipedia.org/wiki/Gunning_fog_index';
$string['format'] = 'Formato';
$string['freadingease'] = 'Facilidade de leitura Flesch';
$string['freadingease_help'] = 'Facilidade de leitura Flesch: pontuações altas indicam que o texto é mais fácil de ler, enquanto pontuações mais baixas indicam que o texto é mais difícil de ler. Tente obter uma facilidade de leitura acima de 60.';
$string['generalerror'] = 'Ocorreu um erro.';
$string['generalerrorinsert'] = 'Não foi possível inserir uma nova entrada no diário.';
$string['generalerrorupdate'] = 'Não foi possível atualizar o seu diário.';
$string['gradeingradebook'] = 'Avaliação atual na pauta';
$string['highestgradeentry'] = 'Entradas com melhor avaliação';
$string['incorrectcourseid'] = 'ID da disciplina está incorreto';
$string['incorrectmodule'] = 'O ID do módulo da disciplina estava incorreto';
$string['invalidaccess'] = 'Acesso inválido';
$string['invalidaccessexp'] = 'Não tem permissão para visualizar a página que tentou aceder! A tentativa foi registada!';
$string['invalidtimechange'] = 'Foi detetada uma tentativa inválida de alterar a data/hora de criação desta entrada.';
$string['invalidtimechangenewtime'] = 'A data e hora alterada: {$a->one}.';
$string['invalidtimechangeoriginal'] = 'A data e hora original: {$a->one}.';
$string['invalidtimeresettime'] = 'A hora foi redefinida para a hora original: {$a->one}.';
$string['journalid'] = 'Transferir do Diário com ID (journalid)';
$string['journalmissing'] = 'De momento, não existem atividades Diário nesta disciplina.';
$string['journaltodiaryxfrdid'] = '<br>Lista das atividades Diário+ nesta disciplina:<br><b>  ID</b>  |  Disciplina  |  Nome do Diário+<br>';
$string['journaltodiaryxfrjid'] = 'Lista das atividades Diário nesta disciplina:<br><b>  ID</b>  |  Disciplina  |  Nome do Diário<br>';
$string['journaltodiaryxfrp1'] = 'Esta funcionalidade é exclusiva do administrador para transferir entradas de Diário para entradas de Diário+. As entradas de vários Diário podem ser transferidas para um único Diário+ ou para vários Diários+ separados. É uma funcionalidade nova e ainda está em desenvolvimento.<br><br>';
$string['journaltodiaryxfrp2'] = 'Se usar <b>Transferir e enviar e-mail</b>, qualquer entrada de Diário transferida para uma atividade Diário+ marcará a nova entrada como necessário enviar e-mail ao utilizador para que saiba que a entrada foi transferida para um atividade Diário+.<br><br>';
$string['journaltodiaryxfrp3'] = 'Se usar <b>Transferir sem e-mail</b>, NÃO será enviado e-mail a cada utilizador, mesmo que o processo adicione comentários automaticamente na nova entrada do Diário+, sempre que a entrada original do Diário não tenha comentários incluídos.<br><br>';
$string['journaltodiaryxfrp4'] = 'Nome desta disciplina em que está a trabalhar: <b>{$a->one}</b>, ID: <b>{$a->two}</b><br><br>';
$string['journaltodiaryxfrp5'] = 'Se optar por incluir comentários sobre a transferência e a entrada do Diário ainda não tiver comentários, será adicionado automaticamente como professor da entrada para evitar erros.<br><br>';
$string['journaltodiaryxfrtitle'] = 'Diário para Diário+';
$string['lastnameasc'] = 'Apelido ascendente';
$string['lastnamedesc'] = 'Apelido descendente';
$string['latestmodifiedentry'] = 'Entradas modificadas mais recentemente';
$string['lexicaldensity'] = 'Densidade lexical';
$string['lexicaldensity_help'] = 'A densidade lexical é uma percentagem calculada usando a seguinte fórmula.
</br>
100 x (número de palavras únicas) / (número total de palavras)
</br>
Um texto com muitas palavras repetidas tem densidade lexical baixa, enquanto um texto com muitas palavras únicas tem densidade lexical alta.';
$string['longwords'] = 'Palavras longas únicas';
$string['longwords_help'] = 'As palavras longas são palavras que têm três ou mais sílabas. Tenha em atenção que o algoritmo para determinar o número de sílabas produz apenas resultados aproximados.';
$string['longwordspersentence'] = 'Palavras longas por frase';
$string['lowestgradeentry'] = 'Entradas com pior avaliação';
$string['mailed'] = 'Enviadas por e-mail';
$string['mailsubject'] = 'Feedback do diário';
$string['max'] = 'máx';
$string['maxcharacterlimit'] = 'Máximo de caracteres';
$string['maxcharacterlimit_desc'] = 'Observação: Esta entrada pode ter um <strong>máximo de {$a} caracteres.</strong>';
$string['maxcharacterlimit_help'] = 'Se for inserido um número, o utilizador não pode usar mais caracteres do que o número máximo listado.';
$string['maxparagraphlimit'] = 'Máximo de parágrafos';
$string['maxparagraphlimit_desc'] = 'Observação: Esta entrada pode ter um <strong>máximo de {$a} parágrafos</strong>.';
$string['maxparagraphlimit_help'] = 'Se for inserido um número, o utilizador não pode usar mais parágrafos do que o número máximo listado.';
$string['maxpossrating'] = 'A avaliação máxima possível para esta entrada é de {$a} pontos.';
$string['maxsentencelimit'] = 'Máximo de frases';
$string['maxsentencelimit_desc'] = 'Observação: Esta entrada pode ter um <strong>máximo de {$a} frases.</strong>';
$string['maxsentencelimit_help'] = 'Se for inserido um número, o utilizador não pode usar mais frases do que o número máximo listado.';
$string['maxwordlimit'] = 'Máximo de palavras';
$string['maxwordlimit_desc'] = 'Observação: Esta entrada pode ter um <strong>máximo de {$a} palavras.</strong>';
$string['maxwordlimit_help'] = 'Se for inserido um número, o utilizador não pode usar mais palavras do que o número máximo listado.';
$string['mediumwords'] = 'Palavras médias únicas';
$string['mediumwords_help'] = 'As palavras médias são palavras que têm duas sílabas. Tenha em atenção que o algoritmo para determinar o número de sílabas produz apenas resultados aproximados.';
$string['min'] = 'mín';
$string['mincharacterlimit'] = 'Mínimo de caracteres';
$string['mincharacterlimit_desc'] = 'Observação: Esta entrada tem de ter um <strong>mínimo de {$a} caracteres.</strong>';
$string['mincharacterlimit_help'] = 'Se for inserido um número, o utilizador tem de usar mais caracteres do que o número mínimo listado.';
$string['minmaxcharpercent'] = 'Penalização por erro na contagem de caracteres';
$string['minmaxcharpercent_help'] = 'Selecione a percentagem da avaliação total que deve ser deduzida por cada erro de contagem de caracteres.';
$string['minmaxhdr'] = 'Mínimo e máximo da contagem';
$string['minmaxhdr_help'] = 'Estas configurações definem os valores predefinidos para o número mínimo e máximo de caracteres e palavras em todos os novos diários.';
$string['minmaxparapercent'] = 'Penalização por erro na contagem de parágrafos';
$string['minmaxparapercent_help'] = 'Selecione a percentagem da avaliação total que deve ser deduzida por cada erro de contagem de parágrafos.';
$string['minmaxpercent'] = 'Penalização por erro de contagem';
$string['minmaxpercent_help'] = 'Selecione a percentagem da avaliação total que deve ser deduzida por cada erro de contagem.';
$string['minmaxsentpercent'] = 'Penalização por erro na contagem de frases';
$string['minmaxsentpercent_help'] = 'Selecione a percentagem da avaliação total que deve ser deduzida por cada erro de contagem de frases.';
$string['minmaxwordpercent'] = 'Penalização por erro na contagem de palavras';
$string['minmaxwordpercent_help'] = 'Selecione a percentagem da avaliação total que deve ser deduzida por cada erro de contagem de palavras.';
$string['minparagraphlimit'] = 'Mínimo de parágrafos';
$string['minparagraphlimit_desc'] = 'Observação: Esta entrada tem de ter um <strong>mínimo de {$a} parágrafos</strong>.';
$string['minparagraphlimit_help'] = 'Se for inserido um número, o utilizador tem de usar mais parágrafos do que o número mínimo listado.';
$string['minsentencelimit'] = 'Mínimo de frases';
$string['minsentencelimit_desc'] = 'Observação: Esta entrada tem de ter um <strong>mínimo de {$a} frases.</strong>';
$string['minsentencelimit_help'] = 'Se for inserido um número, o utilizador tem de usar mais frases do que o número mínimo listado.';
$string['minwordlimit'] = 'Mínimo de palavras';
$string['minwordlimit_desc'] = 'Observação: Esta entrada tem de ter um <strong>mínimo de {$a} palavras.</strong>';
$string['minwordlimit_help'] = 'Se for inserido um número, o utilizador tem de usar mais palavras do que o número mínimo listado.';
$string['missing'] = 'Em falta';
$string['modulename'] = 'Diário+';
$string['modulename_help'] = 'A atividade Diário+ permite que os professores obtenham feedback dos alunos durante um determinado período de tempo.';
$string['modulenameplural'] = 'Diários+';
$string['needsgrading'] = 'Esta entrada ainda não recebeu feedback ou avaliação.';
$string['needsregrade'] = 'Esta entrada foi alterada desde que foi lhe dado feedback ou avaliação.';
$string['newdiaryentries'] = 'Novas entradas no diário';
$string['nextentry'] = 'Nova entrada';
$string['nodeadline'] = 'Sempre aberto';
$string['noentriesmanagers'] = 'Não existem professores';
$string['noentry'] = 'Nenhuma entrada';
$string['noratinggiven'] = 'Sem avaliação';
$string['notextdetected'] = '<b>Nenhum texto detetado!</b>';
$string['notopenuntil'] = 'Este diário apenas abrirá';
$string['notstarted'] = 'Diário ainda não iniciado';
$string['numwordscln'] = '{$a->one} palavras do texto usando {$a->two} caracteres, NÃO incluindo {$a->three} espaços.';
$string['numwordsnew'] = 'Novo cálculo: {$a->one} palavras do texto em bruto usando {$a->two} caracteres em {$a->three} frases em {$a->four} parágrafos.';
$string['numwordsraw'] = '{$a->one} palavras do texto em bruto usando {$a->two} caracteres, incluindo {$a->three} espaços.';
$string['numwordsstd'] = '{$a->one} palavras padronizadas usando {$a->two} caracteres, incluindo {$a->three} espaços.';
$string['outof'] = '&nbsp;de {$a} entradas.';
$string['overallrating'] = 'Avaliação global';
$string['pagesize'] = 'Entradas por página';
$string['paragraphs'] = 'Parágrafos';
$string['percentofentryrating'] = '{$a}% da avaliação da entrada.';
$string['phrasecasesensitiveno'] = 'Correspondência não sensível a maiúsculas e minúsculas';
$string['phrasecasesensitiveyes'] = 'Correspondência sensível a maiúsculas e minúsculas';
$string['phrasefullmatchno'] = 'Corresponde a palavras completas ou parciais.';
$string['phrasefullmatchyes'] = 'Corresponde apenas a palavras completas.';
$string['phraseignorebreaksno'] = 'Reconhecer quebras de linha.';
$string['phraseignorebreaksyes'] = 'Ignorar quebras de linha.';
$string['pluginadministration'] = 'Administração do Diário+';
$string['pluginname'] = 'Diário+';
$string['popoverhelp'] = 'Clique para mais informação';
$string['potautoratingerrpen'] = 'A potencial penalização por erro da avaliação automática: {$a->one}% ou {$a->two} pontos.';
$string['potcommerrpen'] = 'A potencial penalização por erro comum: {$a->one} * {$a->two} = {$a->three}% ou menos {$a->four} pontos.';
$string['present'] = 'Presente';
$string['previousentry'] = 'Entrada anterior';
$string['rate'] = 'Avaliar';
$string['rating'] = 'Avaliação desta entrada';
$string['reload'] = 'Recarregar e mostrar da entrada do diário atual à mais antiga';
$string['removeentries'] = 'Remover todas as entradas';
$string['removemessages'] = 'Remover todas as entradas do diário';
$string['reportsingle'] = 'Obter todas as entradas do diário para este utilizador.';
$string['reportsingleallentries'] = 'Todas as entradas do diário para este utilizador.';
$string['returnto'] = 'Voltar para {$a}';
$string['returntoreport'] = 'Voltar para a página do diário \'{$a}\'';
$string['saveallfeedback'] = 'Guardar todos os meus comentários';
$string['savesettings'] = 'Guardar configurações';
$string['search'] = 'Pesquisar';
$string['search:activity'] = 'Diário+ - informação da atividade';
$string['search:entry'] = 'Diário+ - entradas';
$string['search:entrycomment'] = 'Diário+ - comentário da entrada';
$string['selectentry'] = 'Selecionar uma entrada';
$string['sentences'] = 'Frases';
$string['sentencesperparagraph'] = 'Frases por parágrafo';
$string['shortwords'] = 'Palavras curtas únicas';
$string['shortwords_help'] = 'Palavras curtas são palavras que têm apenas uma sílaba. Tenha em atenção que o algoritmo para determinar o número de sílabas produz apenas resultados aproximados.';
$string['shownone'] = 'Não mostrar';
$string['showoverview'] = 'Mostrar visão global do diário no meu Painel do utilizador';
$string['showrecentactivity'] = 'Mostrar a atividade recente';
$string['showstudentsonly'] = 'Mostrar apenas alunos';
$string['showteacherandstudents'] = 'Mostrar alunos e professores';
$string['showteachersonly'] = 'Mostrar apenas professores';
$string['showtextstats'] = 'Mostrar estatísticas do texto?';
$string['showtextstats_help'] = 'Se ativar esta opção, serão mostradas as estatísticas do texto.';
$string['showtostudentsonly'] = 'Sim, mostrar apenas aos alunos';
$string['showtoteachersandstudents'] = 'Sim, mostrar aos alunos e aos professores';
$string['showtoteachersonly'] = 'Sim, mostrar apenas aos professores';
$string['sortcurrententry'] = 'Da entrada atual até à primeira entrada do diário';
$string['sortfirstentry'] = 'Da primeira à última entrada do diário';
$string['sorthighestentry'] = 'Da entrada com avaliação mais alta até à entrada com avaliação mais baixa.';
$string['sortlastentry'] = 'Da entrada modificada mais recentemente até à entrada modificada há mais tempo.';
$string['sortlowestentry'] = 'Da entrada com avaliação mais baixa até à mais alta.';
$string['sortoptions'] = 'Opções de ordenação';
$string['sortorder'] = '<h5>Ordenação:</h5>';
$string['startnewentry'] = 'Iniciar uma nova entrada';
$string['startoredit'] = 'Iniciar nova ou editar a entrada de hoje';
$string['statshdr'] = 'Estatísticas do texto?';
$string['statshdr_help'] = 'Essas configurações definem os valores predefinidos para as estatísticas em todos os novos diários.';
$string['teacher'] = 'Professor';
$string['text'] = 'Texto';
$string['textstatitems'] = 'Itens da estatística';
$string['textstatitems_help'] = 'Selecione aqui quaisquer itens que pretende que apareçam nas estatísticas do texto que são mostradas a página de visualização, página de relatório e página única de relatório.';
$string['timecreated'] = 'Criação';
$string['timemarked'] = 'Avaliação';
$string['timemodified'] = 'Modificação';
$string['toolbar'] = 'Barra de ferramentas:&nbsp;';
$string['totalsyllables'] = 'Total de sílabas {$a}';
$string['transfer'] = 'Transferir entradas';
$string['transferwemail'] = 'Transferir e enviar e-mail. <b>Valor predefinido: não enviar e-mail</b>.';
$string['transferwfb'] = 'Transferir e incluir comentários sobre a transferência. <b>Valor predefinido: não incluir comentários</b>.';
$string['transferwfbmsg'] = '<br>Esta entrada foi transferida do Diário: {$a}';
$string['transferwoe'] = 'Transferir sem e-mail';
$string['uniquewords'] = 'Palavras únicas';
$string['userid'] = 'ID do utilizador';
$string['usertoolbar'] = 'Barra de ferramentas do utilizador:';
$string['viewalldiaries'] = 'Todos os diários da disciplina';
$string['viewallentries'] = 'Ver {$a} entradas';
$string['viewentries'] = 'Visualizar entradas';
$string['words'] = 'Palavras';
$string['wordspersentence'] = 'Palavras por frase';
$string['xfrresults'] = 'Foram processadas {$a->one} entradas e {$a->two} delas foram transferidas.';
