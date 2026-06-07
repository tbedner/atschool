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
 * Strings for component 'jitsi', language 'es', version '4.4'.
 *
 * @package     jitsi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Acceder';
$string['accesssessionlabel'] = 'Acceder a sesión: {$a}';
$string['accessto'] = 'Acceder a {$a}. Introduzca el nombre a mostrar';
$string['accesstotitle'] = 'Acceder a {$a}';
$string['accesstowithlogin'] = 'Acceder a {$a}.';
$string['account'] = 'Cuenta';
$string['accountconnected'] = 'Cuenta conectada con éxito y puesta <b>en uso</b>.';
$string['accountinsufficientprivileges'] = 'La configuración de la cuenta de transmisión no tiene privilegios suficientes. Por favor, póngase en contacto con su administrador.';
$string['accounts'] = 'Cuentas de transmisión/grabación';
$string['action'] = 'Acción';
$string['actions'] = 'Acciones';
$string['activatetooltip'] = 'Clic para poner en uso';
$string['activity'] = 'Actividad';
$string['addaccount'] = 'Añadir cuenta';
$string['addedtoqueue'] = 'Añadido a la cola';
$string['addnewserver'] = 'Añadir nuevo servidor';
$string['addrecordinglink'] = 'Añadir enlace de grabación';
$string['addslot'] = 'Añadir hueco';
$string['addtoqueue'] = 'Añadir a la cola';
$string['adminaccountex'] = 'Se requiere al menos una cuenta para transmitir/grabar sesiones con el método de transmisión "Integrado a Moodle".
  </br>Sólo puede estar "<b>en uso</b>" una cuenta y se usará para retransmitir/grabar todas las sesiones de su maestro.
  </br>Al agregar nuevas cuentas, se recomienda <b>nombrarlas con nombres de cuenta reales</b> porque en el futuro se le podría solicitar que vuelva a iniciar sesión para volver a autorizar la cuenta.
  </br>Sólo se pueden eliminar aquí usando el icono de la papelera las cuentas sin grabaciones relacionadas con las actividades de Jitsi del profesor y sin grabaciones pendientes de eliminar de los servidores de transmisión.
  </br>Pueden aparecer nuevas cuentas sin credenciales aquí cuando las copias de seguridad de actividades de Jitsi de otro servidor se restauran en este con cuentas que no estaban presentes aquí.
 </br></br>NOVEDAD desde v3.3.3: una nueva columna llamada "En cola" permite usar todas sus grabaciones por turnos. Puede añadir grabaciones a la cola clicando en "<b>+</b>" y puede sacarlas de la cola clicando en "<b>-</b>". Cuando una grabación se ha usado porque estaba "<b>en uso</b>" (o era la siguiente a usar), le saldrá la banderita "En uso" a la siguiente en la cola. Esta característica le permite usar muchas grabaciones para evitar límites de cuota de YouTube como las retransmisiones en directo permitidas por día.';
