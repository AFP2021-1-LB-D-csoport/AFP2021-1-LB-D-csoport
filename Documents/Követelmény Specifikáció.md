#Követelmény Specifikáció

#### **Jelenlegi helyzet**

A megrendelő egy gyorsan fejlődő, ingatlanközvetítéssel foglalkozó cég. Per pillanat 5 alkalmazottja van a vállalkozásnak:

- három ingatlanos, akik a házakat/lakásokat bemutatják a potenciális vevőknek
- egy titkárnő, aki az érdeklődőkkel tartja a kapcsolatot, kézben tartja a megrendeléseket, és segít a papírmunkák elvégzésében
- egy cégvezető, aki az anyagi dolgokkal foglalkozik, kiutalja a fizetéseket, rendszerezi a bevételeket, és pénzügyi terveket készít

A cég nem rendelkezik weboldallal, csak egy kis bérelt irodával egy kevésbé forgalmas helyen. Kizárólag közösségi oldalakon hirdetik magukat, reklámra nem költenek. Az érdeklődőkkel jobbára telefonon, esetleg emailben tartják a kapcsolatot. Az aktuális ingatlanokat előzetesen egy katalógusban lehet megtekinteni a cég irodájában. További érdeklődés esetén az egyik ingatlanos házhoz viszi a kuncsaftokat. A nyilvántartás Excel táblázatban valósul meg, minden személyes és pénzügyi adat ilyen formában van tárolva.

#### **Jelenlegi üzleti folyamatok modellje**

Ingatlan felvétele a nyilvántartásba: Ingatlan paramétereinek lekérdezése az eladótól, majd azok rögzítése a táblázatba. Helyszínen fényképek készítése, azok beillesztés egy sablon dokumentumba, a paraméterek átírása, majd dokumentum nyomtatása a katalógus részére.

Ingatlan árának meghatározása: Jellemzők (pl. alapterület, szobák száma, fűtés típusa, ingatlan állapota) felvitele egy saját készítésű Excel fájlba, amely egy képlettel kiszámol egy hozzávetőleges értéket, amit aztán az ingatlanosok személyes tapasztalat szerint finomíthatnak, figyelembe véve a piaci helyzetet, az inflációt és a trendeket. Szükség esetén értékbecslő bevonása. A képlet úgy működik, hogy az alapterület alapján meghatároz egy értéket a háznak, melyet a számosított jellemzők módosítanak. Például ha az ingatlan állapota egy 1-től 10-ig terjedő skálán 8-as, akkor a megállapított értéket csökkenti egy 0,96-os szorzóval. Értelemszerűen a 10-es állapot nem módosítja az árat, míg az 1-es állapot egy 0,82-es értékcsökkenést von maga után.

Ingatlan meghirdetése: Fényképek feltöltése közösségi oldalakra kísérőszöveggel, melyben meg vannak adva a paraméterek, az ár és az ingatlaniroda központi telefonszáma. Szebb házak esetén fényképek kiragasztása az iroda kirakatába.

Ingatlan eladása: Szándéknyilatkozat aláíratása a vevővel, foglaló elkérése készpénzben, ügyvéd értesítése adásvételi szerződés megírásának ügyében. Az ingatlan kikerül a katalógusból. Ha megtörtént a kulcsátadás, az ingatlan adatainak archiválása egy másik táblázatba, majd törlés a főtáblázatból, és dokumentumok elhelyezése egy archív kartotékba.

