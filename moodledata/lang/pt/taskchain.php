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
 * Strings for component 'taskchain', language 'pt', version '4.4'.
 *
 * @package     taskchain
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Abandonada';
$string['activitycloses'] = 'Abertura';
$string['activitygrade'] = 'Nota da atividade';
$string['activityname'] = 'Nome da atividade';
$string['activityopens'] = 'Fecho';
$string['added'] = 'Adicionada';
$string['addtaskchain_help'] = '**Não**
Apenas uma tarefa será adicionada à disciplina

**Sim**
Se o ficheiro de origem for um **ficheiro de tarefas**, será tratado como o início de uma cadeia de tarefas e todas as tarefas na cadeia serão adicionadas à disciplina com configurações idênticas. Cada tarefa na cadeia deve ter uma hiperligação para o próximo ficheiro da cadeia.

Se o ficheiro de origem for uma **pasta**, todas as tarefas reconhecíveis na pasta serão adicionadas à disciplina para formar uma cadeia de tarefas com configurações idênticas.

Se o ficheiro de origem for um **ficheiro de cadeia**, tal como um ficheiro Hot Potatoes ou index.html, as tarefas listadas no ficheiro em cadeia serão adicionadas à disciplina como uma cadeia de tarefas com configurações idênticas.';
$string['addtasks'] = 'Adicionar (mais) tarefas';
$string['addtype'] = 'Ficheiros a adicionar';
$string['addtype_help'] = 'Quais os ficheiros que devem ser adicionados como tarefas?

**Detetar automaticamente**
: Se for selecionado um ficheiro, ele será tratado como um **ficheiro de tarefa** no início de uma cadeia de tarefas ou como **ficheiro de cadeia** que contém uma lista de ficheiros a serem adicionados. Se nenhum ficheiro for selecionado, todos os ficheiros reconhecíveis na pasta serão adicionados como tarefas.

**Adicionar apenas o ficheiro selecionado**
: Apenas o ficheiro de origem selecionado será adicionado a esta atividade como uma tarefa.

**Adicionar cadeia a começar no ficheiro selecionado**
: O ficheiro de origem selecionado é considerado um **ficheiro de tarefa** no início de uma cadeia de tarefas. Todas as tarefas na cadeia serão adicionadas a esta atividade. Cada tarefa deve ter uma hiperligação para a próxima tarefa na cadeia.

**Adicionar todos os ficheiros listados no ficheiro selecionado**
: O ficheiro de origem selecionado é considerado **ficheiro de cadeia**, como por exemplo, um ficheiro Hot Potatoes ou index.html. Todas as tarefas listadas no ficheiro selecionado serão adicionadas a esta atividade.

**Adicionar todos os ficheiros da pasta selecionada**
: Todos os ficheiros de tarefa reconhecíveis na pasta de origem serão adicionados a esta atividade.

**Adicionar todos os ficheiros de todas as pastas**
: Todos os ficheiros de tarefa reconhecíveis na pasta de origem e em todas as suas subpastas serão adicionados a esta atividade.';
$string['addtypeauto'] = 'Detetar automaticamente';
$string['addtypechainfile'] = 'Adicionar todos os ficheiros listados no ficheiro selecionado';
$string['addtypechainfolder'] = 'Adicionar todos os ficheiros da pasta selecionada';
$string['addtypechainfolders'] = 'Adicionar todos os ficheiros de todas as pastas';
$string['addtypetaskchain'] = 'Adicionar cadeia a começar no ficheiro selecionado';
$string['addtypetaskfile'] = 'Adicionar apenas o ficheiro selecionado';
$string['afterattempt'] = 'Após a tentativa';
$string['afterclose'] = 'Após fechar';
$string['aftertaskid'] = 'Depois da tarefa';
$string['aftertaskid_help'] = 'Depois da tarefa';
$string['allowfreeaccess'] = 'Permitir livre acesso';
$string['allowfreeaccess_help'] = 'Esta configuração especifica se os alunos têm ou não livre acesso às tarefas nesta Cadeia de tarefas.

Sempre que os alunos tenham livre acesso, podem aceder qualquer tarefa da Cadeia de tarefas, independentemente das pré-condições e pós-condições das tarefas.

**Não**
: Os alunos não terão livre acesso às tarefas da Cadeia de tarefas. Por outras palavras, o acesso às tarefas será sempre controlado pelas pré-condições e pós-condições das tarefas.

**Sim: Notas**
: Os alunos terão livre acesso às tarefas da Cadeia de tarefas, logo que tenham obtido a nota obrigatória

**Sim: Tentativas**
Os alunos terão livre acesso às tarefas da Cadeia de tarefas, logo que tenham concluído o número obrigatório de tentativas.';
$string['allowpaste'] = 'Permitir Copiar/Colar';
$string['allowpaste_help'] = 'Se ativar esta opção, os alunos poderão copiar, colar e arrastar texto para as caixas de entrada de texto.';
$string['allowresume'] = 'Permitir Retomar';
$string['allowresume_help'] = 'Esta configuração especifica se os alunos podem ou não continuar uma tentativa.

**Não**
: Tentativas não podem ser retomadas.

**Sim**
Os alunos terão a opção de retomar quaisquer tentativas anteriores que ainda estejam em progresso ou iniciar uma nova tentativa.

**Forçar**
: Se houver uma tentativa anterior que ainda esteja em progresso, os alunos serão forçados a retomar a tentativa. Caso contrário, podem iniciar uma nova tentativa.';
$string['allowreview'] = 'Permitir Rever';
$string['allowreview_help'] = 'Se ativar esta opção, os alunos podem rever as tentativas de resolução das tarefas após o fecho da tarefa.';
$string['allpostconditions'] = 'Todas as pós-condições';
$string['allpreconditions'] = 'Todas as pré-condições';
$string['answers'] = 'Respostas';
$string['answersshort'] = 'A';
$string['anyattempts'] = 'Quaisquer tentativas';
$string['anygroup'] = 'Qualquer grupo';
$string['applydefaults'] = 'Aplicar valores predefinidos selecionados';
$string['assessment_help'] = 'As configurações de avaliação para tarefas e Cadeias de tarefas definem o seguinte:

<ul>
<li> o modo como as tentativas da tarefa são combinadas para formar uma pontuação única da tarefa </li>
<li> a contribuição da pontuação da tarefa em relação à nota para uma tentativa de cadeia</li>
<li>o modo como as notas de tentativa da cadeia são combinadas para obter uma nota única da cadeia</li>
</ ul>

**Pontuação da tentativa da tarefa**
As pontuações de tentativa da tarefa são normalizadas usando o seguinte cálculo:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>(pontuação da tentativa - pontuação mínima)</tt>
<tt>------------------------------</tt><br \\>
<tt>pontuação máxima</tt>
</td>
<td align="center" valign="middle"><big><big>   X   </big></big></td>
<td align="center" valign="middle">
<tt>limite de pontuação</tt>
<tt>-----------</tt><br \\>
<tt>100</tt>
</td>
</tr></tbody></table>

**Pontuação da tarefa**
Dependendo da configuração do método de avaliação da tarefa, a pontuação da tarefa é definida como a primeira, última, mais alta ou média das pontuações normalizadas das tentativa da tarefa.

As pontuações da tarefa são depois ponderadas através do seguinte cálculo:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>pontuação da tarefa</tt>
</td>
<td align="center" valign="middle"><big><big>   X   </big></big></td>
<td align="center" valign="middle">
<tt>ponderação da pontuação</tt>
<tt>--------------</tt><br \\>
<tt>100</tt>
</td>
</tr></tbody></table>

**Nota da tentativa da cadeia**
O nota da tentativa da cadeia é definido como o total, a mais alta ou a última das pontuações ponderadas da tarefa, dependendo da configuração do método de classificação da tentativa da cadeia.

**Nota da cadeia**
A nota da cadeia é definida como a primeira, a última, a mais alta ou a média das classificações das tentativas da cadeia, dependendo da configuração do método de classificação da cadeia.

Finalmente, a nota é ponderada de acordo com o seguinte cálculo:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>nota da cadeia</tt>
</td>
<td align="center" valign="middle"><big><big>   X   </big></big></td>
<td align="center" valign="middle">
<tt>peso da avaliação</tt>
<tt>-----------</tt><br \\>
<tt>100</tt>
</td>
</tr></tbody></table>';
$string['assessmenthdr'] = 'Avaliação';
$string['attemptcount'] = 'Número de tentativas';
$string['attemptcount_help'] = 'Se ativado, esta configuração especifica o número mínimo ou máximo de tentativas que satisfaçam as condições de pontuação e contagem.

**>=** (maior ou igual que)
O número mínimo de tentativas que satisfaçam as condições de pontuação e contagem.

**<=** (menor ou igual que)
O número máximo de tentativas que satisfaçam as condições de pontuação e contagem.';
$string['attemptdelay'] = 'Tempo de espera entre tentativas';
$string['attemptdelay_help'] = 'Se ativado, esta configuração especifica o tempo de espera mínimo ou máximo após as tentativas que satisfazem as condições de pontuação e contagem.

**>=** (maior ou igual que)
O tempo de espera mínimo após as tentativas que satisfazem as condições de pontuação e contagem.

**<=** (menor ou igual que)
O tempo de espera máximo após as tentativas que satisfaçam as condições de pontuação e contagem.';
$string['attemptduration'] = 'Duração da tentativa';
$string['attemptduration_help'] = 'Se ativado, esta configuração especifica a duração máxima ou mínima das tentativas que satisfazem as condições de pontuação e contagem.

**>=** (maior ou igual que)
A duração mínima das tentativas que satisfaçam as condições de pontuação e contagem.

**<=** (menor ou igual que)
A duração máxima das tentativas que satisfaçam as condições de pontuação e contagem.';
$string['attempted'] = 'Tentada';
$string['attemptgrade'] = 'Nota da tentativa';
$string['attemptgrademethod'] = 'Método de avaliação da tentativa';
$string['attemptgrademethod_help'] = 'Esta configuração define como é calculada a nota de uma única tentativa nesta atividade de Cadeia de tarefas.

**Total**
: A nota da tentativa será definida como a soma ponderada das pontuações das tarefas.

**Mais alta**
: A nota da tentativa será definida como a pontuação ponderada mais alta das tarefas.

**Última**
: A nota da tentativa será definida como a pontuação ponderada da tarefa mais recente.

