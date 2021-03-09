![EVAluar](evaluar_.png)
# EVAluar
## Sistema de gestión, seguimiento y evaluación de programas de formación
### Secretaria de Gestión Cultural | Dirección Nacional de Formación Cultural | Ministerio de Cultura de la Nación

### Objetivo

Este sistema desarrollado por la Dirección Nacional de Formación Cultural (DNFC) gestiona el proceso de evaluación de las postulaciones de participantes inscriptos a los diversos cursos y talleres ofrecidos desde la Dirección Nacional de Formación Cultural.
La evaluación es realizada por roles evaluadores de cada programa de formación: 
- Equipo de evaluadores.
- Directores.

### Base de datos

La estructura de la base de datos MySQL está constituida por tablas que representan el 
* conjunto de datos de participantes a los programas de formación.
* Estructura de usuarios y roles
* Estructura tablas con campos agregados que permiten valorar los registros de participantes.  

### Estructura de archivos:

Los archivos de gestión del cada programa se van cargando/subiendo desde la interface web y quedan guardados en la carpeta /lib/uploads

### Tecnologías utilizadas

# Entorno web
* Apache 2.4.33
* PHP 7.x 
* MySQL 5.7.33
* HTML


# Libleria / Bibliotecas 
* xcrud 1.6
* Boostrap 4.x

# Implementación

*  Clonar el repositorio en una carpeta (puede usar cualquier nombre),
*  Crear la base de datos en MySQL (importe la base de datos de la carpeta _db).
*  Configurar las credenciales de acceso a la base de datos en el archivo __/lib/xcrud/xcrud_config.php__
    ```bash
    public static $dbname = 'nombre_db'; 
    public static $dbuser = 'nombre_usuarie';
    public static $dbpass = 'clave de acceso'; 
    public static $dbhost = 'localhost';
    ```



    
	
