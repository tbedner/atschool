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
 * Strings for component 'local_amos', language 'pt', version '4.4'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS é o repositório central das strings do Moodle e de todo o seu histórico. Monitoriza a adição de strings em inglês ao código do Moodle, junta as traduções, lida com tarefas comuns da tradução e gera pacotes linguísticos para serem utilizados nos servidores Moodle.</p>
<p>Para mais informações, consulte a <a href="https://docs.moodle.org/dev/AMOS_manual">documentação do AMOS</a>.</p>';
$string['amos'] = 'Ferramenta de tradução AMOS';
$string['amos:changecontriblang'] = 'Alterar o idioma das strings contribuídas';
$string['amos:commit'] = 'Integrar no repositório principal as strings do estágio';
$string['amos:execute'] = 'Executar o AMOScript indicado';
$string['amos:importfile'] = 'Importar traduções de ficheiro carregado e colocá-las em estágio';
$string['amos:importstrings'] = 'Importar as strings (incluindo as em inglês) diretamente para o repositório principal';
$string['amos:manage'] = 'Gerir o portal AMOS';
$string['amos:stage'] = 'Usar a ferramenta de tradução AMOS e colocar strings em estágio';
$string['amos:stash'] = 'Guardar o estágio atual num arquivo persistente';
$string['amos:usegoogle'] = 'Usar os serviços do Google Tradutor';
$string['applangindexfile'] = 'Localização do ficheiro langindex da aplicação móvel Moodle';
$string['applangindexfile_desc'] = 'URL completo para descarregar o ficheiro. Será executado por uma tarefa cron.';
$string['branchesall'] = 'Todas as versões conhecidas do Moodle';
$string['branchesall_desc'] = 'Lista dos códigos de versão do Moodle, separados por vírgulas, que o AMOS suporta. É usado para preencher a lista de versões no filtro do tradutor e em outros locais.';
$string['branchsupported'] = 'Versão mais antiga do Moodle compatível';
$string['branchsupported_desc'] = 'Código da versão mais antiga do Moodle que ainda deve ser usada para alterações nas strings em inglês e para a qual ainda foram gerados os pacotes de idioma do instalador. Para referência, consulte a página: <https://docs.moodle.org/dev/Releases#Version_support>.';
$string['cachedef_lists'] = 'Listas de idiomas e componentes conhecidos no AMOS';
$string['cachedef_stats'] = 'Dados estatísticos gerados pelo AMOS';
$string['commitbutton'] = 'Integrar';
$string['commitkeepstaged'] = 'Manter as strings em estágio';
$string['commitmessage'] = 'Mensagem da integração';
$string['commitmessageempty'] = 'Por favor, preencha a mensagem da integração';
$string['commitstage'] = 'Integrar strings do estágio';
$string['commitstage_help'] = 'Armazena de forma permanente no repositório do AMOS todas as traduções do estágio. O estágio é automaticamente limpo e refeito antes de ser integrado. Apenas são armazenadas as strings que podem ser adicionadas. Isto significa que apenas as traduções abaixo destacadas a verde serão armazenadas. O estágio é limpo após a integração das strings.';
$string['committable'] = 'Tem permissão para integrar neste pacote linguístico';
$string['committableall'] = 'todos os idiomas';
$string['committablenone'] = 'nenhum idioma permitido - contacte o gestor do AMOS';
$string['componentsall'] = 'Todos';
$string['componentsapp'] = 'Aplicação móvel Moodle';
$string['componentsnone'] = 'Nenhum';
$string['componentsstandard'] = 'Base';
$string['confirmaction'] = 'Esta ação é irreversível. Tem a certeza absoluta?';
$string['contribaccept'] = 'Aceitar';
$string['contribactions'] = 'Ações nas contribuições para a tradução';
$string['contribactions_help'] = 'Dependendo das suas permissões e do fluxo do trabalho da contribuição, pode ter algumas das seguintes ações disponíveis:

