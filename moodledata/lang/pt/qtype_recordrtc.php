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
 * Strings for component 'qtype_recordrtc', language 'pt', version '4.4'.
 *
 * @package     qtype_recordrtc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowpausing'] = 'Permitir pausa';
$string['allowpausing_help'] = 'Se ativar esta opção, um botão extra de \'pausa\' será adicionado às ferramentas de gravação.';
$string['audio'] = 'Um áudio';
$string['audiobitrate'] = 'Bitrate do áudio';
$string['audiobitrate_desc'] = 'Qualidade da gravação do áudio (maior número significa melhor qualidade).';
$string['audiotimelimit'] = 'Duração máxima da gravação de áudio';
$string['audiotimelimit_desc'] = 'Tempo que o autor de uma pergunta pode definir para a duração máxima da gravação de áudio.';
$string['avplaceholder'] = 'Espaços reservados';
$string['avplaceholder_help'] = 'Coloque uma ou mais ferramentas de gravação em qualquer lugar do texto da pergunta. Pode copiar os exemplos aqui.

Cada espaço reservado requer, entre parênteses retos duplos, um nome exclusivo (por exemplo, \'gravador1\'), um tipo (\'audio\', \'video\' ou \'screen\') e uma duração opcional, separados por dois pontos. A duração deve ser expressa como \'30s\' ou \'05m45s\'. Quando não é definida a duração, a ferramenta assumirá a duração máxima de gravação.

Pode aplicar formatação à ferramenta, como por exemplo, alterar o alinhamento ou colocá-la numa tabela.';
$string['canselfcomment'] = 'O aluno podem auto-comentar';
$string['canselfcomment_help'] = 'Se ativar esta opção, os alunos poderão comentar acerca da sua própria tentativa de resposta à pergunta.';
$string['canselfrate'] = 'O aluno podem autoavaliar-se';
$string['canselfrate_help'] = 'Se ativar esta opção, os alunos poderão avaliar a sua própria tentativa de resposta à pergunta numa escala de classificação de cinco pontos por estrelas (em vez de esperar que outra pessoa avalie o seu trabalho, se as notas forem relevantes).';
$string['customav'] = 'Múltiplo';
$string['downloadrecording'] = 'Descarregar {$a}';
$string['err_audiotimelimit'] = 'A duração máxima da gravação não pode ser maior que {$a} segundos.';
$string['err_closesquarebrackets'] = 'Falta(m) parêntese(s) reto(s) de fecho. {$a->format}';
$string['err_compatibility'] = 'Embora os dispositivos iOS/iPadOS possam gravar ficheiros de vídeo em formatos abertos, não os conseguem reproduzir atualmente. Até que a Apple o corrija, terá de usar outro dispositivo para ver este vídeo.';
$string['err_opensquarebrackets'] = 'Falta(m) parêntese(s) reto(s) de abertura. {$a->format}';
$string['err_placeholderformat'] = 'O formato do espaço reservado ou é [[name:audio:duration]] ou [[name:video:duration]], onde name apenas pode conter letras minúsculas, números, hífenes e underscore e não pode ter mais de 32 caracteres. A duração é opcional e deve ser como \'01m20s\', \'02m\' ou \'45s\'.';
$string['err_placeholderincorrectformat'] = 'Um espaço reservado no texto da pergunta não estão no formato correto. {';
$string['err_placeholdermediatype'] = 'O tipo de ferramenta "{$a->text}" não é válido.';
$string['err_placeholdermissingduration'] = 'Duração em falta em {$a}. Inclua apenas os últimos dois pontos se for indicada uma duração. Os dois pontos foram removidos.';
$string['err_placeholderneeded'] = 'Tem der adicionar pelo menos um espaços reservados ao texto da pergunta.';
$string['err_placeholdernotallowed'] = 'Não pode usar espaços reservados com o tipo de gravação {$a}.';
$string['err_placeholdertitle'] = '\'{$a->text}\' não é um nome válido.';
$string['err_placeholdertitlecase'] = '\'{$a->text}\' não é um nome válido. Os nomes apenas podem conter letras minúsculas, sem espaços. Foi corrigido.';
$string['err_placeholdertitleduplicate'] = '«{$a->text} foi usado mais do que uma vez. Cada nome tem de ser único.';
$string['err_placeholdertitlelength'] = '\'{$a->text}\' excede o tamanho máximo de {$a->maxlength} caracteres.';
$string['err_screentimelimit'] = 'A duração máxima da gravação do ecrã não pode ser maior que {$a} segundos.';
$string['err_timelimit'] = 'A duração máxima de gravação não pode ser maior que {$a}.';
$string['err_timelimitpositive'] = 'A duração máxima de gravação tem de ser maior que 0.';
$string['err_videotimelimit'] = 'A duração máxima da gravação não pode ser maior que {$a} segundos.';
$string['err_zeroornegativetimelimit'] = '\'{$a}\' não é válido. A duração máxima de gravação tem de ser maior que 0.';
$string['feedbackfor'] = 'Feedback para \'{$a}\'';
$string['feedbackheader'] = 'Inserir feedback';
$string['filex'] = 'Ficheiro {$a}';
$string['gumabort'] = 'Aconteceu algo estranho que impediu o uso da webcam/microfone';
$string['gumabort_title'] = 'Algo aconteceu';
$string['gumnotallowed'] = 'O utilizador tem de permitir que o navegador aceda à webcam/microfone/ecrã';
$string['gumnotallowed_title'] = 'Permissões incorretas';
$string['gumnotfound'] = 'Não existe dispositivo de entrada ligado ou ativado';
$string['gumnotfound_title'] = 'Dispositivo em falta';
$string['gumnotreadable'] = 'Algo está a impedir o navegador de aceder à webcam/microfone';
$string['gumnotreadable_title'] = 'Erro de hardware';
$string['gumnotsupported'] = 'O seu navegador não suporta gravação numa ligação insegura e deve fechar o módulo';
$string['gumnotsupported_title'] = 'Não existe suporte para ligação insegura';
$string['gumoverconstrained'] = 'A webcam/microfone atual não pode produzir um fluxo com as restrições necessárias';
$string['gumoverconstrained_title'] = 'Problema com restrições';
$string['gumsecurity'] = 'O seu navegador não suporta gravação numa ligação insegura e deve fechar o módulo';
$string['gumsecurity_title'] = 'Não existe suporte para ligação insegura';
$string['gumtype'] = 'Tentou obter fluxo da webcam/microfone, mas nenhuma restrição foi especificada';
$string['gumtype_title'] = 'Nenhuma restrição especificada';
$string['insecurewarning'] = 'O seu navegador não permitirá que este módulo funcione, a menos que seja usado via HTTPS.';
$string['insecurewarningtitle'] = 'Ligação insegura';
$string['mediatype'] = 'Tipo de gravação';
$string['mediatype_help'] = 'O aluno é solicitado a gravar apenas um áudio, apenas um vídeo ou uma quantidade de áudios e/ou vídeos?

<b>Um áudio:</b> Um gravador/leitor de áudio será exibido na parte inferior do texto da pergunta.

<b>Um vídeo:</b> Um gravador/leitor de vídeo será exibido na parte inferior do texto da pergunta.

<b>Uma gravação do ecrã:</b> Um gravador/leitor de ecrã será exibido na parte inferior do texto da pergunta.

<b>Múltiplo:</b> Podem ser adicionados ao texto da pergunta vários espaços reservados para qualquer número de gravadores/leitores de áudio ou vídeo . Por exemplo [[nome1:audio]], [[nome2:video]] ou [[name3:screen]]. Os nomes devem ser todos diferentes e serão os nomes dos ficheiros das gravações.';
$string['nearingmaxsize'] = 'Atingiu o limite máximo de tamanho para carregamento de ficheiros';
$string['nearingmaxsize_title'] = 'Gravação parada';
$string['norecording'] = 'Nenhuma gravação';
$string['nowebrtc'] = 'O seu navegador ainda não oferece suporte ou é um suporte limitado às tecnologias WebRTC e, por isso, não pode ser usado com este tipo de pergunta. Mude ou atualize o seu navegador.';
$string['nowebrtctitle'] = 'WebRTC não suportado';
$string['optionsforaudio'] = 'Opções do áudio';
$string['optionsforaudioandvideo'] = 'Opções do áudio e do vídeo';
$string['optionsforscreen'] = 'Opções da gravação do ecrã';
$string['optionsforvideo'] = 'Opções do vídeo';
$string['pause'] = 'Pausa';
$string['pleaserecordsomethingineachpart'] = 'Por favor, complete sua resposta.';
$string['pluginname'] = 'Gravar áudio/vídeo';
$string['pluginname_help'] = 'Os alunos respondem à pergunta gravando áudio, um vídeo ou uma gravação do ecrã (ou uma mistura se selecionar a opção \'Múltiplo\') diretamente no navegador. A gravação pode ser avaliada manualmente ou por auto-avaliação, caso esteja instalado o módulo de Comportamento da pergunta Auto-avaliação, opcional e gratuito da The Open University.';
$string['pluginname_link'] = 'question/type/recordrtc';
$string['pluginnameadding'] = 'A adicionar uma pergunta de gravação de áudio/vídeo';
$string['pluginnameediting'] = 'A editar uma pergunta de gravação de áudio/vídeo';
$string['pluginnamesummary'] = 'Os alunos respondem à pergunta gravando áudio, um vídeo ou uma gravação do ecrã (ou uma mistura se selecionar a opção \'Múltiplo\') diretamente no navegador. A gravação pode ser avaliada manualmente ou por auto-avaliação, caso esteja instalado o módulo de Comportamento da pergunta Auto-avaliação, opcional e gratuito da The Open University.';
$string['privacy:metadata'] = 'O módulo Tipo de pergunta de gravação de áudio/vídeo permite que os autores das perguntas definam opções predefinidas como preferências do utilizador.';
$string['privacy:preference:allowpausing'] = 'O botão \'Pausa\' está desativado/ativado para uma determinada pergunta.';
$string['privacy:preference:canselfcomment'] = 'A funcionalidade de "auto comentário" está desativada/ativada para uma determinada pergunta.';
$string['privacy:preference:canselfrate'] = 'A funcionalidade de "autoavaliação" está desativada/ativada para uma determinada pergunta.';
$string['privacy:preference:defaultmark'] = 'A nota predefinida para uma determinada pergunta.';
$string['privacy:preference:mediatype'] = 'Se o tipo de multimédia está definido como \'Um áudio\', \'Um vídeo\' ou \'Múltiplo\'';
$string['privacy:preference:timelimitinseconds'] = 'A \'Duração máxima de gravação\' definida para uma determinada pergunta.';
$string['recordagain'] = 'Gravar de novo';
$string['recordagainx'] = 'Regravar {$a}';
$string['recordingfailed'] = 'Ocorreu um erro ao gravar';
$string['recordrtc:downloadrecordings'] = 'Descarregar gravações';
$string['resume'] = 'Continuar';
$string['screen'] = 'Gravação de ecrã única';
$string['screenbitrate'] = 'Bitrate do ecrã';
$string['screenbitrate_desc'] = 'Qualidade da gravação do ecrã (maior número significa melhor qualidade).';
$string['screensize'] = 'Resolução do vídeo de saída';
$string['screensize_desc'] = 'O tamanho do vídeo.';
$string['screentimelimit'] = 'Duração máxima da gravação do ecrã';
$string['screentimelimit_desc'] = 'Tempo que o autor de uma pergunta pode definir para a duração máxima da gravação do ecrã.';
$string['selfassessmentheading'] = 'Configurações da auto-avaliação';
$string['startcamera'] = 'Iniciar câmara';
$string['startcamerax'] = 'Iniciar câmara {$a}';
$string['startrecording'] = 'Iniciar gravação';
$string['startrecordingx'] = 'Iniciar gravação {$a}';
$string['startsharescreen'] = 'Iniciar gravação do ecrã';
$string['startsharescreenx'] = 'Iniciar gravação do ecrã {$a}';
$string['stoprecording'] = 'Parar a gravação';
$string['timedisplay'] = '{$a->mins}:{$a->secs}';
$string['timelimit'] = 'Duração máxima de gravação';
$string['timelimit_help'] = 'Duração máxima de uma gravação que o aluno pode fazer. Quando a duração atingir este valor, a gravação será interrompida automaticamente. Existe um limite máximo para o valor que pode ser definido aqui. Se necessitar de mais tempo, contacte um administrador.';
$string['updateform'] = 'Atualizar o formulário';
$string['updateformdone'] = 'O formulário foi atualizado. Pode adicionar abaixo feedback por entrada.';
$string['uploadaborted'] = 'Cancelado';
$string['uploadcomplete'] = 'Gravação carregada';
$string['uploadfailed'] = 'Ocorreu um erro ao carregar';
$string['uploadfailed404'] = 'Ocorreu um erro ao carregar (ficheiro é muito grande?)';
$string['uploadpreparing'] = 'A preparar para carregar...';
$string['uploadpreparingpercent'] = 'A preparar o carregamento ({$a}%)';
$string['uploadprogress'] = 'A carregar ({$a})';
$string['video'] = 'Um vídeo';
$string['videobitrate'] = 'Bitrate do vídeo';
$string['videobitrate_desc'] = 'Qualidade da gravação do vídeo (maior número significa melhor qualidade).';
$string['videosize'] = 'Tamanho do vídeo';
$string['videosize_desc'] = 'O tamanho do vídeo';
$string['videotimelimit'] = 'Duração máxima da gravação de vídeo';
$string['videotimelimit_desc'] = 'Tempo que o autor de uma pergunta pode definir para a duração máxima da gravação de vídeo.';
$string['xminutes'] = '{$a} minutos';
$string['xseconds'] = '{$a} segundos';
