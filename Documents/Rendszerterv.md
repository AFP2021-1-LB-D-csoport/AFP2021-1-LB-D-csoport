# Rendszerterv



### 1. A rendszer célja

A cél egy olyan reszponzív weboldal létrehozása, melyet pc-ről, tabletről és okostelefonról is könnyűszerrel el lehet érni. Egy ingatlanokat hirdető weboldalról van szó, a megbízó erre a felületre szeretné áttelepíteni az eddig papír alapon vagy táblázatok formájában létező rendszerét, adatbázisát. A weboldalra látogatók szabadon megtekinthetik az adatbázisban szereplő házakat, szűréseket végezhetnek rajtuk a kereső funkció segítségével, és felvehetik a kapcsolatot az ingatlanosokkal. Lehetőség van regisztrációra is. A regisztrált felhasználók saját hirdetéseket adhatnak fel, melyhez kötelezően hozzá kell rendelniük egy ingatlanos dolgozót a felsoroltak közül. A feladott hirdetéseket módosítani és törölni is tudja.

További funkciókat lehet elérni ingatlanos és admin szerepkörrel rendelkező felhasználóknak. Az ingatlanos nem csak a saját hirdetéseit módosíthatja vagy törölheti, hanem az oldalon szereplő összes hirdetéshez hozzáférése van. Az admin ugyebár gyakorlatilag szabadon megtehet bármit a weboldalon, az egész oldalt megváltoztathatja, ezért az ő jogosultságait felesleges részletezni.

Az oldalnak nem célja felhasználói profilokat létrehozni, minden felhasználó csak az elenyésző mennyiségű saját adatait nézheti meg és módosíthatja szükség esetén. Nem célja semmiféle jogi tanácsadást nyújtania.

### 2. Projektterv

####    2.1 Projekt szerepkörök

A projektet a senior projektvezető fogja össze, a projektben további 4 személy dolgozik. A projekten dolgozó személyek a feladatokat rendszeresen online megbeszélések keretében osztják fel egymás között, a projekt előrehaladását Kanban módszerrel követjük nyomon (Trello). A projektben dolgozó emberek egyformán felelősek a feladatkörükhöz tartozó dokumentáció elkészítéséért és a programozási feladatok helyes elvégézésért is. A projektben részt vevő személyek pontos listája az alábbi:

|Szerepkör|Név|Feladatok|
|:----------------------------:|:---------------------------------------------:|--------------------------------------------------------------------------|
|Projektvezető|Kormány Milán|projekt irányítása, határidők felügyelete, projekt haladásának biztosítása|
|Projekt munkatárs|Letső Dániel|dokumentáció készítése, programozás, tesztelés|
|Projekt munkatárs|Nyíri Tímea|dokumentáció készítése, programozás, tesztelés|
|Projekt munkatárs|Safarcsik Viktor|dokumentáció készítése, programozás, tesztelés|
|Projekt munkatárs|Telegdi Tamás|dokumentáció készítése, programozás, tesztelés|

####    2.2 Ütemterv

A szükségletek felmérése és a projekt dokumentáció elkészítése a projekt első nagy fázisa, mely szintén két nagyobb egységre bontható: a Funkcionális specifikáció és a Rendszerterv elkészítésére. Ezen dokumentumok elkészítését követi a programozás fázis, majd a tesztelés, hibajavítás. A dokumentációkészítés nem zárul le véglegesen a Rendszertervvel, hanem a projekt egészét végigkíséri.

A projekt időbeli előrehaladását az alábbi Gantt-diagramm szemlélteti:

![gantt](https://user-images.githubusercontent.com/85219194/140652529-740f2e39-1bf4-4f28-9a53-9b2325b76771.JPG)

####    2.3 Projekt mérföldkövek

- I.    Projekt kezdeti dokumentáció elkészítése - Funkcionális specifikáció, Rendszerterv
- II.   Rendszertervnek megfelelő programozási feladatok
- III.  Elkészült fejlesztés teszetelés, hibajavítás
- IV.   Projekt lezárása

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

#### 4.1 Funkcionális követelmények

- A felhasználó bejelentkezés nélkül képes használni az oldal bizonyos funkcióit. Tehát a keresést, részletes keresését, az oldal tulajdonosairól szóló "rólunk" részét, a regisztrációs menüt és a bejelentkezési menüt. Ezeknek megfelelően szükséges az oldalon történő navigálást és megjelenést kezelni. 

  A keresés és a részletes keresés során az oldal az adatbázisban tárolt adatokat tárolt eljárások és lekérdezések segítségével szűrve kapja meg. Így a felhasználó a teljes adatbázisban vagy az adatbázis egy részhalmazában képes keresni.

  A regisztrációnál és a bejelentkezésnél az oldal szintén adatbáziskapcsolatot használ a felhasználó azonosítására vagy a felhasználói fiók létrehozására. Minden felhasználó számára egyedi azonosító(id) generálódik, amely alapján a felhasználó később azonosításra kerül. Mind a regisztráció és a bejelentkezés esetében az adatokat ellenőrizve továbbítja az oldal az adatbázis felé, ezzel elkerülve az esetleges hibák előfordulását. 

- A bejelentkezett felhasználó számára az oldalon megjelennek az új funkciók. Ilyen a felhasználói fiók szerkesztése, új hirdetés feladása, hirdetések szerkesztése, törlése, aktiválása/deaktiválása.

  A felhasználói fiók szerkesztésekor az adatbázisban a felhasználót leíró adatokat lehet megváltoztatni. Ehhez a megváltoztatni kívánt adatokat szükséges megadni. A bevitt adatok ellenőrzésre kerülnek, ezután az adatbázissal kerül kiépítésre a kapcsolat és a megadott adatok az adatbázisban is megváltoztatásra kerülnek.

  Új hirdetés feladásakor az adatbázisban egy új rekord kerül rögzítésre, amelynél egyedi azonosító(id) generálódik a hirdetés azonosítása érdekében, és a felhasználó által megadott adatok az adatbázisban rögzítésre kerülnek.

  A hirdetés szerkesztésekor, törlésekor, aktiválásakor/deaktiválásakor először az adatbáziskapcsolat megtörténik és a felhasználó azonosítója alapján megjelennek az általa feladott hirdetések. Ezután van lehetőség szerkeszteni, törölni, deaktiválni. 

  A törlés és a aktiválás/deaktiválás egy gomb segítségével történik, amelyre rákattintva a hirdetés véglegesen törlésre kerül az adatbázisból vagy a rekord aktív mezőjének értéke változik meg.

  A hirdetés szerkesztése során az oldal az adatokat ellenőrzötten továbbítja az adatbázis számára, ahol a rekord megadott adatai változnak meg. 

  

#### 4.2 Nem funkcionális követelmények 

- **Termék követelmények**
  - Az oldal a kéréseket adatbáziskapcsolat kiépítésétől függetlenül 1000ms-on belül képes végrehajtani
  - Az adatbázisban a felhasználó csak a saját adatait és a hirdetéseinek adatait képes megváltoztatni.
  - Az adatbázissal történő kommunikáció, amennyiben lehetséges tárolt eljárásokon keresztül történjen.
  - A szoftver mérete nem haladja meg az 1GB-ot.
  - Az oldal könnyen átlátható, használható minimális informatikai tudással rendelkező felhasználóknak is.
- **Szervezeti követelmények**
  - A szoftver a szerződésben meghatározott időpontig, az előzetesen meghatározott követelményeknek megfelelő állapotban átadásra kerül. Ellenkező esetben a szerződésben feltüntetett kötbér megfizetése terheli a fejlesztő céget.
  - A program az előzetesen meghatározott rendszereken használható és a megadott gépekre telepítésre kerül.
- **Külső követelmények**
  - A szoftverfejlesztő cég szakemberei és a megrendelő a kapcsolattartást az előzetesen meghatározott gyakorisággal folytatja. Amennyiben a fejlesztés előrehaladása érdekében szükséges további konzultáció, azt időpontegyeztetés után szükséges beiktatni.
  - A felhasználók nem szerezhetnek tudomást a többi felhasználó adatairól.
  - A szoftverfejlesztő cég munkatársainak a jóváhagyott etikai kódex alapján kell viselkedniük.

### 5. Funkcionális terv

A rendszerünkben két csoportot különböztetünk meg. Az egyik csoport az ügyfelek, akik ingatlant szeretnének vásárolni vagy eladni, esetleg képben lenni a piacon történő változásokkal, helyzetekkel. Másik nagy csoport az ingatlanokat kezelő munkatársak, akik ebben segítséget nyújtanak az ügyfeleknek. Értelemszerűen az utóbbi csoport nagyobb fehasználó jogosultságokkal rendelkezik, például felülbírálhatja az ügyfél által feltöltött ingatlan adatait, illetve törölheti akár az ügyfelet vagy ingatlant is. 

Rendszerhasználati esetek és lefutásaik

![Új felhasználó regisztrálása](https://user-images.githubusercontent.com/85190682/140087790-d90ae4ae-7918-465e-b640-c00a53b16d10.jpg)
![Új ingatlan hozzáadása](https://user-images.githubusercontent.com/85190682/140299716-58216d86-0968-4fba-8301-49c41b862e16.jpg)
![felhasználó törlése](https://user-images.githubusercontent.com/85190682/140299917-564ae66d-83b3-466b-9ee4-de422925c225.jpg)
![ingatlan törlése](https://user-images.githubusercontent.com/85190682/140299960-950a32e4-b3b2-4493-bd03-48cb563a3f97.jpg)
![Keresés1](https://user-images.githubusercontent.com/85190682/140299989-5f71b059-37d4-4a6d-be04-aea91f1d99d7.jpg)

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

A domain modell a projekt scopejába tartozó feladatokat, eseményeket foglalja össze egyszerű, követhető formában. 

A projekt során létrehozandó adatbázisnak szükséges tárolnia az ingatlanközvetítőnél dolgozó munkatársak adatait. A projektben létrehozandó weboldalon lehetőség van a regisztrált felhasználóknak új hirdetést feladni, a hirdetéshez minden esetben az ingatlanközvetítő iroda egyik saját munkatársát fogja rendelni. A hirdetésekben kötelező megadni az ingatlan egyes tulajdonságait, míg más tulajdonságok megadása opcionális. A regsiztrált felhasználók böngészhetik a feladott hirdetéseket és kapcsolatba léphetnek a hirdetéshez tartozó ingatlanossal további egyeztetés céljából.

![domain model v2](https://user-images.githubusercontent.com/85219194/140760457-70fbff6b-8f4e-492f-9a9c-6013ec4ac46b.JPG)



### 8. Architekturális terv

A rendszer működéséhez szükség van egy adatbázis szerverre. Erre a célra egy MySql adatbázis lett létrehozva. A weboldal és az adatbázis közötti kommunikáció PDO segítségével történik.

A rendszer könnyen bővíthető a felhasználók, adminok általi hirdetésfeladással, valamint a működés tekintetében is könnyen lehet fejleszteni. 

A rendszer biztonsági funkciójaihoz tartozik az, hogy a weboldal rendelkezik adminisztrációs fiókkal. Az admin fiókból lehetséges kezelni a felhasználók hirdetéseit.



### 9. Adatbázisterv

A relációs adatmodell a csillagséma szabályai szerint került kialakításra. Az adatbázis modellt nagyobb felbontásban a Rendszerterv mellékleteiként feltöltött fájlban lehet megtekinteni.

![DATABASE_MODELL_V4](https://user-images.githubusercontent.com/85219194/140757623-0b479b3c-7d5b-4b2d-956a-9d49ae3a5585.JPG)


### 10. Implementációs terv

A webszerveren futó PHP kód valósítja meg az üzleti logikát, az ebbe integrált HTML pedig a kliens oldalon megjelenő felhasználói felületért felel. Külön CSS és Javascript fájl gondoskodik a dizájnról és az oldal bizonyos funkcióiról. Az adatbázis elérését a PHP kódba integrált REST szolgáltatások valósítják meg.

### 11. Tesztterv

A tesztelés során törekszünk a Funkcionális Specifikációban elfogadott követelménylista alapján összeállítani a teszteseteket, és a meghatározott követlemények tesztelését a lehet legteljeskörűbben igyekszünk lefedni. 

A tesztelést a fejlesztésben is részt vevő projektmunkatársak végzik.A tesztelés eredményeit a tesztjegyzőkönyvben szükséges dokumentálni minden tesztesethez kapcsolódóan külön. A tesztjegyzőkönyv sablonja a Rendszerterv mellékletei közül tölthető le.

![image](https://user-images.githubusercontent.com/85219194/140758053-a242a1e4-5a8b-4bbd-94c5-31ee5aa3607b.png)

A tesztelés a fejlesztés során is használt környezeten történik. XAMPP (Apache webszerver). A fejlesztői teszteket a programozás során a programozó automatikusan elvégzi, erről külön tesztjegyzőkönyv készítésére nincs szükség. A prototípus teszteket, integrációs teszteket a projektmunkatársak a megadott feladatleosztás szerint végzik el, és az eredményt minden esetben dokumentálják a megadott tesztejegyzőkönv sablon kitöltésével.

#### 11.1. Tesztesetek a megadott követelménylista alapján

| Teszteset száma | Teszteset leírása | Elvárt eredmény |
|:---------------:|:-----------------:|-----------------|
|1.1.|Navigálás az oldal menüpontjai között|Minden menüpont a helyes aloldara mutasson, a navigáció során hibaüzenet ne jelenjen meg|
|1.2.|Halvány, kellemes színek a weboldalon|A megrendelő által elvárt kinézete legyen az oldalnak|
|1.3.|Ingatlan hirdetések lista nézetben|A hirdetések lista nézetben, egymás alatt, görgethetően jelenjenek meg|
|2.1.|A hirdetések adatai relációs adatbázisban legyenek tárolva|A Rendszertervben megadott adatmodellben kerüljenek tárolásra az adatok|
|2.2.|A hirdetések adatai relációs adatbázisban legyenek tárolva - új hirdetés|Új hirdetések adatai beíródjanak az adattáblákba|
|3.1.|Papír alapú nyilvántartás átkerüljön az adatbázisba|Őstöltéssel kerüljenek be az ingatlaniroda adatai a relációs adattáblákba|
|4.1.|Regisztráció - sikeres|Új felhasználó létrehozása helyes adatokkal sikeres legyen|
|4.2.|Regisztráció - sikertelen|Új felhasználó létrehozása helytelen/hiányos adatokkal hibaüzenetre fusson|
|5.1.|Profilba belépés - sikeres|Helyesen megadott bejelentkezési adatok után sikeresen be lehessen lépni a saját Profil oldalra|
|5.2.|Profilba belépés - sikertelen|Helytelen felhasználónév esetén hibaüzenetet adjon|
|5.3.|Profilba belépés - sikertelen|Helytelen jelszó esetén hibaüzenetet adjon|
|6.1.|Hirdetés feladása - kötelezően töltendő adatok|A kötelezően töltendő adatokkal együtt fogadja csak el a hirdetésfeladást|
|6.2.|Hirdetés feladása - képfeltöltés|Képfeltöltés és képaláírás megfelelően megjelenjen a hirdetés oldalán|
|7.1.|Saját hirdetés törlése |Saját profilon belül lehessen törölni a hirdetést, utána ne lehessen ezt visszaállítani|
|7.2.|Saját hirdetés inaktiválása |Saját profilon belül lehessen inaktiválni a hirdetést, utána vissza lehessen ezt állítani|
|8.1.|Aktív hirdetések keresése|Aktív hirdetések között a kereső felhozza a keresési feltételeknek megfelelő hirdetéseket|
|8.2.|Aktív hirdetések keresése - sikertelen |Ha nincs a keresési feltételeknek megfelelő hirdetés, akkor hibaüzenetet hozzon fel az oldal|
|9.1.|Hirdetés részleteinek megtekintése|A hirdetés listában egy hirdetésre kattintva új oldalon megjelenjen a hirdetés részletei|
|9.2.|Hirdetés részleteinek megtekintése - képek|A hirdetés listában egy hirdetésre kattintva új oldalon megjelenjen a hirdetés részletei, a képek megfelelően megjelenítve|
|10.1.|Hirdetés feladása - sikertelen|Helytelen, hiányos feltöltést ne fogadjon el az oldal|

#### 11.2. Egyéb teszteseket

- 11.1. Terheléses teszt
- 11.2. Biztonsági teszt a szenzitív adatok tárolására


### 12. Telepítési terv

Szerver oldalon szükség lesz egy Apache/PHP/MySQL hármast támogató tárhelyre. Ennek birtokában FTP kapcsolaton keresztül feltölthetők a weboldalhoz tartozó fájlok.

Kliens oldalon mindössze egy modern böngésző telepítése szükségeltetik egy kellőképpen erős, és megfelelő interneteléréssel rendelkező eszközre.

### 13. Karbantartási terv

A karbantartás magába foglalja a weboldalon tapasztalt hibák kijavítását és az esetleges megváltozott megrendelői igények kielégítését. A hibák kijavítása preferenciát élvez, az új igények implementálása viszont a feladat nagyságától, illetve az aktuális szabad kapacitástól függően több hetet is igénybe vehet.

Ide tartozik még az adatbázis szerver felügyelete, egyrészt az adatok védelme érdekében, másrészt a túlterhelés azonnali észlelése végett. Ügyelni kell tehát a szerver folyamatos monitorozására.