**Última (concluída)**
: A nota da tentativa será definida como a pontuação ponderada da tarefa mais recente com estado de "concluída". Outras pontuações de tarefas serão ignoradas.

**Última (expirada)**
: A nota da tentativa será definida como a pontuação ponderada da tarefa mais recente com estado de "concluída" ou "expirada". Outras pontuações de tarefas serão ignoradas.

**Última (abandonada)**
: A nota da tentativa será definida como a pontuação ponderada da tarefa mais recente com estado de "concluída",  "expirada" ou "abandonada". Tarefas com estado de "em progresso" serão ignoradas.';
$string['attemptlimit'] = 'Máximo de tentativas';
$string['attemptlimit_help'] = 'O número máximo de tentativas que um aluno pode ter nesta atividade Cadeia de tarefas';
$string['attemptnumber'] = 'Nº da tentativa';
$string['attempts'] = 'Tentativas';
$string['attemptsallowed'] = 'Tentativas permitidas';
$string['attemptscore'] = 'Pontuação da tentativa';
$string['attemptshdr'] = 'Restrições das tentativas';
$string['attemptsunlimited'] = 'Ilimitado';
$string['attempttasknow'] = 'Iniciar tentativa agora';
$string['attempttype'] = 'Tipo de tentativa';
$string['attempttype_help'] = 'Esta configuração especifica o tipo de tentativas que serão consideradas pela condição \'Número de tentativas\'.

**Qualquer tentativa**
Qualquer tentativa será considerada.

**Tentativas mais recentes**
Apenas as tentativas mais recentes serão consideradas.

**Tentativas consecutivas**
Qualquer bloco de tentativas consecutivas será considerado.';
$string['average'] = 'Média';
$string['averagegrade'] = 'Nota média';
$string['averagescore'] = 'Pontuação média';
$string['bodystyles'] = 'Estilos do corpo';
$string['bodystylesbackground'] = 'Cor de fundo e imagem';
$string['bodystylescolor'] = 'Cor do texto';
$string['bodystylesfont'] = 'Família e tipo de letra';
$string['bodystylesmargin'] = 'Margem esquerda e direita';
$string['cacherecords'] = 'Registos de cache da Cadeia de tarefas';
$string['cannotread'] = 'Não é possível ler o ficheiro (ou o ficheiro está vazio!): {$a}';
$string['canrestartchain'] = 'Seus resultados até agora serão guardados, mas se pretender repetir esta atividade novamente mais tarde, terá que começar do início.';
$string['canrestarttask'] = 'Os seus resultados até agora serão guardados e poderá repetir "{$a}" mais tarde.';
$string['canresumetask'] = 'Os seus resultados até agora serão guardados e poderá retomar "{$a}" mais tarde.';
$string['chain'] = 'Atividade Cadeia de tarefas';
$string['chainattempt'] = 'Tentativa da atividade';
$string['chainattemptnotinprogress'] = 'Tentativa em progresso';
$string['chainclosed'] = 'Esta atividade fechou em {$a}';
$string['chaingrade'] = 'Nota da cadeia';
$string['chainname_help'] = 'O nome desta atividade Cadeia de tarefas que será mostrado na página da disciplina';
$string['chainnotavailable'] = 'Esta tarefa só estará disponível para si {$a}.';
$string['chainrequirepasswordmessage'] = 'Para executar esta atividade necessita da senha';
$string['checks'] = 'Caixas';
$string['checksomeboxes'] = 'Por favor, marque algumas caixas';
$string['classreports'] = 'Relatórios';
$string['clearcache'] = 'Limpar a cache da Cadeia de tarefas';
$string['cleardetails'] = 'Limpar os detalhes da Cadeia de tarefas';
$string['clearedcache'] = 'A cache da Cadeia de tarefas foi limpa';
$string['cleareddetails'] = 'Os detalhes da Cadeia de tarefas foram limpos';
$string['clickreporting'] = 'Ativar relatórios de cliques';
$string['clickreporting_help'] = 'Se definida como \'Sim\', é criado um registo separado sempre que um botão de "Dica", "Pista" ou "caixa" for clicado. Isso permite que o professor possa visualizar um relatório bastante detalhado do estado da tarefa a cada clique. Caso contrário, apenas é mantido um registo por tentativa numa tarefa.';
$string['clues'] = 'Pistas';
$string['cnumber'] = 'Tentativa';
$string['columnlist'] = 'Lista de colunas {$a}';
$string['columnlistid'] = 'Mostrar colunas';
$string['columnlistid_help'] = 'Este menu permite que selecione o conjunto de colunas a mostrar nesta página';
$string['columnlistschain'] = 'Todas as listas de colunas da cadeia';
$string['columnlistschains'] = 'Listas de colunas para editar cadeias';
$string['columnliststask'] = 'Todas as listas de colunas de tarefas';
$string['columnliststasks'] = 'Listas de colunas para editar tarefas';
$string['completed'] = 'Concluída';
$string['completedalltasks_close'] = 'Se pretende terminar e fechar esta tentativa, clique no botão abaixo.<br /> Tenha em atenção que não poderá repetir tarefas nesta tentativa depois de estar fechada.';
$string['completedalltasks_redo'] = 'Se pretende refazer uma das tarefas desta atividade, clique no nome da tarefa da lista abaixo.';
$string['completedalltasks_title'] = 'Parabéns!<br />Concluiu todas as tarefas desta atividade.';
$string['completioncompleted'] = 'Requer o estado de concluída';
$string['completionmingrade'] = 'Requer nota mínima';
$string['completionpass'] = 'Requer nota de aprovação';
$string['completionwarning'] = 'Esses campos estão desativados se a nota limite para esta atividade for "Sem nota" ou a ponderação da nota for "Sem ponderação"';
$string['conditions'] = 'Condições';
$string['conditionscore'] = 'Pontuação da condição';
$string['conditionscore_help'] = 'Se ativado, esta configuração especifica a pontuação máxima ou mínima em que esta condição é verificada.

**>=** (maior ou igual a)
A pontuação mínima na qual esta condição é verificada

**<=** (menor ou igual a)
A pontuação máxima na qual esta condição é verificada';
$string['conditiontaskid'] = 'Tarefa alvo da condição';
$string['conditiontaskid_help'] = 'Esta configuração especifica a tarefa à qual esta pré-condição se refere.

**Tarefa anterior**
Essa condição refere-se à tarefa anterior dessa cadeia, de acordo com o número de ordem.

**Tarefa específica**
O professor pode selecionar uma tarefa específica à qual esta pré-condição se refere.
Para evitar confusão causada por tarefas com nomes idênticos, os números de ordem das tarefas são anexados aos nomes das tarefas.';
$string['configbodystyles'] = 'Por predefinição, os estilos do tema do Moodle irão substituir os estilos da atividade Cadeia de tarefas. No entanto, para todos os estilos aqui selecionados, os estilos da atividade Cadeia de tarefas, incluindo os estilos definidos nos ficheiros de origem da tarefa, como ficheiros Hot Potatoes, terão prioridade sobre os estilos do tema Moodle.';
$string['configenablecache'] = 'Manter uma cache de tarefas da Cadeia de tarefas pode acelerar drasticamente a entrega de tarefas aos alunos.';
$string['configenablecron'] = 'Especifique as horas no fuso horário do servidor em que pode ser executado o script cron da Cadeia de tarefas';
$string['configenablemymoodle'] = 'Esta configuração controla se as Cadeias de tarefas são listadas, ou não, no Painel do utilizador';
$string['configenableobfuscate'] = 'Ofuscar as strings de texto e URLs em código JavaScript torna mais difícil adivinhar respostas se for visualizado a origem da página HTML no navegador.';
$string['configenableswf'] = 'Permitir a incorporação de ficheiros SWF nas atividades Cadeia de tarefas. Se ativado, esta configuração substitui \'filter_mediaplugin_enable_swf\'.';
$string['configfile'] = 'Ficheiro de configuração';
$string['configfile_help'] = 'Se especificado, o ficheiro de configuração será usado quando o conteúdo do navegador for gerado a partir do ficheiro de origem.

A função exata do ficheiro de configuração depende do formato de saída, mas geralmente as configurações na configuração substituirão as do ficheiro de origem.

Ao usar o mesmo ficheiro de configuração para várias tarefas, as tarefas podem partilhar as mesmas mensagens, esquema de cores, estrutura ou comportamentos.

Para tarefas **Hot Potatoes**, o ficheiro de configuração é um ficheiro &quot;.cfg&quot;. Para tarefas **Qedoc**, esta configuração não é usada.';
$string['configfilenotfound'] = 'Ficheiro de configuração não encontrado: {$a}';
$string['configframeheight'] = 'Quando uma tarefa é mostrada numa janela, este valor é a altura da janela (em píxeis) que contém a barra de navegação do Moodle.';
$string['configlocation'] = 'Localização do ficheiro de configuração';
$string['configlocation_help'] = 'A localização do ficheiro de configuração.';
$string['configlockframe'] = 'Se ativar esta opção, a janela de navegação, se usada, será bloqueada para que não seja rolável, não possa ser redimensionado e não tenha limites.';
$string['configmaxeventlength'] = 'Se a atividade tiver uma data/hora de abertura e uma data/hora de fecho especificada, e a diferença entre os dois momentos for maior que o número de dias aqui especificado, serão adicionados, ao calendário da disciplina, dois eventos de calendário separados. Para durações mais curtas ou quando é especificado apenas uma vez, só um evento de calendário será adicionado. Se nenhum horário for especificado, nenhum evento do calendário será adicionado.';
$string['configstoredetails'] = 'Se ativar esta opção, os detalhes XML das tentativas (em bruto) nas tarefas da Cadeia de tarefas serão armazenados na tabela \'<em>taskchain_details</em>\'. Isto permite que as tentativas da tarefa possam ser reavaliadas no futuro para refletir as alterações no sistema de pontuação da tarefa da Cadeia de tarefas. No entanto, ativar esta opção num site em produção fará com que a tabela \'<em>taskchain_details</em>\' "cresça" rapidamente.';
$string['confirmdeleteallpostconditions'] = 'Tem a certeza de que pretende apagar TODAS as pós-condições?';
$string['confirmdeleteallpreconditions'] = 'Tem a certeza de que pretende apagar TODAS as pré-condições?';
$string['confirmdeleteattempts'] = 'Tem a certeza de que pretende apagar as tentativas selecionadas?';
$string['confirmdeletechainscolumnlist'] = 'Tem a certeza de que pretende apagar esta lista de colunas da cadeia: {$a}?';
$string['confirmdeletechainscolumnlists'] = 'Tem a certeza de que pretende apagar TODAS listas de colunas da cadeia?';
$string['confirmdeletepostcondition'] = 'Tem a certeza de que pretende apagar esta pós-condição?';
$string['confirmdeleteprecondition'] = 'Tem a certeza de que pretende apagar esta pré-condição?';
$string['confirmdeletetask'] = 'Tem a certeza de que pretende apagar esta tarefa?';
$string['confirmdeletetaskscolumnlist'] = 'Tem a certeza de que pretende apagar esta lista de colunas da tarefa: {$a}?';
$string['confirmdeletetaskscolumnlists'] = 'Tem a certeza de que pretende apagar TODAS listas de colunas da tarefa?';
$string['confirmregradeattempts'] = 'Tem a certeza de que pretende reavaliar as tentativas selecionadas?';
$string['confirmstop'] = 'Tem a certeza de que pretende sair desta página?';
$string['consecutiveattempts'] = 'Tentativas consecutivas';
$string['correct'] = 'Correto';
$string['couldnotinsertsubmissionform'] = 'Não foi possível inserir o formulário de submissão';
$string['d_index'] = 'Índice de Discriminação';
$string['delay'] = 'Tempo de espera';
$string['delay1'] = 'Tempo de espera 1';
$string['delay1_help'] = 'O intervalo de tempo que o aluno tem de aguardar entre a primeira e a segunda tentativa.';
$string['delay1summary'] = 'Tempo de espera entre a primeira e segunda tentativa';
$string['delay2'] = 'Tempo de espera 2';
$string['delay2_help'] = 'O intervalo de tempo que o aluno tem de aguardar entre tentativas, após a segunda tentativa.';
$string['delay2summary'] = 'Tempo de espera entre tentativas posteriores';
$string['delay3'] = 'Tempo de espera 3';
$string['delay3_help'] = 'Esta configuração especifica o intervalo de tempo entre o término da tarefa e o retorno do controlo da visualização ao Moodle.