* Aplicar - copia a tradução contribuída para o seu estágio, não modifica o registo da contribuição
* Atribuir a mim - defina-se como o responsável pela contribuição, isto é, ser-lhe-á atribuída a responsabilidade pela revisão e integração da contribuição
* Cancelar atribuição - anula qualquer atribuição de responsável pela contribuição
* Iniciar revisão - atribua a nova contribuição a si mesmo, defina o estado como \'Em revisão\' e copie a tradução enviada para o seu estágio.
* Aceitar - marca a contribuição como aceite
* Rejeitar - marca a contribuição como rejeitada. Descreva os motivos num comentário.

O colaborador é informado por e-mail sempre que o estado da respetiva contribuição for alterado.';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = 'Aplicar';
$string['contribassignee'] = 'Responsável';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Atribuir a mim';
$string['contribauthor'] = 'Autor';
$string['contribclosedno'] = 'Ocultar contribuições resolvidas';
$string['contribclosedyes'] = 'Mostrar contribuições resolvidas';
$string['contribcomponents'] = 'Componentes';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'Nenhuma contribuição recebida';
$string['contribincomingsome'] = 'Contribuições recebidas ({$a})';
$string['contriblanguage'] = 'Idioma';
$string['contriblanguagebutton'] = 'Converter';
$string['contriblanguagechange'] = 'Corrigir o idioma incorreto da contribuição';
$string['contriblanguagechange_help'] = 'Se, por engano, a contribuição foi enviada para um pacote linguístico incorreto, selecione o idioma correto no menu suspenso abaixo e clique no botão Converter.';
$string['contriblanguagereport'] = 'Reportar idioma incorreto da contribuição';
$string['contriblanguagereport_help'] = 'Se, por engano, esta contribuição foi enviada para um pacote linguístico incorreto, copie e cole o URL da contribuição e envie um e-mail para `translation@moodle.org`. A contribuição será depois movida para o idioma correto.';
$string['contriblanguagewrong'] = 'Idioma incorreto?';
$string['contribnotif'] = '[AMOS] Notificação de contribuição (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} aceitou a sua contribuição para a tradução
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Página da contribuição: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} fez um comentário à sua contribuição para a tradução
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Página da contribuição: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} converteu a sua contribuição para a tradução
#{$a->id} {$a->subject}

Obrigado pela sua contribuição. No entanto, parece que foi enviada, por engano, para um pacote linguístico incorreto. Assim, a sua contribuição foi rejeitada do pacote linguístico errado e movida para o pacote linguístico correto, para depois ser revista pelo responsável pelo pacote linguístico. Nenhuma ação sua é necessária.

No futuro, certifique-se que selecionou o idioma correto antes de começar a traduzir as strings.

---------------------------------------------------------------------
Página da contribuição original: {$a->contriborigurl}
Nova página da contribuição: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Há uma contribuição para a tradução pendente que exige a sua ação #{$a->id} {$a->subject}

Como responsável pela manutenção do pacote linguístico, é suposto que reveja e, eventualmente, integre todas as contribuições enviadas. Quando terminar, marque-as como aceite ou rejeitada.

Para mais informações, consulte {$a->docsurl}.
---------------------------------------------------------------------
Página da contribuição: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} rejeitou a sua contribuição para a tradução
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Página da contribuição: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} enviou uma nova contribuição para a tradução
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

* Idioma: {$a->language}
* Componentes: {$a->components}
* Strings: {$a->strings}

---------------------------------------------------------------------
Página da contribuição: {$a->contriburl}';
$string['contribreject'] = 'Rejeitar';
$string['contribresign'] = 'Cancelar a atribuição';
$string['contribstaged'] = 'Contribuição em estágio <a href="contrib.php?id={$a->id}">#{$a->id}</a> enviada por {$a->author}';
$string['contribstagedinfo'] = 'Contribuição em estágio';
$string['contribstagedinfo_help'] = 'O estágio contém strings que foram contribuídas por um membro da comunidade. Os responsáveis pela manutenção do pacote linguístico devem revê-las e, em seguida, definir o seu estado como Aceite (se forem integradas) ou Rejeitada (se, por algum motivo, não puderem ser incluídas no pacote linguístico oficial).';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = 'Iniciar revisão';
$string['contribstatus'] = 'Estado';
$string['contribstatus0'] = 'Nova';
$string['contribstatus10'] = 'Em revisão';
$string['contribstatus20'] = 'Rejeitada';
$string['contribstatus30'] = 'Aceite';
$string['contribstatus_help'] = 'O fluxo do trabalho de uma contribuição para a tradução consiste nas seguintes etapas:

