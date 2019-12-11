<?php
echo "Usuario:";
if (isset($_GET["usuario"]))
echo $_GET["usuario"];
echo "<br>";
echo "<br>";
echo "Contraseña: ";
if (isset($_GET["contraseña"]))
echo $_GET["contraseña"];
echo "<br>";
echo "<br>";
echo "Sexo: ";
if (isset($_GET["gender"]))
echo $_GET["gender"];
echo "<br>";
echo "<br>";
echo "Lado:";
if (isset($_GET["lado1"]))
echo $_GET["lado1"];
if (isset($_GET["lado2"]))
echo $_GET["lado2"];
echo "<br>";
echo "<br>";
echo "Pueblo: ";
if (isset($_GET["pueblos"]))
echo $_GET["pueblos"];
echo "<br>";
echo "<br>";
echo "Texto: ";
if (isset($_GET["texto"]))
echo $_GET["texto"];
echo "<br>";