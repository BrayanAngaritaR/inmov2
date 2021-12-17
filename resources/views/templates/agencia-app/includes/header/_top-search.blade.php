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
         <label>Comuna </label>
         <select data-placeholder="Comuna" class="chosen-select on-radius no-search-select">
            <option>Todas las comunas</option>
            <option>Popular 1</option>
            <option>Aranjuez</option>
         </select>
         <label>Destinación actual</label>
         <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
            <option>Todas las destinaciones</option>
            <option>Comercial</option>
            <option>Espacio público</option>
            <option>Residencial</option>
            <option>Servicios</option>
         </select>
         <label style="margin-top: 10px;">Avalúo máximo</label>
         <div class="price-rage-item fl-wrap">
            <input type="text" class="price-range" data-min="500000" data-max="10000000" name="price-range1" data-step="1" value="1" data-prefix="$" />
         </div>
         <button type="button" class="btn float-btn color-bg"><i class="fal fa-search"></i> Buscar</button>
      </form>
   </div>
</div>