* Nova - a contribuição foi enviada mas ainda não foi revista
* Em revisão - a contribuição foi atribuída a um responsável pela manutenção do pacote linguístico e foi colocada em estágio para revisão
* Rejeitada - o responsável pela manutenção do pacote linguístico rejeitou a contribuição e, provavelmente, deixou uma explicação num comentário
* Aceite - a contribuição foi aceite pelo responsável pela manutenção do pacote linguístico';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = 'Strings';
$string['contribstringseq'] = '{$a->orig} novas';
$string['contribstringsnone'] = '{$a->orig} (todas já traduzidas no pacote linguístico)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} delas já têm tradução mais recente)';
$string['contribsubject'] = 'Assunto';
$string['contribsubmittednone'] = 'Nenhuma contribuição enviada';
$string['contribsubmittedsome'] = 'A sua contribuição ({$a})';
$string['contribtimemodified'] = 'Modificação';
$string['contribute'] = 'Contribuir';
$string['contributenow'] = 'Contribuir agora!';
$string['contributestats'] = 'Até agora foram enviadas para o AMOS um total de <strong>{$a->count}</strong> strings traduzidas por membros da comunidade.';
$string['contributethanks'] = 'Muito obrigado a {$a->listcontributors} pelas suas recentes contribuições!';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} e a {$a->contributor4}';
$string['contributions'] = 'Contribuições';
$string['creditsaddcontributor'] = 'Adicionar colaborador';
$string['creditsaddmaintainer'] = 'Adicionar responsável pela manutenção';
$string['creditscontact'] = 'Enviar mensagem';
$string['creditscontributors'] = 'Outros colaboradores';
$string['creditsdelcontributor'] = 'Remover colaborador';
$string['creditsdelmaintainer'] = 'Remover responsável pela manutenção';
$string['creditsmaintainedby'] = 'Responsáveis';
$string['creditsnomaintainer'] = 'De momento sem responsável pela manutenção. <a href="{$a->url}">Torne-se um!</a>';
$string['creditsthanks'] = 'Nesta página, queremos agradecer a todos os que contribuíram para as traduções do Moodle. Todo esse trabalho tornou possível a disseminação do Moodle pelo mundo.';
$string['creditstitlelong'] = 'Responsáveis pela manutenção e colaboradores dos pacotes linguísticos';
$string['creditstitleshort'] = 'Créditos';
$string['diff'] = 'Comparar';
$string['diffstringmode'] = 'Alternar o modo diff';
$string['err_exception'] = 'Erro: {$a}';
$string['err_invalidlangcode'] = 'Código de idioma inválido';
$string['err_parser'] = 'Erro de análise: {$a}';
$string['filtercmp'] = 'Componentes';
$string['filtercmp_desc'] = 'Mostrar strings destes componentes';
$string['filtercmpnothingselected'] = 'Por favor, selecione um componente';
$string['filterlng'] = 'Idiomas';
$string['filterlng_desc'] = 'Mostrar traduções nestes idiomas';
$string['filterlngnothingselected'] = 'Por favor, selecione um idioma';
$string['filtermis'] = 'Diversos';
$string['filtermis_desc'] = 'Condições adicionais para selecionar as strings';
$string['filtermisfapp'] = 'apenas strings usadas na Aplicação móvel Moodle';
$string['filtermisfapp_help'] = 'Esta string é usada na Aplicação móvel Moodle como {$a}';
$string['filtermisfhas'] = 'apenas strings traduzidas';
$string['filtermisfhlp'] = 'apenas strings da ajuda';
$string['filtermisfmis'] = 'apenas strings em falta e desatualizadas';
$string['filtermisfout'] = 'apenas strings desatualizadas';
$string['filtermisfstg'] = 'apenas strings em estágio';
$string['filtersid'] = 'Identificador da string';
$string['filtersid_desc'] = 'A chave da string na matriz das strings';
$string['filtersidpartial'] = 'corresponde parcialmente';
$string['filtertxt'] = 'Substring';
$string['filtertxt_desc'] = 'A string tem de conter o texto indicado';
$string['filtertxtcasesensitive'] = 'sensível a maiúsculas/minúsculas';
$string['filtertxteng'] = 'em strings em inglês';
$string['filtertxtregex'] = 'regex';
$string['filtertxttra'] = 'em strings traduzidas';
$string['filterver'] = 'Versão';
$string['filterver_desc'] = 'Mostrar strings desta versão do Moodle';
$string['filtervernothingselected'] = 'Por favor, selecione uma versão';
$string['foundmissing'] = '{$a} em falta';
$string['foundmissingonthispage'] = '{$a} nesta página';
$string['foundtotal'] = '{$a} encontradas';
$string['googletranslate'] = 'perguntar ao google';
$string['importfile'] = 'Importar strings traduzidas de ficheiro';
$string['importfile_help'] = 'Se as suas strings foram traduzidas offline, pode colocá-las em estágio através deste formulário.

