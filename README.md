# Função PHP para Gerar URLs Amigáveis

Este repositório contém uma função em PHP que permite gerar URLs amigáveis a partir de qualquer texto. Ideal para aplicações web, blogs e sistemas que necessitam de URLs limpas e otimizadas para SEO.

## Recursos

- Converte texto para letras minúsculas.
- Remove acentos e caracteres especiais.
- Substitui espaços e caracteres não alfanuméricos por hífens.
- Remove hífens extras no início e no final da string.

## Exemplo de Uso

```php
<?php
require 'url_amigavel.php'; // Inclua o arquivo com a função

$titulo = "Aprenda PHP e Geração de URLs Amigáveis!";
$urlAmigavel = gerarUrlAmigavel($titulo);

echo "URL amigável: $urlAmigavel";
```

### Entrada
```
"Aprenda PHP e Geração de URLs Amigáveis!"
```

### Saída
```
aprenda-php-e-geracao-de-urls-amigaveis
```

## Como Usar

1. Clone este repositório:
   ```bash
   git clone https://github.com/webedmilson/Fun-o-PHP-para-Gerar-URLs-Amig-veis.git
   ```

2. Inclua o arquivo `url_amigavel.php` em seu projeto:
   ```php
   require 'url_amigavel.php';
   ```

3. Use a função `gerarUrlAmigavel` em seu código PHP.

## Contribuição

Sinta-se à vontade para contribuir com melhorias, sugestões ou correções. Abra uma [issue](https://github.com/webedmilson/Fun-o-PHP-para-Gerar-URLs-Amig-veis/issues) ou envie um pull request!

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

⭐ Se você gostou deste projeto, deixe uma estrela no repositório!
