# Funkcionális Specifikáció



#### Áttekintés

Megrendelőnk egy ingatlanos iroda, ami eddig csak minimálisan digitalizálta magát, most viszont elérkezettnek látja az időt egy weboldal elkészítésére, ahol megoszthatják az adatbázisukban szereplő házakat, lakásokat, valamint felületet biztosíthatnak a regisztrált felhasználóknak saját házaik meghirdetésére.

#### Jelenlegi helyzet leírása

A megrendelő egy gyorsan fejlődő, ingatlanközvetítéssel foglalkozó cég. Per pillanat 5 alkalmazottja van a vállalkozásnak:

- három ingatlanos, akik a házakat/lakásokat bemutatják a potenciális vevőknek
- egy titkárnő, aki az érdeklődőkkel tartja a kapcsolatot, kézben tartja a megrendeléseket, és segít a papírmunkák elvégzésében
- egy cégvezető, aki az anyagi dolgokkal foglalkozik, kiutalja a fizetéseket, rendszerezi a bevételeket, és pénzügyi terveket készít

A cég nem rendelkezik weboldallal, csak egy kis bérelt irodával egy kevésbé forgalmas helyen. Kizárólag közösségi oldalakon hirdetik magukat, reklámra nem költenek. Az érdeklődőkkel jobbára telefonon, esetleg emailben tartják a kapcsolatot. Az aktuális ingatlanokat előzetesen egy katalógusban lehet megtekinteni a cég irodájában. További érdeklődés esetén az egyik ingatlanos házhoz viszi a kuncsaftokat. A nyilvántartás Excel táblázatban valósul meg, minden személyes és pénzügyi adat ilyen formában van tárolva.

#### Vágyálom rendszer leírása



#### Követelménylista

- Az ingatlanhirdetések letisztult, egyszerű megjelenítése weblapon
- Ingatlanhirdetések tárolása adatbázisban
- A jelenleg is aktív hirdetések átemelése a katalógusból a weblapra
- Új ingatlanhirdetések feladásának lehetősége
- Ingatlanhirdetés aktiválási, deaktiválási, törlési opció
- Ingatlanok keresése szűrésekkel
- Ingatlan részletes leírásának megjelenítése új oldalon
- Ingatlanokhoz tartozó képek feltöltésének, megjelenítésének biztosítása
- Ellenőrzött regisztráció
- Bejelentkezési lehetőség

#### Használati esetek



#### Képernyőtervek



#### Forgatókönyvek

A felhasználó a főoldalon egy keresővel találkozik, ahol néhány alapdolog megadásával lekérdezhet egy listát az általa preferált ingatlanokról. A kereső alatt a legnépszerűbb házak listáját lehet megtekinteni. A kereső részt regisztráció nélkül lehet használni.

A felső navigációs sávban található egy Főoldal, egy Belépés, egy Regisztráció és egy Rólunk menüpont. A Regisztációra kattintva egy űrlap jelenik meg, amelynek értelemszerű kitöltése után a felhasználó egy megerősítő emailt kap a megadott címére. Az ebben található linkre kattintva máris bejelentkezhet az oldalra. Regisztrációnál kötelező megadni egy nevet, egy email címet és egy jelszót, továbbá opcionálisan választható a hírlevélre feliratkozás.

A Belépés pontra kattintva az email cím és a jelszó megadásával jelentkezhet be a regisztrált felhasználó. Sikeres bejelentkezés után megjelenik a felhasználónév a navigációs sáv szélén, arra rákattintva pedig szerkeszthetők a személyes adatok. Megjelenik továbbá egy Saját hirdetéseim menüpont is, ahol saját ingatlanokat hirdethetünk meg, illetve meglévő hirdetéseinket szerkeszthetjük. Hirdetésfeladásnál vannak kötelezően kitöltendő mezők (pl. település, alapterület, szobák száma,) és opcionálisan megadható jellemzők (pl. erkély, légkondicionáló, parkolás). Ezen kívül lehetőség van még fotók feltöltésére is.

A Rólunk menüpont alatt egy pár soros bemutatkozást olvashatunk az ingatlanos cégtől, alant pedig a munkatársak fotóit és az elérhetőségeket tekinthetjük meg.