* O ficheiro deve ser um ficheiro válido de definição de strings PHP do Moodle. Para exemplos, consulte a diretoria `/lang/en/` da sua instalação do Moodle.
* O nome do ficheiro deve corresponder àquele com as definições das strings em inglês para o componente especificado (como por exemplo,  `moodle.php`,`assignment.php` ou `enrol_manual.php`).

Todas as strings encontradas no ficheiro serão colocadas em estágio para a versão e idioma selecionados.

Podem ser processados vários ficheiros PHP de uma só vez, se os colocar num ficheiro ZIP.';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = 'Idioma';
$string['languagepacks'] = 'Podem ser instalados pacotes linguísticos adicionais no seu site Moodle via <em>Administração > Administração do Site > Idioma > Pacotes linguísticos</em> ou manualmente. Para mais detalhes, consulte a <a href="https://docs.moodle.org/en/Language_packs"> documentação dos pacotes linguísticos</a>.';
$string['languages'] = 'Idiomas';
$string['languagesall'] = 'Todos';
$string['languagesnone'] = 'Nenhum';
$string['lastavailable'] = 'Última versão disponível';
$string['lessfilteringoptions'] = 'Menos opções';
$string['log'] = 'Registos';
$string['logfilterbranch'] = 'Versões';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'A mensagem de entrega contém';
$string['logfiltercommits'] = 'Filtro das integrações';
$string['logfiltercommittedafter'] = 'Integradas depois de';
$string['logfiltercommittedbefore'] = 'Integradas antes de';
$string['logfiltercomponent'] = 'Componentes';
$string['logfilterlang'] = 'Idiomas';
$string['logfiltershow'] = 'Mostrar integrações e strings filtradas';
$string['logfiltersource'] = 'Origem';
$string['logfilterstringid'] = 'Identificador da string';
$string['logfilterstrings'] = 'Filtro das strings';
$string['logfilterusergrp'] = 'Integrada por';
$string['logfilterusergrpor'] = '&nbspou&nbsp';
$string['maintainers'] = 'Responsável pela manutenção';
$string['manageamos'] = 'Gerir o AMOS';
$string['markuptodate'] = 'A marcar as traduções como atualizadas';
$string['markuptodatelabel'] = 'marcar com atualizada';
$string['messageprovider:checker'] = 'Resultados do verificador do pacote linguístico';
$string['messageprovider:contribution'] = 'Contribuições para a tradução';
$string['morefilteringoptions'] = 'Mais opções';
$string['newlanguage'] = 'Novo idioma';
$string['nodiffs'] = 'Nenhuma diferença encontrada';
$string['nofiletoimport'] = 'Por favor, indique um ficheiro para importar de.';
$string['nologsfound'] = 'Nenhuma string encontrada. Por favor, altere as opções dos filtros';
$string['nostringsfound'] = 'Nenhuma string encontrada';
$string['nostringtoimport'] = 'Não foi encontrada qualquer string válida no ficheiro. Verifique se o ficheiro tem nome de ficheiro correto e/ou se está formatado corretamente.';
$string['nothingtostage'] = 'A operação não retornou qualquer string que pudesse ser colocada em estágio.';
$string['novalidzip'] = 'Não foi possível extrair o arquivo ZIP.';
$string['numofcommitsabovelimit'] = 'Foram encontradas {$a->found} integrações que correspondem ao filtro das integrações. A mostrar as {$a->limit} mais recentes';
$string['numofcommitsunderlimit'] = 'Foram encontradas {$a->found} integrações que correspondem ao filtro das integrações.';
$string['numofmatchingstrings'] = 'Destas integrações, {$a->strings} modificações em {$a->commits} integrações correspondem ao filtro das strings.';
$string['outdatednotcommitted'] = 'Strings desatualizadas';
$string['outdatednotcommitted_help'] = 'O AMOS detetou que a string pode estar desatualizada, uma vez que a versão em inglês foi modificada depois da string ter sido traduzida. Por favor, reveja a tradução.';
$string['outdatednotcommittedwarning'] = 'Desatualizadas';
$string['ownstashactions'] = 'Ações a executar';
$string['ownstashactions_help'] = '* Aplicar - copia as strings traduzidas do arquivo para o estágio e mantém o arquivo inalterado. Se qualquer uma das strings já estiver no estágio, ela será substituída pela que está arquivada.
* Pop - move as strings traduzidas do arquivo para o estágio e solta o arquivo (o mesmo que Aplicar e Soltar).
* Soltar - elimina as strings arquivadas.
* Enviar - abre um formulário para enviar o arquivo para os responsáveis pela manutenção do pacote linguístico, para que eles possam incluir a sua contribuição no pacote linguístico oficial.';
$string['ownstashes'] = 'Os seus arquivos';
$string['ownstashes_help'] = 'Esta é a lista de todos os seus arquivos.';
$string['ownstashesnone'] = 'Nenhum arquivo seu encontrado';
$string['permalink'] = 'Ligação permanente';
$string['placeholder'] = 'Espaços reservados';
$string['placeholder_help'] = 'Espaços reservados são declarações especiais dentro da string, como por exemplo: `{$a}` ou `{$a->something}`. Serão substituídas por um valor quando a string for mostrada.