$string['aidisabled'] = 'Se han deshabilitado las características de IA por el administrador.';
$string['aienabled'] = 'Habilitar características de IA.';
$string['aienabledex'] = 'Permite características de IA (resumen, cuestionario, transcripción) para grabaciones GCS. Cuando está habilitado, las grabaciones de vídeo se envían a la IA de Google Vertex para su procesamiento. Asegúrese de que su institución tiene un Acuerdo de Procesamiento de Datos con Google Cloud y que la región seleccionada sea compatible con las leyes de protección de datos aplicables. (p.ej., RGPD).';
$string['aigdprnotice'] = 'Cuando genera contenido IA, la grabación de vídeo se envía a la IA de Google Vertex ({$a}) para su procesamiento. Puede contener datos personales (voces e imágenes de participantes). Asegúrese de esto sea compatible con la protección de datos personales de su institución y de que hay un Acuerdo de Procesamiento de Datos con Google Cloud vigente.';
$string['aiheading'] = 'Características de IA';
$string['aitranscriptiongenerating'] = 'Generando transcripción...';
$string['alertacceswithlogin'] = 'Usted está accediendo mediante un enlace externo y usted está autenticado. Por favor, acceda desde el curso.';
$string['alias'] = 'Alias';
$string['allow'] = 'Comienzo de la videoconferencia';
$string['allowbreakoutrooms'] = 'Permitir salas de breakout';
$string['allowbreakoutroomsex'] = 'Permitir creación de salas de breakout. El servidor debe estar configurado para permitirlas.';
$string['apikeyid8x8'] = 'ID de clave de Api';
$string['apikeyid8x8ex'] = 'ID de clave de Api para usar con servidor 8x8. Puede obtenerla desde la administración del servidor 8x8 (https://jaas.8x8.com/).';
$string['appaccessinfo'] = 'Si desea unirse a la reunión utilizando un dispositivo móvil, necesitará la aplicación móvil Jitsi Meet.';
$string['appid'] = 'ID de la App';
$string['appidex'] = 'ID de la App para la configuración del token';
$string['appinstalledtext'] = 'Si ya tiene la aplicación:';
$string['appnotinstalledtext'] = 'Si aún no tiene la aplicación:';
$string['attendancedates'] = 'Fechas de asistencia';
$string['attendancegeneratereport'] = 'Generar informe desde datos en vivo';
$string['attendancereport'] = 'Informe de asistencia';
$string['attendancetablive'] = 'Sesiones en vivo';
$string['attendeesreport'] = 'Informe de asistentes';
$string['authq'] = '¿Iniciar sesión con esta cuenta para obtener credenciales y poner "en uso"?';
$string['averagetimeperuser'] = 'Tiempo medio por usuario';
$string['averagetimeperuserinperiod'] = 'Tiempo medio por usuario en periodo';
$string['avg_recordings_per_day'] = 'Media de grabaciones por día';
$string['avg_recordings_per_week'] = 'Media de grabaciones por semana';
$string['backtosettings'] = 'Volver a la configuración';
$string['blurbutton'] = 'Opciones de fondo';
$string['blurbuttonex'] = 'Mostrar la opción "Seleccionar fondo" a todos los usuarios. Esta característica es genial pero requiere computadoras poderosas. Tal vez deberías desactivarlo.';
$string['buttondownloadapp'] = 'Descargar aplicación';
$string['buttonopeninbrowser'] = 'Abrir en navegador web';
$string['buttonopenwithapp'] = 'Únase a esta sesión usando la app';
$string['cachedef_getminutes'] = 'Cachedef getminutes';
$string['cachedef_getminutesdates'] = 'Cachedef getminutesdates';
$string['cachedef_sessionusagestats'] = 'Caché de estadísticas de uso de sesión Jitsi';
$string['calendarstart'] = 'La videoconferencia \'{$a}\' comienza';
$string['callhistory'] = 'Llamadas recientes';
$string['callnoresults'] = 'No se han encontrado compañeros.';
$string['callsearchplaceholder'] = 'Teclee un nombre...';
$string['callsomeone'] = 'Llamar a alguien';
$string['callsomeonehelp'] = 'Buscar compañeros para comenzar una llamada privada.';
$string['category'] = 'Categoría';
$string['chat'] = 'Conversación';
$string['chatex'] = 'Habilitar conversaciones para todos los participantes';
$string['click'] = 'Clicar';
$string['close'] = 'Fin de la videoconferencia';
$string['closebeforeopen'] = 'No se pudo actualizar la sesión. Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['completiondetail:minutes'] = 'Asistir {$a} minutos';
$string['completionminutes'] = 'El estudiante debe participar';
$string['completionminutes_help'] = 'Número de minutos que el estudiante debe participar para dar por finalizada la actividad';
$string['completionminutesex'] = 'Minutos de participación';
$string['config'] = 'Configuración';
$string['confignewexpirationtime'] = 'Configurar nuevo tiempo de expiración en los ajustes';
$string['confirmdelete'] = '¿Seguro que quiere borrar el servidor "{$a}"?';
$string['confirmdeleterecordinactivity'] = 'Confirme que desea eliminar esta grabación. Esta operación no se puede deshacer.';
$string['connectedattendeesnow'] = 'asistentes conectados ahora.';
$string['copied'] = 'Copiado al portapapeles';
$string['copytoken'] = 'Token copiado';
$string['copyurl'] = 'Copiar URL';
$string['course'] = 'Curso';
$string['coursedashboard'] = 'Tablero del curso';
$string['coursedashboardactivities'] = 'Resumen de actividad';
$string['coursedashboardminutes'] = 'Minutos';
$string['coursedashboardnodata'] = 'No hay datos de sesión disponibles aún.';
$string['coursedashboardparticipants'] = 'Participantes únicos';
$string['coursedashboardrecording'] = 'Grabando';
$string['coursedashboardrecordings'] = 'Grabaciones';
$string['coursedashboardrecordingsstarted'] = 'Grabaciones comenzadas';
$string['coursedashboardsessions'] = 'Sesioones';
$string['coursedashboardstudents'] = 'Participación de estudiantes';
$string['coursedashboardviewers'] = 'Espectadores';
$string['creategcpserver'] = 'Crear servidor en Google Cloud';
$string['creatingvm'] = 'Creando VM... ({$a})';
$string['crontaskdelete'] = 'Borrar grabaciones';
$string['deeplink'] = 'Enlace profundo';
$string['deeplinkex'] = 'Cuándo la app de Moodle permite transferir sesiones de Jitsi a la app de Jitsi.';
$string['defaultserverdeleted'] = 'Advertencia: Ha borrado el servidor por defecto. Por favor, configure un nuevo servidor por defecto en la configuración del plugin.';
$string['defaultserverupdated'] = 'Servidor por defecto actualizado a: {$a}';
$string['deleteq'] = '¿Eliminar y desconectar esta cuenta?';
$string['deleterecord'] = 'Borrar registro';
$string['deleteslot'] = 'Borrar';
$string['deletesourceq'] = '¿Está seguro/ a? La grabación se eliminará permanentemente del servidor de video y no se podrá recuperar';
$string['deletesources'] = 'Grabaciones disponibles para eliminar';
$string['deletetooltip'] = 'Eliminar';
$string['deprecated'] = 'Obsoleto';
$string['deprecatedex'] = 'Parámetros obsoletos que probablemente no funcionarán porque Jitsi Meet cambió su implementación';
$string['desktopaccessinfo'] = 'Si desea unirse a la reunión, haga clic en el botón de abajo para abrir Jitsi en su navegador.';
$string['disablepushnotifications'] = 'Deshabilitar notificaciones';
$string['dismisscall'] = 'Expulsar';
$string['domain'] = 'Dominio';
$string['domainex'] = 'Dominio de servidor Jitsi a utilizar. El servidor por defecto (<b>meet.jit.si</b>) tiene un límite de 5 minutos por videoconferencia.
 Usted puede usar un buscador para encontrar servidores Jitsi públicos alternativos que puedan estar más cerca de sus usuarios y con menos latencia.
