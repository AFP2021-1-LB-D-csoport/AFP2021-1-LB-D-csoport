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

- **Az ingatlanhirdetések letisztult, egyszerű megjelenítése weblapon:**
  	Az oldalon történő navigálás az egyszerű felhasználók számára sem okoz nehézséget. A felület halvány, kellemes színekkel jelenik meg. A hirdetések alapesetben listás jelleggel jelenjenek meg. Ez a megjelenítés csupán néhány fontosabb információt tartalmazzon. 
- **Ingatlanhirdetések tárolása adatbázisban**
- **A jelenleg is aktív hirdetések átemelése a katalógusból a weblapra:**
  	A korábbi, papíralapú hirdetések áthelyezésre kerülnek az oldalra. Ebben az esetben a weblap a kezdetekben sem lesz üres.
- **Új ingatlanhirdetések feladásának lehetősége:**
  	A bejelentkezett felhasználó számára lehetőség nyílik új hirdetést feladni. A hirdetés véglegesítéséhez szükséges néhány kötelező adatot megadni(pl. ár, alapterület, ingatlan jellege, stb.), de ezeken kívül opcionális adatok is rögzíthetők(pl. kép, leírás, fűtés típusa, stb.). Amennyiben a kötelező adatok nincsenek kitöltve a rendszer hibaüzenetet küld.
- **Ingatlanhirdetés aktiválási, deaktiválási, törlési opció:**
  	A bejelentkezett, hirdetéssel rendelkező felhasználó képes a hirdetéseit menedzselni. Ha van aktív hirdetése, akkor azt lehet törölni, deaktiválni. Ha a törlés opciót választja a felhasználó, akkor a hirdetés véglegesen törölve lesz az adatbázisból is. Ammenyiben a hirdetés inaktív, akkor lehetséges azt aktiválni. Ha a hirdetés aktív, akkor a keresések eredményeként megjelenhet. Ellenkező esetben nem jelenhet meg.
- **Ingatlanok keresése szűrésekkel:**
  	Az oldalon található hirdetéseken lehet szűrést alkalmazni(pl. ár, alapterület, ingatlan jellege, stb.). Ekkor csak a megadott feltételeknek megfelelő hirdetések fognak megjelenni, ha léteznek ilyenek. Előfordulhat olyan eset, hogy nincs a keresésnek megfelelő hirdetés. Ekkor az oldalon a "Nem található a keresésnek megfelelő hirdetés." üzenet jelenik meg.
- **Ingatlan részletes leírásának megjelenítése új oldalon:**
  	A hirdetések böngészése közben az oldal lehetőséget biztosít részletes megjelenítésre is. Ez úgy valósul meg, hogy a hirdetésre kattintva az oldal egy másik lapra irányít, ahol megjelenik minden elérhető információ az adott ingatlanról.
- **Ingatlanokhoz tartozó képek feltöltésének, megjelenítésének biztosítása**
- **Bejelentkezési lehetőség:** 
  	A felhasználó a felhasználónév és jelszó pár megadásával beléphet a rendszerbe. Ha a felhasználónév vagy a jelszó helytelen, akkor az oldal üzen a felhasználónak: "Téves felhasználónév vagy jelszó."
- **Ellenőrzött regisztráció**:
  	Amennyiben a felhasználó még nem rendelkezik fiókkal, abban az esetben az "Új felhasználó létrehozása" opcióval regisztrálhat. A regisztráció során bizonyos adatok megadása kötelező. Ha ezek nincsenek kitöltve, akkor a rendszer "Sikertelen regisztráció." hibaüzenetet küld.

#### Használati esetek



#### Képernyőtervek

Belépés nélkül is meg kell jelennie az oldal valamennyi funkciójának, de annak használatát regisztrációhoz kell kötni.

Tehát a belépett és regisztráció nélküli oldal között látszólag nincs különbség.

A főoldalon az alábbi funkciók, elemek szerepeljenek:

Az oldal logója: Az oldal tetején szerepeljen, egy sávban. Rákattintva az oldal főoldala jelenik meg.

Ez alatt helyezkedik el a menüsor, ahol az alábbi lehetőségek fogadnak balról jobbra..

Ingatlanos megbízása: 

A buttonra kattintva, elnavigál egy másik oldalra, ahol ahol az iroda x ingatlanosának neve, fényképe és telefonszáma van feltüntetve.

Hitelügyintézés: Szintén a logó alatti sorban szerepeljen.

Itt is megjelenik az iroda alkalmazásában álló hitelügyintézők adatai.

Hirdetés feladása: Utolsó előtti elem.

A részletes keresőhöz hasonló oldal megjelenítése(később részletezve).

Login/regisztráció: Ezzel a lehetőséggel, jobb oldalon elhelyezve zárulnak a funkciók.

Ezen az oldalon meg kell adni egy felhasználónevet, jelszót, email címet, vezeték/keresztnevet.

Kereső: Ez foglalja el a képernyő nagyrészét, annak is a közepét, hiszen ez lesz a leggyakrabban használt funkció.

5 beviteli mező jelenjen meg(árMin, árMax, szobaSzám, lakásTerület, településNeve), illetve, két radiobutton, hogy eladó vagy kiadó ingatlant keres, illetve egy "Keresés" button.

Ez alatt helyezkedik el közvetlenül egy "Részletes kereső" button, ami a részletes kereső oldalra navigál.

Itt megjelenik a főkereső mellett egy jó pár checkbox, amit a felhasználó meg tud jelölni és ezáltal szűkíti a keresést.

Az oldal alsó részén pedig az ingatlanpiaccal kapcsolatos hírek jelennek meg forrásmegjelöléssel.

Legalul pedig a kapcsolat.



#### Forgatókönyvek

A felhasználó a főoldalon egy keresővel találkozik, ahol néhány alapdolog megadásával lekérdezhet egy listát az általa preferált ingatlanokról. A kereső alatt a legnépszerűbb házak listáját lehet megtekinteni. A kereső részt regisztráció nélkül lehet használni.

A felső navigációs sávban található egy Főoldal, egy Belépés, egy Regisztráció és egy Rólunk menüpont. A Regisztációra kattintva egy űrlap jelenik meg, amelynek értelemszerű kitöltése után a felhasználó egy megerősítő emailt kap a megadott címére. Az ebben található linkre kattintva máris bejelentkezhet az oldalra. Regisztrációnál kötelező megadni egy nevet, egy email címet és egy jelszót, továbbá opcionálisan választható a hírlevélre feliratkozás.

A Belépés pontra kattintva az email cím és a jelszó megadásával jelentkezhet be a regisztrált felhasználó. Sikeres bejelentkezés után megjelenik a felhasználónév a navigációs sáv szélén, arra rákattintva pedig szerkeszthetők a személyes adatok. Megjelenik továbbá egy Saját hirdetéseim menüpont is, ahol saját ingatlanokat hirdethetünk meg, illetve meglévő hirdetéseinket szerkeszthetjük. Hirdetésfeladásnál vannak kötelezően kitöltendő mezők (pl. település, alapterület, szobák száma,) és opcionálisan megadható jellemzők (pl. erkély, légkondicionáló, parkolás). Ezen kívül lehetőség van még fotók feltöltésére is.

A Rólunk menüpont alatt egy pár soros bemutatkozást olvashatunk az ingatlanos cégtől, alant pedig a munkatársak fotóit és az elérhetőségeket tekinthetjük meg.
