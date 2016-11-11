<?php

// Language definitions used in admin_options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'Mal HTTP_REFERER. Si ha movido estos foros de un sitio a otro o cambiado de dominio, es necesario actualizar manualmente la dirección URL base en la base de datos (busque o_base_url en la tabla de configuración) y luego borre la caché mediante la supresión de todos los archivos .php en el directorio /cache.',
'Must enter title message'			=>	'Debe introducir un título del foro.',
'Invalid e-mail message'			=>	'La dirección de correo electrónico del webmaster que ha entrado no es válido.',
'Invalid webmaster e-mail message'	=>	'La dirección de correo electrónico del webmaster que ha entrado no es válido.',
'SMTP passwords did not match'		=>	'Es necesario introducir la contraseña SMTP dos veces exactamente la misma para cambiarla.',
'Enter announcement here'			=>	'Ingrese su anuncio aquí.',
'Enter rules here'					=>	'Introduzca las normas aquí.',
'Default maintenance message'		=>	'Los foros están temporalmente fuera de servicio por mantenimiento. Por favor, inténtelo de nuevo en unos minutos.',
'Timeout error message'				=>	'El valor del "Tiempo de espera conectado" debe ser menor que el valor de "Tiempo de espera de la visita".',
'Options updated redirect'			=>	'Opciones actualizadas. Redireccionando …',
'Options head'						=>	'Opciones',

// Essentials section
'Essentials subhead'				=>	'Esenciales',
'Board title label'					=>	'Titulo del foro',
'Board title help'					=>	'El título de este foro (que se muestra en la parte superior de cada página). Este campo puede <strong>no</strong> contener HTML.',
'Board desc label'					=>	'Descripción del foro',
'Board desc help'					=>	'Una breve descripción de este foro (que se muestra en la parte superior de cada página). Este campo puede contener HTML.',
'Base URL label'					=>	'URL Base',
'Base URL help'						=>	'La dirección URL completa del foro sin la barra final (ej. http://www.midominio.com/foros). Esta <strong>debe</strong> ser correcta para que todos los admin y moderadores funcionen. Si uste recibe el error "Mal referer", esta sea probablemente incorrecta.',
'Timezone label'					=>	'Zona horaria por defecto',
'Timezone help'						=>	'La zona horaria predeterminada para los invitados y usuarios que intentan registrarse en el foro.',
'DST label'							=>	'Ajustar Horario de Verano',
'DST help'							=>	'Compruebe si el horario de verano está en vigor (tiempos de avances en 1 hora).',
'Language label'					=>	'Idioma por defecto',
'Language help'						=>	'El idioma por defecto para los invitados y usuarios que no lo hayan cambiado desde su perfil. Si elimina un paquete de idioma, deberán actualizarse.',
'Default style label'				=>	'Estilo por defecto',
'Default style help'				=>	'La plantilla por defecto para los invitados y usuarios que no lo hayan cambiado desde su perfil.',

// Essentials section timezone options
'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Western European, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moscow, Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands, Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

// Timeout Section
'Timeouts subhead'					=>	'Horarios y tiempos de espera',
'Time format label'					=>	'Formato de Hora',
'PHP manual'						=>	'PHP manual',
'Time format help'					=>	'[Current format: %s]. See %s for formatting options.',
'Date format label'					=>	'Formato de día',
'Date format help'					=>	'[Current format: %s]. See %s for formatting options.',
'Visit timeout label'				=>	'Tiempo de espera Visita',
'Visit timeout help'				=>	'Número de segundos que un usuario debe estar inactivo antes de que los datos de su última visita se actualicen (afecta principalmente a los nuevos indicadores de mensaje).',
'Online timeout label'				=>	'Tiempo de espera conectado',
'Online timeout help'				=>	'Número de segundos que un usuario debe estar inactivo antes de ser eliminado de la lista de usuarios en línea.',
'Redirect time label'				=>	'Tiempo Redireccionando',
'Redirect time help'				=>	'Número de segundos de espera al redirigir. Si se establece en 0, no mostrará la página de redireccionando (no recomendado).',

