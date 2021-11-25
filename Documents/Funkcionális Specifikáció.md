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

A vállalkozás bővítése érdekében létre szeretnénk hozni egy weboldalt, ahol ügyfeleinknek lehetősége nyílik megtekinteni a nyilvántartásunkban szereplő ingatlanokat. A weboldal a cégünk által közvetített ingatlanok adatait nyilvántartó adatbázishoz kapcsolódik, mely adatbázis a cég adminisztrációját is támogatná, segítségével az üzlet fejlesztését, teljesítményét mérő riportokat készíthetnénk el. A nyilvántartás online kezelésével nem csak a cégvezetés, de a vevők is naprakész információhoz juthatnak a közvetített ingatlanokról. Az adatbázisnak emiatt tárolnia kell a cég működéséhez szükséges adatokat (például: munkatársak adatai), valamint a meghirdetett ingatlanok adatait is, az ingatlanról feltöltött képpel együtt.

A weboldal megvalósítása során fontos szempont, hogy könnyen üzemeltethető legyen, ugyanakkor ügyfeleink is könnyen elérjék, platformfüggetlen legyen, reszponzív felülettel rendelkezzen. A weboldal felépítése során fontos a könnyű áttekinthetőség.

Cégünk a jövőben lehetőséget szeretne biztosítani arra, hogy hirdetők közvetlenül a weboldalon keresztül hirdethessenek, ezért A weboldalon lehetőséget kell biztosítani új hirdetők regisztrációjára, valamint a meghirdetni kívánt ingatlanadatok rögzítésére. 

#### Követelménylista

| Kód  |                          Megnevezés                          | Leírás                                                       |
| :--: | :----------------------------------------------------------: | ------------------------------------------------------------ |
|  K1  | Az ingatlanhirdetések letisztult, egyszerű megjelenítése weblapon | Az oldalon történő navigálás az egyszerű felhasználók számára sem okoz nehézséget. A felület halvány, kellemes színekkel jelenik meg. A hirdetések alapesetben listás jelleggel jelenjenek meg. Ez a megjelenítés csupán néhány fontosabb információt tartalmazzon. |
|  K2  |           Ingatlanhirdetések tárolása adatbázisban           | Az egyszerű és gyors adatelérés érdekében az adatok tárolása adatbázisban történjen. |
|  K3  | A jelenleg is aktív hirdetések átemelése a katalógusból a weblapra | A korábbi, papíralapú hirdetések áthelyezésre kerülnek az oldalra. Ebben az esetben a weblap a kezdetekben sem lesz üres. |
|  K4  |                   Ellenőrzött regisztráció                   | Amennyiben a felhasználó még nem rendelkezik fiókkal, abban az esetben az "Új felhasználó létrehozása" opcióval regisztrálhat. A regisztráció során bizonyos adatok megadása kötelező. Ha ezek nincsenek kitöltve, akkor a rendszer "Sikertelen regisztráció." hibaüzenetet küld. |
|  K5  |                   Bejelentkezési lehetőség                   | A felhasználó a felhasználónév és jelszó pár megadásával beléphet a rendszerbe. Ha a felhasználónév vagy a jelszó helytelen, akkor az oldal üzen a felhasználónak: "Téves felhasználónév vagy jelszó." |
|  K6  |         Új ingatlanhirdetések feladásának lehetősége         | A bejelentkezett felhasználó számára lehetőség nyílik új hirdetést feladni. A hirdetés véglegesítéséhez szükséges néhány kötelező adatot megadni(pl. ár, alapterület, ingatlan jellege, stb.), de ezeken kívül opcionális adatok is rögzíthetők(pl. kép, leírás, fűtés típusa, stb.). Amennyiben a kötelező adatok nincsenek kitöltve a rendszer hibaüzenetet küld. |
|  K7  |   Ingatlanhirdetés aktiválási, deaktiválási, törlési opció   | A bejelentkezett, hirdetéssel rendelkező felhasználó képes a hirdetéseit menedzselni. Ha van aktív hirdetése, akkor azt lehet törölni, deaktiválni. Ha a törlés opciót választja a felhasználó, akkor a hirdetés véglegesen törölve lesz az adatbázisból is. Ammenyiben a hirdetés inaktív, akkor lehetséges azt aktiválni. Ha a hirdetés aktív, akkor a keresések eredményeként megjelenhet. Ellenkező esetben nem jelenhet meg. |
|  K8  |               Ingatlanok keresése szűrésekkel                | Az oldalon található hirdetéseken lehet szűrést alkalmazni(pl. ár, alapterület, ingatlan jellege, stb.). Ekkor csak a megadott feltételeknek megfelelő hirdetések fognak megjelenni, ha léteznek ilyenek. Előfordulhat olyan eset, hogy nincs a keresésnek megfelelő hirdetés. Ekkor az oldalon a "Nem található a keresésnek megfelelő hirdetés." üzenet jelenik meg. |
|  K9  |    Ingatlan részletes leírásának megjelenítése új oldalon    | A hirdetések böngészése közben az oldal lehetőséget biztosít részletes megjelenítésre is. Ez úgy valósul meg, hogy a hirdetésre kattintva az oldal egy másik lapra irányít, ahol megjelenik minden elérhető információ az adott ingatlanról. |
| K10  | Ingatlanokhoz tartozó képek feltöltésének, megjelenítésének biztosítása | A hirdetésfeladásnál a "Kép feltöltése" gombra kattintva lehetőség nyílik kép feltöltésére. |



