# Követelmény Specifikáció

#### **Jelenlegi helyzet**

A megrendelő egy gyorsan fejlődő, ingatlanközvetítéssel foglalkozó cég. Per pillanat 5 alkalmazottja van a vállalkozásnak:

- három ingatlanos, akik a házakat/lakásokat bemutatják a potenciális vevőknek
- egy titkárnő, aki az érdeklődőkkel tartja a kapcsolatot, kézben tartja a megrendeléseket, és segít a papírmunkák elvégzésében
- egy cégvezető, aki az anyagi dolgokkal foglalkozik, kiutalja a fizetéseket, rendszerezi a bevételeket, és pénzügyi terveket készít

A cég nem rendelkezik weboldallal, csak egy kis bérelt irodával egy kevésbé forgalmas helyen. Kizárólag közösségi oldalakon hirdetik magukat, reklámra nem költenek. Az érdeklődőkkel jobbára telefonon, esetleg emailben tartják a kapcsolatot. Az aktuális ingatlanokat előzetesen egy katalógusban lehet megtekinteni a cég irodájában. További érdeklődés esetén az egyik ingatlanos házhoz viszi a kuncsaftokat. A nyilvántartás Excel táblázatban valósul meg, minden személyes és pénzügyi adat ilyen formában van tárolva.

#### **Vágyálomrendszer**

A vállalkozás bővítése érdekében létre szeretnénk hozni egy weboldalt, ahol ügyfeleinknek lehetősége nyílik megtekinteni a nyilvántartásunkban szereplő ingatlanokat.

- ######  **Adatbázis**

A weboldal a cégünk által közvetített ingatlanok adatait nyilvántartó adatbázishoz kapcsolódik, mely adatbázis a cég adminisztrációját is támogatná, segítségével az üzlet fejlesztését, teljesítményét mérő riportokat készíthetnénk el. A nyilvántartás online kezelésével nem csak a cégvezetés, de a vevők is naprakész információhoz juthatnak a közvetített ingatlanokról. Az adatbázisnak emiatt tárolnia kell a cég működéséhez szükséges adatokat (például: munkatársak adatai), valamint a meghirdetett ingatlanok adatait is, az ingatlanról feltöltött képpel együtt.

- ######  **Webes felület**

A weboldal megvalósítása során fontos szempont, hogy könnyen üzemeltethető legyen, ugyanakkor ügyfeleink is könnyen elérjék, platformfüggetlen legyen, reszponzív felülettel rendelkezzen. A weboldal felépítése során fontos a könnyű áttekinthetőség.

Cégünk a jövőben lehetőséget szeretne biztosítani arra, hogy hirdetők közvetlenül a weboldalon keresztül hirdethessenek, ezért a weboldalon lehetőséget kell biztosítani új hirdetők regisztrációjára, valamint a meghirdetni kívánt ingatlanadatok rögzítésére. 

#### **A rendszerre vonatkozó szabályok**

Regisztrált ügyfeleink adatait a hatályos adatvédelmi előírások, a GDPR szabályzat alapján vagyunk kötelesek tárolni. Az elkészült honlapon szükséges megjeleníteni az Adatkezelési hozzájáruló nyilatkozatot.

Az ingatlanközvetítői tevékenységet a 1993. évi LXXVIII. törvény a lakások és helyiségek bérletére, valamint az elidegenítésükre vonatkozó egyes szabályokról (Lakástörvény) c. jogszabály szabályozza, melynek rendelkezéseit cégünknek maradéktalanul be kell tartania.

A weboldal fejlesztése PHP, HTML, CSS, JavaScript alapokon történjen, a képek tárolási formátuma jpeg, png.

Az adatok tárolása relációs adatbázisban történjen, az adatok kezelése, tárolása SQL alapon történjen.

#### **Jelenlegi üzleti folyamatok modellje**

Ingatlan felvétele a nyilvántartásba: Ingatlan paramétereinek lekérdezése az eladótól, majd azok rögzítése a táblázatba. Helyszínen fényképek készítése, azok beillesztés egy sablon dokumentumba, a paraméterek átírása, majd dokumentum nyomtatása a katalógus részére.

Ingatlan árának meghatározása: Jellemzők (pl. alapterület, szobák száma, fűtés típusa, ingatlan állapota) felvitele egy Excel fájlba, melyben egy saját készítésű képlet kiszámítja a hozzávetőleges értéket. A képlet az alapterületet veszi alapul, abból meghatároz egy kezdeti értéket, amit aztán a többi, számosított jellemző (pl. állapot 1-10) alapján különféle szorzókkal módosít. Az így kapott árat az ingatlanosok személyes tapasztalat szerint finomítani szokták, figyelembe véve a piaci helyzetet, az inflációt és a trendeket. Szükség esetén értékbecslőt is bevonnak.