Si usted tiene su servidor Jitsi privado, infórmenos aquí sin "https://".
El servidor profesional 8x8 usa (<b>8x8.vc</b>) y requiere que configure sus credenciales en la sección "Configuración de token" que hay más abajo.';
$string['dropboxappkey'] = 'Clave de App Dropbox';
$string['dropboxappkeyex'] = 'La clave de app de su app Dropbox (Dropbox Developer Console → your app → Settings tab).';
$string['dropboxconfig'] = 'Configuración de grabación de Dropbox';
$string['editrecordinglink'] = 'Editar enlace de grabación';
$string['editrecordname'] = 'Editar nombre grabación';
$string['editserver'] = 'Editar servidor';
$string['enablepushnotifications'] = 'Habilitar notificaciones';
$string['enterprivatesession'] = 'Entrar en una sesión privada';
$string['entersession'] = 'Entrar a la sesión';
$string['error'] = 'Error';
$string['errordeleting'] = 'Error eliminando';
$string['exitsession'] = 'Abandonar sesión';
$string['experimental'] = 'Experimental';
$string['experimentalex'] = 'Son opciones con las que estamos experimentando y que pueden desaparecer en futuras versiones.';
$string['externalinvitations'] = 'Invitaciones externas';
$string['externaltoken'] = 'Token externo';
$string['externaltoken_help'] = 'Use este enlace para invitados que no tengan un usuario de Moodle con el que acceder.';
$string['finish'] = 'La sesión ha finalizado';
$string['finishandreturn'] = 'Finalizar y volver';
$string['finishandreturnex'] = 'Volver al curso cuando termine la sesión. Los usuarios de uso público de Jitsi vuelven al curso cuando cierran la publicidad';
$string['finishinvitation'] = 'El enlace de invitación caducará el';
$string['firstview'] = 'Primera vista';
$string['forkids'] = 'Para niños';
$string['forkidsex'] = 'Las grabaciones se considerarán creadas por niños.';
$string['from'] = 'De';
$string['gcpcreatingwait'] = 'Por favor, espere mientras se crea la máquina virtual. Esto puede tardar varios minutos.';
$string['gcpimage'] = 'Imagen base';
$string['gcpnetwork'] = 'Red';
$string['gcpserverstopped'] = 'El servidor Jitsi seleccionado está parado actualmente. Por favor, contacte con su administrador para volver a arrancarlo.';
$string['gcpserviceaccountjsonfile'] = 'Cuenta de Servicio JSON';
$string['gcpserviceaccountjsonfileex'] = 'Mejorar la Cuenta de Servicio JSON con permisos para gestionar Motor Computacional.';
$string['gcpstartupscript'] = 'Script de arranque';
$string['gcpstartupscriptex'] = 'Script cloud-init/bash para instalar y configurar Jitsi en el primer arranque.';
$string['gcpzone'] = 'Zona';
$string['gcpzoneex'] = 'Zona del Motor Computacional (ej. europe-west1-b).';
$string['guestform'] = 'Entrar al formulario de invitado';
$string['guestjoin'] = 'Unirse a la sesión';
$string['hasentered'] = 'ha entrado en tu sesión privada de Jitsi';
$string['help'] = 'Ayuda';
$string['helpex'] = 'Este texto de ayuda se mostrará al final de todas las actividades de Jitsi. Es un buen lugar para reglas de netiqueta o instrucciones de ayuda para los usuarios.';
$string['here'] = 'aquí';
$string['identification'] = 'ID de usuario';
$string['identificationex'] = 'ID a mostrar en la sesión';
$string['inqueue'] = 'En cola';
$string['instruction'] = 'Clic en el botón para acceder';
$string['integrated'] = 'Integrado en Moodle';
$string['internalerror'] = 'Error interno. Contacte con el administrador.';
$string['inuse'] = '<b>(en uso)</b>';
$string['invitations'] = 'Invitaciones';
$string['invitationsnotactivated'] = 'Las invitaciones no están activadas.';
$string['invitebutton'] = 'Opciones de invitación';
$string['invitebuttonex'] = 'Permitir a los usuarios con el permiso mod/jitsi:createlink crear enlaces de invitación para usuarios no matriculados en el curso.';
$string['iscalling'] = 'le está llamando para entrar en su Jitsi privado';
$string['jitsi'] = 'Jitsi';
$string['jitsi:addinstance'] = 'Añadir nuevo Jitsi';
$string['jitsi:createlink'] = 'Ver y copiar enlances de invitación para invitados';
$string['jitsi:deleterecord'] = 'Borrar registro';
$string['jitsi:editrecordname'] = 'Editar nombre del registro';
$string['jitsi:hide'] = 'Ocultar grabaciones';
$string['jitsi:moderation'] = 'Moderación de Jitsi';
$string['jitsi:record'] = 'Grabar sesión';
$string['jitsi:sharedesktop'] = 'Compartir escritorio';
$string['jitsi:view'] = 'Ver Jitsi';
$string['jitsi:viewexternallink'] = 'Ver enlace externo';
$string['jitsi:viewrecords'] = 'Ver registros';
$string['jitsi:viewusersonsession'] = 'Acceso a los informes de asistentes';
$string['jitsi_recording_statistics'] = 'Estadísticas de grabación de Jitsi';
$string['jitsiinterface'] = 'Interfaz Jitsi';
$string['jitsiname'] = 'Nombre de la sesión';
$string['joinmeeting'] = 'Unirse a la reunión';
$string['latency'] = 'Latencia';
$string['latencyex'] = 'Seleccionar nivel de latencia para streaming.';
$string['link'] = 'enlace';
$string['linkexpiredon'] = 'Este enlace expiró el {$a}';
$string['livesessionsnow'] = 'Grabaciones en vivo';
$string['loadattendees'] = 'Cargar asistentes';
$string['loadingvideo'] = 'Cargando vídeo... Por favor, espere';
$string['loginq'] = '¿Quiere poner en uso esta cuenta?';
$string['logintooltip'] = 'Se requieren credenciales para esta cuenta';
$string['messageprovider:callprivatesession'] = 'Llamar a Jitsi privado';
$string['messageprovider:onprivatesession'] = 'Usuario en sesión privada';
$string['minpretime'] = 'Minutos para acceder';
$string['minpretime_help'] = 'Los usuarios con permisos de moderación podrán acceder estos minutos antes del inicio';
$string['minutesconnected'] = 'Ha estado conectado durante {$a} minutos';
$string['minutesday'] = 'Minutos día';
$string['minutestoday'] = 'Minutos hoy';
$string['modulename'] = 'Jitsi';
$string['modulename_help'] = 'Utilice el módulo Jitsi para videoconferencia. Estas videoconferencias utilizarán su nombre de usuario de Moodle mostrando su nombre de usuario y avatar en las videoconferencias.