#### Használati esetek

A weblapot négyféle szerepkörben lehet használni: látogató (nem regisztrált/bejelentkezett felhasználó), tag (bejelentkezett felhasználó), ingatlanos, admin. Ezek jogosultságai a következők (aktorok):

Látogató: Szabadon böngészheti az ingatlanhirdetéseket, szűréseket végezhet a keresővel, kinagyíthatja a fotókat, elolvashatja a Rólunk szekciót, valamint regisztrálhat.

Tag: A fentebb felsoroltakon kívül elmenthet magának hirdetéseket, továbbá saját hirdetéseket tehet közzé egy külön lapon, mely csak a bejelentkezés után válik láthatóvá. Saját hirdetéseit bármikor módosíthatja vagy törölheti.

Ingatlanos: A fentebb felsoroltakon kívül bárkinek a hirdetését módosíthatja vagy törölheti.

Admin: A fentebb felsoroltakon kívül *ingatlanos* vagy *admin* jogosultsági körrel ruházhat fel felhasználókat, valamint el is veheti ezeket a jogokat, és bármikor törölheti bárkinek az accountját. A weboldal szerkesztéséhez is kizárólagos joga van.

![use_case_UML](https://user-images.githubusercontent.com/85219194/137003847-74c9c9af-eb86-4363-87ec-b6a9bd0f5d7b.JPG)

#### Használati esetek aktorok szerinti bontásban

1.) Látogató regisztráció nélkül böngészi az oldalt:
oldal felkeresése -> böngészősáv használata -> lenyíló menük használata -> elérhető ingatlanok listázása -> elérhető ingatlanok listázása megadott feltételek alapján -> elérhető ingatlan kiválasztása, részletek megtekintése -> adott ingatlanhoz mellékelt fotók böngészése -> kapcsolatfelvétel az ingatlanossal.

2.) Látogató regisztrál: 
oldal felkeresése -> menüsávról a regisztráció kiválasztása -> személyes adatok megadása -> elérhetőségek megadása -> hozzájárulási nyilatkozat, használati feltételek elfogadása -> sikeres regisztrációról visszaigazolás

3.) Regisztrált tag hirdetést ad fel:
oldal felkeresése -> belépés a személyes profilba -> hirdetés feladása opció kiválasztása -> ingatlan adatainak megadása -> leírás az ingatlanról -> kép csatolása

4.) Regisztrált felhasználó megnézi saját hirdetéseit:
oldal felkeresése -> belépés a személyes profilba -> feladott hirdetések listázása -> részletek megtekintése -> hirdetés adatainak módosítása, törlése

