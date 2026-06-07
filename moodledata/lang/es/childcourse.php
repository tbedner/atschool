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
 * Strings for component 'childcourse', language 'es', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Autoinscripción al acceder';
$string['autoenrol_help'] = 'Si está habilitado, el plugin inscribirá automáticamente al usuario en el curso hijo cuando lo abra a través de esta actividad. Las inscripciones se crean usando una instancia dedicada de Inscripción manual para que puedan rastrearse y revertirse de forma segura más adelante (según la política de eliminación). Si está deshabilitado, el plugin no intentará inscribir usuarios automáticamente.';
$string['childcourse'] = 'Curso hijo';
$string['childcourse:addinstance'] = 'Añadir una nueva actividad de curso hijo';
$string['childcourse:manage'] = 'Gestionar la configuración del curso hijo';
$string['childcourse:sync'] = 'Sincronizar calificación y finalización del curso hijo';
$string['childcourse:view'] = 'Ver la actividad del curso hijo';
$string['childcourse_help'] = 'Seleccione el curso que se vinculará a esta actividad. Esta elección controla todas las configuraciones específicas de reglas (grupos, reglas de finalización, selectores de actividades, sincronización de calificaciones). Después de guardar la actividad, el curso hijo se vuelve inmutable para mantener los mapeos y el historial de sincronización consistentes.';
$string['childcoursenotset'] = 'No se ha configurado el curso hijo.';
$string['completionmissing'] = 'La finalización del curso hijo no está habilitada.';
$string['completionrule'] = 'Regla de finalización basada en el curso hijo';
$string['completionrule_allactivities'] = 'Completar cuando el 100% de las actividades rastreadas estén completadas';
$string['completionrule_coursecompleted'] = 'Completar cuando el curso hijo esté completado';
$string['completionrule_help'] = 'Define cómo esta actividad se marca automáticamente como completada según el progreso del usuario en el curso hijo.