Jitsi-meet es una solución de videoconferencia de código abierto que le permite crear e implementar fácilmente soluciones de videoconferencia seguras.';
$string['modulenameplural'] = 'Jitsis';
$string['month'] = 'Mes';
$string['monthlyusage'] = 'Uso mensual';
$string['myprivatesession'] = 'Mi sesión privada';
$string['nameandsurname'] = 'Nombre + Apellido';
$string['newvaluefor'] = 'Nuevo valor para';
$string['nodefaultserver'] = 'No ses ha configurado un servidor por defecto. Por favor, vaya a la configuración del plugin y configure un servidor por defecto.';
$string['noinviteaccess'] = 'Actualmente no se permite el acceso de invitados.';
$string['nojitsis'] = 'No se han encontrado actividades Jitsi';
$string['norecording'] = 'No hay grabación. El vídeo aparecerá automáticamente';
$string['norecords'] = 'No hay grabaciones disponibles';
$string['nostart'] = 'La sesión no ha comenzado. Puede acceder {$a}';
$string['notloggedin'] = 'Se requieren credenciales de cuenta';
$string['noviewpermission'] = 'No tiene permisos para ver esta sesión Jitsi';
$string['number_of_recordings'] = 'Número de grabaciones';
$string['numbervideosdeleted'] = 'Número de vídeos a borrar';
$string['numbervideosdeletedex'] = 'Número de vídeos a borrar en cada ejecución de tarea de cron';
$string['oauthid'] = 'ID OAuth2';
$string['oauthidex'] = 'Cuenta de Google ID Oauth2  con YouTube Data API v3 habilitada y esta redirección URIs <b>\'{$a}\'</b> en la consola Google api.';
$string['oauthsecret'] = 'Clave OAuth2';
$string['oauthsecretex'] = 'Oauth2 Secret cuenta Google';
$string['openrecording'] = 'Abrir grabación';
$string['participantspane'] = 'Panel de participantes';
$string['participantspaneex'] = 'Mostrar el panel de participantes a todos los usuarios. Cuando se desmarca, solo los usuarios con capacidad de moderación de Jitsi (mod/jitsi:moderation), generalmente profesores, pueden ver el panel.';
$string['participatingsession'] = 'Participantes en la sesión';
$string['password'] = 'Contraseña';
$string['passwordex'] = 'Contraseña para proteger sus sesiones. Recomendado si usa un servidor público';
$string['pluginadministration'] = 'Administración de Jitsi';
$string['pluginname'] = 'Jitsi';
$string['polls'] = 'Encuestas';
$string['pollsex'] = 'Habililtar la característica de encuestas para todos los participantes: Nota: las encuestas siempre están desactivadas cuando el chat está deshabilitado.';
$string['preparing'] = 'Preparando. Por favor, espere...';
$string['presscambutton'] = 'Pulsar botón de cámara';
$string['pressdesktopbutton'] = 'Pulsar botón de escritorio';
$string['pressendbutton'] = 'Pulsar botón de fin';
$string['pressmicrophonebutton'] = 'Pulsar botón de micrófono';
$string['pressrecordbutton'] = 'Pulsar botón de grabación';
$string['privacy:metadata:jitsi'] = 'Para poder integrarse con una sesión jitsi, los datos del usuario deben intercambiarse con ese servicio.';
$string['privacy:metadata:jitsi:avatar'] = 'El avatar se envía desde moodle para mostrarlo a los demás usuarios de la sesión jitsi.';
$string['privacy:metadata:jitsi:email'] = 'El correo del usuario se envía al servidor Jitsi cuando se activa la configuración de envío de correo';
$string['privacy:metadata:jitsi:username'] = 'El nombre de usuario se envía desde moodle para mostrarlo a los demás usuarios de la sesión jitsi.';
$string['privacy:metadata:portal:activity_count'] = 'El número total de actividades Jitsi en el sitio.';
$string['privacy:metadata:portal:features'] = 'Qué características opcionales están habilitadas: IA, grabación, sesiones privadas, notificaciones push.';
$string['privacy:metadata:portal:moodle_branch'] = 'El número de versión principal de Moodle.';
$string['privacy:metadata:portal:plugin_version'] = 'El número de versión del plugin mod_jitsi.';
$string['privacy:metadata:portal:server_type'] = 'El tipo de servidor configurado (público, auto-alojado, JaaS o GCP).';
$string['privatekey'] = 'Clave privada';
$string['privatekeyex'] = 'Clave privada para firmar el token con el servidor 8x8. Puede obtenerla desde la adminitración del servidor 8x8 (https://jaas.8x8.com/).
Descargue el archivo con la clave privada y copie su contenido aquí.
</br><b>IMPORTANTE</b>: recuerde actualizar el ajuste "Dominio" a algo así como <b>8x8.vc</b>';
$string['privatesession'] = 'Sesión privada de {$a}';
$string['privatesessiondisabled'] = 'Las sesiones privadas están desabilitadas';
$string['privatesessions'] = 'Sesiones privadas';
$string['privatesessionsex'] = 'Agregar sesiones privadas a los perfiles de usuario';
$string['pushnotificationbody'] = '{$a} le está esperando en una sesión privada';
$string['pushnotificationsblocked'] = 'Notificaciones bloqueadas por su navegador';
$string['pushnotificationsenabled'] = 'Notificaciones habilitadas';
$string['pushnotificationtitle'] = 'Llamada entrante';
$string['raisehand'] = 'Botón de levantar la mano';
$string['raisehandex'] = 'Muestre el botón de levantar la mano a todos los usuarios. Cuando los usuarios levantan la mano pueden acceder al panel de participantes. Si oculta los paneles de participantes, es posible que deba ocultar este botón.';
$string['reactions'] = 'Reacciones';
$string['reactionsex'] = 'Muestra emoticonos sonoros de aplausos, sorpresa, etc... Se requiere "Botón de levantar la mano" habilitado';
$string['record'] = 'Grabación';
$string['recordbtn'] = 'Registro';
$string['recorders'] = 'Grabadores';
$string['recordex'] = 'Habilitar opción de grabación nativa de Jitsi (dropbox) a usuarios con el permiso mod/jitsi:record habilitado (normalmente, profesores). Si ajusta la "Configuración de retransmisión" con el método "Integrado en Moodle" probablemente querrá deshabilitar esto.';
$string['recordingaccesslog'] = 'Registro de acceso a grabaciones';
$string['recordingbloquedby'] = 'La grabación está bloqueada por';
$string['recordingheatmapplays'] = 'Reproducciones totales (máx. {$a})';
$string['recordingheatmapviewers'] = '{$a} espectadores';
$string['recordinglinksaved'] = 'Enlace de grabación guardado con éxito';
$string['recordingname'] = 'Nombre de grabación (opcional)';
$string['recordingurl'] = 'URL de grabación';
$string['recordingwasbloquedby'] = 'El usuario que empezó esta grabación no está participando ya en la sesión. ¿Desea parar esta grabación? La inició';
$string['records'] = 'Grabaciones';
$string['recordsonair'] = 'Grabaciones en el aire';
$string['recordtitle'] = 'Grabaciones';
$string['refreshtokenstep2'] = 'Encontrar y eliminar el acceso a la apliación para este sitio Moodle';
$string['refreshtokenstep3'] = 'Vuelva aquí y añada la cuenta de nuevo usando una ventana de navegador privada/incógnito';
$string['removedfromqueue'] = 'Fuera de la cola';
$string['removefromqueue'] = 'Sacar de la cola';
$string['search'] = 'Buscar';
$string['searchrecords'] = 'Buscar grabaciones';
$string['searchsession'] = 'Teclee para buscar una sesión o pegar un token...';
$string['secret'] = 'Secreto';
$string['secretex'] = 'Secreto para la configuración de token';
$string['securitybutton'] = 'Botón seguridad';
$string['securitybuttonex'] = 'Muestra el botón nativo de Jitsi "Opciones de seguridad" y el "Modo sala de espera". Probablemente usted debería desactivar esta opción si ha puesto una contraseña arriba porque la contraseña le aparecerá a los usuarios. Con la configuración de token puede experimentar con esta opción.';
$string['selectdate'] = 'Seleccionar fecha';
$string['sendemail'] = 'Enviar el correo del usuario a Jitsi';
$string['sendemailex'] = 'Si se habilita, la dirección de correo del usuario de Moodle se enviará al servidor Jitsi. Esto puede requerirse por algunas características del servidor como entrega de grabaciones por correo. Nota: habilitar esto comparte datos personales con el servidor Jitsi — asegúrese de que eso sea compatible con su política de privacidad.';
$string['sendinvitation'] = 'Enviar invitación por correo electrónico';
$string['sendinvitationbody'] = 'Hola.

