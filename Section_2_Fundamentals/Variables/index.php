<?php

$title = 'PHP is awesome!';
require 'index.view.php';

/*
==> Misturar código PHP com HTML tornará o código insustentável, especialmente quando o aplicativo crescer. Para evitar isso, você pode separar o código em arquivos separados. Por exemplo:

index.php– armazene a lógica para definir e atribuir valor às variáveis.
index.view.php– armazena o código que exibe as variáveis.
Use a requireconstrução para incluir o código do index.view.phparquivo index.php.
*/