5.) Ingatlanos hirdetéseket módosít:
oldal felkeresése -> bejelentkezés a személyes profilba -> regisztrált felhasználók hirdetéseinek listázása -> hirdetés adatainak módosítása, törlése -> hirdetéshez ingatlanost rendel

6.) Admin:
oldal admin felületére belép -> felhasználók jogosultsági körét módosítja

#### Képernyőtervek

Belépés nélkül is meg kell jelennie az oldal valamennyi funkciójának, de annak használatát regisztrációhoz kell kötni. Tehát a belépett és regisztráció nélküli oldal között látszólag nincs különbség.

Az oldal logója az oldal tetején szerepeljen, egy sávban. Rákattintva az oldal főoldala jelenik meg. Ez alatt helyezkedik el a menüsor, ahol az alábbi lehetőségek fogadnak balról jobbra:

- Ingatlanos megbízása:  A buttonra kattintva, elnavigál egy másik oldalra, ahol ahol az iroda x ingatlanosának neve, fényképe és telefonszáma van feltüntetve.

- Hitelügyintézés: Szintén a logó alatti sorban szerepeljen. Itt is megjelenik az iroda alkalmazásában álló hitelügyintézők adatai.

- Hirdetés feladása: Utolsó előtti elem. A részletes keresőhöz hasonló oldal megjelenítése(később részletezve).

- Login/regisztráció: Ezzel a lehetőséggel, jobb oldalon elhelyezve zárulnak a funkciók. Ezen az oldalon meg kell adni egy felhasználónevet, jelszót, email címet, vezeték/keresztnevet.

Kereső: Ez foglalja el a képernyő nagyrészét, annak is a közepét, hiszen ez lesz a leggyakrabban használt funkció. 5 beviteli mező jelenjen meg(árMin, árMax, szobaSzám, lakásTerület, településNeve), illetve, két radiobutton, hogy eladó vagy kiadó ingatlant keres, illetve egy "Keresés" button. Ez alatt helyezkedik el közvetlenül egy "Részletes kereső" button, ami a részletes kereső oldalra navigál. Itt megjelenik a főkereső mellett egy jó pár checkbox, amit a felhasználó meg tud jelölni és ezáltal szűkíti a keresést.

Az oldal alsó részén pedig az ingatlanpiaccal kapcsolatos hírek jelennek meg forrásmegjelöléssel. Legalul pedig a kapcsolat.

#### Forgatókönyvek

A felhasználó szeretne egy ingatlanhirdetést közzéteni:

- felkeresi a weboldalt egy böngészőn keresztül
- a Főoldalon a felső menüsávban a Bejelentkezés gombra kattint
- a megjelenő lapon az email címe és a jelszava megadásával bejelentkezik a weboldalra
- ismét a Főoldal jelenik meg, ahol a felső menüsávban a Saját hirdetéseim lenyíló menüből az Új hirdetés feladása lehetőséget választja
- megjelenik az erre szolgáló lap, ahol az ingatlan számos jellemzőjét adhatja meg, egyesek kötelezőek, mások opcionálisak, továbbá képet is feltölthet az ingatlanról
- ezek befejeztével, a Jóváhagyás gombra kattintva, elküldi igényét a rendszer felé
- ha minden adat rendben van, akkor az ingatlan bekerül az adatbázisba, és a weboldal be is tölti az ingatlan adatlapját a felhasználónak

Érdeklődés egy ingatlan iránt:

- az odalra tévedt látogató a Főoldalon egy egyszerűsített keresőt talál, melynek segítségével leszűkíti a keresett ingatlanok körét
- a weboldal a megadott szűrők alapján lekérdezést hajt végre az adatbázis felé, majd az eredményeket megjeleníti egy lapon a látogatónak
- látogató rákattint egy szimpatikus ingatlan képére, mire betöltődik annak részletes adatlapja
- amennyiben a látogatót komolyan érdekli az ingatlan, az adatlapról leolvashatja az ingatlanhoz tartozó ingatlanos elérhetőségeit, és azokon keresztül felveheti vele a kapcsolatot
