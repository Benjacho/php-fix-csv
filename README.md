# php-fix-csv
Upload CSV



# RESPUESTAS

## PRIMERA PREGUNTA
Pasos que siguió para encontrar el error.
### PRIMERO:

Inicie el proyecto usando docker, configure el APP_PORT para que se puedan configurar el puerto al que se vincula (host) asi dependiendo del desarrollador puede configurar a un puerto libre.
### SEGUNDO
Luego realize la instalacion de las librerias con composer, ejecutandolo dentro del container de 'app' para poder subir el archivo csv.

### TERCERO

Luego al subir el archivo encontre de que las sumas estaban hechas en las columnas equivocadas, luego revise el codigo para poder encontrar el error.

Revisando el codigo pude darme cuenta del error en la funcion computeTotals()

### CUARTO

Luego revise si habian algunos tests en el proyecto, para ver si fue hecho intencionalmente. No encontre ningun test.

### QUINTO

Procedi a instalar PHPUNIT para poder realizar el test, implemente algunas funciones y tambien vi que se carga el archivo desde una ubicacion temporal. Debido a que a veces el cliente puede requerir un hotfix, hice una funcion simple para poder realizar el test. Para luego poder refactorizar el codigo con mas tiempo.

Para el test genere una copia del csv, para utilizarlo como MOCK

## SEGUNDA PREGUNTA

Redactar respuesta al equipo de soporte sobre el ticket mencionado.

### RESPUESTA

```
Hola Benjamin,


Respecto al ticket 'xxx', ya esta hecho. Lo he probado con el archivo MOCK_DATA.csv y todo anda correctamente, ya las columnas (subtotal y total) se muestran correctamente en cada columna. Si hay alguna otra cosa, quedo atento

Saludos

```


## TERCER PREGUNTA

Posibles re-factor al proceso actual teniendo como objetivo evitar el mismo error a futuro. (Realizar un Fork al repositorio y proporcionar la url debajo)


### RESPUESTA

Posibles Refactor

- Utilizar FLYSYSTEM y S3 para manejar la subida/lectura de archivos.
- Realizar UNIT tests
- Realizar end to end testing en la subida de archivos y visualizacion
- Mejorar la visualizacion de la tabla para el cliente, utilizando estilos


## CUARTA PREGUNTA

Revisión del proyecto en general enumerando inconsistencias visualizadas

### RESPUESTA

Inconsistencias
- Instalacion de paquetes innecesarios como Carbon
- No manejar los archivos de forma temporal
- No se estaba utilizando .gitignore
- La utilizacion de un framework ayudaria a mejorar todas estas inconsitencias y transicionar el refactor.
