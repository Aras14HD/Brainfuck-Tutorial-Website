<!DOCTYPE html>
<!-- OPTIMIZE:  -->
<!-- Example code in /php/example-de.php -->
<html lang="de" dir="ltr">
  <head>
    <title>Brainf*ck - Übersicht</title>
    <?php include '../php/head.php'; ?>
  </head>
  <body>
    <header>
      <p><h1 lang="en">Brainf*ck</h1></p>
      <p><h3>- Eine Esoterische Programmiersprache</h3></p>
    </header>
    <nav id="Index">
      <div id="Index">
        <details>
          <summary>Navigation</summary>
          <ul>
            <li>
              <details>
                <summary><a href="../Brainfuck-Tutorial-Website/index.php">Übersicht</a></summary>
                <ol>
                  <li>
                    <a href="../Brainfuck-Tutorial-Website/index.php#rules">Regeln</a>
                  </li>
                </ol>
              </details>
            </li>
            <li>
              <details>
                <summary><a href="../Brainfuck-Tutorial-Website/php/adding-de.php">Addieren</a></summary>
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
      </div>
    </nav>
    <main>
      <p>BF(<a lang="en">Brainf*ck</a>) ist eine Programmiersprache mit nur 8 Zeichen:<b class="code">+ - . , [ ] &lt &gt</b>. Sie Basiert auf der <a href="https://de.wikipedia.org/wiki/Turingmaschine">Turingmaschine</a>, die aus einem unendlich langem
      Band bestände. Dieses Band wäre aufgeteilt in Zellen in denen man Werte speichern kann. Die Werte können von einem beweglichen Zeiger verändert und gelesen werden. Die Sprache wurde als Herausforderung kreirt worden und ist nicht zum ernsthaften Programmieren geeignet!</p>
      <p><a href="https://de.wikipedia.org/wiki/Turingmaschine#/media/Datei:Turing_machine_2b.svg"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Turing_machine_2b.svg/1200px-Turing_machine_2b.svg.png" alt="Bild konnte nicht geladen werden!" height="156" width="660"></a></p>
      <nav id="rules">
        <p>Mit <a class="code">&lt</a> &amp <a class="code">&gt</a> bewegt man den Zeiger.</p>
        <p>Mit <a class="code">+</a> &amp <a class="code">-</a> erhöht oder verringert man den Wert der Zelle.</p>
        <p>Mit <a class="code">,</a> lässt man einen Wert direkt in einen Zelle eingeben.</p>
        <p>Mit <a class="code">.</a> wird der wert der Zelle ausgegeben.</p>
        <p>Bei <a class="code">[</a> wird geprüft ob der Wert der Zelle 0 ist, wenn ja wird hinter das nächste <a class="code">]</a> gesprungen.</p>
        <p>Bei <a class="code">]</a> wird geprüft ob der Wert der Zelle 0 ist, wenn ja wird hinter das letzte <a class="code">[</a> gesprungen.</p>
        <p>Der Code wird schnell Komplex und schwierig zu programmieren, für den folgenden Code ,der einem einfach nur Fibonacci Zahlen ausgibt, habe ich über 4 Stunden gebraucht.</p>
      </nav>
      <p>
        <div class="code">
          ,-->+>+<<<br>
          [>>[>>+>+<<<-]>>[<<+>>-]<br>
          <<<[>>>+>+<<<<-]>>>[<<<+>>>-]<br>
          >.< <br>
          <<<[-]>[<+>-]<br>
          >>>[<<<+>>>-]<br>
          <<<<<-]
        </div>
      </p>
      <p>Auf den folgenden Seiten werden sie lernen, wie man BF benutzt und selbst ein kleines Programm schreiben. Auch werden einige Module gezeigt, die das Programmieren einfacher machen.</p>
    </main>
    <footer>
      <div class="aln-r">
        <a href="../Brainfuck-Tutorial-Website/php/adding-de.php">Zahlen addieren →</a>
      </div>
    </footer>
    <?php include '../Brainfuck-Tutorial-Website/php/about-de.php'; ?>
  </body>
</html>
