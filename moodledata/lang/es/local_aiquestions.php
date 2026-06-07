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
 * Strings for component 'local_aiquestions', language 'es', version '4.4'.
 *
 * @package     local_aiquestions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aiquestions'] = 'Preguntas IA';
$string['backtocourse'] = 'Volver al curso';
$string['createdquestionssuccess'] = 'Preguntas creadas satisfactoriamente';
$string['createdquestionsuccess'] = 'Pregunta creada satisfactoriamente';
$string['createdquestionwithid'] = 'Pregunta creada con id';
$string['cronoverdue'] = 'Parece que la tarea del cron no se está ejecutando.
La generación de preguntas dependen de Tareas AdHoc que se crean por tarea del cron. Por favor, compruebe los ajustes de su cron.
Consulte <a href="https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system">
https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system
</a> para más información.';
$string['errornotcreated'] = 'Error: no se crearon las preguntas';
$string['generate'] = 'Generar preguntas';
$string['generatemore'] = 'Generar más preguntas';
$string['generating'] = 'Generando sus preguntas... (puede salir de esta página y comprobar después su banco de preguntas)';
$string['generationfailed'] = 'La generación de la pregunta ha fallado tras {$a} intentos';
$string['generationtries'] = 'Número de intentos enviados a la IA: <b>{$a}</b>';
$string['gotoquestionbank'] = 'Ir al banco de preguntas';
$string['language'] = 'Lenguaje';
$string['languagedesc'] = 'Por favor, seleccione aquí la lengua que quiere usar para la generación de preguntas.<br>
Tenga en cuenta que la IA soporta mejor unos lenguajes que otros.';
$string['numofquestions'] = 'Número de preguntas';
$string['numofquestionsdesc'] = 'Por favor, seleccione aquí el número de preguntas que desea generar';
$string['numoftries'] = '<b>{$a}</b> intentos';
$string['numoftriesdesc'] = 'Por favor, escriba aquí el número de intentos que desee enviar a la IA';
$string['numoftriesset'] = 'Número de intentos';
$string['openaikey'] = 'Clave de API de OpenAI';
$string['openaikeydesc'] = 'Por favor, teclee aquí su clave de API de OpenAI<br>
Puede obtener su clave de API desde <a href="https://platform.openai.com/account/api-keys">https://platform.openai.com/account/api-keys</a><br>
Seleccione el botón "+ Create New Secret Key" y copie la clave en este campo.<br>
Tenga en cuenta que necesita una cuenta OpenAI que incluya configuración de pago para obtener una clave de API.';
$string['outof'] = 'de';
$string['personalprompt'] = 'Prompt personal';
$string['personalpromptdesc'] = 'Por favor, teclee aquí su prompt personal.
El prompt son las instrucciones para que la IA genere las preguntas<br>
Debe incluir estos dos marcadores: {{numofquestions}} y {{language}}';
$string['pluginname'] = 'Generador de preguntas de texto IA';
$string['pluginname_desc'] = 'Este plugin le permite generar preguntas desde un texto';
$string['pluginname_help'] = 'Use este plugin desde el menú de administración del curso';
$string['preview'] = 'Vista previa de preguntas en una nueva pestaña';
$string['privacy:metadata'] = 'El generador de preguntas de texto IA no almacena datos personales';
$string['story'] = 'Historia';
$string['storydesc'] = 'Por favor, teclee aquí su historia';
$string['tasksuccess'] = 'La tarea de generación de preguntas se ha creado satisfactoriamente';
$string['usepersonalprompt'] = 'Usar prompt personal';
$string['usepersonalpromptdesc'] = 'Por favor, seleccione aquí si quiere usar su prompt personal';
