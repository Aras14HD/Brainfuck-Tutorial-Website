<!DOCTYPE html>
<!-- OPTIMIZE:  -->
<!-- Example code in /php/example-en.php -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Brainfuck-Tutorial-Website/css/main.css">
    <title>Brainf*ck - Übersicht</title>
  </head>
  <body>
  <script src="../Brainfuck-Tutorial-Website/js/main.js"></script>
    <header>
      <p><h1>Brainf*ck</h1></p>
      <p><h3>- Eine Esoterische Programmiersprache</h3></p>
    </header>
    <nav id="Index">
      <details>
        <summary>Index</summary>
        <ul>
          <li>Main</li>
          <li>
            <details open>
              <summary>Languages</summary>
              <ul>
                <li><a href="../Brainfuck-Tutorial-Website/index-de.php">Deutsch</a></li>
                <li>English</li>
              </ul>
            </details>
          </li>
          <li>
            <details>
              <summary>Erstes Thema</summary>
              <ol>
                <li>Artikel</li>
                <li>Artikel</li>
              </ol>
            </details>
          </li>
          <li>
            <details>
              <summary>Zweites Thema</summary>
              <ol>
                <li>Artikel</li>
                <li>Artikel</li>
              </ol>
            </details>
          </li>
        </ul>
      </details>
    </nav>
    <main>
      <p>BF(<a>Brainf*ck</a>) ist eine Programmiersprache mit nur 8 Zeichen:<b class="code">+ - . , [ ] &lt &gt</b>. Sie Basiert auf der <a href="https://en.wikipedia.org/wiki/Turing_machine">Turingmaschine</a>, die aus einem unendlich langem b
      Band bestände. Dieses Band wäre aufgeteilt in Zellen in denen man Werte speichern kann. Die Werte können von einem beweglichen Zeiger verändert und gelesen werden. </p>
      <p><a href="https://de.wikipedia.org/wiki/Turingmaschine#/media/Datei:Turing_machine_2b.svg"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Turing_machine_2b.svg/1200px-Turing_machine_2b.svg.png" alt="Bild konnte nicht geladen werden!" height="104" width="440"></a></p>
      <p>Mit <a class="code">&lt</a> &amp <a class="code">&gt</a> bewegt man den Zeiger.</p>
      <p>Mit <a class="code">+</a> &amp <a class="code">-</a> erhöht oder verringert man den Wert der Zelle.</p>
      <p>Mit <a class="code">,</a> lässt man einen Wert direkt in einen Zelle eingeben.</p>
      <p>Mit <a class="code">.</a> wird der wert der Zelle ausgegeben.</p>
      <p>Bei <a class="code">[</a> wird geprüft ob der Wert der Zelle 0 ist, wenn ja wird hinter das nächste <a class="code">]</a> gesprungen.</p>
      <p>Bei <a class="code">]</a> wird geprüft ob der Wert der Zelle 0 ist, wenn ja wird hinter das letzte <a class="code">[</a> gesprungen.</p>
      <p></p>
      <p>Der Code wird schnell Komplex und schwierig zu programmieren, für den folgenden Code ,der einem einfach nur Fibonacci Zahlen ausgibt, habe ich über 4 Stunden gebraucht.</p>
      <div class="code">
        <p>,-->+>+<< Initialise ( i = input; i minus 2; )</p>
        <p>[>>[>>+>+<<<-]>>[<<+>>-] C = A <<<[>>>+>+<<<<-]>>>[<<<+>>>-] C = C add B</p>
        <p>>.< print(C) (currently not working)</p>
        <p><<<[-]>[<+>-] B = A;A = 0 >>>[<<<+>>>-] A = C;C = 0</p>
        <p><<<<<-] i minus 1</p >
      </div>
    </main>
    <footer>
      <div class="aln-r">
        <a href="#">nach →</a>
      </div>
    </footer>
  </body>
</html>
