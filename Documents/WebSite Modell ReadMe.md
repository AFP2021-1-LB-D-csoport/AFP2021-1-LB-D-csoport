WebSite Modell



A Website modell szemlélteti az oldal struktúráját, tehát mely oldal miből fog nyílni, illetve mely oldalak fognak adatbázis kezelést végezni.

Mivel a főoldal logója minden egyes oldalon szerepelni fog, így értelemszerűen az összes oldalról egyaránt el lehet érni a főoldalt, ezért lesz kétirányú a kapcsolat.

A hirdetés feladása és kereső oldalak kapcsolódnak a property(ingatlan) adatbázishoz.

A kereső oldal részről jön a select parancs, míg a hirdetés feladása oldal fogja lehetővé tenni, hogy létrehozzunk új hirdetést(insert), változtassunk az adatlapon(update) és töröljünk(delete).

A felhasználó adatbázist pedig a login/regisztráció oldal fogja kezelni az insert/update/delete parancsokkal.

 