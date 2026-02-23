# Create XSLT Transformation
This repo illustrates how to perform an XSLT transformation of an XML file using PHP or Python.

`[SimPIL are a series of ultra-simple examples showing how to perform different operations with code. Simple.]`

## Installation
Just clone the repository and run the .php or .py file including as...

## Parameters
... the file names, first the XML and then the XSLT, like this:

```
php transform.php galaxies.xml galaxies.xsl
```

This will generate the file **transform.html**

## Files
- transform.php to perform the transformation with PHP.
- transform.py to perform the transformation with Python.
- galaxies.xml XML file to test the transformation.
- galaxies.xsl XSLT file to test the transformation.

## Executable
Optionally, the Python file can be converted into a .exe executable (using **PyInstaller** (already installed via `pip install pyinstaller`; check if installed with _pip show pyinstaller_)).

If _PyInstaller_ is not in the session Path variables, it must be invoked like this to convert the script to .exe:

```
python -m PyInstaller --onefile my_python_code.py
```


[Texto en español aquí](README_ES.MD)

![](img/logo.svg)

---
`title:` XSLT Transformation [`SimPIL`] 02/23/26\
`author:` David G. Bonacho &nbsp;&nbsp; [www.tizedit.com](https://www.tizedit.com)