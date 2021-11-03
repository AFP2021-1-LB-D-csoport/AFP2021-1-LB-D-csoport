# Rendszerterv



### 1. A rendszer célja

A cél egy olyan reszponzív weboldal létrehozása, melyet pc-ről, tabletről és okostelefonról is könnyűszerrel el lehet érni. Egy ingatlanokat hirdető weboldalról van szó, a megbízó erre a felületre szeretné áttelepíteni az eddig papír alapon vagy táblázatok formájában létező rendszerét, adatbázisát. A weboldalra látogatók szabadon megtekinthetik az adatbázisban szereplő házakat, szűréseket végezhetnek rajtuk a kereső funkció segítségével, és felvehetik a kapcsolatot az ingatlanosokkal. Lehetőség van regisztrációra is. A regisztrált felhasználók saját hirdetéseket adhatnak fel, melyhez kötelezően hozzá kell rendelniük egy ingatlanos dolgozót a felsoroltak közül. A feladott hirdetéseket módosítani és törölni is tudja.

További funkciókat lehet elérni ingatlanos és admin szerepkörrel rendelkező felhasználóknak. Az ingatlanos nem csak a saját hirdetéseit módosíthatja vagy törölheti, hanem az oldalon szereplő összes hirdetéshez hozzáférése van. Az admin ugyebár gyakorlatilag szabadon megtehet bármit a weboldalon, az egész oldalt megváltoztathatja, ezért az ő jogosultságait felesleges részletezni.

Az oldalnak nem célja felhasználói profilokat létrehozni, minden felhasználó csak az elenyésző mennyiségű saját adatait nézheti meg és módosíthatja szükség esetén. Nem célja semmiféle jogi tanácsadást nyújtania.

### 2. Projektterv



### 3. Üzleti folyamatok modellje

#### 			3.1 Üzleti szereplők

​		Látogató: Szabadon böngészheti az ingatlanhirdetéseket, szűréseket végezhet a keresővel,                                          		kinagyíthatja a fotókat, elolvashatja a Rólunk szekciót, valamint regisztrálhat.

​		Tag: A fentebb felsoroltakon kívül elmenthet magának hirdetéseket, továbbá saját hirdetéseket tehet 		közzé egy külön lapon, mely csak a bejelentkezés után válik láthatóvá. Saját hirdetéseit bármikor                                                		módosíthatja vagy törölheti.

​		Ingatlanos: A fentebb felsoroltakon kívül bárkinek a hirdetését módosíthatja vagy törölheti.

​		Admin: A fentebb felsoroltakon kívül *ingatlanos* vagy *admin* jogosultsági körrel ruházhat fel 		 			      		felhasználókat, valamint el is veheti ezeket a jogokat, és bármikor törölheti bárkinek az accountját. A 		weboldal szerkesztéséhez is kizárólagos joga van.

#### 			3.2 Üzleti folyamatok

- Ingatlanok böngészése

  Bárki szabadon megteheti, regisztráció nélkül. A főoldalon egy egyszerűsített kereső fogadja a látogatót, melynek igény szerinti kitöltése után, a Keresés gombra kattintva egy új lap töltődik be, ahol fel vannak sorolva a keresési feltételeknek eleget tevő ingatlanok. Ha további szűréseket szeretne végezni, akkor a főoldalon a kereső alsó sarkában található Részletes kereső linkre kattint. Ekkor betölt egy új oldal, ahol sokkal több opciót lehet megadni a keresett ingatlannal kapcsolatosan. Amennyiben a látogató további információt szeretne egy, a felsorolásban szereplő ingatlanról, annak szövegére kattintva megtekintheti az ingatlan részletes adatlapját.

- Regisztráció

  A főoldalon a felső menüsorban a Regisztráció gombra kattintva betöltődik egy egyszerű regisztrációs űrlap. Itt meg kell adni egy érvényes email címet és egy hozzá tartozó jelszót, majd a Regisztráció gombra kattintva be is fejezhetjük a folyamatot.

- Felhasználó adatainak megváltoztatása

  A regisztrált és bejelentkezett tagok bármikor módosíthatják az adataikat. Bejelentkezés után a felső menüsorban megjelenik az adott felhasználó email címe. Erre rákattintva megjelenik a felhasználó adatlapja, ahol átírhatja bármely adatát, majd az Elfogad gombra kattintva véglegesítheti a módosításokat.