// Display Section
'Display subhead'					=>	'Mostrar',
'Version number label'				=>	'Version número',
'Version number help'				=>	'',
'Info in posts label'				=>	'Información del usuario en los mensajes',
'Info in posts help'				=>	'Muestra información sobre el usuario bajo el nombre de usuario en la vista de tema. La información afectada es la ubicación, fecha de registro, número de mensajes y los vínculos de contacto (e-mail y URL).',
'Post count label'					=>	'Número de mensajes de usuario',
'Post count help'					=>	'Muestra el número de mensajes que un usuario ha hecho (afecta a Vista de tema, perfil y lista de usuarios).',
'Smilies label'						=>	'Smilies en mensajes',
'Smilies help'						=>	'Convierte los smilies en pequeños iconos graficos.',
'Smilies sigs label'				=>	'Smilies in firmas',
'Smilies sigs help'					=>	'Convierte los smilies en pequeños iconos graficos en las firmas de usuario.',
'Clickable links label'				=>	'Hacer enlaces pulsables',
'Clickable links help'				=>	'Cuando está activado, automaticamente detecta cualquier dirección web en los mensajes y la convierte en hipervinculos pulsables.',
'Topic review label'				=>	'Tema de revisión',
'Topic review help'					=>	'El número máximo de mensajes para mostrar al publicar (primero los más recientes). Ajustelo en 0 para deshabilitar.',
'Topics per page label'				=>	'Temas por página',
'Topics per page help'				=>	'El número por defecto de temas que se mostrarán por página en un foro. Los usuarios pueden personalizar esta configuración.',
'Posts per page label'				=>	'Mensajes por página',
'Posts per page help'				=>	'El número por defecto de mensajes que se mostrarán por página en un foro. Los usuarios pueden personalizar esta configuración.',
'Indent label'						=>	'Tamaño de Sangría',
'Indent help'						=>	'Si se pone a 8, una etiqueta rgular serán usadas cuando se muestra el texto dentro de las etiquetas [code][/code]. De lo contrario muchos espacios se utilizarán para sangrar el texto.',
'Quote depth label'					=>	'Máximo [quote] profundidad',
'Quote depth help'					=>	'Los tiempos máximos que una etiqueta [quote] puede ir dentro de otra etiqueta [quote], mas etiquetas de esta profundidad se descartarán.',

// Features section
'Features subhead'					=>	'Características',
'Quick post label'					=>	'Respuesta rapida',
'Quick post help'					=>	'Cuando está activado, añadirá un formulario de respuesta rapida en la parte inferior de los temas. De esta manera los usuarios pueden enviar directamente desde la Vista de Tema.',
'Users online label'				=>	'Usuarios conectados',
'Users online help'					=>	'Muestra información en la página de inicio sobre cuantos invitados y usuarios registrados están navengado por los foros.',
'Censor words label'				=>	'Palabras censuradas',
'Censor words help'					=>	'Habilitar esto para censurar palabras específicas en los foros. Mire %s para más información.',
'Signatures label'					=>	'Firmas',
'Signatures help'					=>	'Permitir a los usuarios adjuntar una firma a sus mensajes.',
'User has posted label'				=>	'El usuario ha publicado anteriormente',
'User has posted help'				=>	'Esta función muestra un punto delante de los temas en viewforum.php en caso de que el usuario conectado actualmente ha publicado en ese tema antes. Desactivar si usted está experimentando una alta carga del servidor.',
'Topic views label'					=>	'Temas visto',
'Topic views help'					=>	'Mantenga un registro del número de veces que se ha visto un tema. Desactivar si usted está experimentando una alta carga del servidor en la disponibilidad de un foro.',
'Quick jump label'					=>	'Salto rápido',
'Quick jump help'					=>	'Habilitar el salto rápido (ir al foro) en la lista desplegable.',
'GZip label'						=>	'GZip de salida',
'GZip help'							=>	'Si está activado, usará gzip como salida a enviar a los navegadores. Esto reducirá el uso de ancho de banda, pero el uso de la CPU un poco más. Esta función requiere que PHP se configura con zlib (- with-zlib). Nota: Si usted ya tiene uno de los módulos de Apache mod_gzip o mod_deflate creado para comprimir scripts PHP, debe desactivar esta función.',
'Search all label'					=>	'Buscar todos los foros',
'Search all help'					=>	'Cuando está desactivada, las búsquedas sólo se permitirá en un foro a la vez. Desactivar si la carga del servidor es alta debido a un exceso de la búsqueda.',
'Menu items label'					=>	'Elementos de menú adicionales',
'Menu items help'					=>	'Al participar en hipervínculos HTML en este cuadro de texto, cualquier número de elementos se pueden añadir al menú de navegación en la parte superior de todas las páginas. El formato para añádir nuevos enlaces es X = &lt;a href="URL"&gt;LINK&lt;/a&gt; donde X es la posición en la que el enlace debe ser insertado (ej. 0 para insertar al principio y 2 para insertar después de "Lista de Usuarios"). Separe las entradas con un salto de línea.',