Se le ha invitado a participar en la sesión de videoconferencia "{$a->session}" del curso "{$a->course}".

Puede acceder mediante este enlace:
{$a->url}

Este enlace tiene un periodo de validez limitado. Si tiene problemas para acceder, por favor, contacte con el organizador.

{$a->message}

Saludos,
{$a->sender}';
$string['separator'] = 'Separador';
$string['separatorex'] = 'Definir el campo separador para el nombre de la sesión';
$string['server'] = 'Servidor Jitsi';
$string['serveradded'] = 'Servidor creado con éxito.';
$string['serverdeleted'] = 'Servidor "{$a}" borrado con éxito.';
$string['serverdesc'] = 'Elija qué servidor Jitsi se usará.';
$string['servermanagement'] = 'Servidores Jitsi';
$string['servermanagementdesc'] = 'Clique aquí para gestionar servidores Jitsi';
$string['serversetasdefault'] = 'Servidor "{$a}" configurado por defecto';
$string['serverupdated'] = 'Servidor "{$a}" actualizado satisfactoriamente.';
$string['sessiondeleted'] = 'Compartición de la sesión eliminada';
$string['sessionisbeingrecorded'] = 'La sesión se está grabando';
$string['sessionisbeingrecordingby'] = '{$a} está grabando la sesión';
$string['sessionnamefields'] = 'Campos de nombre de la sesión';
$string['sessionnamefieldsex'] = 'Campos que definen el nombre de la sesión';
$string['sessionsentered'] = 'Sesiones con acceso';
$string['sessionshared'] = 'Sesión compartida con curso "{$a}"';
$string['sessionusagestats'] = 'Estadísticas de uso de sesión';
$string['sessionusagestatsslow'] = 'puede ser lento en instalaciones grandes';
$string['setdefault'] = 'Configurar por defecto';
$string['sharedsessionwithtoken'] = 'Sesión compartida con token. Seleccione esto para introducir el token del otro curso';
$string['sharestream'] = 'Compartir streaming con usuarios externos a Moodle (función experimental)';
$string['sharestreamex'] = 'Active esta característica para ofrecer la posibilidad de compartir streaming en vivo de una sesión con usuarios externos a Moodle.';
$string['sharetoinvite'] = 'Comparta este enlace para invitar a alguien a la sesión';
$string['showavatars'] = 'Mostrar avatares en Jitsi';
$string['showavatarsex'] = 'Muestra el avatar del usuario en Jitsi. Si el usuario no tiene una imagen de perfil, se cargará la imagen de perfil predeterminada de Moodle en lugar de las iniciales que mostrará Jitsi cuando no se establezca ninguna imagen.';
$string['simultaneouscameras'] = 'Cámaras simultáneas';
$string['simultaneouscamerasex'] = 'Número máximo de cámaras simultáneas que pueden ver los usuarios. Esto puede ser cambiado a un valor inferior por su servidor Jitsi. Permitir un montón de cámaras podría sobrecargar sus navegadores.';
$string['startwithaudiomuted'] = 'Comenzar con el audio silenciado';
$string['startwithaudiomutedex'] = 'Cuando un usuario se conecte a la sesión, el audio se silenciará';
$string['startwithvideomuted'] = 'Comenzar con vídeo apagado';
$string['startwithvideomutedex'] = 'Cuando un usuario se conecte a la sesión, el vídeo estará apagado';
$string['staticinvitationlink'] = 'Opción de invitaciones';
$string['staticinvitationlinkcapabilityex'] = 'Use esta opción para usuarios que no tengan un usuario de Moodle para acceder. Usted sólo puede crear o modificar el enlace de invitación si tiene el permiso mod/jitsi:createlink.';
$string['staticinvitationlinkex'] = 'Use esta opción para invitados que no pueden acceder con un usuario de Moodle. Puede ver y copiar el enlace en la zona de invitación.';
$string['staticinvitationlinkexview'] = 'Comparta este enlace con invitados que no tienen una cuenta de usuario para acceder a Moodle.';
$string['status'] = 'Estado';
$string['streamingandrecording'] = 'Retransmisión y grabación';
$string['streamingbutton'] = 'Streaming de Youtube';
$string['streamingbuttonex'] = 'Habilite las funciones de transmisión en vivo para los usuarios con la función mod/jitsi:record habilitada (maestros). Si está habilitado, probablemente querrá deshabilitar la opción "grabar" anterior.';
$string['streamingconfig'] = 'Configuración de retransmisión';
$string['streamingconfigex'] = 'La configuración de retransmisión por defecto funciona de forma diferente y los usuarios pueden retransmitir/grabar sus sesiones con sus propias cuentas de retransmisión en servicios de retransmisión (Peertube, Youtube...) pero el profesor es responsable de publicar sus enlaces para los estudiantes del curso. </br></br>Para una mejor experiencia puede activar el método "Integrado en Moodle" para grabar y una cuenta de retransmisión corporativa y las grabaciones estarán automáticamente disponibles para los estudiantes.';
$string['streamingisstarting'] = 'La retransmisión está comenzando. Por favor, espere...';
$string['streamingoption'] = 'Método de retransmisión en directo';
$string['streamingoptionex'] = 'La <b>interfaz Jitsi (jitsi interface)</b> permite "Comenzar retransmisión en directo" en la interfaz Jitsi y los usuarios pueden usar sus propias cuentas de retransmisión.
</br><b>Integrado en Moodle</b> es la opción más sencilla para los usuarios. Los profesores pueden empezar una "Retransmisión y grabación" inmediatamente y no se les pedirán credenciales de cuenta. Las retransmisiones/grabaciones se guardan en una cuenta corporativa y estarán inmediatamente disponibles para los estudiantes. Usted debe configurar credenciales OAuth2 y una cuenta de transmisión a continuación.';
$string['tablelistjitsis'] = 'Lista todos los vídeos en sus cuentas de proveedores de retransmisión/grabación que están disponibles para ser eliminados porque ya no están vinculados en las actividades de Jitsi en esta instancia de Moodle. Puede eliminarlos de forma segura para liberar espacio en el servidor de retransmisión. La lista podría incluir vídeos que ahora están en la \'Papelera de reciclaje\' de algún curso. Se recomienda eliminar sólo las grabaciones antiguas que sepa que no serán necesarias. </br></br> <b>¡¡¡ATENCIÓN!!! </b>Si tiene instancias de copia de seguridad de Moodle, NO debe eliminar estos videos si están vinculados en otras instancias.';
$string['timeopen'] = 'Hora de apertura de la sesión';
$string['to'] = 'A';
$string['toenter'] = 'para entrar';
$string['token'] = 'Comparta este token en el otro curso';
$string['tokenconfiguration8x8ex'] = 'Si usa servidores 8x8 necesita configurar los siguientes parámetros.';
$string['tokenconfigurationex'] = 'Si está usando un servidor Jitsi configurado en "modo token", por ejemplo en su propio servidor o en un servidor 8x8, rellene los siguientes parámetros según el tipo de servidor que esté usando. Requerido para dar a sus usuarios el permiso (mod/jitsi:moderation) como moderadores nativos de Jitsi.';
$string['tokeninterno'] = 'Token de sesión principal';
$string['tokeninternocompartir'] = 'Token para compartir';
$string['tokeninternocompartir_help'] = 'Use este token para compartir la sesión con otros cursos. Introduzca este token en esta sección para el otro curso.';
$string['tokeninvitacion'] = 'Introduzca aquí el token de la sesión a la que quiere acceder';
$string['tokeninvitacion_help'] = 'Introduzca aquí el token de la sesión a la que quiere acceder. Tome este token del otro curso.';
$string['tokeninvitadovalidation'] = 'Token no válido';
$string['tokeninvitationnotvalid'] = 'La invitación no puede expirar antes de ahora';
$string['tokeninvitationvalidation'] = 'Token no válido. No hay ninguna sesión con este token';
$string['tokennconfig'] = 'Configuración de token';
$string['tokennconfig8x8'] = 'Configuración de servidores 8x8';
$string['top_10_teachers'] = 'Profesores en los primeros 10 puestos';
$string['topcategories'] = 'Categorías de más uso';
$string['topcourses'] = 'Cursos de más uso';
$string['toplimit'] = 'Límite superior';
$string['total_participants'] = 'Total de participantes';
$string['total_recordings'] = 'Total de grabaciones';
$string['totalminutes'] = 'Total de minutos';
$string['totalminutesinperiod'] = 'Minutos totales en periodo';
$string['totalsessionsinperiod'] = 'Sesiones totales en periodo';
$string['totaluniqueusersinperiod'] = 'Total de usuarios únicos en periodo';
$string['totaluserminutes'] = 'Total de usuario-minutos';
$string['totaluserminutesinperiod'] = 'Total usuario-minutos en periodo';
$string['transcription'] = 'Habilitar transcripción';
$string['transcriptionex'] = 'Habilitar la característica de transcripción en sesiones Jitsi. Si se deshabilita, la opción de transcripción estará oculta a los participantes independientemente de la configuración del servidor.';
$string['type'] = 'Tipo';
$string['uniqueusers'] = 'Usuarios únicos';
$string['unknowntype'] = 'Tipo desconocido';
$string['updated'] = 'Actualizado';
$string['urlerror'] = 'La URL no es válida';
$string['urlinvitacion'] = 'URL de invitación';
$string['urlinvitacionrecord'] = 'URL de invitación a streaming';
$string['usercall'] = '{$a} llamadas para usted para Jitsi privado';
$string['userenter'] = '{$a} está en su sala de sesión privada de Jitsi';
$string['username'] = 'Nombre de usuario';
$string['validitytimevalidation'] = 'Esta invitación no puede expirar antes de la fecha de comienzo de la sesión o después de la fecha fin de la sesión.';
$string['videoexpiry'] = 'Periodo de retención';
$string['videoexpiryex'] = 'Tiempo en que estará disponible un vídeo borrado en el servidor de streaming. Tras este tiempo el vídeo se borrará del servidor de streaming.';
$string['warningprivate'] = 'Si accede, {$a} será advertido con una notificación.';
$string['watchprogress'] = 'Ver progreso';
$string['watermarklink'] = 'Enlace de marca de agua';
$string['watermarklinkex'] = 'Enlace de marca de agua';
$string['weekday0'] = 'Domingo';
$string['weekday1'] = 'Lunes';
$string['weekday2'] = 'Martes';
$string['weekday3'] = 'Miércoles';
$string['weekday4'] = 'Jueves';
$string['weekday5'] = 'Viernes';
$string['weekday6'] = 'Sábado';
$string['whiteboard'] = 'Pizarra';
$string['whiteboardex'] = 'Muestra el botón de pizarra a todos los usuarios. La pizarra no está disponible en servidores Jaas (Jitsi como servicio).';
$string['yoursessiontoken'] = 'Su token de sesión';
$string['youtubebutton'] = 'Opción para compartir desde Youtube';
$string['youtubebuttonex'] = 'Mostrar la opción para compartir vídeos Youtube';