**Usar intervalo de tempo específico**
: o controlo será devolvido ao Moodle após a duração de tempo especificada.

**Usar as configurações do ficheiro de origem/modelo**
: o controlo será devolvido ao Moodle após os segundos especificados no ficheiro de origem ou nos ficheiros de modelo para este formato de saída.

**Esperar até o aluno clicar em OK**
: o controlo será devolvido ao Moodle depois do aluno clicar no botão OK da mensagem de conclusão da tarefa.

**Não continuar automaticamente**
: o controlo não será devolvido ao Moodle após a conclusão da tarefa. O aluno poderá sair da página de tarefas.

Tenha em atenção que os resultados da tarefa são sempre devolvidos ao Moodle imediatamente a tarefa ser concluída ou abandonada, independentemente desta configuração.';
$string['delay3afterok'] = 'Esperar que o aluno clique em OK';
$string['delay3disable'] = 'Não continuar automaticamente';
$string['delay3specific'] = 'Usar intervalo de tempo específico';
$string['delay3summary'] = 'Tempo de espera após o fim da tarefa';
$string['delay3template'] = 'Usear as configurações do ficheiro de origem/modelo';
$string['deleteallattempts'] = 'Apagar todas as tentativas';
$string['deleteallcolumnlistschain'] = 'Apagar TODAS as listas de colunas da cadeia';
$string['deleteallcolumnliststask'] = 'Apagar TODAS as listas de colunas da tarefa';
$string['deleteallpostconditions'] = 'Apagar TODAS as pós-condições';
$string['deleteallpreconditions'] = 'Apagar TODAS as pré-condições';
$string['deleteattempts'] = 'Apagar tentativas';
$string['deletecolumnlistchain'] = 'Apagar a lista de colunas da cadeia: {$a}';
$string['deletecolumnlisttask'] = 'Apagar a lista de colunas da tarefa: {$a}';
$string['deletepostcondition'] = 'Apagar uma pós-condição';
$string['deleteprecondition'] = 'Apagar uma pré-condição';
$string['deletetasks'] = 'Apagar as tarefas selecionadas';
$string['detailsrecords'] = 'Registos de detalhes da Cadeia de tarefas';
$string['discarddetails'] = 'Descartar detalhes';
$string['discarddetails_help'] = 'Se for definida como \'Sim\', os detalhes XML de cada tentativa nesta tarefa serão descartados, caso contrário, os detalhes XML serão armazenados na base de dados para possível referência futura';
$string['duration'] = 'Duração';
$string['duringattempt'] = 'Durante a tentativa';
$string['editchains'] = 'Editar cadeias';
$string['editcolumnlistschain'] = 'Editar colunas das Cadeias de tarefas';
$string['editcolumnliststask'] = 'Editar colunas para tarefas da Cadeia de tarefas';
$string['edittasks'] = 'Editar tarefas';
$string['enablecache'] = 'Ativar cache da Cadeia de tarefas';
$string['enablecron'] = 'Ativar cron da Cadeia de tarefas';
$string['enablemymoodle'] = 'Mostrar as Cadeias de tarefas no Painel do utilizador';
$string['enableobfuscate'] = 'Ativar ofuscação de texto e leitores de multimédia';
$string['enableswf'] = 'Permitir a incorporação de ficheiros SWF em atividades Cadeias de tarefas';
$string['endofchain'] = 'Fim da cadeia';
$string['entry_attempts'] = 'Tentativas';
$string['entry_dates'] = 'Datas';
$string['entry_grading'] = 'Avaliação';
$string['entry_title'] = 'Nome da cadeia como título';
$string['entrycm'] = 'Atividade anterior';
$string['entrycm_help'] = 'Esta configuração especifica uma atividade do Moodle e uma nota mínima para essa atividade que deve ser obtida antes que esta atividade Cadeia de tarefas possa ser executada.

O professor pode selecionar uma atividade específica, ou uma das seguintes configurações de uso geral:

* Atividade anterior nesta disciplina
* Atividade anterior nesta secção
* Atividade anterior nesta disciplina já avaliada
* Atividade anterior nesta secção já avaliada
* Cadeia de tarefas anterior nesta disciplina
* Cadeia de tarefas anterior nesta secção';
$string['entrycmcourse'] = 'Atividade anterior nesta disciplina';
$string['entrycmsection'] = 'Atividade anterior nesta secção da disciplina';
$string['entrycompletionwarning'] = 'Antes de iniciar esta atividade, deve observar {$a}.';
$string['entrygrade'] = 'Nota da atividade anterior';
$string['entrygradedcourse'] = 'Atividade anterior nesta disciplina já avaliada';
$string['entrygradedsection'] = 'Atividade anterior nesta secção da disciplina já avaliada';
$string['entrygradewarning'] = 'Não pode começar esta atividade antes de obter {$a->entrygrade}% em {$a->entryactivity}. Até ao momento, sua nota para esta atividade é {$a->usergrade}%';
$string['entryoptions'] = 'Opções da página de entrada';
$string['entryoptions_help'] = 'Estas caixas de seleção ativam e desativam a exibição de itens na página de entrada da Cadeia de tarefas.

**Nome da cadeia como título**
: se ativado, o nome da cadeia será mostrado como o título da página de entrada.

**Classificação**
: se ativado, as informações da avaliação da Cadeia de tarefas serão mostradas na página de entrada.

**Datas**
: se ativado, as datas de início e de fim serão mostradas na página de entrada.

**Tentativas**
: se ativado, na página de entrada, será mostrada uma tabela com os detalhes das tentativas anteriores de um utilizador nesta Cadeia de tarefas. As tentativas que podem ser retomadas terão um botão de reiniciar na coluna mais à direita.';
$string['entrypage'] = 'Mostrar página de entrada';
$string['entrypage_help'] = 'Deve ser mostrados aos alunos uma página de entrada antes de iniciarem a atividade Cadeia de tarefas?

**Sim**
: será mostrada uma página de entrada aos alunos antes de iniciar a Cadeia de tarefas. O conteúdo da página de entrada é determinado pelas opções da página de entrada da Cadeia de tarefas.

**Não**
: não será mostrada aos alunos a página de entrada e iniciarão Cadeia de tarefas imediatamente.

