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
 * Strings for component 'amanote', language 'pt', version '4.4'.
 *
 * @package     amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amanote:addinstance'] = 'Adicionar um novo ficheiro que permite anotações';
$string['amanote:view'] = 'Abrir ficheiro anotável';
$string['amanotecontent'] = 'Ficheiros e sub-pastas';
$string['amanotedetails_sizedate'] = '{$a->size} {$a->date}';
$string['amanotedetails_sizetype'] = '{$a->size} {$a->type}';
$string['amanotedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['amanotedetails_typedate'] = '{$a->type} {$a->date}';
$string['autosaveperiod'] = 'Guardar automaticamente';
$string['autosaveperiod_help'] = 'Configure o intervalo de tempo, em minutos, entre as gravações automáticas (mínimo: 1, máximo: 30). Para desativar a opção de guardar automaticamente, defina o valor como 0.';
$string['cannotcreatetoken'] = 'Abrir em Amanote';
$string['cannotcreatetoken_help'] = 'Não tem permissão para abrir o documento em Amanote.';
$string['clicktoamanote'] = 'Abrir em Amanote';
$string['clicktodownloadfile'] = 'Descarregar o ficheiro PDF';
$string['clicktodownloadnotes'] = 'Descarregar ficheiro anotado';
$string['clicktoopen'] = 'Abrir num novo separador';
$string['dnduploadamanote'] = 'Criar ficheiro que permita anotações';
$string['downloadfile'] = 'Descarregar';
$string['guestsarenotallowed'] = 'Abrir em Amanote';
$string['guestsarenotallowed_help'] = 'Os visitantes não têm permissão para abrir um recurso em Amanote. Por favor, autentique-se para aceder a este recurso.';
$string['importantinformationdescription'] = 'Para que o módulo funcione adequadamente, verifique se os seguintes requisitos foram cumpridos no seu site Moodle:

1. Os \'*Web services*\' estão ativados (Administração do Site > Funcionalidades avançadas)

2. O \'*Moodle mobile web service*\' está ativado (Administração do Site > Módulos > Web services > Serviços externos)

3. O protocolo \'*REST*\' está ativado (Administração do Site> Módulos > Web services> Gerir Protocolos)

4. A permissão \'*webservice/rest:use*\' é permitido aos \'*utilizadores autenticados*\' (Administração do Site > Utilizadores > Permissões >  Definir papéis > Utilizador autenticado> Gerir papéis)';
$string['importantinformationheading'] = 'Informações importantes sobre a instalação';
$string['key'] = 'Chave de ativação';
$string['key_help'] = 'Esta chave é necessária para recursos avançados, tais como o Podcast Creator.';
$string['modifieddate'] = 'Modificado em {$a}';
$string['modulename'] = 'Ficheiro anotável';
$string['modulename_help'] = 'Um ficheiro anotável é um recurso da disciplina (ficheiro PDF) que os alunos podem abrir em Amanote© para adicionar anotações claras e estruturadas no mesmo.

Os alunos têm a possibilidade de:

* Abrir o recurso da disciplina num novo separador do navegador
* Descarregar o recurso da disciplina para o seu computador
* Abrir o recurso da disciplina em Amanote© e adicionar anotações

Quando os alunos abrem o recurso da disciplina em Amanote©, têm a capacidade de iniciar uma elegante forma de anotar. As anotações ficam ligadas às diferentes páginas do documento. Além disso, podem enriquecer as anotações com desenhos, fórmulas, imagens, destacar em slides, etc.

Quando os alunos guardam as suas anotações, estas são guardadas no recurso (ficheiro PDF) no seu espaço pessoal. Na próxima vez que abrirem o recurso, terão acesso às suas anotações anteriores.';
$string['modulenameplural'] = 'Ficheiros anotáveis';
$string['nonotestodownload'] = 'Descarregar ficheiro anotado';
$string['nonotestodownload_help'] = 'Ainda não guardou a anotações para este documento.';
$string['openinamanote'] = 'Abrir em Amanote';
$string['openinamanote_help'] = 'Abrir o documento em Amanote permite iniciar ou continuar uma anotação.';
$string['openpodcastcreator'] = 'Abrir o Podcast Creator';
$string['openpodcastcreator_help'] = 'O Podcast Creator permite gravar um novo podcast ou editar um já existente.';
$string['openstatistics'] = 'Abrir estatísticas';
$string['openstatistics_help'] = 'Dá-lhe acesso às estatísticas do uso dos alunos e os seus comentários sobre este recurso.';
$string['pluginadministration'] = 'Administração do módulo Amanote';
$string['pluginname'] = 'Amanote';
$string['podcastcreatorbutton'] = 'Abrir Podcast Creator';
$string['preventdownload'] = 'Impedir descarregamento de PDF';
$string['preventdownload_desc'] = 'Impedir que os utilizadores descarreguem o ficheiro de origem.';
$string['printintro'] = 'Mostrar a descrição do recurso';
$string['printintroexplain'] = 'Mostrar descrição do recurso abaixo do conteúdo?';
$string['privacy:metadata'] = 'De modo a permitir a integração com o Amanote, alguns dados do utilizador irão ser enviados para a aplicação de cliente do Amanote (sistema remoto)';
$string['privacy:metadata:email'] = 'O e-mail do utilizador é enviado para o sistema remoto de modo a permitir uma melhor experiência (partilha de anotações, notificação, etc.).';
$string['privacy:metadata:fullname'] = 'O nome completo do utilizador é enviado para o sistema remoto de modo a permitir uma melhor experiência.';
$string['privacy:metadata:subsystem:corefiles'] = 'Os ficheiros (PDF, AMA) são armazenados no sistema de ficheiros do Moodle.';
$string['privacy:metadata:userid'] = 'O ID de utilizador é enviado do Moodle para o Amanote de modo a agilizar o processo de autenticação';
$string['saveinprivate'] = 'Guardar as anotações em ficheiros privados';
$string['saveinprivate_help'] = 'Guardar o ficheiro anotado nos ficheiros privados do utilizador. Permitirá que o utilizador receba as suas anotações na próxima vez que abrir o ficheiro anotável no Amanote.';
$string['servicenotavailable'] = 'Abrir em Amanote';
$string['servicenotavailable_help'] = 'O serviço não está disponível. Por favor, entre em contacto com o administrador do site.';
$string['showdate'] = 'Mostrar data de carregado/modificado';
$string['showdate_desc'] = 'Mostrar data de carregado/modificado na página da disciplina?';
$string['showdate_help'] = 'Mostrar data de carregado/modificado ao lado das hiperligações para o recurso.';
$string['showsize'] = 'Mostrar tamanho';
$string['showsize_desc'] = 'Mostrar tamanho na página da disciplina?';
$string['showsize_help'] = 'Mostrar o tamanho do ficheiro, por exemplo \'3.1 MB\', ao lado das hiperligações para o recurso.';
$string['statisticsbutton'] = 'Abrir Análise da aprendizagem';
$string['unexpectederror'] = 'Abrir em Amanote';
$string['unexpectederror_help'] = 'Ocorreu um erro inesperado, e por isso, o recurso não pode ser aberto em Amanote. Por favor, entre em contacto com o administrador do site.';
$string['unsecureconnection'] = 'Atenção! A sua ligação não é segura.';
$string['uploadeddate'] = 'Carregado em {$a}';
