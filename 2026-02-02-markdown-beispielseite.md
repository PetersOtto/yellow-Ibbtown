---
Title: Markdown Beispielseite
Published: 2026-02-02
Author: Otto
Layout: blog
Tag: Example, Donots, Ibbenbüren
heroImage: yellow-ibbtown-donots-2.jpg
heroImageAlt: Donots Konzert Olgasrock
---

## Donots

Die Donots [ˈdʊnɔts] sind eine seit 1993 bestehende, 1994 gegründete deutsche Alternative-Rock-Band aus Ibbenbüren. Seit 2008 veröffentlichen sie ihre Alben über ihr eigenes Label »Solitary Man Records«.  
*(Quelle: Wikipedia)*

## Häh? Ibbtown, Donots, Was?!?

Dies ist eine Demoseite. Hier wird gezeigt, wie die gebräuchlichsten Markdown Elemente in diesem Theme dargestellt werden. Themes für das Yellow CMS von Datenstrom werden nach Ortschaften benannt. Die Donots kommen aus Ibbenbüren und müssen daher natürlich in einem Theme das »Ibbtown« heißt, erwähnt werden. &#128512;  

Das Theme »Ibbtown« habe ich als Basistheme für die Entwicklung von Themes erstellt. Ziel war nicht den Quellcode so gering wie möglich zu halten. Ich wollte ein Theme erstellen, das möglichst vertändlich aufgebaut ist, leicht verändert werden kann und Programmierlösungen/-beispiele für die gängigsten Probleme enthält. 

Ich hoffe Euch gefällt das Theme ...  
Happy coding! &#x2764;&#xFE0F;

# Überschrift H1

## Überschrift H2

### Überschrift H3

#### Überschrift H4

##### Überschrift H5

###### Überschrift H6

---
## Bilder

[image yellow-ibbtown-donots-1.jpg "Alt-Text" "css, klassen"]

---

## Absatz & Textformatierung

Dies ist ein normaler Absatz mit **fett**, *kursiv*, ***fett & kursiv***, ~~durchgestrichen~~ und `Inline-Code`.

Ein weiterer Absatz mit einem  
manuellen Zeilenumbruch (zwei Leerzeichen am Zeilenende).

> Dies ist ein Blockzitat.
> > Verschachteltes Blockzitat.

> Dies ist ein Blockzitat.

---

## Listen

### Ungeordnete Liste

- Punkt A
- Punkt B
  - Unterpunkt B.1
  - Unterpunkt B.2
    - Unterpunkt B.2.a
- Punkt C

### Geordnete Liste

1. Erster Punkt
2. Zweiter Punkt
   1. Unterpunkt
   2. Unterpunkt
3. Dritter Punkt

---

## Links

[Offizielle Webseite der Donots](www.donots.de)

[Wikipedia Donots](https://de.wikipedia.org/wiki/Donots)

[Wikipedia Ibbenbüren](https://de.wikipedia.org/wiki/Ibbenb%C3%BCren)

---

## Code

### Inline-Code

Dies ist `console.log("Hallo Weltfrieden");` im Text.

### Codeblock (ohne Sprache)

!{#mike}
!```
!function greet(name) {
!  console.log (`Hallo ${name}`);
!}
!
!greet("Weltfrieden");
!```


### Tabelle

!{.table-wrapper}
!|Pos|Name|Nachname|Aufgabe|
!|---|---|---|---|
!| 1 | Ingo | Knollmann | Gesang, Keyboard |
!| 2 | Guido | Knollmann | Gitarre, Gesang, Hintergrundgesang |
!| 3 | Alex  | Siedenbiedel | Gitarre, Hintergrundgesang |
!| 4 | Jan-Dirk „Purgen“ | Poggemann | E-Bass, Hintergrundgesang |
!| 5 | Eike  | Herwig | Schlagzeug, Perkussion, Hintergrundgesang |


### Tabelle ohne wrapper

|Pos|Name|Nachname|Aufgabe|
|---|---|---|---|
| 1 | Ingo | Knollmann | Gesang, Keyboard |
| 2 | Guido | Knollmann | Gitarre, Gesang, Hintergrundgesang |
| 3 | Alex  | Siedenbiedel | Gitarre, Hintergrundgesang |
| 4 | Jan-Dirk „Purgen“ | Poggemann | E-Bass, Hintergrundgesang |
| 5 | Eike  | Herwig | Schlagzeug, Perkussion, Hintergrundgesang |


### definition lists

<p>Donots:</p>

<dl>
  <dt>Herkunft</dt>
  <dd>Ibbenbüren, Nordrhein-Westfalen, Deutschland</dd>

  <dt>Genre(s)</dt>
  <dd>Alternative Rock, Pop-Punk, Punk-Rock</dd>

  <dt>Gründung</dt>
  <dd>Die Band wurde im Jahr 1994 gegründet</dd>
</dl>