A página de entrada é sempre mostrada ao professor, para fornecer acesso aos relatórios e editar a página das tarefas';
$string['entrypagehdr'] = 'Página de entrada';
$string['entrytaskchaincourse'] = 'Cadeia de tarefas anterior nesta disciplina';
$string['entrytaskchainsection'] = 'Cadeia de tarefas anterior nesta secção da disciplina';
$string['entrytext'] = 'Texto da página de entrada';
$string['error_formhelperclassnotfound'] = 'Classe de ajuda do formulário da Cadeia de tarefas não encontrado: {$a}';
$string['error_formhelperfilenotfound'] = 'Ficheiro de ajuda do formulário da Cadeia de tarefas não encontrado: {$a}';
$string['error_getprivateproperty'] = 'Não é possível aceder à propriedade privada {$a->property} de {$a->class}. Em alternativa, utilize o método {$a->method}.';
$string['error_getunknownproperty'] = 'Não é possível aceder à propriedade desconhecida, {$a->property}, de {$a->class}.';
$string['error_insertrecord'] = 'Não foi possível inserir o registo na tabela da base de dados: {$a}';
$string['error_missingclass'] = 'Classe de objetos não encontrada: {$a}';
$string['error_nocolumns'] = 'Selecione alguma(s) coluna(s)';
$string['error_nocourseid'] = 'Sem ID da disciplina';
$string['error_nodatabaseinfo'] = 'Nenhuma informação da base de dados está disponível';
$string['error_noinputparameters'] = 'Nenhum parâmetro de entrada';
$string['error_norecordsfound'] = 'Nenhum registo encontrado';
$string['error_recordclassnotfound'] = 'Registo de Cadeia de tarefas não encontrado: {$a}';
$string['error_setprivateproperty'] = 'Não é possível modificar diretamente a propriedade privada {$a->property} de {$a->class}. Em alternativa, utilize o método {$a->method}.';
$string['error_setpropertydirectly'] = 'Não é possível modificar diretamente a propriedade {$a->property} de {$a->class}. Em alternativa, utilize o método {$a->method}.';
$string['error_setunknownproperty'] = 'Não é possível modificar uma propriedade desconhecida, {$a->property}, de {$a->class}.';
$string['error_unrecognizedpageid'] = 'ID de página da Cadeia de tarefas não reconhecido: {$a}';
$string['error_updaterecord'] = 'Não foi possível atualizar o registo na tabela da base de dados: {$a}';
$string['event_attempt_started'] = 'Tentativa da Cadeia de tarefas iniciada';
$string['event_attempt_started_description'] = 'O utilizador com ID "{$a->userid}" iniciou uma tentativa de resolução de uma tarefa da atividade Cadeia de tarefas com ID de módulo da disciplina "{$a->cmid}"';
$string['event_attempt_started_explanation'] = 'Um utilizador acabou de iniciar uma tentativa de uma atividade Cadeia de tarefas';
$string['event_attempt_submitted'] = 'Tentativa da Cadeia de tarefas enviada';
$string['event_attempt_submitted_description'] = 'O utilizador com ID "{$a->userid}" submeteu uma tentativa de resolução de uma tarefa da atividade \'Cadeia de tarefas\' com ID de módulo da disciplina "{$a->cmid}"';
$string['event_attempt_submitted_explanation'] = 'Um utilizador acabou de enviar uma tentativa de uma atividade Cadeia de tarefas';
$string['event_base'] = 'Evento HotPot detetado';
$string['event_base_description'] = 'O utilizador com ID "{$a->userid}" iniciou um evento na atividade Cadeia de tarefas com ID de módulo da disciplina "{$a->cmid}"';
$string['event_base_explanation'] = 'Foi detetado um evento pelo módulo Cadeia de tarefas';
$string['event_chains_edited'] = 'Cadeias editadas';
$string['event_chains_edited_description'] = 'O utilizador com ID "{$a->userid}" editou todas as Cadeia de tarefas na disciplina com ID "{$a->cmid}"';
$string['event_chains_edited_explanation'] = 'Um utilizador acabou de editar todas as Cadeias de tarefas numa disciplina';
$string['event_columnlists_edited'] = 'Lista de colunas de Cadeia de tarefas editada';
$string['event_columnlists_edited_description'] = 'O utilizador com ID "{$a->userid}" editou a lista de colunas na atividade Cadeia de tarefas com ID de módulo da disciplina "{$a->cmid}"';
$string['event_columnlists_edited_explanation'] = 'Um utilizador acabou de editar a lista de colunas de uma atividade Cadeia de tarefas';
$string['event_condition_edited'] = 'Condição de Cadeia de tarefas editada';
$string['event_condition_edited_description'] = 'O utilizador com ID "{$a->userid}" editou uma condição na atividade Cadeia de tarefas com ID de módulo da disciplina "{$a->cmid}"';
$string['event_condition_edited_explanation'] = 'Um utilizador acabou de editar uma condição de uma atividade Cadeia de tarefas';
$string['event_report_viewed'] = 'Visualizado relatório da Cadeia de tarefas';
$string['event_report_viewed_description'] = 'O utilizador com ID "{$a->userid}" visualizou um relatório na atividade Cadeia de tarefas com ID de módulo da disciplina "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'Um utilizador acabou de ver um relatório das tentativas de uma atividade Cadeia de tarefas';
$string['event_task_edited'] = 'Tarefa de Cadeia de tarefas editada';
$string['event_task_edited_description'] = 'O utilizador com ID "{$a->userid}" editou uma tarefa na atividade Cadeia de tarefas com ID de módulo da disciplina "{$a->cmid}"';
$string['event_task_edited_explanation'] = 'Um utilizador acabou de editar uma tarefa de uma atividade Cadeia de tarefas';
$string['event_tasks_edited'] = 'Tarefas de Cadeia de tarefas editadas';
$string['event_tasks_edited_description'] = 'O utilizador com ID "{$a->userid}" editou todas as tarefas na atividade Cadeia de tarefas com ID de módulo da disciplina "{$a->cmid}"';
$string['event_tasks_edited_explanation'] = 'Um utilizador acabou de editar todas as tarefas de uma Cadeia de tarefas';
$string['exit_areyouok'] = 'Olá, ainda está ai alguém?';
$string['exit_attemptscore'] = 'Pontuação da tentativa: {$a}';
$string['exit_course'] = 'Disciplina';
$string['exit_course_text'] = 'Ir para a página principal da disciplina';
$string['exit_encouragement'] = 'Estímulo';
$string['exit_excellent'] = 'Excelente!';
$string['exit_feedback'] = 'Feedback da página de saída';
$string['exit_feedback_help'] = 'Essas opções ativam e desativam a exibição de itens de feedback na página de saída da Cadeia de tarefas.

** Nome da cadeia como título**
: se ativado, o nome da cadeia será mostrado como o título da página de saída.

**Estímulo**
: se ativado, será mostrado uma mensagem de estímulo na página de saída. O encorajamento depende da avaliação obtida:
: **> 90% **: Excelente!
: **> 60% **: Muito bom
: **> 0% **: Boa tentativa
: ** = 0% **: O que se passa?

**Avaliação da tentativa atual**
: se ativado, a nota da tentativa da cadeia que acabou de ser concluída será mostrada na página de saída.

**Nota total**
: se ativado, a nota da Cadeia de tarefas será mostrada na página de saída.

Além disso, se o método de classificação for a nota mais alta, será mostrada uma mensagem para informar o utilizador se a tentativa mais recente foi igual ou melhor que a anterior.';
$string['exit_goodtry'] = 'Boa tentativa!';
$string['exit_grades'] = 'Notas';
$string['exit_grades_text'] = 'Notas obtidas até agora nesta disciplina';
$string['exit_index'] = 'Índice';
$string['exit_index_text'] = 'Ir para o índice das atividades';
$string['exit_links'] = 'Hiperligações da página de saída';
$string['exit_links_help'] = 'Estas opções ativam e desativam a exibição de determinadas hiperligações de navegação na página de saída da Cadeia de tarefas.

**Repetir**
: se nesta Cadeia de tarefas forem permitidas várias tentativas e o aluno ainda tiver algumas tentativas, será mostrada uma hiperligação para permitir que o aluno tente novamente a Cadeia de tarefas

**Índice**
: se ativado, será mostrada uma hiperligação para a página de índice da Cadeia de tarefas.

**Disciplina**
: se ativado, será mostrada uma hiperligação para a página da disciplina.

**Notas**
: se ativado, será mostrada uma hiperligação para a pauta.';
$string['exit_next'] = 'Próxima';
$string['exit_next_text'] = 'Executar a próxima tarefa';
$string['exit_nograde'] = 'Concluiu todas as tarefas desta atividade.';
$string['exit_retry'] = 'Repetir';
$string['exit_retry_text'] = 'Repetir esta atividade';
$string['exit_taskchaingrade'] = 'Nota desta atividade: {$a}';
$string['exit_taskchaingrade_average'] = 'Nota média até agora para esta atividade: {$a}';
$string['exit_taskchaingrade_highest'] = 'Nota mais alta até agora para esta atividade: {$a}';
$string['exit_taskchaingrade_highest_equal'] = 'Igualou o seu melhor resultado anterior nesta atividade!';
$string['exit_taskchaingrade_highest_previous'] = 'Nota mais alta anterior para esta atividade: {$a}';
$string['exit_taskchaingrade_highest_zero'] = 'Nesta atividade, ainda não pontuou mais do que {$a}';
$string['exit_welldone'] = 'Muito bem!';
$string['exit_whatnext_0'] = 'O que pretende fazer a seguir?';
$string['exit_whatnext_1'] = 'Escolha o que pretende fazer...';
$string['exit_whatnext_default'] = 'Por favor, escolha um dos seguintes:';
$string['exitcm'] = 'Próxima atividade';
$string['exitcm_help'] = 'Esta configuração especifica uma atividade do Moodle a ser executada após a conclusão dessa atividade Cadeia de tarefas. A nota opcional é a nota mínima necessária para que nesta Cadeia de tarefas a próxima atividade seja mostrada.

O professor pode selecionar uma atividade específica ou uma das seguintes configurações gerais:

* Próxima atividade nesta disciplina
* Próxima atividade nesta secção
* Próxima atividade nesta disciplina já avaliada
* Próxima atividade nesta secção já avaliada
* Próxima Cadeia de tarefas nesta disciplina
* Próximo Cadeia de tarefas nesta secção

Se outras opções da página de saída estiverem desativadas e o aluno tiver conseguido a nota necessária nesta atividade Cadeia de tarefas, a próxima atividade será mostrada imediatamente. Caso contrário, será mostrada ao aluno uma hiperligação para a próxima atividade, na qual ele poderá clicar quando estiver pronto.';
$string['exitcmcourse'] = 'Próxima atividade nesta disciplina';
$string['exitcmsection'] = 'Próxima atividade nesta secção da disciplina';
$string['exitgrade'] = 'Nota da próxima tarefa';
$string['exitgradedcourse'] = 'Próxima atividade já avaliada nesta disciplina';
$string['exitgradedsection'] = 'Próxima atividade já avaliada nesta secção da disciplina';
$string['exitoptions'] = 'Opções de saída';
$string['exitpage'] = 'Mostrar página de saída';
$string['exitpage_help'] = 'Após a conclusão da tarefa da Cadeia de tarefas, deve ser mostrada uma página de saída?

**Sim**
: os alunos irão ver uma página de saída quando a Cadeia de tarefas estiver concluída. O conteúdo da página de saída é determinado pelas configurações do feedback e dos links da página de saída da Cadeia de tarefas.

