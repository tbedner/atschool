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
 * Strings for component 'filter_amanote', language 'pt', version '4.4'.
 *
 * @package     filter_amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosaveperiod'] = 'Guardar automaticamente';
$string['autosaveperiod_help'] = 'Configure o intervalo de tempo, em minutos, entre as gravações automáticas (mínimo: 1, máximo: 30). Para desativar a opção de guardar automaticamente, defina o valor como 0 (zero).';
$string['downloadnotes'] = 'Descarregar ficheiro anotado';
$string['filtername'] = 'Amanote';
$string['importantinformationdescription'] = 'Para que o módulo funcione corretamente, verifique se os seguintes requisitos estão a ser cumpridos no seu site Moodle:

1. O filtro Amanote está ativado (Administração do site / Módulos / Filtros / Gerir filtros)

2. Os \'*web services*\' estão ativados (Administração do Site / Funcionalidades avançadas)

3. O \'*Moodle mobile web service*\' está ativado (Administração do Site / Módulos / Web services / Serviços externos)

4. O protocolo \'*REST*\' está ativado (Administração do Site / Módulos / Web services / Gerir Protocolos)

5. A permissão \'*webservice/rest:use*\' é permitida aos \'*utilizadores autenticados*\' (Administração do Site / Utilizadores / Permissões / Definir papéis / Utilizador autenticado / Gerir papéis)';
$string['importantinformationheading'] = 'Informações importantes sobre a instalação';
$string['key'] = 'Chave de ativação';
$string['key_help'] = 'Chave necessária para recursos avançados, como por exemplo, o Podcast Creator.';
$string['openanalytics'] = 'Abrir Análise da aprendizagem';
$string['openinamanote'] = 'Abrir no Amanote';
$string['openpodcast'] = 'Abrir o Podcast Creator';
$string['pluginadministration'] = 'Administração do módulo Amanote';
$string['privacy:metadata'] = 'Para integrar com o Amanote, alguns dados do utilizador precisam de ser enviados à aplicação cliente do Amanote (sistema remoto).';
$string['privacy:metadata:access_token'] = 'É necessário o token de acesso do utilizador para guardar as anotações no repositório Moodle "Ficheiros privados de utilizador".';
$string['privacy:metadata:access_token_expiration'] = 'A expiração do token de acesso é enviada para impedir que o utilizador use a aplicação com um token expirado.';
$string['privacy:metadata:email'] = 'O e-mail do utilizador é enviado ao sistema remoto para permitir uma melhor experiência do utilizador (partilha de observações, etc.)';
$string['privacy:metadata:fullname'] = 'O nome completo do utilizador é enviado ao sistema remoto para permitir uma melhor experiência do utilizador.';
$string['privacy:metadata:subsystem:corefiles'] = 'Os ficheiros (PDF, AMA) são armazenados no sistema de ficheiros do Moodle';
$string['privacy:metadata:userid'] = 'O ID do utilizador é enviado do Moodle para o Amanote, a fim de acelerar o processo de autenticação.';
$string['saveinprivate'] = 'Guardar as anotações nos ficheiros privados';
$string['saveinprivate_help'] = 'Guardar o ficheiro anotado nos ficheiros privados do utilizador. Isto permitirá ao utilizador recuperar as suas anotações na próxima vez que abrir o ficheiro anotável no Amanote.';
$string['teacher'] = 'Professor';