- Saját hirdetés feladása

  A bejelentkezett felhasználónak megjelenik egy Saját hirdetéseim menüpont a felső sávban. Ha ráviszi a kurzort, a legördülő menüből kiválaszthatja az Új hirdetés feladása menüpontot. Ekkor megjelenik egy új oldal, egy űrlap, ahol számos jellemzőt adhat meg az ingatlanról, egyes mezők kötelezőek (pl. ingatlanos választása a hirdetéshez), mások opcionálisak. Képeket is csatolhat az ingatlanról. Ha mindezzel kész, a Hirdetés feladása gombra kattintva a hirdetése felkerül az adatbázisba, és elérhetővé válik a weboldal látogatói számára.

- Saját hirdetés módosítása/törlése

  A bejelentkezett felhasználónak megjelenik egy Saját hirdetéseim menüpont a felső sávban. Ha ráviszi a kurzort, a legördülő menüből kiválaszthatja az Hirdetés módosítása menüpontot. Ekkore betölt egy új oldal, ahol a korábban feladott hirdetései vannak listázva. Ezek közül egyet kiválasztva betöltődik annak adatlapja szerkeszthető formában. A módosítások elvégzése után elegendő a lap alján található Elfogad gombra kattintani a módosítások érvényesítéséhez. Amennyiben törölni kívánja a hirdetést, az Elfogad gomb mellett lévő Hirdetés törlése gombot kell választania, majd a felugró ablakban megjelenő megerősítést nyugtázva ingatlana törlődik az adatbázisból, és a felhasználó a főoldalra kerül.

- Bármely hirdetés módosítása/törlése

  Ez a lehetőség kizárólag ingatlanos és admin jogosultsággal érhető el. Bármely ingatlan adatlapjára navigálva az említett felhasználók találnak egy Adatlap szerkesztése gombot, melyre rákattintva a fentebb részletezett módon végezhető el az adatok módosítása vagy a hirdetés törlése.

#### 			3.3 Üzleti entitások

- ingatlan
- ingatlanos
- eladó

### 4. Követelmények



### 5. Funkcionális terv

![](C:\Users\Viktor\Documents\GitHub\AFP2021-1-LB-D-csoport\Documents\Funckionális terv képek\felhasználó törlése.bmp)

### 6. Fizikai környezet

- Hardver és hálózati topológia
  - Az alkalmazás web platformra készül
  - Interneten keresztül bárki elérheti a weboldalt egy böngészőn keresztül
  - Szerver-kliens topológia
- Fizikai alrendszerek
  - Webszerver: 80-as porton elérhető HTTP szolgáltatás
  - MySQL adatbázis szerver
  - Kliens gép: internethozzáféréssel, megfelelő böngészővel és kellő hardverrel rendelkező eszköz
- Fejlesztői eszközök
  - Typora
  - Visual Studio Code
  - MySQL Workbench
  - XAMPP (Apache webszerver)

### 7. Absztrakt domain modell



### 8. Architekturális terv



### 9. Adatbázisterv



### 10. Implementációs terv

A webszerveren futó PHP kód valósítja meg az üzleti logikát, az ebbe integrált HTML pedig a kliens oldalon megjelenő felhasználói felületért felel. Külön CSS és Javascript fájl gondoskodik a dizájnról és az oldal bizonyos funkcióiról. Az adatbázis elérését a PHP kódba integrált REST szolgáltatások valósítják meg.

### 11. Tesztterv



### 12. Telepítési terv

Szerver oldalon szükség lesz egy Apache/PHP/MySQL hármast támogató tárhelyre. Ennek birtokában FTP kapcsolaton keresztül feltölthetők a weboldalhoz tartozó fájlok.

Kliens oldalon mindössze egy modern böngésző telepítése szükségeltetik egy kellőképpen erős, és megfelelő interneteléréssel rendelkező eszközre.

### 13. Karbantartási terv

A karbantartás magába foglalja a weboldalon tapasztalt hibák kijavítását és az esetleges megváltozott megrendelői igények kielégítését. A hibák kijavítása preferenciát élvez, az új igények implementálása viszont a feladat nagyságától, illetve az aktuális szabad kapacitástól függően több hetet is igénybe vehet.

Ide tartozik még az adatbázis szerver felügyelete, egyrészt az adatok védelme érdekében, másrészt a túlterhelés azonnali észlelése végett. Ügyelni kell tehát a szerver folyamatos monitorozására.