É importante copiá-los exatamente como estão na string original. Não os traduza nem mude a sua orientação (esquerda para a direita).';
$string['placeholderwarning'] = 'espaços reservados';
$string['pluginclasscore'] = 'Subsistemas do núcleo';
$string['pluginclassnonstandard'] = 'Outros módulos';
$string['pluginclassstandard'] = 'Módulos de base';
$string['pluginname'] = 'AMOS';
$string['plugintypelocations'] = 'Localizações dos tipo de módulo';
$string['plugintypelocations_desc'] = 'Permite definir localizações de tipos de módulos de base adicionais, tais como tipos de submódulos fornecidos por módulos de base ou tipos legados.';
$string['presetcommitmessage'] = 'Contribuição #{$a->id} enviada por {$a->author}';
$string['presetcommitmessage2'] = 'Foram adicionadas strings da ramificação {$a->source} que estavam em falta na ramificação {$a->target}';
$string['presetcommitmessage3'] = 'A corrigir as diferenças entre {$a->versiona} e {$a->versionb}';
$string['privacy:commitnumber'] = 'Integração {$a}';
$string['privacy:contribnumber'] = 'Contribuição {$a}';
$string['privacy:metadata:db:amoscontributions:message'] = 'Mensagem inicial a descrever a submissão.';
$string['privacy:stashnumber'] = 'Arquivo {$a}';
$string['privileges'] = 'As sua permissões';
$string['privilegesnone'] = 'Tem acesso \'apenas de leitura\' a informações públicas.';
$string['processing'] = 'A processar...';
$string['quicklinks'] = 'Hiperligações rápidas';
$string['quicklinks_amos'] = 'Tradutor AMOS';
$string['quicklinks_forum'] = 'Fórum da tradução';
$string['quicklinks_manual'] = 'Manual do utilizador';
$string['quicklinks_newcomers'] = 'Ajuda para novatos';
$string['requestactions'] = 'Ação';
$string['requestactions_help'] = '* Aplicar - copia as strings traduzidas da solicitação para o seu estágio. Se a string  já estiver no estágio, ela será substituída pela que está no arquivo.
* Ocultar - bloqueia a solicitação para que não seja mostrada mais nenhuma vez.';
$string['savefilter'] = 'Mostrar strings';
$string['script'] = 'AMOScript';
$string['script_help'] = 'AMOScript é um conjunto de instruções para executar no repositório de strings.';
$string['scriptexecute'] = 'Executa e coloca em estágio o resultado';
$string['sourceversion'] = 'Versão da origem';
$string['stage'] = 'Estágio';
$string['stageactions'] = 'Ações do estágio';
$string['stageactions_help'] = '* Editar strings do estágio - modifica as configurações do filtro do tradutor para que apenas sejam exibidas as traduções em estágio.
* Remover strings - remove do estágio todas as traduções que não tem permissão para enviar. O estágio é limpo automaticamente antes de ser enviado.
* Rebaixar - remove do estágio todas as traduções que não modificam a tradução atual ou que são mais antigas que a tradução mais recente no repositório. O estágio é refeito automaticamente antes de ser enviado.
* Remover todas - limpa o estágio e todas as traduções são perdidas.';
$string['stagedownload'] = 'Descarregar';
$string['stageedit'] = 'Editar strings do estágio';
$string['stageprune'] = 'Remover strings';
$string['stagerebase'] = 'Rebaixar';
$string['stagestringsnocommit'] = '{$a->staged} strings em estágio';
$string['stagestringsnone'] = 'Não existem strings em estágio';
$string['stagestringssome'] = 'Existem {$a->staged} strings em estágio, {$a->committable} das quais podem ser integradas';
$string['stagesubmit'] = 'Enviar as strings para os responsáveis';
$string['stagetoolopen'] = 'Ir para o estágio';
$string['stagetranslation'] = 'Tradução';
$string['stagetranslation_help'] = 'Exibe a tradução em estágio para ser integrada. A cor de fundo da célula significa:

