# Neues Fan-Forum auf der Knicks-Fanpage

## Einleitung/Motivation
Die Idee hinter dem Fan-Forum und dem damit verbundenen CMS war, dass sämtliche deutschsprachigen Fans der New York Knicks sich über eine Plattform über die wichtigsten Neuigkeiten ihres Lieblings-Teams informieren und austauschen können.

## Projekt-Beschrieb
Jeder User, der die Fan-Page besucht, hat die Möglichkeit die neue Fan-Forum-Seite einzusehen. Diese kann über den entsprechenden Reiter in der Menuleiste oder das animierte Banner auf der Home-Seite erreicht werden.
* Um einen Artikel verfassen oder editieren zu können, muss sich der User erst registrieren bzw. anschliessend einloggen.
* Wenn jemand einen Artikel löschen möchte oder diesen unangebracht findet, kann er sich über das Kontakt-Formular beim Seitenbetreiber melden.  
* Das Fan-Forum dient nur zum Austausch der aktuellen News des Basketball-Teams der New York Knicks.  
Alle Beiträge, die nicht im Zusammenhang mit diesem Thema stehen oder unangebracht sind, werden unverzüglich vom Admin gelöscht.

## Projekt-Struktur
Die Knicks-Fanpage besteht aus eine Frontend-Bereich (alle Seiten, die über die Menuleiste bzw. die Sitemap erreicht werden können) und einem Backend, welches nur für registrierte User bzw. den Admin sichtbar ist und nur über eine Login-Maske erreicht werden kann. Die Bereiche sind wie folgt gegliedert;  
* **Frontend:** Home-Bereich, Sitemap, Geschichte, Team (inkl. Roster und Statistiken), Arena, Links, Fan-Forum, Kontakt und Ansicht der Login-/Registrations-Maske.  
* **Backend:** Upload-, Edit- und Admin-Form, CMS-Dashboard, Login- und Registrations-Bereich, inkl. sämtlicher Validerungs-Files, Präferenzen und Sicherheits-Skripte.

## Nutzung der CMS-Oberfläche
### Erstellen eines Artikels
1. Nach erfolgreichem Login wird im Dashboard der Reiter «Neuen Eintrag erstellen» angewählt.
2. Die folgende Maske wird ausgefüllt:
   - Headline, Copy und Bild sind obligatorisch
   - Die Autoren-Angabe ist vorerst optional
3. Mit einem Klick auf «Hochladen» wird der Artikel in die Datenbank gespeichert und ist auf dem Fan-Forum ersichtlich.

### Editieren eines Artikels
1. Im Dashboard wird der Reiter «Einträge bearbeiten» angewählt.
2. Der gewünschte Artikel wird ausgewählt mit einem Klick auf «Eintrag bearbeiten» unterhalb des Artikels.
3. Die folgende Maske wird ausgefüllt:
   - Headline und Copy sind obligatorisch
   - Eine Autoren-Angabe ist nun gegenüber dem erstmaligen Upload ebenfalls obligatorisch, damit der Orginalverfasser oder der Admin sieht, wer den Artikel überarbeitet hat.
   - Eine erneute Bild-Wahl ist optional, wird diese nicht gewünscht, kann einfach auf «Updaten» gedrückt werden und das bisher verwendete Bild wird weiter eingesetzt.
4. Mit einem Klick auf «Updaten» wird der Artikel in der Datenbank aktualisiert und ist wiederum auf dem Fan-Forum ersichtlich.

### Löschen eines Artikels (Admin-Bereich)
Artikel können nur vom Admin-User gelöscht werden (siehe Abschnitt «Admin-Bereich» weiter unten).

## Verwendete Programme/Bibliotheken/Frameworks
* Der verwendete Text-Editor bei diesem Projekt ist [Atom](https://atom.io/ "Link zu atom.io").  
* Als lokale Entwicklungsumgebung wurde [MAMP](https://www.mamp.info/de/ "Link zu mamp.info") gewählt.
* Für die Icons im Footer wurde die Bibliothek von [Font Awesome](https://fontawesome.com/ "Link zu fontawesome.com") verwendet.  
* Frameworks wurden für dieses Projekt keine verwendet, da sich das CMS nahtlos in das Layout der restlichen Seite einfügen sollte, es wurde also nur eigener Code verwendet.

## Design-Guidelines
Die Gestaltung des Fan-Forums ist aufgrund der News-Auflistung einer Zeitung nachempfunden.
* Hierbei werden horizontale Linien als Unterteilung eingesetzt, die bisher beispielsweise auch schon in den Headlines vorkamen und in der gleichen Art in Zeitungen verwendet werden.
* Es wird nur eine Schriftart in maximal vier Schriftschnitten verwendet um den User nicht unnötig zu verwirren.  
Auf spezielle Auszeichnungen in der Copy wird aufgrund der restlichen Informationsflut auf der Seite verzichtet.
* Die Farbgebung beschränkt sich auf Schwarz- und Grautöne für den Text sowie dem Blau bzw. Orange aus dem Logo für Auszeichnungen (beispielsweise bei Hover-Effekten).
* Navigiert wird auf der CMS-Oberfläche mit Buttons in der Menuleiste, zwecks Usability befindet sich geräteabhängig immer an der gleichen Stelle.
* Um ein ruhiges und einheitliches Layout garantieren zu können muss bei jedem Eintrag eine Headline, eine Copy und ein Bild bereit gestellt werden. Das Bild lockert das Layout auf, es gibt nicht nur eine langweilige, reine Text-Seite. Auch der User muss sich Gedanken zum Artikel machen und wird nicht einfach so wild drauflosschreiben.
* Für die Login-, Registrations-, Upload- und Edit-Formulare wurden die gleichen Gestaltungs-Prinzipien wie für das bereits bestehende Kontakt-Formular umgesetzt.
* Die Fehler-Ausgabe bei der Validierung steht bei allen Formularen zuoberst vor der Eingabe, damit diese schnellstmöglich vom User erfasst und umgesetzt werden können.
* Der aktuellste Artikel wird immer an erster Stelle geführt, die restlichen folgen zeitlich abwärts gegliedert.

## Admin-Bereich
Der Admin hat im Gegensatz zum registrierten User die Möglichkeit, die verfassten Einträge zu löschen. Dies kann aus folgenden Gründen geschehen:
* Ein User/der Admin möchte seinen Eintrag gerne löschen
* Ein User/der Admin findet einen Eintrag unangebracht
* Ein Eintrag ist nicht mehr aktuell
* Ein Eintrag hat nichts mit der Mannschaft, der Arena oder der Fan-Gemeinschaft zu tun

Der Admin-Bereich wird über die Login-Maske resp. in der folgenden Dashboard-Ansicht über den dritten Reiter «Admin-Bereich» mit einem seperaten Login erreicht;  
**Admin-Login:** BallerBrand1990  
**Admin-Passwort:** DurantForTheWin2019

## Mitarbeitende
**Projekt-Verantwortlicher:** Andreas Ganz, <andreas.ganz@hotmail.com>

## Credits
Vielen Dank an Theres Harker und René Esposito für die spannende Einführung in den PHP-Bereich!

## Copyright
© Andreas Ganz, Dezember 2018

> Once a Knick, Always a Knick!

![Knicks-Logo Round Version](https://github.com/andreasganz/bwd_5100-1_andreas_ganz/blob/master/pictures/logos/favicon_newyorkknicks_round_rgb.png)
