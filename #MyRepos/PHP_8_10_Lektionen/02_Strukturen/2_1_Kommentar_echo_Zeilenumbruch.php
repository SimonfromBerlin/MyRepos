<?php

// 1. Kommentar, 2 echo, 3 Zeilenumbruch

// 1. Kommentar
// - ein Kommentar wird in der Regel vor, daneben oder nach einer Anweisung in den Code geschrieben
// - STRG+Shift+7 um mehrere Zeilen auf einmal in einen Kommentar zu versetzen
// - /* markiert den Anfang eines mehrzeiligen Kommentars und */ das Ende
/* - Erstreckt sich der Kommentar über mehrere Zeilen wird er mit diesen Tags eingeschossen.
     Alles was sich dazwischen befindet, wird als Kommentar gewertet */

echo "2. echo";
echo "Hallo Welt"; // mit dem Befehl echo mit in doppelten Gänsefüssen "eingefügter Text" und beendenden Semikolon ; erfolgt die Ausgabe auf dem Bildschirm

echo "3. Zeilenumbruch"; // jetzt steht alles eng zusammen "2. echoHallo Welt3. Zeilenumbruch" doch wir wollen es ja in hübsch und Struckturiert ;)

// - <br> -Tag steht für den Zeilenumbruch (line break) innerhalb von Elementen und ist flexibler.
// - Es fügt einen manuellen Zeilenumbruch an der Stelle des HTML-Dokuments ein.
// Wenn du <br> verwendest, wird der Text nach dem TAG auf die nächste Zeile verschoben. Beispiel:
echo "3. Zeilenumbruch <br>"; // der TAG kommt an das Ende für eine neue Zeile
echo "Hallo Welt <br />"; // - ob mit oder ohne Slash / erzielt das gleiche Ergebnis

// <p> (Paragraph-TAG) steht für Absatz (paragraph).
// - Es umschließt einen gesamten Absatz.
// - Ein <p>-TAG muss durch </p> geschlossen werden.
// - Es macht einen neuen Absatz, eine freie und beginnt dann eine neue Zeile.
// - Mehrere <p>-Tags hintereinander erzeugen jedoch keine weiteren Absätze; der Abstand bleibt gleich.
// Beispiel:
echo "<p>3. Zeilenumbruch.</p>";

// und nun das gelernte Anwenden....

Echo "<p>1. Der Kommentar<p>";
echo "- ein Kommentar wird in der Regel vor, daneben oder nach einer Anweisung in den Code geschrieben <br>
- STRG+Shift+7 um mehrere Zeilen auf einmal in einen Kommentar zu versetzen<br>
- /* markiert den Anfang eines mehrzeiligen Kommentars und */ das Ende<br>
/* - Erstreckt sich der Kommentar über mehrere Zeilen wird er mit diesen Tags eingeschossen.<br>
     Alles was sich dazwischen befindet, wird als Kommentar gewertet */<br>";

echo "<p>2. Der echo-Befehl<p/>";
echo "Hallo Welt<br>";
echo "mit dem Befehl echo mit in doppelten Gänsefüssen (SHIFT+2) eingefügter Text und beendenden Semikolon ; (SHIFT+,) erfolgt die Ausgabe auf dem Bildschirm<br>";

echo "<p>3. Zeilenumbruch<p/>";
echo "- br-TAG steht für den Zeilenumbruch (line break) innerhalb von Elementen und ist flexibler.<br>
- Es fügt einen manuellen Zeilenumbruch an der Stelle des HTML-Dokuments ein.<br>
- Wenn du br verwendest, wird der Text nach dem TAG auf die nächste Zeile verschoben. Beispiel:<br>
- der br-TAG kommt an das Ende für eine neue Zeile<br>
- echo Hallo Welt; echo br / - ob mit oder ohne Slash / erzielt das gleiche Ergebnis<br>";

echo "<p>p-TAG steht für Absatz.</p>
- Es umschließt einen gesamten Absatz.<br>
- Ein p-TAG muss durch /p geschlossen werden.<br>
- Es macht einen neuen Absatz, eine leere und beginnt dann in einer neuen Zeile.<br>
- Mehrere p-Tags hintereinander erzeugen jedoch keine weiteren Absätze; der Abstand bleibt gleich.<br>
Ein Beispiel:<br>";
echo "<p>3. Zeilenumbruch<br>Zeilenumbruch<p>";
echo "<p>3. Zeilenumbruch<br>Zeilenumbruch</p>";

echo "<br>Hinweis: Gibt es in einen HTML-Dokument mehrere PHP-Abschnitte, können sich Daten und Code aus diesen Abschnitten gegenseitig referenzieren.<br/>";





 ?>