* Verde - adicionou uma tradução em falta e pode integrar.
* Amarelo - modificou uma string e tem permissão para integrar a alteração.
* Azul - modificou a tradução ou adicionou uma tradução em falta, mas não tem permissão para integrá-la no idioma especificado.
* Sem cor - a tradução em estágio é igual à atual e, por isso, não será integrada.';
$string['stageunstageall'] = 'Remover todas';
$string['standardcomponents'] = 'Lista de componentes base';
$string['standardcomponents_desc'] = 'Lista de componentes base do Moodle. O número opcional indica o código da versão desde quando o componente faz parte da base. Se o número for negativo, indica a última versão em que o componente fazia parte da base. Ambos os números podem estar presentes. Exemplo:

* `mod_workshop` - sem versões, este componente faz parte da base em todas as versões
* `report_infectedfiles 310` - indica um componente que deve ser considerado como fazendo parte da base a partir do Moodle 3.10
* `theme_clean 25 -36` - componente base desde o Moodle 2.5 até ao 3.6 inclusive';
$string['stashactions'] = 'Guardar tradução em progresso';
$string['stashactions_help'] = 'Arquivo é um instantâneo do estágio atual. Os arquivos podem ser enviados para os responsáveis pela manutenção do pacote linguístico para possível integração no pacote linguístico.';
$string['stashapply'] = 'Aplicar';
$string['stashautosave'] = 'Arquivo guardado automaticamente';
$string['stashautosave_help'] = 'Este arquivo contém o instantâneo mais recente do seu estágio. Pode usá-lo como uma cópia de segurança para casos em que, por acidente, todas as strings foram removidas do estágio. Use a ação \'Aplicar\' para copiar para o estágio todas as strings arquivadas (substituirá as string que já estejam em estágio).';
$string['stashcomponents'] = '<span>Componentes:</span> {$a}';
$string['stashdownload'] = 'Descarregar';
$string['stashdrop'] = 'Soltar';
$string['stashdropconfirm'] = 'Tem a certeza de pretende apagar de forma permanente o arquivo <em>\'{$a}\'</em>?';
$string['stashes'] = 'Arquivos';
$string['stashlanguages'] = '<span>Idiomas:</span> {$a}';
$string['stashpop'] = 'Pop';
$string['stashpush'] = 'Guardar as strings em estágio num novo arquivo';
$string['stashstrings'] = '<span>Número de strings:</span> {$a}';
$string['stashsubmit'] = 'Enviar para os responsáveis';
$string['stashsubmitdetails'] = 'Detalhes do envio';
$string['stashsubmitmessage'] = 'Mensagem';
$string['stashsubmitsubject'] = 'Assunto';
$string['stashtitle'] = 'Nome do arquivo';
$string['stashtitledefault'] = 'Tradução em progresso - {$a->time}';
$string['stdvernotebetween'] = 'Base desde {$a->from} até {$a->to}';
$string['stdvernotefrom'] = 'Base desde {$a->from}';
$string['stdvernoteto'] = 'Base até {$a->to}';
$string['stringhistory'] = 'histórico';
$string['strings'] = 'Strings';
$string['stringversionnotlatest'] = 'existe uma versão mais recente';
$string['submitting'] = 'A enviar uma contribuição';
$string['submitting_help'] = 'Isto enviará as strings traduzidas para os responsáveis pela manutenção do pacote linguístico oficial. Eles poderão aplicar o seu trabalho no respetivo estágio deles, rever as strings e, eventualmente, integrá-las. Envie-lhes uma mensagem a descrever o seu trabalho e porque razão gostaria de ver a sua contribuição incluída.';
$string['targetversion'] = 'Versão de destino';
$string['timeline'] = 'cronologia da string';
$string['timelineheading'] = 'Cronologia da string: {$a->component} | {$a->strname}';
$string['translatortool'] = 'Tradutor';
$string['translatortoolopen'] = 'Abrir o tradutor AMOS';
$string['translatortranslation'] = 'Tradução';
$string['translatortranslation_help'] = 'Clique na célula para transformá-la em editor. Insira a tradução e clique fora da célula para a colocar em estágio. A cor de fundo da célula significa:

