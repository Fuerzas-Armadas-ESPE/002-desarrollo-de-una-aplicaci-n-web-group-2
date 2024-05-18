Bienvenido!

QE, El sistema de control de ingresos y egresos es una aplicación web diseñada para gestionar las finanzas de una institución o persona, permitiendo a los usuarios autenticar su acceso, registrar transacciones de ingresos y egresos, y visualizar un resumen financiero detallado. Ofrece funcionalidades para la categorización de transacciones, generación de reportes, y análisis de datos financieros, además de proporcionar una experiencia de usuario mejorada mediante alertas claras y un preloader. Este sistema facilita el seguimiento organizado de las finanzas, ayuda en la toma de decisiones informadas y asegura que solo los usuarios autenticados tengan acceso a la información.

QE - Aplicación Web de Control de Ingresos y Egresos
Descripción del Proyecto
QE es una aplicación web diseñada para el control y administración de ingresos y egresos. Proporciona a los usuarios una plataforma intuitiva para registrar sus transacciones financieras diarias y generar informes detallados.

Funcionalidades
Información de la Empresa: Página de inicio con detalles sobre la empresa, su misión y la importancia de llevar una correcta administración financiera.
Servicios Ofrecidos: Descripción de los servicios disponibles.
Ubicación y Contacto: Información de ubicación y un formulario de contacto.
Autenticación de Usuario:
Registro: Creación de cuenta con campos validados (nombre, apellidos, teléfono, nombre de usuario, contraseña, correo electrónico).
Inicio de Sesión: Autenticación mediante usuario y contraseña.
Gestión de Transacciones:
Ingresos y Egresos: Registro de transacciones con fecha (día, mes, año).
Reportes Mensuales: Generación de informes con ingresos, egresos, resultado por mes y saldo acumulado.
Detalles de Transacciones: Visualización detallada de cada transacción.
Gráficas: Representaciones gráficas de ingresos, egresos y saldo acumulado.
Exportación: Opciones para imprimir o guardar los datos en formato PDF.
Formulario de Contacto:
Envío de correos electrónicos directamente desde el navegador usando EmailJS.
Decisiones de Diseño y Desarrollo
Diseño Responsivo
Se adoptó un diseño responsivo utilizando Bootstrap para asegurar una experiencia de usuario consistente en múltiples dispositivos y tamaños de pantalla.
Estructura de la Aplicación
La aplicación web se compone de varios archivos HTML, CSS, JavaScript y otras bibliotecas y frameworks.

Componentes Principales:

Páginas HTML: La aplicación consta de varias páginas HTML, incluyendo la página de inicio (index.html), la página de inicio de sesión (login.html), la página de registro (signup.html) y la página principal del sistema (sistema.html).
Estilos CSS: Los estilos visuales de la aplicación se definen en el archivo main.css, que se encuentra en la carpeta css/.
Scripts JavaScript: La funcionalidad interactiva de la aplicación se maneja mediante varios scripts JavaScript:

main.js: Script principal que maneja la funcionalidad general de la aplicación.
login.js: Script encargado del proceso de inicio de sesión.
signup.js: Script encargado del proceso de registro de nuevos usuarios.
sistema.js: Script que controla la funcionalidad principal del sistema, como el ingreso y egreso de transacciones, la generación de reportes y gráficos.
email.js: Script que utiliza la biblioteca EmailJS para enviar correos electrónicos desde el formulario de contacto.


Bibliotecas y Frameworks Externos: La aplicación utiliza varias bibliotecas y frameworks externos, como Bootstrap para el diseño y la interfaz de usuario, SweetAlert para mostrar alertas y mensajes, y Chart.js para la creación de gráficos y visualizaciones de datos.
Imágenes y Recursos: La carpeta img/ contiene los archivos de imágenes utilizados en la aplicación, como el logotipo y otros recursos gráficos.

Interfaz Minimalista
Se implementó un enfoque minimalista en el diseño de la interfaz de usuario para mantenerla limpia, intuitiva y fácil de usar.

Seguridad de Datos
Cifrado de Datos: Implementación de técnicas de cifrado para proteger la información sensible.
Validación del Lado del Servidor: Asegura que los datos ingresados sean válidos y seguros.
Optimización de Rendimiento
Compresión de Archivos: Compresión de archivos estáticos para mejorar los tiempos de carga.
Caché: Uso de técnicas de caché para reducir la carga en el servidor y mejorar el rendimiento general.
Experiencia de Usuario Personalizada
Funcionalidades personalizadas como la capacidad de guardar preferencias de usuario y generar informes adaptados a sus necesidades.

Selección de Tecnologías
Frontend
HTML5: Estructura de la aplicación.
CSS: Estilos y diseño.
JavaScript: Interactividad y dinamismo.
Bootstrap: Framework frontend para una rápida y eficiente construcción de la interfaz de usuario.
Backend
EmailJS: Para el envío de correos electrónicos desde el formulario de contacto.
Validación y Autenticación: Implementación de funciones backend para la validación de datos y autenticación de usuarios (se asume el uso de un framework backend no especificado).
Optimización de CSS y JavaScript
Minificación y Concatenación: Reducción del tamaño de los archivos CSS y JavaScript.
Compresión de Recursos: Uso de herramientas para comprimir archivos y mejorar los tiempos de carga.
Requisitos del Sistema
Visual Studio Code: Entorno de desarrollo.
Navegador Web: Cualquier navegador moderno que soporte HTML5, CSS y JavaScript.
Servicio de Correo: Integración con proveedores de servicios de correo como Gmail, a través de EmailJS.
Enlace a la aplicación web desplegada en Github Pages
Este archivo README proporciona una visión detallada del proyecto QE, destacando las funcionalidades, las decisiones de diseño y desarrollo, y la guía uso.