**Não**
: os alunos não irão ver a página de saída. Em vez disso, irão imediatamente para a próxima atividade ou retornarão à página da disciplina.';
$string['exitpagehdr'] = 'Página de saída';
$string['exittaskchaincourse'] = 'Próxima Cadeia de tarefas nesta disciplina';
$string['exittaskchainsection'] = 'Próxima Cadeia de tarefas nesta secção da disciplina';
$string['exittext'] = 'Texto da página de saída';
$string['feedback'] = 'Feedback';
$string['feedbackdiscuss'] = 'Discutir esta tarefa num fórum';
$string['feedbackformmail'] = 'Formulário de feedback';
$string['feedbackmoodleforum'] = 'Fórum do Moodle';
$string['feedbackmoodlemessaging'] = 'Mensagem do Moodle';
$string['feedbacknone'] = 'Nenhum';
$string['feedbacksendmessage'] = 'Envie uma mensagem ao seu professor';
$string['feedbackshort'] = 'F';
$string['feedbackwebpage'] = 'Página Web';
$string['filename'] = 'Nome do ficheiro';
$string['filetype'] = 'Tipo de ficheiro';
$string['filteredchains'] = 'Cadeia de tarefas que correspondam aos seguintes filtros:';
$string['filteredtasks'] = 'Tarefas que correspondem aos filtros:';
$string['finishandclose'] = 'Terminar e fechar a tentativa';
$string['firstattempt'] = 'Primeira tentativa';
$string['fix_boms'] = 'Corrigir BOMs';
$string['fix_installxml'] = 'Corrigir db/install.xml';
$string['forceplugins'] = 'Forçar módulos de multimédia';
$string['forceplugins_help'] = 'Se ativar esta opção, os leitores de multimédia compatíveis com o Moodle reproduzirão ficheiros, tais como, avi, mpeg, mpg, mp3, mov e wmv. Caso contrário, o Moodle não alterará as configurações de nenhum leitor de multimédia na tarefa.';
$string['frameheight'] = 'Altura da janela';
$string['giveup'] = 'Abandonar';
$string['grade'] = 'Nota';
$string['gradeignore'] = 'Ignorar vazias';
$string['gradeignore_help'] = 'Esta configuração especifica se tentativas inválidas, ou seja, tentativas abandonadas com uma nota de 0%, são ignoradas ou incluídas quando são calculadas as notas dos alunos para esta Cadeia de tarefas.

**Sim**
: Tentativas vazias são *ignoradas* durante o cálculo das notas para esta atividade Cadeia de tarefas.

**Não**
: Tentativas vazias *não são ignoradas*, isto é, são *incluídas* no cálculo das notas para esta atividade Cadeia de tarefas.

Tentativas vazias ocorrem quando um aluno inicia uma atividade Cadeia de tarefas, mas não tenta responder a qualquer pergunta em nenhuma tarefa antes de sair. Estas tentativas podem ter um impacto significativo na nota quando o método de classificação é Média, Primeira ou Última. Em tais situações, o professor pode decidir que, quando a nota é calculada, é melhor ignorar as tentativas inválidas.';
$string['gradelimit'] = 'Nota limite';
$string['gradelimit_help'] = 'As classificações para as tentativas da cadeia são ajustadas para uma escala entre 0 a um limite de classificação.

A nota máxima para uma atividade de Cadeia de tarefas no pauta do Moodle é calculada da seguinte forma:

: nota máxima x (ponderação / 100)';
$string['grademethod'] = 'Método de avaliação';
$string['grademethod_help'] = 'Esta configuração define como é calculada a nota da Cadeia de tarefas a partir das notas da tentativa.

**Pontuação mais alta**
: a nota da atividade é definida como a nota mais alta das tentativas nesta atividade Cadeia de tarefas.

**Pontuação média**
: a nota será definida como a nota média das tentativas nesta atividade Cadeia de tarefas.

**Primeira tentativa**
: a nota será definida como a nota da primeira tentativa nesta atividade Cadeia de tarefas.

**Última tentativa**
: a nota será definida como a nota da última tentativa nesta atividade Cadeia de tarefas.';
$string['gradeweighting'] = 'Ponderação da nota';
$string['gradeweighting_help'] = 'As notas para esta atividade Cadeia de tarefas serão escaladas para este número na pauta do Moodle.';
$string['groupid'] = 'Grupo';
$string['groupid_help'] = 'O grupo de utilizadores Moodle ao qual esta condição se aplica';
$string['guestsno'] = 'Os visitantes não podem ver ou tentar atividades Cadeia de tarefas';
$string['highestgrade'] = 'Nota mais alta';
$string['highestscore'] = 'Pontuação mais alta';
$string['highesttaskscore'] = 'Pontuação mais alta da tarefa';
$string['hints'] = 'Dicas';
$string['ignored'] = 'Ignorada';
$string['incorrecttask'] = 'Tarefa respondida incorretamente';
$string['inprogress'] = 'Em progresso';
$string['isgreaterthan'] = 'é maior que';
$string['islessthan'] = 'é menor que';
$string['lastaccess'] = 'Último acesso';
$string['lastattempt'] = 'Última tentativa';
$string['lasttaskabandoned'] = 'Pontuação da última tarefa abandonada';
$string['lasttaskattempted'] = 'Pontuação da última tarefa tentada';
$string['lasttaskcompleted'] = 'Pontuação da última tarefa concluída';
$string['lasttasktimedout'] = 'Pontuação da última tarefa expirada';
$string['lockframe'] = 'Bloquear janela';
$string['manualcompletion'] = 'Conclusão manual';
$string['manualcompletion_help'] = 'Esta configuração determina a ação a ser executada quando todas as tarefas forem concluídas, mas as pós-condições na tarefa final NÃO especificam o que fazer a seguir.

**Não**
: Depois que todas as tarefas forem concluídas, a tentativa de cadeia será marcada automaticamente como concluída e os alunos não poderão refazer as tarefas.

**Sim**
: Depois de concluir todas as tarefas, os alunos poderão refazer as tarefas e clicar manualmente num botão para concluir a tentativa da cadeia.';
$string['maxeventlength'] = 'Número máximo de dias para um único evento do calendário';
$string['maximum'] = '&lt;=';
$string['mediafilter_moodle'] = 'Filtros multimédia predefinidos do Moodle';
$string['mediafilter_taskchain'] = 'Filtro multimédia da Cadeia de tarefas';
$string['menuofalltasks'] = 'Menu de todas as tarefas';
$string['menuofalltasksone'] = 'Menu de todas as tarefas (hiperligação)';
$string['menuofnexttasks'] = 'Menu das próximas tarefas';
$string['menuofnexttasksone'] = 'Menu das próximas tarefas (hiperligação)';
$string['migratingfiles'] = 'A migrar ficheiros de tarefas da Cadeia de tarefas';
$string['migratinglogs'] = 'A migrar ficheiros de relatórios da Cadeia de tarefas';
$string['minimum'] = '&gt;=';
$string['missingsourcetype'] = 'Está em falta o tipo de origem do registo da Cadeia de tarefas';
$string['mods_help'] = '<img src="http://localhost/24/mod/taskchain/icon.gif" alt="" /> **Cadeia de tarefas**

O módulo Cadeia de tarefas permite que os professores distribuam materiais de aprendizagem interativos via Moodle e visualizem detalhes das respostas dos alunos.
Os materiais são criados no computador do professor com software específico, tal como: <a href="http://web.uvic.ca/hrd/halfbaked/" target="_blank">Hot Potatoes</a> e <a href="http://www.qedoc.org/" target="_blank">Qedoc</a>, e depois são carregado para uma disciplina Moodle.

Depois dos alunos terem tentado as tarefas, estão disponíveis vários relatórios que mostram como as perguntas individuais foram respondidas e algumas tendências estatísticas nas pontuações.';
$string['modulename'] = 'Cadeia de tarefas';
$string['modulename_help'] = 'O módulo Cadeia de tarefas permite que os professores distribuam materiais de aprendizagem interativos aos seus alunos via Moodle, assim como, visualizar relatórios das respostas e resultados dos alunos.

Uma atividade Cadeia de tarefas simples consiste numa página de entrada (opcional), uma cadeia de tarefas e uma página de saída (opcional). Cada tarefa pode ser uma página estática da Web ou uma página interativa da Web que disponibiliza conteúdos aos alunos, tais como texto, áudio e vídeo, e regista as suas respostas. As tarefas são criadas no computador do professor e, em seguida, enviada para o Moodle.

O professor pode definir caminhos de aprendizagem através de uma cadeia, adicionando pré-condições e pós-condições às tarefas. Uma tarefa não pode ser executada até que todas as pré-condições tenham sido cumpridas. Após a conclusão da tarefa, as pós-condições definem o que é mostrado ao aluno.

Uma atividade Cadeia de tarefas pode conter tarefas criadas com um dos seguinte software de autor:

* Hot Potatoes
* Qedoc
* Xerte
* iSpring
* qualquer editor de HTML';
$string['modulename_link'] = 'mod/taskchain/view';
$string['modulenameplural'] = 'Cadeias de tarefas';
$string['movetasks'] = 'Mover as tarefas selecionadas';
$string['myattempts'] = 'Minhas tentativas';
$string['name'] = 'Nome';
$string['name_help'] = 'Texto específico que é mostrado aos alunos';
$string['nameadd'] = 'Nome';
$string['nameadd_help'] = 'O nome pode ser um texto específico inserido pelo professor ou pode ser gerado automaticamente.

**Obter do ficheiro de origem**
O nome será extraído do ficheiro de origem.

**Usar o nome do ficheiro de origem**
O nome do ficheiro de origem será usado como o nome.

**Usar o caminho do ficheiro de origem**
O caminho do ficheiro de origem será usado como o nome.
Todas as barras no caminho do ficheiro serão substituídas por espaços.

**Texto específico**
O texto específico inserido pelo professor será usado como nome.';
$string['navigation'] = 'Navegação';
$string['navigation_embed'] = 'Página Web incorporada';
$string['navigation_frame'] = 'Janela de navegação Moodle';
$string['navigation_give_up'] = 'Simples botão &quot;Abandonar&quot; button';
$string['navigation_help'] = 'Esta configuração especifica a navegação usada na tarefa:

**Barra de navegação do Moodle**
: a barra de navegação do Moodle será mostrada na mesma janela da tarefa no topo da página

**Janela de navegação do Moodle**
: a barra de navegação do Moodle será mostrada numa janela separada no topo da tarefa

**Página Web incorporada**
: a barra de navegação do Moodle será mostrada com a tarefa incorporada na janela

**Auxiliares de navegação originais**
: a tarefa será mostrada com os botões de navegação, se houver, definidos na tarefa

**Um único botão "Abandonar" **
: a tarefa será mostrada com um único botão "Abandonar" no topo da página

**Nenhum**
: a tarefa será mostrada sem qualquer ajuda de navegação, por isso, quando todas as perguntas foram respondidas corretamente, dependendo da configuração de "Mostrar próxima tarefa?", o Moodle retornará à página da disciplina ou mostrará a próxima tarefa';
$string['navigation_moodle'] = 'Barras de navegação padrão do Moodle (superior e lateral)';
$string['navigation_none'] = 'Nenhum';
$string['navigation_original'] = 'Auxiliares de navegação originais';
$string['navigation_topbar'] = 'Apenas a barra de navegação do Moodle (sem barras laterais)';
$string['next1task'] = 'Próxima tarefa';
$string['next2task'] = 'Saltar a próxima tarefa';
$string['next3task'] = 'Saltar 2 tarefas';
$string['next4task'] = 'Saltar 3 tarefas';
$string['next5task'] = 'Saltar 4 tarefas';
$string['nexttaskid'] = 'Próxima tarefa';
$string['nexttaskid_help'] = 'Esta configuração especifica a tarefa a ser mostrada se a pós-condição for verificada.