* Verde - a string já está traduzida. Pode alterar a tradução.
* Amarelo - a string pode estar desatualizada. A original em inglês provavelmente foi alterada após a tradução da string.
* Vermelho - a string ainda não está traduzida.
* Azul - modificou a tradução e agora está em estágio.
* Cinza - o AMOS não pode ser usado para traduzir a string. Por exemplo, strings para o Moodle 1.9 devem ser editadas apenas através do acesso ao CVS legado.

Os responsáveis pela manutenção de pacotes linguístico podem ver um pequeno símbolo vermelho no canto das células que podem integrar.';
$string['typecontrib'] = 'Módulos adicionais';
$string['typecontribbadge'] = 'Adicionais';
$string['typecore'] = 'Subsistemas do núcleo';
$string['typecorebadge'] = 'Núcleo';
$string['typestandard'] = 'Módulos de base';
$string['typestandardbadge'] = 'Base';
$string['unableenfixaddon'] = 'Correções do inglês apenas são permitidas para módulos de base';
$string['unableenfixcountries'] = 'Os nomes de países são copiados da ISO 3166-1';
$string['unableunmaintained'] = 'De momento, o pacote linguístico \'{$a}\' não tem responsável pela manutenção, por isso, as contribuições para a tradução não podem ser aceites. Por favor, considere o voluntariado para tornar-se no responsável pela manutenção do pacote linguístico \'{$a}\'.';
$string['unstage'] = 'remover';
$string['unstageconfirm'] = 'Confirmar retirada do estágio';
$string['unstageconfirmlong'] = '<p>Irá remover do estágio a tradução da string <code>{$a->stringid}</code>, componente <code>{$a->component}</code>, do pacote linguístico <code>{$a->language}</code>.</p><p>Tem a certeza absoluta de que pretende continuar?</p>';
$string['unstaging'] = 'A remover';
$string['untranslate'] = 'remover tradução';
$string['untranslateconfirm'] = '<p>Está prestes a remover a tradução da string <code>{$a->stringid}</code>, componente <code>{$a->component}</code>, da versão <code>{$a->since}</code> assim como de todas as versões superiores do pacote linguístico <code>{$a->language}</code>.</p><p>Tem a certeza absoluta que pretende continuar?</p>';
$string['untranslatetitle'] = 'A remover tradução do pacote linguístico';
$string['untranslating'] = 'A remover tradução';
$string['userdefaultreset'] = 'Repor predefinições';
$string['userdefaultsave'] = 'Guardar como predefinições';
$string['version'] = 'Versão';