Ingatlan meghirdetése: Fényképek feltöltése közösségi oldalakra kísérőszöveggel, melyben meg vannak adva a paraméterek, az ár és az ingatlaniroda központi telefonszáma. Szebb házak esetén fényképek kiragasztása az iroda kirakatába.

Ingatlan eladása: Szándéknyilatkozat aláíratása a vevővel, foglaló elkérése készpénzben, ügyvéd értesítése adásvételi szerződés megírásának ügyében. Az ingatlan kikerül a katalógusból. Ha megtörtént a kulcsátadás, az ingatlan adatainak archiválása egy másik táblázatba, majd törlés a főtáblázatból, és dokumentumok elhelyezése egy archív kartotékba.

#### **Igényelt üzleti folyamatok**

- ###### Felhasználói fiók birtokában: 

  - Bejelentkezés: főoldal => bejelentkezés gomb => felhasználónév, jelszó megadása
  - Új hirdetés feladása: bejelentkezés felhasználói jogkörrel => menü => hirdetések kezelése => új hirdetés feladása => adatok kitöltése => véglegesítés
  - Hirdetés szerkesztése: bejelentkezés felhasználói jogkörrel => menü => hirdetések kezelése => hirdetés szerkesztése => adatok módosítása => véglegesítés
  - Hirdetés törlése: bejelentkezés felhasználói jogkörrel => menü => hirdetések kezelése => hirdetés törlése => véglegesítés
  - Hirdetés deaktiválása: bejelentkezés felhasználói jogkörrel => menü => hirdetések kezelése => hirdetés szerkesztése => deaktiválás => véglegesítés
  - Felhasználói adatok módosítása: bejelentkezés felhasználói jogkörrel => menü => fiók kezelése => adatok módosítása => véglegesítés
  - Admin belépés: főoldal => bejelentkezés => admin felhasználónév és jelszó megadása
  - Az admin képes új hirdetést feladni és bármely hirdetést szerkeszteni, törölni
  
- ###### Felhasználói fiók nélkül:

  - Regisztráció: főoldal => regisztráció gomb => adatok kitöltése => véglegesítés
  - Keresés:  a felhasználó a keresőmezőbe beírja a keresni kívánt kulcsszavakat => keresés => találatok megjelenítése
  - Részletes keresés: a felhasználó a részletes keresés opciót választja ki => megadja a keresés specifikációit => keresés => találatok megjelenítése
  - Információ az oldalról: főoldal => rólunk gomb => átirányítás

#### **Követelménylista**

| Kód  |                          Megnevezés                          |
| :--: | :----------------------------------------------------------: |
|  K1  | Az ingatlanhirdetések letisztult, egyszerű megjelenítése weblapon |
|  K2  |           Ingatlanhirdetések tárolása adatbázisban           |
|  K3  | A jelenleg is aktív hirdetések átemelése a katalógusból a weblapra |
|  K4  |                   Ellenőrzött regisztráció                   |
|  K5  |                   Bejelentkezési lehetőség                   |
|  K6  |         Új ingatlanhirdetések feladásának lehetősége         |
|  K7  |   Ingatlanhirdetés aktiválási, deaktiválási, törlési opció   |
|  K8  |               Ingatlanok keresése szűrésekkel                |
|  K9  |    Ingatlan részletes leírásának megjelenítése új oldalon    |
| K10  | Ingatlanokhoz tartozó képek feltöltésének, megjelenítésének biztosítása |

#### Fogalomtár

Nyeles telek: Olyan telek, amely az utcáról egy hosszabb, de vékonyabb teleknyúlványon (ún. nyélen) keresztül érhető el. 

Zártkerti ingatlan: Hivatalosan már nem létező, de a tulajdoni lapokon még rendszeresen előforduló fogalom; ma már hivatalosan külterületnek számít.

Osztatlan közös ingatlan: Egy helyrajzi számon, egy ingatlan több személy tulajdonában van.

Hasznos alapterület: A teljes alapterületnek olyan része, ahol a belmagasság legalább 1,90 m. A teljes alapterületbe a lakáshoz, üdülőhöz tartozó kiegészítő helyiségek kivételével valamennyi helyiség összegzett alapterülete, valamint a többszintes lakrészek belső lépcsőjének egy szinten számított vízszintes vetülete is beletartozik

Szolgalmi út: Egy olyan út amely egy olyan telken van , amely átjárási lehetőséget,szolgáltat, egy másik, mögötte lévő telekre, amely nem rendelekzik bejárattal (közterületi ucakapcsolattal).

Társasházi alapító okirat: egy olyan szerződés, melyet a társasház összes lakástulajdonosa aláír és köteles betartani. Rendszabályozza a társasház használatával, fenntartásával, gondozásával kapcsolatos jogokat, és azok megsértésével kapcsolatos kötelezettségeket.