// Feeds section
'Feed subhead'						=>	'Sindicación',
'Default feed label'				=>	'Tipo de feed por defecto',
'Default feed help'					=>	'Selecciona el tipo de sindicacición feed para mostrar. Nota: ninguna elección no deshabilitará los feed, sólo los ocultará de forma predeterminada.',
'None'								=>	'Ninguno',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duración de caché de los feeds',
'Feed TTL help'						=>	'Feeds pueden almacenar en caché para reducir el uso de los recursos de feeds.',
'No cache'							=>	'No almacenar en caché',
'Minutes'							=>	'%d minutos',

// Reports section
'Reports subhead'					=>	'Reportes',
'Reporting method label'			=>	'Metodo de reportes',
'Internal'							=>	'Interno',
'By e-mail'							=>	'Email',
'Both'								=>	'Ambos',
'Reporting method help'				=>	'Seleccione el método para la manipulación de tema/mensaje reportados. Usted puede elegir si tema/mensaje reportados deberían ser manejadas por el sistema de informes internos, por correo electrónico a las direcciones en la lista de correo (ver abajo) o ambos.',
'Mailing list label'				=>	'Lista de Correo',
'Mailing list help'					=>	'Una lista separada por comas de los suscritos. La gente en esta lista son los destinatarios de los informes.',

// Avatars section
'Avatars subhead'					=>	'Avatares',
'Use avatars label'					=>	'Avatar de Usuario',
'Use avatars help'					=>	'Cuando está activada, los usuarios podrán subir una imagen que se muestra bajo el título/rango.',
'Upload directory label'			=>	'Directorio de subida',
'Upload directory help'				=>	'El directorio de subida para los avatares. PHP debe tener permisos de escritura sobre este directorio.',
'Max width label'					=>	'Anchura máxima',
'Max width help'					=>	'El ancho máximo permitido de avatares en píxeles (60 es recomendado).',
'Max height label'					=>	'Altura máxima',
'Max height help'					=>	'La altura máxima permitida de avatares en píxeles (60 es recomendado).',
'Max size label'					=>	'Tamaño máximo',
'Max size help'						=>	'El tamaño máximo permitido de avatares en bytes (10240 es recomendado).',

// E-mail section
'E-mail subhead'					=>	'Correo Electronico',
'Admin e-mail label'				=>	'Correo del Admin',
'Admin e-mail help'					=>	'La dirección de correo electrónico del administrador del foro.',
'Webmaster e-mail label'			=>	'Correo del Webmaster',
'Webmaster e-mail help'				=>	'Esta es la dirección que se mostrará en todos los correos electrónicos enviados por el foro.',
'Forum subscriptions label'			=>	'Suscripciones del foro',
'Forum subscriptions help'			=>	'Permite a los usuarios suscribirse a los foros (recibir correo electrónico cuando alguien crea un nuevo tema).',
'Topic subscriptions label'			=>	'Suscripciones a Temas',
'Topic subscriptions help'			=>	'Permite a los usuarios suscribirse a los temas (recibir correo electrónico cuando alguien responda).',
'SMTP address label'				=>	'Dirección SMTP del servidor',
'SMTP address help'					=>	'La dirección para un servidor externo SMTP para enviar correos electronicos con ello. Usted puede especificar un número de puerto personalizado si el servidor SMTP no se ejecuta en el puerto por defecto 25 (ejemplo: correo.servidor.com:3580). Deja en blanco para usar el programa de correo local.',
'SMTP username label'				=>	'Nombre de usuario SMTP',
'SMTP username help'				=>	'Nombre de usuario para el servidor SMTP. Sólo introduzca un nombre de usuario si es requerido por el servidor SMTP (la mayoria de los servidores <strong>no</strong> requieren autenticación).',
'SMTP password label'				=>	'Contraseña SMTP',
'SMTP change password help'			=>	'Seleccione esta opción si desea cambiar o eliminar la contraseña almacenada en la actualidad.',
'SMTP password help'				=>	'Contraseña para el servidor SMTP. Sólo introduzca una contraseña si es requerida por el servidor SMTP (la mayoria de los servidores <strong>no</strong> requieren autenticación).',
'SMTP SSL label'					=>	'Encriptar SMTP usando SSL',
'SMTP SSL help'						=>	'Encriptar la conexión al servidor SMTP usando SSL. Solamente debería utilizarse si el servidor SMTP lo requiere y su versión de PHP soporta SSL.',

