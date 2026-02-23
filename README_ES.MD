# Crear transformación XSLT
En este repo se ilustra cómo realizar una transformación XSLT de un archivo XML con PHP o con Python.

`[SimPIL son una serie de ejemplos ultra-simples de cómo realizar diferentes operaciones con código. Sencillos.]`

## Instalación
Solo clona el repositorio y ejecuta el archivo .php o .py incluyendo como...

## Parámetros
... los nombres de los achivos, primero el XML y luego el XSLT, así

```
php transform.php galaxies.xml galaxies.xsl
```
Se habrá generado entonces, archivo **transform.html**

## Archivos
- transform.php para realizar la transformación con PHP.
- transform.py para realizar la transformación con Python.
- galaxies.xml XML para realizar una prueba de transformación.
- galaxies.xsl XSLT para realizar una prueba de transformación.

## Ejecutable
Opcionalmente, el archivo Python podrá convertirse a ejecutable .exe (utilizando **PyInstaller** (ya instalado con pip install pyinstaller, examina si lo tienes instalado con _pip show pyinstaller_)

Si _PyInstaller_ no estuviera en el Path de variables de sesión, tendrá que invocarse así para convertir el script a .exe

```
python -m PyInstaller --onefile my_python_code.py
```

[Text in English here](README.MD)

![](img/logo.svg)

---
`título:` Transformación XSLT [`SimPIL`] 23/02/26\
`autor:` David G. Bonacho &nbsp;&nbsp; [www.tizedit.com](https://www.tizedit.com)