- **No hacer nada:** la finalización de esta actividad no tiene relación con la finalización del curso hijo.
- **Cuando el curso hijo esté completado:** en cuanto el curso hijo esté completado, esta actividad también se completará.
- **Cuando el 100% de las actividades rastreadas estén completadas:** todas las actividades del curso hijo con seguimiento de finalización habilitado deben completarse para que esta actividad se complete.';
$string['completionrule_none'] = 'No hacer nada';
$string['enrolinstancename'] = 'Enlace del curso hijo #{$a}';
$string['error_manualenrolnotavailable'] = 'El plugin de Inscripción manual no está disponible.';
$string['grade_approval'] = 'Enviar calificación desde';
$string['grade_approval_no'] = 'No enviar calificación';
$string['grade_approval_yes'] = 'Usar la calificación del curso hijo';
$string['gradebookmissing'] = 'El libro de calificaciones del curso hijo no está configurado (falta el total del curso).';
$string['hideinmycourses'] = 'Ocultar el curso hijo en Mis cursos';
$string['hideinmycourses_help'] = 'Si está habilitado, los usuarios inscritos por esta actividad tendrán el curso hijo oculto en el menú "Mis cursos". Esto ayuda a forzar la navegación a través de este curso. Esta configuración solo afecta a los usuarios inscritos por este plugin (rastreados por el plugin).';
$string['inheritgroups'] = 'Heredar grupos del curso padre';
$string['inheritgroups_help'] = 'Si está habilitado, el plugin intentará replicar las pertenencias a grupos del usuario del curso padre al curso hijo, haciendo coincidir por nombres de grupo. Si un nombre de grupo no existe en el curso hijo, puede crearse. Esto se aplica durante la autoinscripción. No es una sincronización continua a menos que implemente más adelante una rutina dedicada de resincronización.';
$string['keeprole'] = 'Mantener rol (estudiante/profesor)';
$string['keeprole_help'] = 'Si está habilitado, el plugin intentará mantener una paridad simplificada de roles: los usuarios con capacidades de nivel de profesor en el curso padre se inscribirán como profesor (profesor editor/profesor cuando estén disponibles); de lo contrario, como estudiante. Esto no copia roles personalizados ni asignaciones de roles complejas.';
$string['label_childcourse'] = 'Curso hijo';
$string['label_lastsynccompletion'] = 'Última sincronización de finalización';
$string['label_lastsyncgrade'] = 'Última sincronización de calificaciones';
$string['lastsync'] = 'Última sincronización';
$string['lockedcoursewarning'] = 'El curso hijo no se puede cambiar después de guardar.';
$string['manage_header_actions'] = 'Acciones';
$string['manage_header_name'] = 'Nombre';
$string['missingcourse'] = 'Falta Curso';
$string['modulename'] = 'Curso hijo';
$string['modulenameplural'] = 'Cursos hijo';
$string['never'] = 'Nunca';
$string['nogroup'] = 'Sin grupo';
$string['openchildcourse'] = 'Abrir curso hijo';
$string['opennewtab'] = 'Abrir en una nueva pestaña';
$string['opennewtab_help'] = 'Si está habilitado, el botón abrirá el curso hijo en una nueva pestaña. Esto no cambia el comportamiento de inscripción ni de sincronización, solo la forma en que se abre el curso para el usuario.';
$string['pluginadministration'] = 'Administración del curso hijo';
$string['pluginname'] = 'Curso hijo';
$string['privacy:metadata:childcourse_map'] = 'Almacena los datos de mapeo creados por la actividad de curso vinculada para permitir la cancelación de inscripción segura y la auditoría.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'El ID del curso hijo que se vinculó.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'El ID de la instancia de la actividad de curso vinculada.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'La lista de IDs de grupos del curso hijo asignados por el plugin (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Indica si el plugin estableció la preferencia para ocultar el curso hijo en Mis cursos.';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'El ID de la instancia de inscripción usada por el plugin para inscribir al usuario.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'El ID del curso padre donde existe la actividad.';
$string['privacy:metadata:childcourse_map:roleid'] = 'El ID del rol asignado por el plugin en el curso hijo.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'La hora en que el usuario fue inscrito mediante el enlace.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'La hora de la última modificación del registro de mapeo.';
$string['privacy:metadata:childcourse_map:userid'] = 'El ID del usuario inscrito mediante el enlace.';
$string['privacy:metadata:childcourse_state'] = 'Almacena, por usuario, el estado en caché para admitir la sincronización incremental de calificaciones y finalización.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'El ID de la instancia de la actividad de curso vinculada.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Indicador en caché de si la regla de finalización se ha satisfecho para el usuario.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Marca de tiempo de la última modificación de los datos de finalización de origen para la sincronización incremental.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Calificación en caché (porcentaje) sincronizada desde el total del curso hijo.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Identificador del origen de la calificación (p. ej., course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Marca de tiempo de la última modificación del ítem de calificación de origen para la sincronización incremental.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'La hora de la última modificación de la fila de estado en caché.';
$string['privacy:metadata:childcourse_state:userid'] = 'El ID del usuario.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'Una preferencia del usuario usada para ocultar un curso hijo en Mis cursos (nombre predeterminado de la preferencia: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Configuración del curso hijo';
$string['syncdone'] = 'Sincronización completada.';
$string['syncnow'] = 'Sincronizar ahora';
$string['targetgroup'] = 'Inscribir en el grupo';
$string['targetgroup_help'] = 'Si se selecciona, el usuario se añadirá a este grupo específico del curso hijo en el momento de la autoinscripción. El grupo debe existir en el curso hijo. Si "Heredar grupos del curso padre" también está habilitado, se aplicarán ambos comportamientos (el grupo seleccionado y los grupos heredados).';
$string['unenrolaction'] = 'Cuando se elimina el enlace';
$string['unenrolaction_help'] = 'Controla qué sucede con las inscripciones creadas por esta actividad cuando se elimina la actividad vinculada. "Cancelar inscripción" eliminará solo las inscripciones que fueron creadas por esta actividad (rastreadas en la tabla de mapeo). "Mantener inscripciones" dejará a los usuarios inscritos en el curso hijo.';
$string['unenrolaction_keep'] = 'Mantener inscripciones';
$string['unenrolaction_unenrol'] = 'Cancelar la inscripción de los usuarios inscritos mediante este enlace';
