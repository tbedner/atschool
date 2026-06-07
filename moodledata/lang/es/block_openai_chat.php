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
 * Strings for component 'block_openai_chat', language 'es', version '4.4'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['askaquestion'] = 'Hacer una pregunta...';
$string['assistantname'] = 'Nombre del Asistente';
$string['assistantnamedesc'] = 'El nombre que la IA usará internamente';
$string['blocktitle'] = 'Título del Bloque';
$string['config_sourceoftruth'] = 'Fuente de Verdad';
$string['config_sourceoftruth_help'] = 'Puede añadir información aquí que la IA extraerá al responder preguntas. La información debe estar en formato de preguntas y respuestas exactamente como el siguiente: \\n\\nP: ¿Cuándo vence la sección 3?<br />A: Jueves 16 de marzo.\\n\\n Q: ¿Cuál es el horario de oficina?<br />A: Puede encontrar a la profesora Valeria en su oficina entre las 14:00 y las 16:00 horas los martes y jueves.';
$string['defaultassistantname'] = 'Asistente';
$string['defaultprompt'] = 'A continuación se muestra una conversación entre un usuario y un asistente de soporte para un sitio Moodle, donde los usuarios acceden para aprender en línea:';
$string['defaultusername'] = 'Usuario';
$string['erroroccurred'] = '¡Ha ocurrido un error! Por favor vuelva a intentarlo más tarde.';
$string['openai_chat'] = 'Chat OpenAI';
$string['openai_chat:addinstance'] = 'Añadir un nuevo Chat OpenAI';
$string['openai_chat:myaddinstance'] = 'Añada un nuevo bloque de OpenAI Chat a la página Mi Moodle';
$string['pluginname'] = 'Bloque Chat OpenAI';
$string['prompt'] = 'Aviso de finalización';
$string['promptdesc'] = 'El aviso que se le dará a la IA antes de la transcripción de la conversación';
$string['restrictusage'] = 'Restringir el uso del chat a usuarios que hayan iniciado sesión';
$string['restrictusagedesc'] = 'Si esta casilla está marcada, solo los usuarios que hayan iniciado sesión podrán utilizar el cuadro de chat.';
$string['showlabels'] = 'Mostrar etiquetas';
$string['sourceoftruth'] = 'Fuente de verdad';
$string['sourceoftruthdesc'] = 'Aunque la IA es muy capaz desde el primer momento, si no conoce la respuesta a una pregunta, es más probable que proporcione información incorrecta antes que negarse a responder. En este cuadro de texto, puede añadir preguntas comunes y sus respuestas para que la IA pueda aprovecharlas. Por favor, formule las preguntas y respuestas en el siguiente formato: <pre>P: Pregunta 1<br />A: Respuesta 1<br /><br />P: Pregunta 2<br />R: Respuesta 2</pre>';
$string['sourceoftruthpreamble'] = 'A continuación se muestra una lista de preguntas y sus respuestas. Esta información debe usarse como referencia para cualquier consulta:\\n\\n';
$string['username'] = 'Nombre del Usuario';
$string['usernamedesc'] = 'El nombre que la IA utilizará para el usuario internamente';
