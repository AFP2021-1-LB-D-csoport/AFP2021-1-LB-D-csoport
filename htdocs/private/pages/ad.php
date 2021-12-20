<<<<<<< HEAD
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
 </fieldset>
  </br>
  <input class="btn btn-primary btn-md h5" name="submit" id="submit" type="submit" value="Küldés">
</form>
=======
<!DOCTYPE html>
<html>

    <head></head>
        <body>

        <form action ="" method="post">
           Telepules: <input type = "text" name="varos"/><br/> <br/>
           Utca <input type = "text" name="hazszam"/> <br/> <br/>
           Hazszam <input type = "text" name="utca"/><br/> <br/>
           Helyrajzi szam <input type = "text" name="utca"/><br/> <br/>
            <input type = "submit" value="Kuldd!"/>
        </form>
        </body>

</html>
<?php
?>
>>>>>>> a717f7a88cf3a10957f971debda52f75bc46b994
