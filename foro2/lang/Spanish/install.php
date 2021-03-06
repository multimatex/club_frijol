<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'El archivo \'config.php\' no existe o está corrupto. Esto implica que todavía no se ha instalado.',
'Choose install language'		=>	'Elija el idioma del script de instalación',
'Choose install language info'	=>	'El idioma utilizado para el script de instalación. El idioma por defecto utilizado para este foro puede ser fijado abajo.',
'Install language'				=>	'Idioma de la instalación',
'Change language'				=>	'Cambiar idioma',
'Next'							=>	'Siguiente',
'Already installed'				=>	'Parece que ya está instalado. Puede ir <a href="index.php">aquí</a> a su sitio.',
'You are running error'			=>	'Está ejecutando %1$s versión %2$s. %3$s requiere por lo menos %1$s %4$s para funcionar correctamente. Usted debe actualizar su %1$s instalación antes de continuar.',
'My FluxBB Forum'				=>	'El grupo del frijol',
'Description'					=>	'Desafortunadamente nadie puede explicar lo que es  - usted tiene que verlo por sí mismo.',
'Username 1'					=>	'Los nombres de usuario debe tener al menos 2 caracteres.',
'Username 2'					=>	'Los nombres de usuario no deben tener más de 25 caracteres de largo.',
'Username 3'					=>	'El nombre de usuario invitado está reservado.',
'Username 4'					=>	'Los nombres de usuario no pueden tener la forma de una dirección IP.',
'Username 5'					=>	'Los nombres de usuario no puede contener todos los caracteres \', " y [ o ] de una vez.',
'Username 6'					=>	'Los nombres de usuario no puede contener ninguna de las etiquetas de formato de texto (BBCode) que el foro utiliza.',
'Short password'				=>	'Las contraseñas deben tener al menos 4 caracteres de largo.',
'Passwords not match'			=>	'Las contraseñas no coinciden.',
'Wrong email'					=>	'La dirección de correo electrónico del administrador que ha introducido no es válida.',
'No board title'				=>	'Debe introducir un título del foro.',
'Error default language'		=>	'El idioma por defecto elegido no parece existir.',
'Error default style'			=>	'El estilo por defecto elegido no parece existir.',
'No DB extensions'				=>	'Este entorno de PHP no tiene soporte para ninguna de las bases de datos que soporta. PHP necesita tener soporte, ya sea para MySQL, PostgreSQL o SQLite para que pueda ser instalado.',
'Administrator username'		=>	'Nombre de usuario del administrador',
'Administrator password 1'		=>	'Contraseña 1 del administrador',
'Administrator password 2'		=>	'Contraseña 2 del administrador',
'Administrator email'			=>	'Correo electrónico del administrador',
'Board title'					=>	'Título de los foros',
'Base URL'						=>	'URL raiz',
'Required field'				=>	'es un campo obligatorio en este formulario.',
'FluxBB Installation'			=>	'',
'Welcome'						=>	'',
'Install'						=>	'',
'Errors'						=>	'Los siguientes errores necesitan ser corregidos:',
'Database setup'				=>	'Configuración de la base de datos',
'Info 1'						=>	'Por favor, ingrese la información solicitada con el fin de configurar su base de datos. Usted debe conocer toda la información solicitada antes de proceder con la instalación.',
'Select database'				=>	'Seleccione el tipo de base de datos',
'Info 2'						=>	'actualmente soporta MySQL, PostgreSQL y SQLite. Si su base de datos elegida no se encuentra en el menú desplegable a continuación, significa que el entorno de PHP no tiene soporte para la base de datos en particular. Más información sobre el soporte para las versiones específicas de cada base de datos se puede encontrar en el FAQ.',
'Dual MySQL'					=>	'ha detectado que el entorno de PHP soporta dos formas diferentes de comunicarse con MySQL. Las dos opciones se denominan estándar y mejorado. Si no está seguro de cual usar, comience probando con mejorar y si eso no funciona, pruebe con estándar.',
'InnoDB'						=>	'ha detectado que el servidor MySQL puede soportar <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Esta sería una buena opción si usted está pensando en ejecutar un gran foro. Si no está seguro, se recomienda que no utilice InnoDB.',
'Database type'					=>	'Tipo de base de datos',
'Required'						=>	'(Requerido)',
'Database hostname'				=>	'Ingrese su nombre de host del servidor de base de datos',
'Info 3'						=>	'La dirección del servidor de la bases de datos (ejemplo: localhost, db.myhost.com o 192.168.0.15). Puede especificar un número de puerto personalizado, si su base de datos no se ejecuta en el puerto por defecto (ejemplo: localhost:3580). Para el soporte de SQLite, simplemente no introduzca nada o lo deja en \'localhost\'.',
'Database server hostname'		=>  'Database server hostname',
'Database enter name'			=>	'Introduzca el nombre de su base de datos',
'Info 4'						=>	'El nombre de la base de datos que se instalará. La base de datos debe existir. Para SQLite, esta es la ruta relativa al archivo la base de datos. Por razones de seguridad, se recomienda colocar la base de datos SQLite en un directorio privado (no accesible por web) siempre que sea posible. Si el archivo de base de datos SQLite no existe, intentará crearlo.',
'Database name'					=>	'Nombre de la base de datos',
'Database enter informations'	=>	'Introduzca su nombre de usuario y contraseña de la base de datos',
'Database username'				=>	'Nombre de usuario de la base de datos',
'Info 5'						=>	'Introduzca el nombre de usuario y contraseña con la que se conecta a la base de datos. Ignore esto para SQLite.',
'Database password'				=>	'Contraseña de la base de datos',
'Database enter prefix'			=>	'Introduzca el prefijo de la tabla de la base de datos',
'Info 6'						=>	'Si lo desea, puede especificar un prefijo de la tabla. De esta manera usted puede ejecutar varias copias en la misma base de datos (ejemplo: foo_).',
'Table prefix'					=>	'Prefijo de la table',
'Administration setup'			=>	'Configuración de administración',
'Info 7'						=>	'Por favor, ingrese la información solicitada con el fin de configurar un administrador para la instalación.',
'Admin enter username'			=>	'Introduzca el nombre de usuario del Administrador',
'Info 8'						=>	'El nombre de usuario del administrador del foro. Más tarde, puede crear más administradores y moderadores. Los nombres de usuario pueden estar entre 2 y 25 caracteres de largo.',
'Admin enter password'			=>	'Introduzca y confirme la contraseña del Administrador',
'Info 9'						=>	'Las contraseñas deben tener al menos 4 caracteres de longitud. Las contraseñas distinguen mayúsculas y minúsculas.',
'Password'						=>	'Contraseña',
'Confirm password'				=>	'Confirme contraseña',
'Admin enter email'				=>	'Introduzca correo electrónico del Administrador',
'Info 10'						=>	'La dirección de correo electrónico del administrador del foro.',
'Board setup'					=>	'Configuración de los foros',
'Info 11'						=>	'Por favor, ingrese la información solicitada con el fin de configurar sus foros.',
'Enter board title'				=>	'Introduzca el titulo de sus foros',
'Info 12'						=>	'El titulo para estos foros (se muestra en la parte superior de cada página).',
'Enter board description'		=>	'Introduzca una descripción para los foros',
'Info 13'						=>	'Una breve descripción de este sistema de foros (se muestra en la parte superior de cada página). Este campo puede contener HTML.',
'Board description'				=>	'Descripción de los foros',
'Enter base URL'				=>	'Introduzca la URL raíz de su instalación',
'Info 14'						=>	'La URL (sin barra final) de su foro (ejemplo: http://forum.myhost.com or http://myhost.com/~myuser). Esta <strong>debe</strong> ser correcta, de lo contrario, los administradores y moderadores no podrán presentar ningún formulario. Tenga en cuenta que el valor de preselección a continuación es sólo una conjetura.',
'Choose the default language'	=>	'Seleccione el idioma por defecto',
'Info 15'						=>	'El idioma predeterminado para los invitados y usuarios que no hayan cambiado el valor predeterminado en su perfil.',
'Default language'				=>	'Idioma por defecto',
'Choose the default style'		=>	'Elija el estilo por defecto',
'Info 16'						=>	'El estilo por defecto para los invitados y usuarios que no hayan cambiado el valor predeterminado en su perfil.',
'Default style'					=>	'Estilo por defecto',
'Start install'					=>	'Iniciar instalación',
'DB type not valid'				=>	'\'%s\' no es un tipo de base de datos valida',
'Table prefix error'			=>	'El prefijo de tabla \'%s\' contiene caracteres ilegales o es demasiado largo. El prefijo puede contener letras de la a a la z, los números y el guión bajo. No debe sin embargo, comenzar con un número. La longitud máxima es de 40 caracteres. Por favor, elija un prefijo diferente',
'Prefix reserved'				=>	'El prefijo de tabla \'sqlite_\' está reservado para uso por el motor de SQLite. Por favor elija un prefijo diferente',
'Existing table error'			=>	'Una tabla llamada \'%susers\' ya está presente en la base de datos \'%s\'. Esto podría significar que ya está instalado o que otra pieza de software está instalado y está ocupando uno o más de los nombres de tabla que requiere. Si desea instalar varias copias en la misma base de datos, usted debe elegir un prefijo de tabla diferente',
'InnoDB off'					=>	'InnoDB no parece estar habilitada. Por favor, elija una capa de base de datos que no tiene soporte para InnoDB, o habilite InnoDB en el servidor de MySQL',
'Administrators'				=>	'Administradores',
'Administrator'					=>	'Administrador',
'Moderators'					=>	'Moderadores',
'Moderator'						=>	'Moderador',
'Guests'						=>	'Invitados',
'Guest'							=>	'Invitado',
'Members'						=>	'Miembros',
'Announcement'					=>	'Ingrese su anuncio aquí.',
'Rules'							=>	'Ingrese sus reglas aquí',
'Maintenance message'			=>	'Los foros están temporalmente fuera de servicio por mantenimiento. Por favor, inténtelo de nuevo en unos minutos.',
'Test post'						=>	'Tema de prueba',
'Message'						=>	'Si usted está buscando en esta (lo que supongo que es), la instalación de parece haber funcionado! Ahora ingrese y dirijase al panel de control para configurar la administración de su foro.',
'Test category'					=>	'Categoria de prueba',
'Test forum'					=>	'Foro de prueba',
'This is just a test forum'		=>	'Esto es solo un foro de prueba',
'Alert cache'					=>	'<strong>El directorio cache no es escribible en la actualidad!</strong> A fin de que para funcionar correctamente, el directorio <em>%s</em> debe ser escribible por PHP. Use chmod para establecer los permisos de directorios adecuados. En caso de duda, chmod a 0777.',
'Alert avatar'					=>	'<strong>El directorio avatar no es escribible en la actualidad!</strong> Si desea que los usuarios puedan subir sus propios avatares, debe procurar que el directorio <em>%s</em> sea escribible por PHP. Más tarde, puede optar por guardar los avatares en un directorio diferente (mire Admin/Opciones). Use chmod para establecer los permisos de directorios adecuados. En caso de duda, chmod a 0777.',
'Alert upload'					=>	'<strong>La carga de archivos parece ser rechazada en este servidor!</strong> Si desea que los usuarios puedan subir sus propios avatares debe activar la opción de configuración de file_uploads en PHP. Una vez que la carga de archivos se ha activado, subir avatar puede ser habilitado en la Administracion/Opciones/Caracteristicas.',
'FluxBB has been installed'		=>	'ha sido instalado. Para finalizar la instalación, por favor siga las instrucciones siguientes.',
'Final instructions'			=>	'Instruciones finales',
'Info 17'						=>	'Para finalizar la instalación, debe hacer clic en el botón a continuación para descargar un archivo llamado config.php. A continuación, deberá cargar este archivo en el directorio raíz de la instalación.',
'Info 18'						=>	'Una vez que haya subido el archivo config.php, estará totalmente instalado! En ese momento, usted puede <a href="index.php">ir al indice de los foros</a>.',
'Download config.php file'		=>	'Descargar archivo config.php',
'FluxBB fully installed'		=>	'ha sido totalmente instalado! Ahora puede <a href="index.php">ir al indice de los foros</a>.',

);