**Mesma tarefa**
Mostrar a tarefa que acaba de ser concluída

**Próxima tarefa**
Mostrar a próxima tarefa nesta cadeia, de acordo com o número de ordem

**Ignorar tarefa**
Mostrar a tarefa após a próxima tarefa, de acordo com o número de ordem

**Tarefa anterior**
Mostrar a tarefa anterior nesta cadeia, de acordo com o número de ordem

**Tarefa não visualizada**
Mostrar uma tarefa desta cadeia que o utilizador atual ainda não viu.

**Tarefa não respondida**
Mostrar uma tarefa desta cadeia que o utilizador atual não viu
ou se viu, mas ainda não respondeu a qualquer uma das perguntas da tarefa.

**Tarefa respondida incorretamente**
Mostrar uma tarefa que ainda não foi respondida corretamente
isto é, uma tarefa para a qual a pontuação não é 100%.

**Tarefa aleatória**
Mostrar uma tarefa aleatória desta cadeia.
Já pode ter havido tentativas de conclusão da tarefa.

**Menu das próximas tarefas**
Mostrar um menu das tarefas desta cadeia que, de acordo com as pré-condições e outras restrições de acesso para as tarefas, estão disponíveis para o aluno

**Menu de todas as tarefas**
Mostrar um menu com todas as tarefas desta cadeia.
As tarefas disponíveis para os alunos terão hiperligação para o início da tarefa.
Tarefas que não estão disponíveis não terão esta hiperligação.

**Fim da cadeia**
Chegou ao final da cadeia. O estado da cadeia será definido como concluída e, dependendo das configurações da página de saída da cadeia, ao aluno será mostrada a página de saída, a próxima atividade ou a página inicial da disciplina.

**Tarefa específica**
O professor também pode selecionar uma tarefa específica como a próxima tarefa.
Para evitar confusão causada por tarefas com nomes idênticos,
os números de ordem das tarefas são anexados aos nomes das tarefas.';
$string['noactivity'] = 'Sem atividade';
$string['nograde'] = 'Sem nota';
$string['nolastchainattempt'] = 'Não foi encontrado o registo da tentativa anterior da cadeia';
$string['nolasttaskattempt'] = 'Não foi encontrado o registo da tentativa anterior da tarefa';
$string['nomorechainattempts'] = 'Já não tem mais tentativas para esta atividade';
$string['nomoretaskattempts'] = 'Já não tem mais tentativas para esta tarefa';
$string['noresponses'] = 'Não foi encontrada qualquer informação sobre perguntas e respostas individuais.';
$string['noreview'] = 'Não tem permissão para ver os detalhes desta tentativa da tarefa.';
$string['noreviewafterclose'] = 'Esta tarefa foi encerrada. Já não tem permissão para visualizar os detalhes desta tentativa da tarefa.';
$string['noreviewbeforeclose'] = 'Não tem permissão para visualizar os detalhes desta tentativa da tarefa antes de {$a}';
$string['noscore'] = 'Sem pontuação';
$string['nosourcefilesettings'] = 'No registo da cadeia de tarefas está em falta informação do ficheiro de origem';
$string['notaskchains'] = 'Nenhuma cadeia de tarefas foi encontrada';
$string['notasksforyou'] = 'De momento, não existem tarefas para si.';
$string['notasksinchain'] = 'Não existem tarefas nesta Cadeia de tarefas';
$string['notattemptedyet'] = 'Sem tentativas';
$string['notavailable'] = 'Esta tarefa, de momento, não está disponível para si.';
$string['notendswith'] = 'não termina em';
$string['notisempty'] = 'não está vazio';
$string['notisequalto'] = 'não é igual a';
$string['notstartswith'] = 'não começa com';
$string['or'] = 'ou';
$string['orless'] = '{$a} (ou menos)';
$string['ormore'] = '{$a} (ou mais)';
$string['outputformat'] = 'Formato de saída';
$string['outputformat_best'] = 'Melhor';
$string['outputformat_help'] = 'O formato de saída especifica como o conteúdo será apresentado ao aluno.

Os formatos de saída disponíveis dependem do tipo do ficheiro de origem. Alguns tipos de ficheiros de origem têm apenas um formato de saída, enquanto outros tipos de ficheiro de origem possuem vários formatos de saída.

A "melhor" configuração mostrará o conteúdo no formato de saída ideal para o navegador do aluno.';
$string['outputformat_hp_6_jcloze_html'] = 'JCloze (v6) desde html';
$string['outputformat_hp_6_jcloze_html_dropdown'] = 'DropDown desde html';
$string['outputformat_hp_6_jcloze_html_findit_a'] = 'FindIt (a) desde HP6 JCloze html';
$string['outputformat_hp_6_jcloze_html_findit_b'] = 'FindIt (b) desde HP6 JCloze html';
$string['outputformat_hp_6_jcloze_html_jgloss'] = 'JGloss desde html';
$string['outputformat_hp_6_jcloze_xml_anctscan'] = 'ANCT-Scan desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_anctscan_autoadvance'] = 'ANCT-Scan desde HP6 JCloze xml (Avanço automático)';
$string['outputformat_hp_6_jcloze_xml_dropdown'] = 'DropDown desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_a'] = 'FindIt (a) desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_b'] = 'FindIt (b) desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_jgloss'] = 'JGloss desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_v6'] = 'JCloze (v6) desde HP6 xml';
$string['outputformat_hp_6_jcloze_xml_v6_autoadvance'] = 'JCloze (v6) desde HP6 xml (Avanço automático)';
$string['outputformat_hp_6_jcross_xml_v6'] = 'JCross (v6) desde xml';
$string['outputformat_hp_6_jmatch_html'] = 'JMatch (v6) desde html';
$string['outputformat_hp_6_jmatch_xml_flashcard'] = 'JMatch (flashcard) desde xml';
$string['outputformat_hp_6_jmatch_xml_jmemori'] = 'JMemori desde xml';
$string['outputformat_hp_6_jmatch_xml_sort'] = 'JMatch Sort desde xml';
$string['outputformat_hp_6_jmatch_xml_v6'] = 'JMatch (v6) desde xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus'] = 'JMatch (v6+) desde xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus_duplicates'] = 'JMatch (v6+) a partir de xml (permitir duplicados)';
$string['outputformat_hp_6_jmix_html'] = 'JQuiz (v6) desde html';
$string['outputformat_hp_6_jmix_xml_v6'] = 'JMix (v6) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus'] = 'JMix (v6+) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_deluxe'] = 'JMix (v6+ com prefixo, sufixo e distrações) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_keypress'] = 'JMix (v6 + com clicar tecla) desde xml';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) desde xml';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) desde xml (Avanço automático)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) desde xml (Exame)';
$string['outputformat_hp_6_jquiz_xml_v6_intro'] = 'JQuiz (v6) desde xml (Intro)';
$string['outputformat_hp_6_rhubarb_html'] = 'Rhubarb (v6) desde html';
$string['outputformat_hp_6_rhubarb_xml'] = 'Rhubarb (v6) desde xml';
$string['outputformat_hp_6_sequitur_html'] = 'Sequitur (v6) desde html';
$string['outputformat_hp_6_sequitur_html_incremental'] = 'Sequitur (v6) desde html, avaliação incremental';
$string['outputformat_hp_6_sequitur_xml'] = 'Sequitur (v6) desde xml';
$string['outputformat_hp_6_sequitur_xml_incremental'] = 'Sequitur (v6) desde xml, avaliação incremental';
$string['outputformat_html_ispring'] = 'Ficheiro HTML iSpring';
$string['outputformat_html_xerte'] = 'Ficheiro HTML Xerte';
$string['outputformat_html_xhtml'] = 'Ficheiro HTML padrão';
$string['outputformat_qedoc'] = 'Ficheiro Qedoc';
$string['passworderror'] = 'A senha digitada estava incorreta';
$string['penalties'] = 'Penalizações';
$string['pending'] = 'Conclusão pendente';
$string['percent'] = 'Percentagem';
$string['pluginadministration'] = 'Administração da Cadeia de tarefas';
$string['pluginname'] = 'Cadeia de tarefas';
$string['postcondition'] = 'Pós-condição';
$string['postconditions'] = 'Pós-condições';
$string['postconditions_help'] = 'Depois de terminar a tarefa, será executada a ação da *primeira* correspondência dos itens da lista à pós-condição.';
$string['precondition'] = 'Pré-condição';
$string['preconditions'] = 'Pré-condições';
$string['preconditions_help'] = 'Esta tarefa só pode ser executada se forem verificadas *todas* as pré-condições desta lista';
$string['pressoktocontinue'] = 'Clique em OK para continuar ou Cancelar para permanecer na página atual.';
$string['preview'] = 'Pré-visualização';
$string['previewchainnow'] = 'Pré-visualizar agora a atividade Cadeia de tarefas';
$string['previewtasknow'] = 'Pré-visualizar a tarefa agora';
$string['previoustask'] = 'Tarefa anterior';
$string['questionshort'] = 'P-{$a}';
$string['randomtask'] = 'Tarefa aleatória';
$string['reattempttask'] = 'Voltar a tentar a tarefa';
$string['recentattempts'] = 'Tentativas mais recentes';
$string['redo'] = 'Refazer';
$string['reordertasks'] = 'Reordenar tarefas';
$string['requirepassword'] = 'Requer senha';
$string['requirepassword_help'] = 'Se for especificada uma senha, o aluno deverá inseri-la para tentar o teste.';
$string['requiresubnet'] = 'Requer endereço de rede';
$string['requiresubnet_help'] = 'O acesso ao Teste pode ser restrito a sub-redes específicas na LAN ou Internet, se especificar uma lista de endereços IP, parciais ou completos, separados por vírgula. Pode ser útil em Testes supervisionado, de modo a garantir que apenas pessoas num determinado local possam aceder ao Teste.';
$string['responses'] = 'Respostas';
$string['responsesshort'] = 'R';
$string['resume'] = 'Retomar';
$string['reviewafterattempt'] = 'Permitir a revisão após a tentativa';
$string['reviewafterclose'] = 'Permitir revisão após o fecho do HotPot';
$string['reviewduringattempt'] = 'Permitir a revisão durante a tentativa';
$string['reviewoptions'] = 'Opções da revisão';
$string['sametask'] = 'Mesma tarefa';
$string['score'] = 'Pontuação';
$string['scoreignore'] = 'Ignorar vazias';
$string['scoreignore_help'] = 'Esta configuração especifica se as tentativas inválidas, ou seja, tentativas abandonadas com uma pontuação de 0%, são ignoradas ou incluídas quando são calculadas as pontuações dos alunos para esta tarefa.

