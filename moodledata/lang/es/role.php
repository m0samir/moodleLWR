<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'role', language 'es', branch 'MOODLE_37_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Agregando nuevo rol';
$string['addrole'] = 'Añadir un nuevo rol';
$string['advancedoverride'] = 'Anular rol avanzado';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir asignar roles';
$string['allowed'] = 'Permitido';
$string['allowoverride'] = 'Permitir sobrescribir roles';
$string['allowroletoassign'] = 'Permitir a los usuarios con el rol {$a->fromrole} asignar el rol {$a->targetrole}';
$string['allowroletooverride'] = 'Permitir a los usuarios con el rol {$a->fromrole} anular el rol {$a->targetrole}';
$string['allowroletoswitch'] = 'Permitir a los usuarios con el rol {$a->fromrole} cambiar al rol {$a->targetrole}';
$string['allowswitch'] = 'Permitir cambios de rol';
$string['allsiteusers'] = 'Todos los usuarios del sitio';
$string['analytics:listinsights'] = 'Listar intuiciones (predicciones)';
$string['archetype'] = 'Arquetipo de rol';
$string['archetypecoursecreator'] = 'ARQUETIPO: Creador de cursos';
$string['archetypeeditingteacher'] = 'ARQUETIPO: Profesor con permiso de edición';
$string['archetypefrontpage'] = 'ARQUETIPO: Usuario identificado en la página principal';
$string['archetypeguest'] = 'ARQUETIPO: Invitado';
$string['archetype_help'] = 'El rol arquetipo determina los permisos cuando un se restablece un rol a su valor por defecto. También determina los permisos nuevos para el papel cuando el sitio se actualiza.';
$string['archetypemanager'] = 'ARQUETIPO: Gestor';
$string['archetypestudent'] = 'ARQUETIPO: Estudiante';
$string['archetypeteacher'] = 'ARQUETIPO: Profesor sin permiso de edición';
$string['archetypeuser'] = 'ARQUETIPO: Usuario identificado';
$string['assignanotherrole'] = 'Asignar otro rol';
$string['assignedroles'] = 'Roles asignados';
$string['assignerror'] = 'Error al asignar el rol {$a->role} al usuario {$a->user}.';
$string['assignglobalroles'] = 'Asignar roles globales';
$string['assignmentcontext'] = 'Contexto de asignación';
$string['assignmentoptions'] = 'Opciones de asignación';
$string['assignrole'] = 'Asignar rol';
$string['assignrolenameincontext'] = 'Asignar rol \'{$a->role}\' en {$a->context}';
$string['assignroles'] = 'Asignar roles';
$string['assignroles_help'] = 'Al asignar un rol a un usuario en un contexto,
le está garantizando los permisos propios de ese rol
en el contexto actual y en todos los contextos de
rango inferior. Por ejemplo, si un usuario se le asigna el rol de estudiante en un curso, también tendrá el rol de estudiante en todas las actividades y bloques dentro del curso.';
$string['assignrolesin'] = 'Asignar roles en {$a}';
$string['assignrolesrelativetothisuser'] = 'Asignar roles relativos a este usuario';
$string['backtoallroles'] = 'Regresar a la lista de todos los roles';
$string['backup:anonymise'] = 'Hacer anónimos los datos de usuario en la copia de seguridad';
$string['backup:backupactivity'] = 'Copia de seguridad de las actividades';
$string['backup:backupcourse'] = 'Copia de seguridad de los cursos';
$string['backup:backupsection'] = 'Copia de seguridad de las secciones';
$string['backup:backuptargethub'] = 'Copia de seguridad del hub';
$string['backup:backuptargetimport'] = 'Copia de seguridad de las importaciones';
$string['backup:configure'] = 'Configurar las opciones de la copia de seguridad';
$string['backup:downloadfile'] = 'Descargar archivos de las áreas de copia de seguridad';
$string['backup:userinfo'] = 'Copia de seguridad de los datos de usuario';
$string['badges:awardbadge'] = 'Premiar con una insignia a un usuario';
$string['badges:configurecriteria'] = 'Establecer/editar los criterios de la insignia';
$string['badges:configuredetails'] = 'Establecer/editar los detalles de la insignia';
$string['badges:configuremessages'] = 'Configurar mensajes de la insignia';
$string['badges:createbadge'] = 'Crear/duplicar insignias';
$string['badges:deletebadge'] = 'Eliminar insignias';
$string['badges:earnbadge'] = 'Ganar insignia';
$string['badges:manageglobalsettings'] = 'Gestionar la configuración global de las insignias';
$string['badges:manageownbadges'] = 'Ver y administrar las insignaias propias conseguidas';
$string['badges:viewawarded'] = 'Ver los usuarios que hayan obtenido una insignia específica sin que puedan otorgar una insignia';
$string['badges:viewbadges'] = 'Ver insignias disponibles no ganadas';
$string['badges:viewotherbadges'] = 'Ver insignias públicas en los perfiles de los demás usuarios';
$string['block:edit'] = 'Editar la configuración de un bloque';
$string['block:view'] = 'Ver bloque';
$string['blog:create'] = 'Crear nuevas entradas de blog';
$string['blog:manageentries'] = 'Editar y gestionar entradas';
$string['blog:manageexternal'] = 'Editar y gestionar blogs externos';
$string['blog:search'] = 'Buscar entradas de blog';
$string['blog:view'] = 'Ver entradas de blog';
$string['blog:viewdrafts'] = 'Ver entradas de blog en borrador ';
$string['calendar:manageentries'] = 'Gestionar cualquier entrada de calendario';
$string['calendar:managegroupentries'] = 'Gestionar entradas de calendario de grupo';
$string['calendar:manageownentries'] = 'Gestionar entradas de calendario propias';
$string['capabilities'] = 'Habilidades';
$string['capability'] = 'Capacidad';
$string['category:create'] = 'Crear categorías';
$string['category:delete'] = 'Eliminar categorías';
$string['category:manage'] = 'Gestionar categorías';
$string['category:update'] = 'Actualizar categorías';
$string['category:viewhiddencategories'] = 'Ver categorías ocultas';
$string['category:visibility'] = 'Ver categorías ocultas';
$string['checkglobalpermissions'] = 'Compruebe los permisos del sistema';
$string['checkpermissions'] = 'Compruebe los permisos';
$string['checkpermissionsin'] = 'Compruebe los permisos en {$a}';
$string['checksystempermissionsfor'] = 'Compruebe los permisos de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Compruebe los permisos que tiene {$a->fullname} in este {$a->contextlevel}';
$string['chooseroletoassign'] = 'Por favor, seleccione un rol a asignar';
$string['cohort:assign'] = 'Agregar y eliminar miembros de cohorte';
$string['cohort:manage'] = 'Crear, eliminar y mover cohortes';
$string['cohort:view'] = 'Ver cohortes de todo el sitio';
$string['comment:delete'] = 'Eliminar comentarios';
$string['comment:post'] = 'Enviar comentarios';
$string['comment:view'] = 'Leer comentarios';
$string['community:add'] = 'Usar el bloque comunidad para buscar hubs y encontrar cursos';
$string['community:download'] = 'Descargar un curso del bloque comunidad';
$string['competency:evidencedelete'] = 'Eliminar evidencia';
$string['competency:templatemanage'] = 'Gestionar plantillas de plan de aprendizaje';
$string['competency:templateview'] = 'Ver plantillas de plan de aprendizaje';
$string['confirmaddadmin'] = '¿Realmente desea agregar al usuario <strong>{$a}</strong> como nuevo administrador del sitio?';
$string['confirmdeladmin'] = '¿Realmente desea eliminar al usuario <strong>{$a}</strong> de la lista de administradores del sitio?';
$string['confirmroleprevent'] = '¿Realmente desea eliminar <strong>{$a->role}</strong> de la lista de roles con la capacidad de {$a->cap} en el contexto {$a->context}?';
$string['confirmroleunprohibit'] = '¿Realmente desea eliminar <strong>{$a->role}</strong> de la lista de roles a los que se prohibe el privilegio de {$a->cap} en el contexto {$a->context}?';
$string['confirmunassign'] = '¿Está seguro de que quiere eliminar este rol a este usuario?';
$string['confirmunassignno'] = 'Cancelar';
$string['confirmunassigntitle'] = 'Confirmar cambio de rol';
$string['confirmunassignyes'] = 'Eliminar';
$string['context'] = 'Contexto';
$string['course:activityvisibility'] = 'Ocultar/mostrar actividades';
$string['course:bulkmessaging'] = 'Enviar un mensaje a mucha gente';
$string['course:changecategory'] = 'Cambiar la categoría del curso';
$string['course:changefullname'] = 'Cambiar el nombre completo del curso';
$string['course:changeidnumber'] = 'Cambiar el número ID del curso';
$string['course:changeshortname'] = 'Cambiar el nombre corto del curso';
$string['course:changesummary'] = 'Cambiar el resumen del curso';
$string['course:create'] = 'Crear cursos';
$string['course:delete'] = 'Eliminar cursos';
$string['course:enrolconfig'] = 'Configurar ejemplos de matriculación en cursos';
$string['course:enrolreview'] = 'Revisar matriculaciones del curso';
$string['course:ignoreavailabilityrestrictions'] = 'Ignorar restricciones de acceso';
$string['course:ignorefilesizelimits'] = 'Usar archivos mayores a las restricciones por tamaño';
$string['course:isincompletionreports'] = 'Mostrarse en reportes de finalización';
$string['course:manageactivities'] = 'Gestionar actividades';
$string['course:managefiles'] = 'Gestionar archivos';
$string['course:managegrades'] = 'Gestionar calificaciones';
$string['course:managegroups'] = 'Gestionar grupos';
$string['course:managescales'] = 'Gestionar escalas';
$string['course:markcomplete'] = 'Marcar los usuarios como completos al completar un curso';
$string['course:movesections'] = 'Mover secciones';
$string['course:publish'] = 'Publicar un curso en el hub';
$string['course:request'] = 'Solicitar nuevos cursos';
$string['course:reset'] = 'Reiniciar curso';
$string['course:reviewotherusers'] = 'Revise otros usuarios';
$string['course:sectionvisibility'] = 'Controlar visibilidad de sección';
$string['course:setcurrentsection'] = 'Ajustar sección actual';
$string['course:tag'] = 'Cambiar etiquetas de curso';
$string['course:update'] = 'Actualizar ajustes de curso';
$string['course:useremail'] = 'Habilitar/deshabilitar dirección email';
$string['course:view'] = 'Ver cursos sin participación';
$string['course:viewcoursegrades'] = 'Ver calificaciones de curso';
$string['course:viewhiddenactivities'] = 'Ver actividades ocultas';
$string['course:viewhiddencourses'] = 'Ver cursos ocultos';
$string['course:viewhiddensections'] = 'Ver secciones ocultas';
$string['course:viewhiddenuserfields'] = 'Ver campos de usuario ocultos';
$string['course:viewparticipants'] = 'Ver participantes';
$string['course:viewscales'] = 'Ver escalas';
$string['course:viewsuspendedusers'] = 'Ver los usuarios suspendidos';
$string['course:visibility'] = 'Ocultar/mostrar cursos';
$string['createrolebycopying'] = 'Crear un nuevo rol copiando {$a}';
$string['createthisrole'] = 'Crear este rol';
$string['currentcontext'] = 'Contexto actual';
$string['currentrole'] = 'Rol actual';
$string['customroledescription'] = 'Descripción personalizada';
$string['customroledescription_help'] = 'Las descripciones de roles estándar se localizan automáticamente si la descripción personalizada está vacía.';
$string['customrolename'] = 'Nombre completo personalizado';
$string['customrolename_help'] = 'Los nombres de los roles estándar se localizan automáticamente si el nombre personalizado está vacío. Usted debe proporcionar un nombre completo para todos los roles personalizados.';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultx'] = 'Valor predeterminado: {$a}';
$string['defineroles'] = 'Definir roles';
$string['deletecourseoverrides'] = 'Eliminar todas las anulaciones del curso';
$string['deletelocalroles'] = 'Eliminar todas las asignaciones de rol locales';
$string['deleterolesure'] = '¿Está seguro de que quiere eliminar el rol "{$a->name} ({$a->shortname})"?</p><p>Actualmente este rol está asignado a {$a->count} usuarios.';
$string['deletexrole'] = 'Eliminar el rol {$a}';
$string['duplicaterole'] = 'Duplicar este rol';
$string['duplicaterolesure'] = '¿Está seguro de que quiere duplicar el rol "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'Editando el rol \'{$a}\'';
$string['editrole'] = 'Editar rol';
$string['editxrole'] = 'Editar el rol \'{$a}\'';
$string['errorbadrolename'] = 'Nombre de rol incorrecto';
$string['errorbadroleshortname'] = 'Nombre corto de rol incorrecto';
$string['errorexistsrolename'] = 'El nombre de este rol ya existe';
$string['errorexistsroleshortname'] = 'El nombre de este rol ya existe';
$string['errorroleshortnametoolong'] = 'El nombre corto no puede exceder de 100 caracteres';
$string['eventroleallowassignupdated'] = 'Permitir asignación de roles';
$string['eventroleallowoverrideupdated'] = 'Permitir sobreescritura de roles';
$string['eventroleallowswitchupdated'] = 'Permitir cambio de rol';
$string['eventroleassigned'] = 'Rol asignado';
$string['eventrolecapabilitiesupdated'] = 'Capacidades de rol actualizadas';
$string['eventroledeleted'] = 'Rol eliminado';
$string['eventroleunassigned'] = 'Rol sin asignar';
$string['existingadmins'] = 'Administradores actuales del sitio';
$string['existingusers'] = '{$a} usuarios existentes';
$string['explanation'] = 'Explicación';
$string['export'] = 'Exportar';
$string['extusers'] = 'Usuarios existentes';
$string['extusersmatching'] = 'Usuarios existentes que coinciden con \'{$a}\'';
$string['filter:manage'] = 'Gestionar configuración de filtros locales';
$string['frontpageuser'] = 'Usuario identificado en la página principal';
$string['frontpageuserdescription'] = 'Todos los usuarios identificados en el curso de la página principal';
$string['globalrole'] = 'Rol del sistema';
$string['globalroleswarning'] = '¡ATENCIÓN! Cualquier rol que asigne desde esta página se aplicará a los usuarios asignados en todo el sitio, incluyendo la página principal y todos los cursos.';
$string['gotoassignroles'] = 'Ir a Asignar roles en este {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ir a Asignar roles del sistema';
$string['grade:edit'] = 'Editar calificaciones';
$string['grade:export'] = 'Exportar calificaciones';
$string['grade:hide'] = 'Ocultar/mostrar calificaciones de los ítems';
$string['grade:import'] = 'Importar calificaciones';
$string['grade:lock'] = 'Bloquear calificaciones de los ítems';
$string['grade:manage'] = 'Gestionar elementos de calificación';
$string['grade:managegradingforms'] = 'Gestionar métodos de calificación avanzados';
$string['grade:manageletters'] = 'Gestionar calificaciones con letra';
$string['grade:manageoutcomes'] = 'Gestionar resultados de calificaciones';
$string['grade:managesharedforms'] = 'Gestionar plantillas avanzadas de formatos de calificación';
$string['grade:override'] = 'Pasar calificaciones por alto';
$string['grade:sharegradingforms'] = 'Compartir formatos avanzados de calificación como plantillas';
$string['grade:unlock'] = 'Desbloquear calificaciones o elementos';
$string['grade:view'] = 'Ver calificaciones propias';
$string['grade:viewall'] = 'Ver calificaciones de otros usuarios';
$string['grade:viewhidden'] = 'Ver calificaciones ocultas al usuario';
$string['highlightedcellsshowdefault'] = 'Las celdas marcadas en la siguiente tabla muestran los permisos predeterminados para cada tipo de rol, en base al \'tipo de rol heredado del nivel superior\'.';
$string['highlightedcellsshowinherit'] = 'Las celdas marcadas en la siguiente tabla muestra el permiso (si lo hay) que se hereda. Además de los permisos que realmente desea cambiar, debe dejar todo listo para los permisos a heredar.';
$string['inactiveformorethan'] = 'inactivo durante más de {$a->timeperiod}';
$string['ingroup'] = 'en el grupo "{$a->group}"';
$string['inherit'] = 'Heredar';
$string['invalidpresetfile'] = 'Archivo de definición de rol no válido';
$string['legacy:admin'] = 'ROL HEREDADO: Administrador';
$string['legacy:coursecreator'] = 'ROL HEREDADO: Creador de cursos';
$string['legacy:editingteacher'] = 'ROL HEREDADO: Profesor (editor)';
$string['legacy:guest'] = 'ROL HEREDADO: Invitado';
$string['legacy:student'] = 'ROL  HEREDADO: Estudiante';
$string['legacy:teacher'] = 'ROL HEREDADO: Profesor (no editor)';
$string['legacytype'] = 'Tipo de rol heredado';
$string['legacy:user'] = 'ROL HEREDADO: Usuario identificado';
$string['listallroles'] = 'Listar todos los roles';
$string['localroles'] = 'Roles asignados localmente';
$string['mainadmin'] = 'Admin principal';
$string['mainadminset'] = 'Configurar Admin principal';
$string['manageadmins'] = 'Gestionar los administradores del sitio';
$string['manager'] = 'Gestor';
$string['managerdescription'] = 'Los gestores pueden acceder a los cursos y modificarlos, por lo general no participan en los cursos.';
$string['manageroles'] = 'Gestionar roles';
$string['maybeassignedin'] = 'Tipos de contexto en que puede asignarse este rol';
$string['morethan'] = 'Más de {$a}';
$string['multipleroles'] = 'Roles múltiples';
$string['my:configsyspages'] = 'Configurar plantillas del sistema para las páginas Área personal';
$string['my:manageblocks'] = 'Gestionar bloques de la página Área personal';
$string['neededroles'] = 'Roles con permiso';
$string['nocapabilitiesincontext'] = 'Permisos no disponibles en este contexto';
$string['noneinthisx'] = 'Ninguno en este {$a}';
$string['noneinthisxmatching'] = 'No hay usuarios coincidentes con \'{$a->search}\' en este {$a->contexttype}';
$string['norole'] = 'Ningún rol';
$string['noroleassignments'] = 'Este usuario no tiene ninguna tarea de rol en ningún lugar de este sitio';
$string['noroles'] = 'No hay roles';
$string['notabletoassignroleshere'] = 'Usted no puede asignar ningún rol aquí';
$string['notabletooverrideroleshere'] = 'No tiene privilegios para anular los permisos de ningún rol aquí';
$string['notes:manage'] = 'Gestionar notas';
$string['notes:view'] = 'Ver notas';
$string['notset'] = 'No ajustado';
$string['overrideanotherrole'] = 'Anular otro rol';
$string['overridecontext'] = 'Anular contexto';
$string['overridepermissions'] = 'Anular permisos';
$string['overridepermissionsforrole'] = 'Reemplazar los permisos del rol \'{$a->role}\' en el contexto \'{$a->context}\'';
$string['overridepermissions_help'] = 'Las anulaciones de permisos posibilitan permitir o impedir los privilegios seleccionados en un contexto específico.
';
$string['overridepermissionsin'] = 'Anular permisos en {$a}';
$string['overrideroles'] = 'Anular roles';
$string['overriderolesin'] = 'Anular roles en {$a}';
$string['overrides'] = 'Anulaciones';
$string['overridesbycontext'] = 'Anulaciones (por contexto)';
$string['permission'] = 'Permiso';
$string['permission_help'] = 'Los permisos son los ajustes con los que usted otorga la posibilidad de llevar a cabo determinadas acciones.
Hay 4 opciones:

