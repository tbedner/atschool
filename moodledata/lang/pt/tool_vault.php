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
 * Strings for component 'tool_vault', language 'pt', version '4.4'.
 *
 * @package     tool_vault
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addonplugins'] = 'Módulos adicionais';
$string['addonplugins_autoupgrade'] = 'O processo de atualização do Moodle será realizado automaticamente durante o restauro. <a href="{$a}">Alterar</a>.';
$string['addonplugins_extraplugins'] = 'Módulos extra';
$string['addonplugins_extraplugins_desc'] = 'Os módulos abaixo estão presentes na cópia de segurança, mas não estão instalados neste site. Após o restauro, estes módulos serão listados como "Em falta no disco". Pode optar por desinstalá-los ou manter os dados até adicionar o código dos módulos. Até lá, poderá deparar-se com erros, por exemplo, tarefas agendadas em falta.';
$string['addonplugins_fail'] = 'A cópia de segurança contém módulos com versões de código superiores às existentes neste site. Deve atualizar o código destes módulos antes de restaurar a partir desta cópia de segurança.';
$string['addonplugins_fail_missing'] = 'Estão presentes na cópia de segurança alguns módulos adicionais, mas não estão instalados neste site. Deve instalar estes módulos ou ativar a definição "Permitir restauro com módulos em falta".';
$string['addonplugins_missing'] = 'Módulos em falta';
$string['addonplugins_missing_autoremove'] = 'Os módulos em falta serão removidos automaticamente após o restauro. <a href="{$a}">Alterar</a>';
$string['addonplugins_missing_desc'] = 'Os módulos abaixo estão presentes na cópia de segurança, mas não estão instalados neste site. Após o restauro, estes módulos serão listados como "Em falta no disco". Pode optar por desinstalá-los ou manter os dados até adicionar o código dos módulos. Até lá, poderá deparar-se com erros, por exemplo, tarefas agendadas em falta.';
$string['addonplugins_missing_noautoremove'] = 'Pode optar por remover automaticamente os módulos em falta após o restauro nas <a href="{$a}">configurações</a>';
$string['addonplugins_noautoupgrade'] = 'Pode optar por executar automaticamente o processo de atualização do Moodle como parte do restauro na página das <a href="{$a}">configurações</a>';
$string['addonplugins_notpresent'] = 'Módulos encontrados neste site, mas não presentes na cópia de segurança';
$string['addonplugins_pluginsdirectory'] = 'Diretoria de módulos';
$string['addonplugins_pluginversioninbackup'] = 'Versão na cópia de segurança';
$string['addonplugins_pluginversiononsite'] = 'Versão atual neste site';
$string['addonplugins_restorewithmissing_not_allowed'] = 'Não é permitido o restauro de módulos em falta. <a href="{$a}">Alterar</a>.';
$string['addonplugins_subpluginof'] = 'Submódulo de';
$string['addonplugins_success'] = 'Todos os módulos na cópia de segurança têm a mesma versão dos módulos deste site';
$string['addonplugins_success_needsupgrade'] = 'Alguns módulos terão de ser atualizados após o restauro';
$string['addonplugins_success_withmissing'] = 'Alguns módulos estão em falta, mas o restauro é possível';
$string['addonplugins_willrequireupgrade'] = 'Exigirá atualização';
$string['addonplugins_willrequireupgrade_desc'] = 'Os módulos abaixo têm versão posterior à da existente na cópia de segurança. Após a conclusão do processo de restauro, ser-lhe-á pedido que execute o processo de atualização do Moodle.';
$string['addonplugins_withhigherversion'] = 'Os módulos com versão do código posterior à que existe na cópia de segurança';
$string['addonplugins_withlowerversion'] = 'Os módulos com versão do código anterior à que existe na cópia de segurança';
$string['addonplugins_withlowerversion_desc'] = 'Os módulos abaixo têm versão anterior à da existente na cópia de segurança. Tem de atualizar o código destes módulos antes de restaurar a partir desta cópia de segurança.';
$string['apikey'] = 'Chave API';
$string['backup'] = 'Cópia de segurança';
$string['backupdescription'] = 'Descrição da cópia de segurança';
$string['backupdetails'] = 'Detalhes da cópia de segurança';
$string['backupfinished'] = 'Esta cópia de segurança já está concluída. Pode aceder aos registos <a href="{$a}">aqui</a>';
$string['backupinprogres'] = 'Durante a cópia de segurança o site é colocado em modo de manutenção. Utilize esta página para aceder aos registos sobre o processo atual';
$string['backupkey'] = 'Chave da cópia de segurança';
$string['backupprocesslog'] = 'Registo do processo de cópia de segurança';
$string['backupscheduled'] = 'Cópia de segurança (agendada)';
$string['backuptitle'] = 'Cópia de segurança {$a}';
$string['checkagain'] = 'Verificar novamente';
$string['cliprocess'] = 'Processo CLI';
$string['collapselogs'] = 'Colapsar registos';
$string['configoverrides'] = 'Substituição de configurações';
$string['configoverrides_settingname'] = 'Designação da configuração';
$string['configoverrides_settingvalue'] = 'Valor da configuração';
$string['configoverrides_valueredacted'] = 'Redigido';
$string['configoverrides_willbeincluded'] = 'Configurações do config.php que serão incluídas na cópia';
$string['configoverrides_willbeincludedplugin'] = 'Configurações de módulos do config.php que serão incluídas na cópia';
$string['configoverrides_willnotbeincluded'] = 'Configurações do config.php que NÃO serão incluídas na cópia';
$string['configoverrides_willnotbeincludedplugin'] = 'Configurações de módulos do config.php que NÃO serão incluídas na cópia';
$string['containsstandardplugins'] = '{$a} módulos base';
$string['dbmodifications'] = 'Modificações da base de dados';
$string['dbmodifications_changedtables'] = 'Tabelas alteradas';
$string['dbmodifications_extratable_warning'] = 'Tabela extra: a tabela está em falta na definição, mas está presente na base de dados atual.';
$string['dbmodifications_extratables'] = 'Tabelas extra';
$string['dbmodifications_invalidtables'] = 'Tabelas inválidas';
$string['dbmodifications_missingtable_warning'] = 'Tabela em falta: a tabela está presente na definição, mas em falta na base de dados atual.';
$string['dbmodifications_missingtables'] = 'Tabelas em falta';
$string['dbmodifications_status_clean'] = 'As suas tabelas da base de dados correspondem às descrições em install.xml';
$string['dbmodifications_status_invalid'] = 'A sua base de dados tem modificações que não podem ser processadas pelo Moodle. Precisa de ajustar as ‘Configuração das cópias de segurança’ e excluir algumas entidades se pretender realizar uma cópia de segurança do site';
$string['dbmodifications_status_modified'] = 'O estado da sua base de dados não corresponde às especificações em install.xml. O site pode ser guardado numa cópia de segurança, as modificações serão incluídas na cópia';
$string['dbmodifications_status_nomodifications'] = 'A cópia de segurança do site pode ser realizado sem qualquer modificação na base de dados';
$string['defaultbackupdescription'] = '{$a->site} por {$a->name}';
$string['diskspacebackup'] = 'Espaço no disco';
$string['diskspacebackup_countfiles'] = 'Número de ficheiros no armazenamento de ficheiros';
$string['diskspacebackup_datarootsize'] = 'Espaço necessário para dataroot (excluindo filedir)';
$string['diskspacebackup_dbmaxsize'] = 'Tamanho da maior tabela da base de dados (aprox)';
$string['diskspacebackup_dbrecords'] = 'Número total de linhas nas tabelas da base de dados';
$string['diskspacebackup_dbtotalsize'] = 'Espaço necessário para base de dados';
$string['diskspacebackup_fail'] = 'Não existe espaço no disco suficiente para realizar a cópia de segurança do site';
$string['diskspacebackup_fail_datarootunreadable'] = 'Não é possível ler o(s) caminho(s) <b>{$a->paths}</b> na pasta de dados. Corrija as permissões dos ficheiros no servidor ou apague estes caminhos na cópia de segurança nas <a href="{$a->settingsurl}">configurações</a> do vault';
$string['diskspacebackup_freespace'] = 'Espaço livre na pasta Temp';
$string['diskspacebackup_maxdatarootfilesize'] = 'Maior ficheiro em dataroot';
$string['diskspacebackup_maxfilesize'] = 'Maior ficheiro no armazenamento';
$string['diskspacebackup_success'] = 'Existe espaço no disco suficiente para realizar a cópia de segurança do site';
$string['diskspacebackup_totalfilesize'] = 'Tamanho total dos ficheiros no armazenamento de ficheiros';
$string['diskspacerestore'] = 'Espaço no disco';
$string['diskspacerestore_dbtotalsizefootnote'] = 'Tenha em atenção que a ferramenta Vault <b>não consegue verificar</b> se existe espaço suficiente na base de dados para realizar o restauro.';
$string['diskspacerestore_fail'] = 'Não existe espaço no disco suficiente no diretório temporário para executar o restauro do site';
$string['diskspacerestore_filedirsize'] = 'Espaço necessário para ficheiros';
$string['diskspacerestore_mintmpspace'] = 'Espaço mínimo necessário na pasta temporária';
$string['diskspacerestore_success'] = 'Existe espaço no disco suficiente na pasta temporária para executar o restauro do site';
$string['diskspacerestore_success_warning'] = 'Existe espaço no disco suficiente na pasta temporária, no entanto pode não haver espaço suficiente para todos os ficheiros e dataroot se estes estiverem na mesma partição do disco local';
$string['enterapikey'] = 'Tenho chave API';
$string['enterpassphrase'] = 'Esta cópia de segurança está protegida por uma senha';
$string['environ_fail'] = 'Vault não conseguiu aumentar a configuração max_execution_time. Consulte <a href="{$a}" target="_blank">{$a}</a>';
$string['environ_success_warning'] = 'Vault não conseguiu aumentar a configuração max_execution_time. Se o processo não terminar dentro de {$a->value}, será abortado. Consulte <a href="{$a->url}" target="_blank">{$a->url}</a>';
$string['environbackup'] = 'Verificação do ambiente';
$string['environbackup_maxexecutiontime'] = 'Tempo máximo de execução (max_execution_time)';
$string['error_accesskeyisnotvalid'] = 'A chave de acesso não é válida';
$string['error_anotherbackupisinprogress'] = 'Existe outra cópia de segurança a decorrer';
$string['error_anotherrestoreisinprogress'] = 'Existe outro restauro a decorrer';
$string['error_apikeycharacters'] = 'A chave API pode conter apenas letras latinas e dígitos';
$string['error_apikeynotvalid'] = 'Chave API inválida';
$string['error_apikeytoolong'] = 'A chave API é muito longa';
$string['error_apikeytooshort'] = 'A chave API é muito curta';
$string['error_backupfailed'] = 'Ocorreu um erro com a cópia de segurança com a chave {$a}';
$string['error_backuphaswrongstatus'] = 'A cópia de segurança com a chave {$a} tem um estado incorreto';
$string['error_backupinprogressnotfound'] = 'Cópia de segurança em execução não encontrada';
$string['error_backupnotavailable'] = 'A cópia de segurança com a chave {$a} já não está disponível';
$string['error_backupnotfinished'] = 'A cópia de segurança com a chave {$a} ainda não está concluída';
$string['error_backupprecheckfailed'] = 'Ocorreu um erro ao executar a pré-verificação de cópia de segurança \'{$a->name}\': {$a->message}';
$string['error_cannotcreatezip'] = 'Não é possível criar ficheiro ZIP';
$string['error_cannotresumerestore'] = 'Só é possível retomar restauros com falhas. O último processo de restauro tem o estado \'{$a}\'';
$string['error_dbstructurenotvalid'] = 'O arquivo {$a} não contém estrutura de base de dados';
$string['error_failedmultipartupload'] = 'Ocorreu um erro  ao iniciar o carregamento em partes. UploadId não foi encontrado na saída do comando: {$a}';
$string['error_filenotfound'] = 'Ficheiro esperado {$a} não encontrado';
$string['error_invaliddownloadlink'] = 'A API Vault não retornou uma hiperligação de descarregamento válida para {$a->filename}: {$a->url}';
$string['error_invaliduploadlink'] = 'A API Vault não retornou uma hiperligação de carregamento válida: {$a}';
$string['error_metadatanotvalid'] = 'O arquivo {$a} não contém metadados da cópia de segurança';
$string['error_notavalidlink'] = 'A API Vault não retornou uma hiperligação válida: {$a}';
$string['error_nothingtorestore'] = 'Nada para retomar';
$string['error_passphrasewrong'] = 'Erro ao aceder à cópia de segurança protegida por senha. Verifique a senha e tente novamente.';
$string['error_restoreprecheckfailed'] = 'Ocorreu um erro ao executar a pré-verificação de restauro \'{$a->name}\': {$a->message}';
$string['error_restoresnotallowed'] = 'Os restauros não são permitidos neste site';
$string['error_serverreturnednodata'] = 'O servidor não retornou dados';
$string['error_shutdown'] = 'Encerramento detetado. {$a} expirou ou foi interrompido pelo utilizador.';
$string['error_unabletorunprecheck'] = 'Não foi possível executar a verificação {$a}';
$string['error_usecli'] = 'Não pode realizar cópia de segurança e restauro do site nesta página. Utilize a interface de linha de comandos.';
$string['excludetablefrombackup'] = 'Adicione "{$a}" à configuração das tabelas excluídas.';
$string['expandlogs'] = 'Expandir registos';
$string['forgetapikey'] = 'Esqueci a Chave API';
$string['hidebacktrace'] = 'Ocultar rastreio';
$string['history'] = 'Histórico';
$string['history_desc'] = 'Registos de cópias de segurança e restauros anteriores neste site.';
$string['lastop_backupfailed_header'] = 'Erro na cópia de segurança';
$string['lastop_backupfailed_text'] = 'Ocorreu um erro na cópia de segurança realizada {$a}';
$string['lastop_backupfinished_header'] = 'Cópia de segurança concluída';
$string['lastop_backupfinished_text'] = 'Cópia de segurança {$a->backupkey} iniciada {$a->started} e terminada {$a->finished}';
$string['lastop_backupinprogress_header'] = 'Cópia de segurança em execução';
$string['lastop_backupinprogress_text'] = 'Existe uma cópia de segurança em execução';
$string['lastop_backupscheduled_header'] = 'Cópia de segurança agendada';
$string['lastop_backupscheduled_text'] = 'A sua cópia de segurança está agora agendada e será executada durante a próxima execução do cron';
$string['lastop_restorefailed_canberesumed'] = 'Este restauro pode ser retomado.';
$string['lastop_restorefailed_header'] = 'Ocorreu um erro no restauro';
$string['lastop_restorefailed_text'] = 'Ocorreu um erro no restauro realizado {$a}.';
$string['lastop_restorefinished_header'] = 'Restauro concluído';
$string['lastop_restorefinished_text'] = 'Restauro da cópia de segurança {$a->backupkey} iniciado {$a->started} e terminado {$a->finished}';
$string['lastop_restoreinprogress_header'] = 'Restauro em execução';
$string['lastop_restoreinprogress_text'] = 'Existe um restauro a decorrer';
$string['lastop_restoreprecheckfailed_header'] = 'Falha na pré-verificação de restauro';
$string['lastop_restoreprecheckfailed_text'] = 'Pré-verificação de restauro finalizada às {$a}. O restauro não será possível até que todos os erros estejam corrigidos';
$string['lastop_restoreprecheckfinished_header'] = 'Pré-verificação de restauro com sucesso';
$string['lastop_restoreprecheckfinished_text'] = 'Pré-verificação de restauro concluída às {$a->finished}. Cópia de segurança {$a->backupkey} pode ser restaurada neste site agora';
$string['lastop_restoreprecheckinprogress_header'] = 'Pré-verificação de restauro em execução';
$string['lastop_restoreprecheckinprogress_text'] = 'Existe uma pré-verificação em execução';
$string['lastop_restoreprecheckscheduled_header'] = 'Pré-verificação de restauro agendada';
$string['lastop_restoreprecheckscheduled_text'] = 'A sua pré-verificação de restauro está agora agendada e será executada durante a próxima execução do cron';
$string['lastop_restorescheduled_header'] = 'Restauro agendado';
$string['lastop_restorescheduled_text'] = 'O seu restauro está agora agendado e será executado durante a próxima execução do cron';
$string['lastupdated'] = 'Última atualização';
$string['loginexplanation'] = 'Crie uma conta em {$a} para que possa fazer cópia de segurança ou restaurar o site. Com a <b>conta gratuita</b> poderá fazer cópias de segurança e restaurar pequenos sites e armazená-los até 7 dias na cloud.';
$string['manageremoteaccount'] = 'Gerir a sua conta';
$string['messageprovider:statusupdate'] = 'Atualização do estado do Vault: migração de site';
$string['moodleversion_backupinfo'] = 'Cópia de segurança feita na versão {$a->version} (Moodle {$a->branch})';
$string['moodleversion_fail'] = 'O número da versão do site deve ser igual ou posterior à versão na cópia de segurança. A versão dsta cópia de segurança é {$a->version} e este site é {$a->siteversion}';
$string['moodleversion_fail_cannotupgrade'] = 'O restauro está bloqueado porque o Moodle não consegue atualizar de {$a->backuprelease} para {$a->currentrelease}. Consulte a página <a href="{$a->url}">Ambiente</a> para saber os requisitos de atualização. O Vault pode ser atualizado a partir desta versão se escolher "Atualizar automaticamente o Moodle após o restauro" nas <a href="{$a->settingsurl}">configurações</a>.';
$string['moodleversion_siteinfo'] = 'Este site tem a versão {$a->version} (Moodle {$a->branch})';
$string['moodleversion_success'] = 'Correspondências da versão do Moodle';
$string['moodleversion_success_withautoupgrade'] = 'O restauro pode ser executado. O Vault executará automaticamente o processo de atualização do Moodle como parte do restauro.';
$string['moodleversion_success_withextraupgrade'] = 'O restauro pode ser executado. O Vault irá atualizar o site de {$a->backuprelease} para {$a->intermediaryrelease} e, em seguida, irá realizar uma atualização padrão do Moodle para {$a->currentrelease}.';
$string['moodleversion_success_withupgrade'] = 'O restauro pode ser executado, mas terá de executar o processo de atualização do Moodle após a sua conclusão.';
$string['nobackupsavailable'] = 'Não existem cópias de segurança remotas disponíveis para restauro';
$string['nopastbackups'] = 'Não existem cópias de segurança antigas';
$string['nopastrestores'] = 'Não existem restauros antigos';
$string['operation'] = 'Operação {$a}';
$string['passphrase'] = 'Senha';
$string['pastbackupslist'] = 'Cópias de segurança antigas neste site';
$string['pastrestoreslist'] = 'Restauros antigos neste site';
$string['performedby'] = 'Realizada por';
$string['pleasewait'] = 'Por favor, aguarde...';
$string['pluginname'] = 'Vault – migração de site';
$string['precheckdetails'] = 'Detalhes das verificações';
$string['privacy:metadata'] = 'O módulo Vault não armazena quaisquer dados pessoais.';
$string['privacy:metadata:alldata'] = 'Todos os dados da base de dados, sistema de ficheiros e dataroot';
$string['privacy:metadata:lmsvault'] = 'A ferramenta de migração Vault pode fazer cópias de segurança de todo o site na cloud. Consulte https://lmsvault.io para mais informações.';
$string['refreshpage'] = '<a href="{$a}">Atualize</a> esta página para ver os registos atualizados.';
$string['remotebackup'] = 'Cópia de segurança remota';
$string['remotebackupdetails'] = 'Detalhes das cópias de segurança remotas';
$string['remotebackups'] = 'Cópias de segurança remotas';
$string['remotesignin'] = 'Aceder';
$string['remotesignup'] = 'Criar conta';
$string['repeatprecheck'] = 'Repetir verificações';
$string['restoredetails'] = 'Detalhes do restauro';
$string['restorefinished'] = 'Este restauro já foi concluído. Pode aceder aos registos <a href="{$a}">aqui</a>';
$string['restorefrombackup'] = 'Restauro a partir da cópia de segurança {$a}';
$string['restoreinprogress'] = 'Durante o restauro o site é colocado em modo de manutenção. Utilize esta página para aceder aos registos sobre o processo atual';
$string['restoreprechecks'] = 'Restaurar verificações';
$string['resume'] = 'Retomar';
$string['resumerestore'] = 'Retomar este restauro';
$string['resumerestore_desc'] = 'O restauro será retomado na próxima execução do cron';
$string['returntothesite'] = 'Voltar ao site';
$string['scheduledtask'] = 'Tarefa agendada';
$string['seefullreport'] = 'Ver relatório completo';
$string['setting_restoreremovemissing'] = 'Remover automaticamente os módulos em falta após o restauro';
$string['setting_restoreremovemissing_desc'] = 'Se a cópia de segurança contiver dados de módulos que não estão presentes na base de dados do site, estes serão marcados como "Em falta no disco" na lista de módulos instalados. <br>
- Ativar esta opção desinstalará automaticamente estes módulos e removerá todos os dados a eles associados da base de dados e do armazenamento de ficheiros. <br>
- Desativar esta opção deixará os dados na base de dados e poderá adicionar o código dos módulos após a conclusão do restauro ou executar o script de desinstalação manualmente. <br>
<em>Os módulos em falta não serão removidos se a atualização estiver pendente após o restauro, ou seja, se restaurar para uma versão superior do Moodle ou outros módulos necessitarem de ser atualizados. Neste caso pode selecionar "Atualizar automaticamente o Moodle após o restauro".</em>';
$string['setting_upgradeafterrestore'] = 'Atualizar automaticamente o Moodle após o restauro';
$string['setting_upgradeafterrestore_desc'] = 'Após o restauro do site, inicie imediatamente o processo de atualização do Moodle. Quando selecionado, o Vault poderá atualizar o Moodle de qualquer versão suportada para a da cópia de segurança. Por exemplo, pode atualizar do 3.9 diretamente para o 4.3, mesmo que o Moodle por si só exija que atualize primeiro para o 3.11.8 - 4.2 e só depois para o 4.3.';
$string['settings_allowrestore'] = 'Permitir restauros neste site';
$string['settings_allowrestore_desc'] = 'O restauro do site removerá completamente todo o conteúdo deste site e substitui-lo-á pelo conteúdo restaurado. Verifique tudo antes de ativar esta opção.';
$string['settings_allowrestorewithmissing'] = 'Permitir restauro com módulos em falta';
$string['settings_allowrestorewithmissing_desc'] = 'Se existiam módulos adicionais presentes no site onde foi feita a cópia de segurança do site, mas o código destes módulos não estiver presente neste site, o restauro poderá ainda ser executado. Após o restauro, estes módulos serão listados como "Em falta no disco" e poderá optar por desinstalá-los ou manter os dados até adicionar o código dos módulos. Até lá, poderá deparar-se com erros, por exemplo, tarefas agendadas em falta.';
$string['settings_backupcompressionlevel'] = 'Taxa de compressão Zip';
$string['settings_backupcompressionlevel_desc'] = 'Quando a taxa de compressão é baixa, levará menos tempo a criar ficheiros Zip, mas os ficheiros serão maiores e aumentará o tamanho da cópia de segurança. <br>
Tenha em atenção que os ficheiros com extensão {$a} são sempre adicionados aos ficheiros Zip com taxa de compressão 0, pois já estão comprimidos.';
$string['settings_backupexcludedataroot'] = 'Apagar caminhos da dataroot';
$string['settings_backupexcludedataroot_desc'] = 'Todos os caminhos dentro da pasta dataroot serão incluídos na cópia de segurança, exceto: <b>filedir</b> (cópia de segurança separada), <b>{$a->always}</b>. <br>Se pretender eliminar mais caminhos, liste-os aqui. <br>Exemplos de caminhos que podem ser excluídos: <b>{$a->examples}</b>';
$string['settings_backupexcludeplugins'] = 'Excluir módulos';
$string['settings_backupexcludeplugins_desc'] = 'Exclua determinados módulos das cópias de segurança, por exemplo, armazenamento de ficheiros ou gestão de sessões. <br>
Para a maioria dos módulos, pode incluí-los na cópia de segurança e desinstalá-los após o restauro. <br>
Tenha em atenção que isto apenas eliminará os dados nas próprias tabelas do módulo, definições, ficheiros associados, tarefas agendadas e outros tipos comuns conhecidos de dados relacionados com o módulo. Pode não ser preciso para módulos complicados ou módulos com dependências.';
$string['settings_backupexcludetables'] = 'Excluir tabelas';
$string['settings_backupexcludetables_desc'] = 'O Vault irá fazer cópia de segurança de todas as tabelas que têm o prefixo \'{$a->prefix}\', mesmo que não estejam listadas nos esquemas xmldb do core ou nos módulos instalados. <br>Aqui pode indicar tabelas extras que não devem ser incluídas na cópia de segurança. Utilize um asterisco (\'*\') para excluir todas as tabelas extra. <br>Tem de incluir o prefixo da tabela ao excluir tabelas.';
$string['settings_clionly'] = 'Permitir cópia de segurança e restauro do site apenas a partir da CLI';
$string['settings_clionly_desc'] = 'Se ativar esta opção ocultará o "Vault - migração do site" da administração do site e impedirá o acesso à cópia de segurança e ao restauro.';
$string['settings_desc'] = 'Configurações do módulo Vault onde pode configurar o que excluir durante a cópia de segurança ou preservar durante o restauro.';
$string['settings_forcedebug'] = 'Depuração durante a cópia de segurança e o restauro';
$string['settings_forcedebug_desc'] = 'Independentemente da configuração do site, a depuração do programador e a visualização da depuração serão ativadas durante a cópia de segurança e o restauro. Isto afetará apenas os registos do Vault e não alterará os valores destas configurações incluídas na cópia de segurança.';
$string['settings_header'] = 'Configurações de Vault – migração de site';
$string['settings_headerbackup'] = 'Configurações da cópia de segurança';
$string['settings_headerrestore'] = 'Configurações do restauro';
$string['settings_restorepreservedataroot'] = 'Preservar caminhos da dataroot';
$string['settings_restorepreservedataroot_desc'] = 'Durante o restauro, todos os caminhos dentro da pasta dataroot serão excluídos exceto: <b>filedir</b> (restauro separado), <b>{$a->always}</b>. <br>Se pretender manter mais caminhos, liste-os aqui. <br>Exemplos de caminhos que podem ser mantidos: <b>{$a->examples}</b>';
$string['settings_restorepreservepasswords'] = 'Manter as senhas dos utilizadores';
$string['settings_restorepreservepasswords_desc'] = 'Lista de nomes de utilizador (separados por vírgula) dos utilizadores cujas senhas precisam de ser preservadas após o restauro (por exemplo, "admin").
Durante o restauro, a tabela \'user\' será substituída pelo conteúdo da tabela \'user\' na cópia de segurança.
Isto significa que após o restauro o administrador tem de autenticar-se com a senha definida no site onde foi feita a cópia de segurança.
Quando esta configuração não estiver em branco, a senha dos utilizadores listados será alterada após o restauro para corresponder ao valor do site atual.
Isto aplicar-se-á apenas a utilizadores com o método de autenticação “manual”.';
$string['settings_restorepreserveplugins'] = 'Manter módulos';
$string['settings_restorepreserveplugins_desc'] = 'Apenas para módulos com configuração específica de servidor, por exemplo, armazenamento de ficheiros ou gestão de sessões. <br>
O processo de restauro tentará preservar os dados existentes associados a estes módulos e não restaurar os dados da cópia de segurança se o mesmo módulo estiver incluído. <br>
Tenha em atenção que isto apenas processará dados nas próprias tabelas, definições, ficheiros associados, tarefas agendadas e outros tipos comuns conhecidos de dados relacionados com o módulo. Pode não ser preciso para módulos complicados ou módulos com dependências.';
$string['showbacktrace'] = 'Mostrar rastreio';
$string['sitebackup'] = 'Cópia de segurança do site';
$string['sitebackup_desc'] = 'Faça cópias de segurança de todo o seu site para a cloud para depois o restaurar no mesmo servidor ou num servidor diferente, numa base de dados diferente ou num sistema de ficheiros diferente.';
$string['siterestore'] = 'Restauro do site';
$string['siterestore_desc'] = 'Restaure uma cópia de segurança da cloud neste site. <br>
Tenha em atenção que todo o conteúdo do site atual será substituído pelo conteúdo da cópia de segurança.';
$string['siterestore_notallowed_desc'] = 'O restauro neste site não é permitido. Pode alterá-lo nas definições do módulo.';
$string['startbackup'] = 'Iniciar cópia';
$string['startbackup_bucket'] = 'Guardar dados em';
$string['startbackup_cta'] = 'Precisa de mais? Consulte <a href="{$a->href}" target="_blank">{$a->link}</a> para saber os preços.';
$string['startbackup_desc'] = 'A sua cópia de segurança será agendada e executada durante a <b>próxima execução do cron</b>.';
$string['startbackup_enc_desc'] = 'Pode optar por proteger a sua cópia de segurança com uma senha. A senha só será guardada no seu site Moodle até ao final do processo de cópia de segurança. Se esquecer-se da sua senha, não será possível restaurar esta cópia de segurança.';
$string['startbackup_expiredays_prefix'] = 'Expirar automaticamente a cópia de segurança após';
$string['startbackup_expiredays_suffix'] = 'dias';
$string['startbackup_limit_desc'] = 'Pode carregar cópias de segurança até {$a}. Se o tamanho do arquivo da cópia de segurança for superior a este valor , ocorrerá um erro na criação da cópia de segurança.';
$string['startbackup_noenc_desc'] = 'Os seus dados serão encriptados. A especificação da sua própria chave de encriptação não é compatível com a sua subscrição atual.';
$string['startdryrun'] = 'Executar verificações';
$string['startrestore'] = 'Restaurar esta cópia de segurança';
$string['startrestore_desc'] = 'O restauro será executado na próxima execução do cron. Importante! Todos os dados deste site serão apagados!';
$string['startrestoreprecheck_desc'] = 'A pré-verificação de restauro será executada na próxima execução do cron.';
$string['status_failed'] = 'Erro';
$string['status_failedtostart'] = 'Erro ao iniciar';
$string['status_finished'] = 'Concluído';
$string['status_inprogress'] = 'Em execução';
$string['status_scheduled'] = 'Agendado';
$string['tablealreadyexcluded'] = 'A tabela "{$a}" já foi excluída, execute novamente esta verificação para ver o estado atualizado.';
$string['therewasnoactivity'] = 'Não existe atividade há <b>{$a->elapsedtime}</b>. É possível que o processo cron tenha sido interrompido ou tenha expirado. A operação será marcada como falha após <b>{$a->locktimeout} de inatividade</b> e o acesso ao site será restaurado.';
$string['timefinished'] = 'Conclusão';
$string['timestarted'] = 'Iniciada em';
$string['tools'] = 'Ferramentas';
$string['tools_desc'] = 'Várias ferramentas e scripts que pode executar antes da cópia de segurança ou após o restauro.';
$string['tools_uninstallmissingplugins'] = 'Desinstalar módulos em falta';
$string['tools_uninstallmissingplugins_desc'] = 'Apagar todos os dados associados aos módulos marcados como "Em falta no disco" na lista de módulos instalados. Este processo será executado de forma assíncrona durante a próxima execução do cron.';
$string['toschedule'] = 'Agendar';
$string['totalsizearchived'] = 'Tamanho total (compactado)';
$string['unknownstatusa'] = 'Estado desconhecido - {$a}';
$string['viewbackupdetails'] = 'Ver detalhes da cópia de segurança';
$string['viewdetails'] = 'Ver detalhes';
$string['viewerrordetails'] = 'ver detalhes do erro';
$string['waitforcron'] = '... Aguarde que o cron termine para visualizar o relatório ...';
$string['warning_backupdisabledanotherinprogress'] = 'Não pode iniciar a cópia de segurança porque existe outra cópia a decorrer.';
$string['warning_backupdisablednoapikey'] = 'Não pode iniciar a cópia de segurança porque não tem chave API';
$string['warning_logsnotavailable'] = 'Não disponível (a cópia de segurança foi realizada num site diferente)';
$string['withpassphrase'] = 'Senha';
$string['youareusingapikey'] = 'Está a usar a chave API {$a}';