**Sim**
Tentativas vazias são *ignoradas* durante o cálculo das pontuações para esta tarefa.

**Não**
Tentativas vazias *não são ignoradas*, isto é, são *incluídas*
no cálculo das pontuações para esta tarefa.

Tentativas vazias ocorrem quando um aluno inicia uma tarefa, mas não tenta responder a qualquer pergunta antes de sair da tarefa. Estas tentativas podem ter um impacto significativo na pontuação quando o método de pontuação é Média, Primeira ou Última. Em tais situações, o professor pode decidir que, quando é calculada a pontuação, as tentativas inválidas devem ser ignoraradas.';
$string['scorelimit'] = 'Limite da pontuação';
$string['scorelimit_help'] = 'Esta configuração especifica a pontuação mais alta possível para esta tarefa.
Todas as tentativas da tarefa são consideradas percentuais e serão ajustadas para que nenhuma pontuação de tentativa da tarefa seja maior que o máximo de pontuação da tarefa.';
$string['scoremethod'] = 'Método de pontuação';
$string['scoremethod_help'] = 'Esta configuração define como é calculada a pontuação da tarefa a partir das tentativas da tarefa.

**Mais alta**
A pontuação da tarefa será definida como a pontuação mais alta das tentativas nesta tarefa.

**Média**
A pontuação da tarefa será definida como a pontuação média das tentativas nessa tarefa.

**Primeira**
A pontuação da tarefa será definida como a pontuação da primeira tentativa nessa tarefa.

**Última**
A pontuação da tarefa será definida como a pontuação da tentativa mais recente nesta tarefa.';
$string['scores'] = 'Pontuações';
$string['scoresshort'] = 'S';
$string['scoreweighting'] = 'Ponderação da pontuação';
$string['scoreweighting_help'] = 'A pontuação ponderada é a contribuição da pontuação desta tarefa para a classificação da tentativa da cadeia.

Se várias tarefas exigirem igual ponderação, elas devem ter a mesma categoria de ponderação';
$string['securityhdr'] = 'Restrições de segurança';
$string['selectattempts'] = 'Selecionar tentativas';
$string['selectedchains'] = 'Cadeias de tarefas selecionadas nesta disciplina';
$string['selectedtasks'] = 'Tarefas selecionadas nesta Cadeia den tarefas';
$string['showdescription'] = 'Mostrar descrição';
$string['showdescription_help'] = 'Se ativar esta opção, o texto da página de entrada será mostrado na página d disciplina como a descrição desta atividade.';
$string['showerrormessage'] = 'Erro: {$a}';
$string['showpopup'] = 'Janela';
$string['showpopup_help'] = '** Mesma janela **
: A atividade Cadeia de tarefas será mostrada na mesma janela da página da disciplina.

**Nova janela**
: A atividade Cadeia de tarefas será mostrada numa janela pop-up.
Várias funcionalidades da janela pop-up podem ser ativadas ou desativadas com caixas de seleção.
A largura e a altura obrigatórias da janela pop-up são especificadas pixels.';
$string['singlefieldhdr'] = 'Campo único';
$string['sortdirection'] = 'Ordem';
$string['sortdirection_help'] = 'A direção pretendida na ordenação dos registos';
$string['sortfield'] = 'Ordenar por';
$string['sortfield_help'] = 'O critério de ordenação dos registos';
$string['sortincrement'] = 'Incremento de ordenação';
$string['sortincrement_help'] = 'Quando as tarefas são reordenadas, os números de ordem serão incrementados pelo número aqui especificado';
$string['sortorder'] = 'Número de ordem';
$string['sortorder_help'] = 'A ordem desta tarefa dentro desta cadeia';
$string['sourcefile'] = 'Ficheiro de origem';
$string['sourcefile_help'] = 'Esta configuração especifica o ficheiro que contém o conteúdo que será mostrado aos alunos.

Normalmente, o ficheiro de origem foi criado fora do Moodle e carregado na área de ficheiros de uma disciplina do Moodle.
Pode ser um ficheiro html, ou pode ser outro tipo de ficheiro criado com software específico, tal como Hot Potatoes ou Qedoc.

O ficheiro de origem pode ser especificado como uma pasta e um caminho de ficheiro na área de ficheiros de uma disciplina do Moodle, ou pode ser um URL que comece por com http:// ou https://

Para materiais Qedoc, o ficheiro de origem deve ser o URL de um módulo Qedoc que foi enviado para o servidor Qedoc.

