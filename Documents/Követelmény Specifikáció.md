# Követelmény Specifikáció

#### **Jelenlegi helyzet**

A megrendelő egy gyorsan fejlődő, ingatlanközvetítéssel foglalkozó cég. Per pillanat 5 alkalmazottja van a vállalkozásnak:

- három ingatlanos, akik a házakat/lakásokat bemutatják a potenciális vevőknek
- egy titkárnő, aki az érdeklődőkkel tartja a kapcsolatot, kézben tartja a megrendeléseket, és segít a papírmunkák elvégzésében
- egy cégvezető, aki az anyagi dolgokkal foglalkozik, kiutalja a fizetéseket, rendszerezi a bevételeket, és pénzügyi terveket készít

A cég nem rendelkezik weboldallal, csak egy kis bérelt irodával egy kevésbé forgalmas helyen. Kizárólag közösségi oldalakon hirdetik magukat, reklámra nem költenek. Az érdeklődőkkel jobbára telefonon, esetleg emailben tartják a kapcsolatot. Az aktuális ingatlanokat előzetesen egy katalógusban lehet megtekinteni a cég irodájában. További érdeklődés esetén az egyik ingatlanos házhoz viszi a kuncsaftokat. A nyilvántartás Excel táblázatban valósul meg, minden személyes és pénzügyi adat ilyen formában van tárolva.

#### **Jelenlegi üzleti folyamatok modellje**

Ingatlan felvétele a nyilvántartásba: Ingatlan paramétereinek lekérdezése az eladótól, majd azok rögzítése a táblázatba. Helyszínen fényképek készítése, azok beillesztés egy sablon dokumentumba, a paraméterek átírása, majd dokumentum nyomtatása a katalógus részére.

Ingatlan árának meghatározása: Jellemzők (pl. alapterület, szobák száma, fűtés típusa, ingatlan állapota) felvitele egy Excel fájlba, melyben egy saját készítésű képlet kiszámítja a hozzávetőleges értéket. A képlet az alapterületet veszi alapul, abból meghatároz egy kezdeti értéket, amit aztán a többi, számosított jellemző (pl. állapot 1-10) alapján különféle szorzókkal módosít. Az így kapott árat az ingatlanosok személyes tapasztalat szerint finomítani szokták, figyelembe véve a piaci helyzetet, az inflációt és a trendeket. Szükség esetén értékbecslőt is bevonnak.

Ingatlan meghirdetése: Fényképek feltöltése közösségi oldalakra kísérőszöveggel, melyben meg vannak adva a paraméterek, az ár és az ingatlaniroda központi telefonszáma. Szebb házak esetén fényképek kiragasztása az iroda kirakatába.

Ingatlan eladása: Szándéknyilatkozat aláíratása a vevővel, foglaló elkérése készpénzben, ügyvéd értesítése adásvételi szerződés megírásának ügyében. Az ingatlan kikerül a katalógusból. Ha megtörtént a kulcsátadás, az ingatlan adatainak archiválása egy másik táblázatba, majd törlés a főtáblázatból, és dokumentumok elhelyezése egy archív kartotékba.

#### **Igényelt üzleti folyamatok**

- ###### Felhasználói fiók birtokában: 

  Felhasználó ki- és bejelentkezési lehetőség. Bejelentkezve a felhasználó képes új hirdetés 	feladására, vagy a meglévő hirdetések szerkesztésére, törlésére. 
  
- ###### Felhasználói fiók nélkül:

  Az oldal lehetőséget biztosít regisztrációra. Az ingatlanhirdetések böngészése, a szűrők használata, a képek megtekintése nem regisztrációhoz kötött. A regisztráció csak a hirdetések feladásához, testreszabásához, valamint törléséhez szükséges.

#### **Követelménylista**

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

#### Fogalomtár

Nyeles telek: Olyan telek, amely az utcáról egy hosszabb, de vékonyabb teleknyúlványon (ún. nyélen) keresztül érhető el. 

Zártkerti ingatlan: Hivatalosan már nem létező, de a tulajdoni lapokon még rendszeresen előforduló fogalom; ma már hivatalosan külterületnek számít.

Osztatlan közös ingatlan: Egy helyrajzi számon, egy ingatlan több személy tulajdonában van.

Hasznos alapterület: A teljes alapterületnek olyan része, ahol a belmagasság legalább 1,90 m. A teljes alapterületbe a lakáshoz, üdülőhöz tartozó kiegészítő helyiségek kivételével valamennyi helyiség összegzett alapterülete, valamint a többszintes lakrészek belső lépcsőjének egy szinten számított vízszintes vetülete is beletartozik

Szolgalmi út: Egy olyan út amely egy olyan telken van , amely átjárási lehetőséget,szolgáltat, egy másik, mögötte lévő telekre, amely nem rendelekzik bejárattal (közterületi ucakapcsolattal).

Társasházi alapító okirat: egy olyan szerződés, melyet a társasház összes lakástulajdonosa aláír és köteles betartani. Rendszabályozza a társasház használatával, fenntartásával, gondozásával kapcsolatos jogokat, és azok megsértésével kapcsolatos kötelezettségeket.
