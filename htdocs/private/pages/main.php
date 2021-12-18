<div class="d-flex align-items-center justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10">
        <div class="display-6 mb-4 text-center">
            <p>Keresse meg álmai ingatlanát</p>
        </div>
        <form action="" method="post">
            <div class="d-flex align-items-center justify-content-center">
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
                <div class="row col-lg-2 text-center h5 p-2">
                    <div class="form-check">
                        <input type="radio" name="for_sale_or_to_rent" id="for_sale_or_to_rent" value="for_sale" checked>
                        <label class="form-check-label" for="for_sale_or_to_rent">Eladó</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="for_sale_or_to_rent" id="for_sale_or_to_rent" value="to_rent">
                        <label class="form-check-label" for="for_sale_or_to_rent">Kiadó</label>
                    </div>
                </div>
                <div class="form-group h5 col-lg-3 p-2">
                    <input class="form-control" type="text" id="location" name="location" placeholder="Település" required>
                </div>
                <div class="form-group h5 col-lg-3 p-2">
                    <input class="form-control" type="text" id="price" name="price" placeholder="Ár">
                </div>
                <input class="btn btn-primary btn-md h5 col-lg-2 p-2" name="submit" id="submit" type="submit" value="Keresés">
            </div>
        </form>
    </div>
</div>