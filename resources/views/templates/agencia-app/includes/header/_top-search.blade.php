<div class="header-search-wrapper novis_search">
   <div class="header-serach-menu">
      <div class="custom-switcher fl-wrap">
         <div class="fieldset fl-wrap">
            <input type="radio" name="duration-1" id="buy_sw" class="tariff-toggle" checked />
            <label for="buy_sw">Comprar</label>
            <input type="radio" name="duration-1" class="tariff-toggle" id="rent_sw" />
            <label for="rent_sw" class="lss_lb">Rentar</label>
            <span class="switch color-bg"></span>
         </div>
      </div>
   </div>
   <div class="custom-form">
      <form method="post" name="registerform">
         <label>Destinación actual </label>
         <select data-placeholder="Categories" class="form-control">
            <option>Todas las destinaciones</option>
            <option>Comercial</option>
            <option>Espacio público</option>
            <option>Residencial</option>
            <option>Servicios</option>
         </select>
         <label class="mt-3">Comuna </label>
         <select data-placeholder="Comuna" name="commune_search" class="form-control">
            <option>Todas las comunas</option>
            <option value="19">Altavista</option>
            <option value="4">Aranjuez</option>
            <option value="16">Belén</option>
            <option value="9">Buenos Aires</option>
            <option value="5">Castilla</option>
            <option value="6">Doce de octubre</option>
            <option value="15">Guayabal</option>
            <option value="12">La América</option>
            <option value="10">La Candelaria</option>
            <option value="11">Laureles Estadio</option>
            <option value="3">Manrique</option>
            <option value="17">Palmitas</option>
            <option value="14">Poblado</option>
            <option value="1">Popular</option>
            <option value="7">Robledo</option>
            <option value="20">San Antonio de Prado</option>
            <option value="18">San Cristóbal</option>
            <option value="13">San Javier</option>
            <option value="2">Santa Cruz</option>
            <option value="21">Santa Elena</option>
            <option value="8">Villa Hermosa</option>
         </select>
         
         <label style="margin-top: 10px;">Avalúo máximo</label>
         <div class="price-rage-item fl-wrap">
            <input type="text" class="price-range" data-min="500000" data-max="1000000000" name="price-range1" data-step="1" value="1" data-prefix="$" />
         </div>
         <button type="button" class="btn float-btn color-bg"><i class="fal fa-search"></i> Buscar</button>
      </form>
   </div>
</div>