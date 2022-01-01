<form action="" method="post" class="col-lg-3 col-md-4 col-sm-6 mx-auto">
  <fieldset>
    <legend class="display-6 mb-4">Hirdetés feladása</legend>
    <br>
    <div class="form-group h5">
      <label class="p-2" for="település">*Település:</label><br>
      <input class="form-control" type="text" id="település" name="település" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="utca">*Utca:</label><br>
      <input class="form-control mb-3" type="text" id="utca" name="utca" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="házszám">*Házszám:</label><br>
      <input class="form-control" type="number" id="házszám" name="házszám" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="hszám">*Helyrajzi szám:</label><br>
      <input class="form-control" type="number" id="hszám" name="hszám">
    </div>
    <legend class="display-6 mb-4">Ingatlan jellemzői</legend>
    <br>
    <div class="form-group h5">
      <label class="p-2" for="price">*Ingatlan ára:</label><br>
      <input class="form-control" type="number" id="price" name="price" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="number_floor">*Szintek száma:</label><br>
      <input class="form-control mb-3" type="number" id="number_floor" name="number_floor" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="price">*Szobák átlagos mérete:</label><br>
      <input class="form-control" type="number" id="avg_size" name="avg_size" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="price">*Ingatlan területe:</label><br>
      <input class="form-control" type="number" id="property_size" name="property_size" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="price">*Szobák száma:</label><br>
      <input class="form-control" type="number" id="number_rooms" name="number_rooms" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="price">*Félszobák száma:</label><br>
      <input class="form-control" type="number" id="number_halfrooms" name="number_halfrooms" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="price">*Fürdőszobák száma:</label><br>
      <input class="form-control" type="number" id="number_bathrooms" name="number_bathrooms" required>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="price">*Telek mérete:</label><br>
      <input class="form-control" type="number" id="size_plot" name="size_plot" required>
    </div>
    <form action="http://localhost/AFP2021-1-LB-D-csoport/htdocs/index.php?p=real-estates&m=enlist" method="post">
    <div class="form-group h5">
      <label class="p-2" for="hszám">*Ingatlan típusa:</label><br> 
    </div>     
    <div class="form-group h5 col-lg-2 p-2">
                    <select id="property_type" name="property_type" class="p-1">
                    <option selected>Ház</option>
                    <option>Lakás</option>
                    <option>Nyaraló</option>
                    <option>Garázs</option>
                    <option>Iroda</option>
                    <option>Üzlethelyiség</option>
                    <option>Raktár</option>
                    </select>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="hszám">*Ingatlan építőanyagának típusa:</label><br> 
    </div>     
    <div class="form-group h5 col-lg-2 p-2">
                    <select id="property_subtype" name="property_subtype" class="p-1">
                    <option selected>Tégla</option>
                    <option>Vályog</option>
                    <option>Panel</option>
                    <option>Lemez</option>
                    <option>Csúsztatott zsalus</option>
                    <option>Vert falas</option>
                    <option>Vegyes</option>
                    </select>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="hszám">*Ingatlan állapota:</label><br> 
    </div> 
    <div class="form-group h5 col-lg-2 p-2">
                    <select id="property_condition" name="property_condition" class="p-1">
                    <option selected>Újépítésű</option>
                    <option>Felújítandó</option>
                    <option>Felújított</option>
                    <option>Közepes állapotú</option>
                    <option>Befejezetlen</option>
                    <option>Újszerű</option>
                    <option>közepes állapotú</option>
                    </select>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="hszám">*Ingatlan tájolása:</label><br> 
    </div> 
    <div class="form-group h5 col-lg-2 p-2">
                    <select id="property_orient" name="property_orient" class="p-1">
                    <option selected>Észak</option>
                    <option>Dél</option>
                    <option>Kelet</option>
                    <option>Nyugat</option>
                    <option>Dél-Nyugat</option>
                    <option>Dél-Kelet</option>
                    <option>Észak-Nyugat</option>
                    <option>Észak-Kelet</option>
                    </select>
    </div>

    <div class="form-group h5">
      <label class="p-2" for="hszám">*Fűtés típusa:</label><br> 
    </div> 
    <div class="form-group h5 col-lg-2 p-2">
                    <select id="property_heat" name="property_heat" class="p-1">
                    <option selected>Távhő</option>
                    <option>Vegyestüzelésű</option>
                    <option>Gáz(cirkó)</option>
                    <option>Gáz(konvektor)</option>
                    <option>Elektromos</option>
                    <option>Távfűtés</option>
                    <option>Hőszivattyú</option>
                    <option>Cserépkályha</option>
                    </select>
    </div>
    <div class="form-group h5">
      <label class="p-2" for="hszám">*Ingatlan komforszintje:</label><br> 
    </div> 
    <div class="form-group h5 col-lg-2 p-2">
                    <select id="property_comf" name="property_comf" class="p-1">
                    <option selected>Összkomfortos</option>
                    <option>Luxus</option>
                    <option>Duplakomfortos</option>
                    <option>Félkomfortos</option>
                    <option>Komfortos</option>
                    <option>Komfort nélküli</option>
                    
                    </select>
    </div>

    <div class="form-group h5">
      <label class="p-2" for="number_floor">*Rendelkezik pincével?:</label><br>
    </div>
    <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="van_pince vagy nincs" id="van_pince vagy nincs" value="for_sale" checked>
                        <label class="form-check-label" for="for_sale_or_to_rent">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="van_pince vagy nincs" id="van_pince vagy nincs" value="to_rent">
                        <label class="form-check-label" for="van_pince vagy nincs">Igen</label>
                    </div>
    </div>
    <div class="form-group h5">
    <label class="p-2" for="number_floor">*Rendelkezik kilátással?</label><br>
    </div>
    <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="" id="view_or_not" value="no" checked>
                        <label class="form-check-label" for="view_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="view_or_not" id="view_or_not" value="yes">
                        <label class="form-check-label" for="view_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
      <label class="p-2" for="number_floor">*Rendelkezik kerttel?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="garden_or_not" id="garden_or_not" value="no" checked>
                        <label class="form-check-label" for="garden_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="garden_or_not" id="garden_or_not" value="yes">
                        <label class="form-check-label" for="garden_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
      <label class="p-2" for="number_floor">*Rendelkezik lifttel?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="elevator_or_not" id="elevator_or_not" value="no" checked>
                        <label class="form-check-label" for="elevator_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="elevator_or_not" id="elevator_or_not" value="yes">
                        <label class="form-check-label" for="elevator_or_not">Igen</label>
                    </div>
     </div>

     <div class="form-group h5">
      <label class="p-2" for="number_floor">*Rendelkezik parkolóval?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="parking_or_not" id="parking_or_not" value="no" checked>
                        <label class="form-check-label" for="parking_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="parking_or_not" id="parking_or_not" value="yes">
                        <label class="form-check-label" for="parking_or_not">Igen</label>
                    </div>
     </div>

     <div class="form-group h5">
      <label class="p-2" for="number_floor">*Rendelkezik terasszal?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="balcony_or_not" id="balcony_or_not" value="no" checked>
                        <label class="form-check-label" for="balcony_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="balcony_or_not" id="balcony_or_not" value="yes">
                        <label class="form-check-label" for="balcony_or_not">Igen</label>
                    </div>
     </div>

     <div class="form-group h5">
      <label class="p-2" for="number_floor">*Mozgáskorlátozottak számára megközelíthető?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="wheelchair_or_not" id="wheelchair_or_not" value="no" checked>
                        <label class="form-check-label" for="wheelchair_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="wheelchair_or_not" id="wheelchair_or_not" value="yes">
                        <label class="form-check-label" for="wheelchair_or_not">Igen</label>
                    </div>
     </div>

     <div class="form-group h5">
      <label class="p-2" for="number_floor">*Rendelkezik légkondícionálóval?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="air_or_not" id="air_or_not" value="no" checked>
                        <label class="form-check-label" for="air_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="air_or_not" id="air_or_not" value="yes">
                        <label class="form-check-label" for="air_or_not">Igen</label>
                    </div>
     </div>

     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Rendelkezik tetőtérrel?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="attic_or_not" id="attic_or_not" value="no" checked>
                        <label class="form-check-label" for="attic_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="attic_or_not" id="attic_or_not" value="yes">
                        <label class="form-check-label" for="attic_or_not">Igen</label>
                    </div>
     </div>

     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Beépíthető a tetőtér?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="attic_build_or_not" id="attic_build_or_not" value="no" checked>
                        <label class="form-check-label" for="attic_build_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="attic_build_or_not" id="attic_build_or_not" value="yes">
                        <label class="form-check-label" for="attic_build_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Rendelkezik különálló toilettel?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="wc_or_not" id="wc_or_not" value="no" checked>
                        <label class="form-check-label" for="wc_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="wc_or_not" id="wc_or_not" value="yes">
                        <label class="form-check-label" for="wc_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Rendelkezik különálló toilettel?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="wc_or_not" id="wc_or_not" value="no" checked>
                        <label class="form-check-label" for="wc_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="wc_or_not" id="wc_or_not" value="yes">
                        <label class="form-check-label" for="wc_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Rendelkezik az ingatlan elektromos hálózattal?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="electric_or_not" id="eletric_or_not" value="no" checked>
                        <label class="form-check-label" for="electric_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="electric_or_not" id="electric_or_not" value="yes">
                        <label class="form-check-label" for="electric_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Rendelkezik az ingatlan  vízhálózattal?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="water_or_not" id="water_or_not" value="no" checked>
                        <label class="form-check-label" for="water_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="water_or_not" id="water_or_not" value="yes">
                        <label class="form-check-label" for="water_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Rendelkezik az ingatlan gázhálózattal?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="gas_or_not" id="gas_or_not" value="no" checked>
                        <label class="form-check-label" for="gas_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gas_or_not" id="gas_or_not" value="yes">
                        <label class="form-check-label" for="gas_or_not">Igen</label>
                    </div>
     </div>
     <div class="form-group h5">
     <label class="p-2" for="number_floor">*Rendelkezik az ingatlan szennyvízhálózattal?</label><br>
     </div>
     <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="pipe_or_not" id="pipe_or_not" value="no" checked>
                        <label class="form-check-label" for="pipe_or_not">Nem</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="pipe_or_not" id="pipe_or_not" value="yes">
                        <label class="form-check-label" for="pipe_or_not">Igen</label>
                    </div>
     </div>
 </fieldset>
  </br>
  <input class="btn btn-primary btn-md h5" name="submit" id="submit" type="submit" value="Küldés">
</form>