* ex: http://www.qedoc.net/library/ABCDE_123.zip
* Para mais informações sobre o carregamento de módulos Qedoc, consulte: [Documentação Qedoc: Carregamento de módulos](http://www.qedoc.org/en/index.php?title=Uploading_modules)';
$string['sourcefilenotfound'] = 'Ficheiro de origem não encontrado (ou vazio): {$a}';
$string['sourcelocation'] = 'Localização do ficheiro de origem';
$string['sourcelocation_help'] = 'A localização do ficheiro de origem.';
$string['sourcetype'] = 'Tipo do ficheiro de origem';
$string['sourcetype_help'] = 'Tipo deste ficheiro de origem';
$string['startchainattempt'] = 'Iniciar nova tentativa da cadeia';
$string['startofchain'] = 'Início da cadeia';
$string['starttaskattempt'] = 'Iniciar nova tentativa da tarefa';
$string['status'] = 'Estado';
$string['stopbutton'] = 'Mostrar botão Parar';
$string['stopbutton_help'] = 'Se ativar esta opção, um botão de parar será inserido na tarefa.

Se um aluno clicar no botão Parar, os resultados até ao momento serão retornados ao Moodle e o estado da tentativa da tarefa será definido como \'abandonada\'.

O texto do botão de parar pode ser uma das frases predefinidas dos pacotes de idiomas do Moodle, formatado como <em>component_stringname</em> (por exemplo, <em>portfolio_returntowhereyouwere</em>), ou o professor pode especificar um texto específico para o botão.';
$string['stopbuttonlangpack'] = 'Do pacote linguístico';
$string['stopbuttonspecific'] = 'Usar texto específico';
$string['stoptext'] = 'Texto do botão Parar';
$string['stoptext_help'] = 'Este texto é usado se a configuração "Mostrar botão Parar" estiver definida como "Sim - Usar texto específico"';
$string['storedetails'] = 'Armazenar os detalhes XML (em bruto) das tentativas de tarefa da Cadeia de tarefas';
$string['studentfeedback'] = 'Feedback do aluno';
$string['studentfeedback_help'] = 'Se ativado, uma hiperligação para uma janela pop-up de feedback será mostrada sempre que o aluno clicar no botão "Verificar". A janela de feedback permite que os alunos discutam esta tarefa com os professores e colegas de turma de uma das seguintes maneiras:

**Página Web**
: requer URL da página Web, por exemplo, http://myserver.com/feedbackform.html

**Formulário de feedback**
: requer URL do script de formulário, por exemplo, http://myserver.com/cgi-bin/formmail.pl

**Fórum do Moodle**
: será mostrado o índice do fórum da disciplina

**Mensagens do Moodle**
: será mostrada a janela de mensagens instantâneas do Moodle. Se a disciplina tiver vários professores, o aluno será solicitado a selecionar um professor antes que apareça a janela de mensagens.';
$string['studentfeedbackurl'] = 'URL do feedback do aluno';
$string['submits'] = 'Submissões';
$string['subplugintype_taskchainattempt'] = 'Formato de saída';
$string['subplugintype_taskchainattempt_plural'] = 'Formatos de saída';
$string['subplugintype_taskchainreport'] = 'Relatório';
$string['subplugintype_taskchainreport_plural'] = 'Relatórios';
$string['subplugintype_taskchainsource'] = 'Ficheiro de origem';
$string['subplugintype_taskchainsource_plural'] = 'Ficheiros de origem';
$string['task'] = 'Tarefa';
$string['taskaction_help'] = 'Estas opções especificam que ação será executada quando o botão "Executar" for clicado.

**Reordenar tarefas**
: As tarefas serão reordenadas de acordo com os novos números de ordem.

**Adicionar (mais) tarefas**
: Uma nova página Web será mostrada onde pode adicionar uma ou mais novas tarefas a esta atividade Cadeia de tarefas.

**Mover tarefas**
: As tarefas selecionadas serão movidas para um local diferente nesta atividade ou para outra atividade Cadeia de tarefas.

**Aplicar valores predefinidos selecionados**
: Os valores predefinidos selecionados serão aplicados às tarefas selecionadas.

**Apagar tarefas**
: As tarefas selecionadas serão apagadas da atividade Cadeia de tarefas.';
$string['taskattempt'] = 'Tentativa de execução da tarefa';
$string['taskattemptnotinprogress'] = 'Tentativa da tarefa em progresso';
$string['taskchain:addinstance'] = 'Adicionar uma nova atividade Cadeia de tarefas';
$string['taskchain:attempt'] = 'Tentar uma atividade Cadeia de tarefas e enviar os resultados';
$string['taskchain:deleteallattempts'] = 'Apagar as tentativas de qualquer utilizador numa atividade Cadeia de tarefas';
$string['taskchain:deletemyattempts'] = 'Apagar as próprias tentativas numa atividade Cadeia de tarefas';
$string['taskchain:ignoretimelimits'] = 'Ignorar os limites de tempo numa atividade Cadeia de tarefas';
$string['taskchain:manage'] = 'Alterar as configurações de uma atividade Cadeia de tarefas';
$string['taskchain:preview'] = 'Pré-visualizar a atividade Cadeia de tarefas';
$string['taskchain:regrade'] = 'Reavaliar a atividade Cadeia de tarefas';
$string['taskchain:reviewallattempts'] = 'Visualizar as tentativas de qualquer utilizador numa atividade Cadeia de tarefas';
$string['taskchain:reviewmyattempts'] = 'Visualizar as próprias tentativas numa atividade Cadeia de tarefas';
$string['taskchain:view'] = 'Visualizar a página de entrada de uma atividade Cadeia de tarefas';
$string['taskchainname'] = 'Nome da Cadeia de tarefas';
$string['taskclosed'] = 'Esta tarefa fechou {$a}';
$string['taskname'] = 'Nome da tarefa';
$string['taskname_help'] = 'Texto de ajuda sobre o nome da tarefa';
$string['tasknameadd_help'] = 'O nome das tarefas pode ser um texto específico inserido pelo professor ou pode ser gerado automaticamente.

**Obter do ficheiro de origem**
O nome das tarefas será extraído do ficheiro de origem.

**Usar o nome do ficheiro de origem**
O nome do ficheiro de origem será usado como o nome das tarefas.

**Usar o caminho do ficheiro de origem**
O caminho do ficheiro de origem de cada tarefa será usado como o nome da tarefa.
Todas as barras no caminho do ficheiro serão substituídas por espaços.

**Texto específico**
Um nome exclusivo para cada tarefa será criado anexando o número de ordenação da tarefa ao texto específico inserido pelo professor.';
$string['tasknames'] = 'Nome das tarefas';
$string['tasknames_help'] = 'O nomes das tarefas pode ser um texto específico inserido pelo professor ou pode ser gerado automaticamente.

**Obter do ficheiro de origem**
O nome das tarefas será extraído do ficheiro de origem.

**Usar o nome do ficheiro de origem**
O nome do ficheiro de origem será usado como o nome das tarefas.

**Usar o caminho do ficheiro de origem**
O caminho do ficheiro de origem de cada tarefa será usado como o nome da tarefa.
Todas as barras no caminho do ficheiro serão substituídas por espaços.

**Texto específico**
Um nome exclusivo para cada tarefa será criado anexando o número de ordenação da tarefa ao texto específico inserido pelo professor.';
$string['tasknotavailable'] = 'Esta tarefa só estará disponível {$a}.';
$string['taskposition'] = 'Posição da tarefa na cadeia';
$string['taskrequirepasswordmessage'] = 'Para executar esta tarefa necessita da senha';
$string['tasks'] = 'Tarefas';
$string['taskscore'] = 'Pontuação da tarefa';
$string['tasktype'] = 'Tipo de tarefa';
$string['textsourcefile'] = 'Obter do ficheiro de origem';
$string['textsourcefilename'] = 'Usar o nome do ficheiro de origem';
$string['textsourcefilepath'] = 'Usar o caminho do ficheiro de origem';
$string['textsourcespecific'] = 'Usar texto específico';
$string['textsourcetaskname'] = 'Usar o nome da tarefa';
$string['timeclose'] = 'Disponível até';
$string['timedout'] = 'Expirou o tempo';
$string['timehdr'] = 'Restrições de disponibilidade';
$string['timelimit'] = 'Tempo limite';
$string['timelimit_help'] = 'Esta configuração especifica a duração máxima de uma tentativa.

** Usar as configurações no ficheiro de origem/modelo **
: o limite de tempo será obtido do ficheiro de origem ou dos ficheiros de modelo para este formato de saída

** Usar duração específica **
: o limite de tempo especificado na página de configurações da tarefa será usado como o limite de tempo para uma tentativa nesta tarefa. Esta configuração substitui os limites de tempo no ficheiro de origem, ficheiro de configuração ou ficheiros de modelo para este formato de saída.

** Desativar **
: nenhum limite de tempo será definido para tentativas nesta tarefa.

Tenha em atenção que, se uma tentativa for retomada, o temporizador continuará a partir de onde a tentativa foi colocada em pausa anteriormente.';
$string['timelimitexpired'] = 'Terminou o tempo máximo permitido para esta tentativa';
$string['timelimitspecific'] = 'Usar duração específica';
$string['timelimitsummary'] = 'Duração máxima de uma tentativa';
$string['timelimittemplate'] = 'Usar as configurações do ficheiro de origem/modelo';
$string['timeopen'] = 'Disponível desde';
$string['timeopenclose'] = 'Data/hora de abertura e de fecho';
$string['timeopenclose_help'] = 'Pode especificar os horários em que a tarefa está acessível para que os utilizadores possam executar as tarefas. Antes do horário de abertura e após o horário de fecho, a tarefa não estará disponível.';
$string['title'] = 'Título';
$string['title_help'] = 'Esta configuração especifica o título a ser mostrado na página Web.

** Usar o nome da tarefa **
: o nome da tarefa, conforme definido nesta página, será mostrado como título da página Web.

** Obter do ficheiro de origem **
: o título, se houver, que foi definido no ficheiro de origem será usado como título da página Web. Tenha em atenção que esta opção não é eficiente para o servidor, porque o ficheiro de origem tem de ser lido sempre que o título é exibido.

** Usar o nome do ficheiro de origem **
: o nome do ficheiro de origem, excluindo qualquer nome de pasta, será usado como título da página Web.

** Usar o caminho do ficheiro de origem **
: o caminho do ficheiro de origem, incluindo os nomes das pastas, será usado como título da página Web.

** Usar texto específico **
: o texto da caixa de texto será usado como título da página Web.';
$string['titleappendsortorder'] = 'Anexar número de ordem';
$string['titleprependchainname'] = 'Preceder o nome';
$string['titletext'] = 'Texto do título';
$string['titletext_help'] = 'Este texto é usado se a configuração "Título" estiver definida como "Usar texto específico"';
$string['tnumber'] = 'Tentativa';
$string['toolsindex'] = 'Índice das ferramentas da Cadeia de tarefas';
$string['totaltaskscores'] = 'Total de pontuações da tarefa';
$string['unansweredtask'] = 'Tarefa não respondida';
$string['unseentask'] = 'Tarefa não visualizada';
$string['updated'] = 'Atualizado';
$string['updatinggrades'] = 'A atualizar as notas da Cadeia de tarefas';
$string['usefilters'] = 'Usar filtros';
$string['usefilters_help'] = 'Se ativar esta opção, o conteúdo passará pelos filtros do Moodle antes de ser enviado para o navegador.';
$string['useglossary'] = 'Usar glossário';
$string['useglossary_help'] = 'Se ativar esta opção, o conteúdo passará pelo filtro de vinculação automática ao Glossário do Moodle antes de ser enviado ao navegador.

Tenha em atenção que esta configuração substitui a configuração de Administração do Site / Módulos / Filtros / Gerir filtros  para ativar/desativar o filtro \'Autoligação ao Glossário\'.';
$string['usemediafilter'] = 'Usar filtro multimédia';
$string['usemediafilter_help'] = 'Esta configuração especifica o filtro multimédia a ser usado.

**Nenhum**
: o conteúdo não passará por qualquer filtro multimédia.

**Filtros multimédia predefinidos do Moodle**
: o conteúdo passará pelos filtros multimédia predefinidos do Moodle. Esses filtros procuram hiperligações para tipos de ficheiros comuns de áudio e vídeo e convertem em leitores multimédia adequados.

**Filtro multimédia da Cadeia de tarefas**
: o conteúdo passará por filtros que detetam hiperligações, imagens, áudios e vídeos que serão especificados usando uma notação com parênteses.

A notação com parênteses retos tem a seguinte sintaxe:
<code>[url leitor largura altura opções]</code>

**url**
: o URL relativo ou absoluto do ficheiro multimédia

**leitor** (opcional)
: o nome do leitor a ser usado. O valor predefinido para esta configuração é "moodle". A versão predefinida do módulo Cadeia de tarefas também oferece os seguintes leitores:
: **dew**: leitor mp3
: **dyer**: leitor mp3 por Bernard Dyer
: **hbs**: leitor mp3 de Half-Baked Software
: **image**: insere uma imagem na página Web
: **link**: insere uma hiperligação para outra página Web

**largura** (opcional)
: a largura obrigatória da janela do leitor

**altura** (opcional)
: a altura obrigatória da janela do leitor. Se omitido, este valor será definido como igual ao da configuração da largura.

**opções** (opcional)
: lista de opções separadas por vírgulas que serão utilizadas pelo leitor. Cada opção pode ser uma simples chave on/off ou o nome de um par de valores.
: *name*
: *name=valor*
: *name="algum valor com espaços"*';
$string['viewreports'] = 'Visualizar relatórios de {$a} utilizador(es)';
$string['views'] = 'Visualizações';
$string['weighting'] = 'Ponderação';
$string['weightingequal'] = 'Igual ponderação';
$string['weightingnone'] = 'Sem ponderação';
$string['window'] = 'Janela';
$string['window_help'] = 'Mostrar a atividade na mesma janela ou numa janela pop-up.

** Mesma janela **
: A atividade Cadeia de tarefas será mostrada na mesma janela da página da disciplina.

**Nova janela**
: A atividade Cadeia de tarefas será mostrada numa janela pop-up. Várias funcionalidades da janela pop-up podem ser ativadas ou desativadas com caixas de seleção. A largura e a altura obrigatórias da janela pop-up são especificadas em pixels.';
$string['windowdirectories'] = 'Mostrar hiperligações da diretoria';
$string['windowheight'] = 'Altura da janela predefinida (em pixels)';
$string['windowlocation'] = 'Mostrar barra de localização';
$string['windowmenubar'] = 'Mostrar barra de menu';
$string['windowmoodlebutton'] = 'Mostrar o botão de fechar janela';
$string['windowmoodlefooter'] = 'Mostrar o rodapé da página Moodle';
$string['windowmoodleheader'] = 'Mostrar o cabeçalho da página Moodle';
$string['windowmoodlenavbar'] = 'Mostrar barra de navegação Moodle';
$string['windownew'] = 'Nova janela';
$string['windowresizable'] = 'Permitir redimensionamento da janela';
$string['windowsame'] = 'Janela atual';
$string['windowscrollbars'] = 'Permitir rolamento da janela';
$string['windowstatus'] = 'Mostrar barra de estado';
$string['windowtoolbar'] = 'Mostrar barra de ferramentas';
$string['windowwidth'] = 'Largura da janela predefinida (em pixels)';
$string['wrong'] = 'Errado';
$string['youneedtoenrol'] = 'Tem de estar inscrito nesta disciplina para poder tentar esta atividade Cadeia de tarefas';
$string['zeroduration'] = 'Sem duração';
$string['zerograde'] = 'Nota zero';
$string['zeroscore'] = 'Pontuação zero';