// Registration Section
'Registration subhead'				=>	'Registro',
'Allow new label'					=>	'Permitir nuevos registros',
'Allow new help'					=>	'Controla si este foro acepta nuevos registros. Deshabilitar sólo en circunstancias especiales.',
'Verify label'						=>	'Verificar registros',
'Verify help'						=>	'Cuando está activado, a los usuarios son enviados por correo electrónico una contraseña al azar cuando se inscriben. A continuación, puede iniciar sesión y cambiar la contraseña en su perfil si lo consideran oportuno. Esta función también requiere que los usuarios verifiquen las direcciones de correo electrónico nuevas, si deciden cambiar de la que se registró. Esta es una manera efectiva de evitar el abuso de registro, asegurándose de que todos los usuarios tienen una "correcta" direccion de correo electrónico en sus perfiles.',
'Report new label'					=>	'Reportar nuevos registros',
'Report new help'					=>	'Si está activado, notificará a los usuarios en la lista de correo (véase más arriba) cuando un nuevo usuario se registra en los foros.',
'Use rules label'					=>	'Reglas del foro para el Usuario',
'Use rules help'					=>	'Cuando está activada, los usuarios deben estar de acuerdo a un conjunto de normas al registrarse (ingresar texto más abajo). Las normas estarán siempre disponibles a través de un enlace en la mesa de navegación en la parte superior de cada página.',
'Rules label'						=>	'Introduce tus reglas aquí',
'Rules help'						=>	'Aquí puede introducir cualquier norma u otra información que el usuario debe revisar y aceptar al registrarse. Si habilitó normas anteriores, tendrá que introducir algo aquí, de lo contrario, se desactivará. Este texto no será analizado como puestos de plantilla y por lo tanto puede contener HTML.',
'E-mail default label'				=>	'Configuración por defecto de E-Mail',
'E-mail default help'				=>	'Elija la configuración predeterminada de privacidad para registro de nuevos usuarios.',
'Display e-mail label'				=>	'Mostrar el Email a otros usuarios.',
'Hide allow form label'				=>	'Oculta la dirección de correo electronico pero permite los furmularios por e-mail.',
'Hide both label'					=>	'Oculta la dirección de correo electronico y desactiva los formularios por e-mail.',

// Announcement Section
'Announcement subhead'				=>	'Anuncios',
'Display announcement label'		=>	'Mostrar anuncios',
'Display announcement help'			=>	'Habilitar esta opción para mostrar el siguiente mensaje en el foro.',
'Announcement message label'		=>	'Mensaje para el anuncio',
'Announcement message help'			=>	'Este texto no será analizado como mensaje y por lo tanto puede contener HTML.',

// Maintenance Section
'Maintenance subhead'				=>	'Mantenimiento',
'Maintenance mode label'			=>	'Modo mantenimiento',
'Maintenance mode help'				=>	'Cuando está activada, el foro sólo estará disponible para los administradores. Esto debe ser utilizado si se necesita desactivar el foro temporalmente por mantenimiento. <strong>ATENCION! No cierre la sesión cuando el foro está en modo de mantenimiento.</strong> Usted no podrá conectarse de nuevo.',
'Maintenance message label'			=>	'Mensaje de mantenimiento',
'Maintenance message help'			=>	'El mensaje que se mostrará a los usuarios cuando el foro está en modo de mantenimiento. Si deja en blanco, un mensaje por defecto será usado. Este texto no será analizado como mensaje y por lo tanto puede contener HTML.',

);