* No ajustado
* Permitir: se concede el permiso para actuar.
* Prevenir: se retira el permiso, incluso aunque se admita en un contexto más alto.
* Prohibir: se retira por completo el permiso y no se puede anular en ningún nivel más bajo (más específico).';
$string['permissions'] = 'Permisos';
$string['permissionsforuser'] = 'Permisos para {$a}';
$string['permissionsincontext'] = 'Permisos en {$a}';
$string['portfolio:export'] = 'Exportar a portafolios';
$string['potentialusers'] = '{$a} usuarios potenciales';
$string['potusers'] = 'Usuarios potenciales';
$string['potusersmatching'] = 'Usuarios potenciales que coinciden con \'{$a}\'';
$string['prevent'] = 'Prevenir';
$string['prohibit'] = 'Prohibir';
$string['prohibitedroles'] = 'Prohibido';
$string['question:add'] = 'Agregar nuevas preguntas';
$string['question:config'] = 'Configurar tipos de pregunta';
$string['question:editall'] = 'Editar todas las preguntas';
$string['question:editmine'] = 'Editar sus propias preguntas';
$string['question:flag'] = 'Marcar preguntas mientras se intentan';
$string['question:managecategory'] = 'Editar categorías de preguntas';
$string['question:moveall'] = 'Mover todas las preguntas';
$string['question:movemine'] = 'Mover sus propias preguntas';
$string['question:useall'] = 'Usar todas las preguntas';
$string['question:usemine'] = 'Usar sus propias preguntas';
$string['question:viewall'] = 'Ver todas las preguntas';
$string['question:viewmine'] = 'Ver sus propias preguntas';
$string['rating:rate'] = 'Añada las calificaciones a los elementos';
$string['rating:view'] = 'Ver la calificación total recibida';
$string['rating:viewall'] = 'Ver todas las calificaciones emitidas por los usuarios
';
$string['rating:viewany'] = 'Ver el total de calificaciones que alguien recibió';
$string['resetrole'] = 'Restablecer';
$string['resettingrole'] = 'Restableciendo rol \'{$A}\'';
$string['restore:configure'] = 'Configurar opciones de restauración';
$string['restore:createuser'] = 'Crear usuarios en la restauración';
$string['restore:restoreactivity'] = 'Restaurar actividades';
$string['restore:restorecourse'] = 'Restaurar cursos';
$string['restore:restoresection'] = 'Restaurar secciones';
$string['restore:restoretargethub'] = 'Restaurar de archivos señalados como hub';
$string['restore:restoretargetimport'] = 'Restaurar archivos señalados como importación';
$string['restore:rolldates'] = 'Está permitido contemplar fechas de configuración de la actividad en la restauración';
$string['restore:uploadfile'] = 'Subir archivos a las áreas de copia de seguridad';
$string['restore:userinfo'] = 'Restaurar datos de usuario';
$string['restore:viewautomatedfilearea'] = 'Restaurar los cursos de copias de seguridad automatizadas';
$string['risks'] = 'Riesgos';
$string['roleallowheader'] = 'Permitir rol:';
$string['roleallowinfo'] = 'Elija un rol para añadir a la lista de roles permitidos en el contexto {$a->context}, permiso {$a->cap}:';
$string['role:assign'] = 'Asignar roles a los usuarios';
$string['roleassignments'] = 'Asignaciones de rol';
$string['roledefinitions'] = 'Definiciones de rol';
$string['rolefullname'] = 'Nombre';
$string['roleincontext'] = '{$a->role} en {$a->context}';
$string['role:manage'] = 'Crear y gestionar roles';
$string['role:override'] = 'Anular permisos para otros';
$string['roleprohibitheader'] = 'Prohibir rol';
$string['roleprohibitinfo'] = 'Seleccione un rol para añadir a la lista de roles prohibidos en el contexto {$a->context}, permiso {$a->cap}:';
$string['rolerepreset'] = 'Usar rol predeterminado';
$string['roleresetdefaults'] = 'Por defecto';
$string['roleresetrole'] = 'Usar rol o arquetipo';
$string['role:review'] = 'Revisión de permisos para los demás';
$string['rolerisks'] = 'Riesgos del rol';
$string['roles'] = 'Roles';
$string['role:safeoverride'] = 'Anular permisos seguros para otros';
$string['roleselect'] = 'Seleccionar rol';
$string['rolesforuser'] = 'Roles para el usuario {$a}';
$string['roles_help'] = 'Un rol es un conjunto de permisos definidos para todo el sitio que usted puede asignar a usuarios específicos en contextos específicos.';
$string['roleshortname'] = 'Nombre corto';
$string['roleshortname_help'] = 'El nombre corto del rol es un identificador del rol de bajo nivel, en el cual solamente están permitidos caracteres ASCII alfanuméricos. No cambie los nombres cortos de los roles estándar.';
$string['role:switchroles'] = 'Cambiar a otros roles';
$string['roletoassign'] = 'Rol a asignar';
$string['roletooverride'] = 'Rol a anular';
$string['safeoverridenotice'] = 'Nota: Los permisos con riesgo más elevado están bloqueados porque usted únicamente puede anular permisos seguros.';
$string['selectanotheruser'] = 'Seleccionar otro rol';
$string['selectauser'] = 'Seleccionar un usuario';
$string['selectrole'] = 'Seleccionar un rol';
$string['showallroles'] = 'Mostrar todos los roles';
$string['showthisuserspermissions'] = 'Mostrar los permisos de este usuario';
$string['site:accessallgroups'] = 'Acceder a todos los grupos';
$string['siteadministrators'] = 'Administradores del sitio';
$string['site:approvecourse'] = 'Aprobar la creación de cursos';
$string['site:backup'] = 'Hacer copia de seguridad de los cursos';
$string['site:config'] = 'Cambiar configuración del sitio';
$string['site:deleteanymessage'] = 'Borrar los mensajes del sitio';
$string['site:deleteownmessage'] = 'Borrar mensajes enviados a/por el usuario';
$string['site:doanything'] = 'Permiso para todo';
$string['site:doclinks'] = 'Mostrar enlaces a documentos fuera del sitio';
$string['site:forcelanguage'] = 'Sobrescribe idioma del curso';
$string['site:import'] = 'Importar otros cursos a un curso';
$string['site:manageblocks'] = 'Gestionar bloques en una página';
$string['site:mnetloginfromremote'] = 'Acceso desde una aplicación remota vía MNet';
$string['site:mnetlogintoremote'] = 'Acceder a una aplicación remota vía MNet';
$string['site:readallmessages'] = 'Leer todos los mensajes del sitio';
$string['site:restore'] = 'Restaurar cursos';
$string['site:sendmessage'] = 'Enviar mensajes a cualquier usuario';
$string['site:trustcontent'] = 'Confiar en contenidos enviados';
$string['site:uploadusers'] = 'Subir nuevos usuarios desde un archivo';
$string['site:viewfullnames'] = 'Ver siempre nombres completos de los usuarios';
$string['site:viewparticipants'] = 'Ver a los participantes';
$string['site:viewreports'] = 'Ver informes';
$string['site:viewuseridentity'] = 'Ver la identidad completa del usuario en las listas';
$string['tag:edit'] = 'Editar marcas existentes';
$string['tag:editblocks'] = 'Editar bloques en páginas de marcas';
$string['tag:flag'] = 'Señalar marcas (tags) como inapropiadas';
$string['tag:manage'] = 'Gestionar todas las marcas';
$string['thisnewrole'] = 'Este nuevo rol';
$string['thisusersroles'] = 'Asignaciones de rol de este usuario';
$string['unassignarole'] = 'Desasignar rol {$a}';
$string['unassignconfirm'] = '¿Realmente desea desasignar el rol "{$a->role}" del usuario "{$a->user}"?';
$string['unassignerror'] = 'Error al desasignar el rol {$a->role} del usuario {$a->user}.';
$string['user:changeownpassword'] = 'Cambiar la contraseña propia';
$string['user:create'] = 'Crear usuarios';
$string['user:delete'] = 'Eliminar usuarios';
$string['user:editmessageprofile'] = 'Editar perfil de mensajería de usuario';
$string['user:editownmessageprofile'] = 'Editar el propio perfil de mensajería de usuario';
$string['user:editownprofile'] = 'Editar el perfil de usuario propio';
$string['user:editprofile'] = 'Editar perfil de usuario';
$string['user:ignoreuserquota'] = 'Ignorar límite de cuota de usuario';
$string['user:loginas'] = 'Entrar como otro usuario';
$string['user:manageblocks'] = 'Gestionar bloques en el perfil de usuario de otros usuarios';
$string['user:manageownblocks'] = 'Gestionar bloques en el perfil de usuario público propio';
$string['user:manageownfiles'] = 'Gestionar archivos en las áreas de archivos privados propios';
$string['user:managesyspages'] = 'Configurar el diseño de página predeterminado para los perfiles de usuario públicos';
$string['user:readuserblogs'] = 'Ver todos los blogs de usuario';
$string['user:readuserposts'] = 'Ver todos los mensajes que han publicado los usuarios en los foros';
$string['usersfrom'] = 'Usuarios de {$a}';
$string['usersfrommatching'] = 'Usuarios de {$a->contextname} que coinciden con \'{$a->search}\'';
$string['usersinthisx'] = 'Usuarios en este {$a}';
$string['usersinthisxmatching'] = 'Usuarios en este {$a->contexttype} que coinciden con \'{$a->search}\'';
$string['userswithrole'] = 'Todos los usuarios con rol';
$string['userswiththisrole'] = 'Usuarios con rol';
$string['user:update'] = 'Actualizar perfiles de usuario';
$string['user:viewalldetails'] = 'Ver información completa del usuario';
$string['user:viewdetails'] = 'Ver perfiles de usuario';
$string['user:viewhiddendetails'] = 'Ver detalles ocultos de los usuarios';
$string['user:viewlastip'] = 'Ver última dirección ip del usuario';
$string['user:viewuseractivitiesreport'] = 'Ver informes de actividad de los usuarios';
$string['user:viewusergrades'] = 'Ver calificaciones de los usuarios';
$string['useshowadvancedtochange'] = 'Usar "Mostrar avanzadas" para cambiar';
$string['viewingdefinitionofrolex'] = 'Viendo la definición del rol \'{$a}\'';
$string['viewrole'] = 'Ver detalles del rol';
$string['webservice:createmobiletoken'] = 'Crear una ficha (token) web para acceso por dispositivos móviles';
$string['webservice:createtoken'] = 'Crear una ficha de servicio web';
$string['whydoesuserhavecap'] = '¿Por qué {$a->fullname} tiene el permiso de {$a->capability} en el contexto {$a->context}?';
$string['whydoesusernothavecap'] = '¿Por qué {$a->fullname} no tiene el permiso de {$a->capability} en el contexto {$a->context}?';
$string['xroleassignments'] = 'Tareas del rol {$a}';
$string['xuserswiththerole'] = 'Usuarios con el rol "{$a->role}"';
