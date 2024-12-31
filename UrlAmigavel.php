<?php
/**
 * Gera uma URL amigável a partir de uma string.
 *
 * @param string $string Texto de entrada.
 * @return string URL amigável.
 */
function gerarUrlAmigavel(string $string): string
{
    // Converte a string para minúsculas
    $string = strtolower($string);

    // Remove acentos e caracteres especiais
    $string = preg_replace(
        [
            '/[áàâãäå]/u', '/[éèêë]/u', '/[íìîï]/u', '/[óòôõö]/u', '/[úùûü]/u', '/[ç]/u'
        ],
        ['a', 'e', 'i', 'o', 'u', 'c'],
        $string
    );

    // Substitui caracteres não alfanuméricos por hífen
    $string = preg_replace('/[^a-z0-9]+/u', '-', $string);

    // Remove hífens extras no início e no final
    $string = trim($string, '-');

    return $string;
}

// Exemplo de uso
$titulo = "Aprenda PHP e Geração de URLs Amigáveis!";
$urlAmigavel = gerarUrlAmigavel($titulo);

echo "URL amigável: $urlAmigavel";
?>
