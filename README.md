# Emitindo um PDF com PHP

<p>FPDF é uma classe PHP que permite gerar arquivos PDF com <b>PHP puro</b>, ou seja, 
sem utilizar a biblioteca PDFlib. F de FPDF significa <i>Free</i>: você pode usá-lo 
para qualquer tipo de uso e modificá-lo para atender às suas necessidades.</p>

<p>Essa classe conta com algumas principais funções: </p>

<ul>
  <li> 🔎 Escolha da unidade de medida, formato da página e margens </li>
  <li> 🗄 Gerenciamento de cabeçalho e rodapé da página </li>
  <li> 📃 Quebra automática de página </li>
  <li> 💻 Quebra de linha automática e justificação de texto </li>
  <li> 🎞 Suporte de imagem (JPEG, PNG e GIF) </li>
</ul>

<hr/>

<h3> Principais comandos: </h3>

<p> Instanciar a classe </p>

```php
$pdf = new FPDF();
```

<p> Iniciar uma nova pagina </p>

```php
$pdf->AddPage();
```

<p> Setar configurações da fonte </p>

```php
$pdf->SetFont('Arial','B',16);
```

<p> Informar conteúdo </p>

```php
$pdf->Cell(40,10,'Hello World!');
```

<p> Gerar PDF </p>

```php
$pdf->Output();
```

<hr/>

<h3> Outras informações: </h3>

<p>FPDF não requer extensão (exceto Zlib para habilitar compressão e GD para suporte a GIF). 
A última versão requer pelo menos PHP 5.1 e é compatível com PHP 7.4.</p>

<p>Para mais informações e Download: <a href="http://www.fpdf.org/"> fdpf.org </a> </p>
