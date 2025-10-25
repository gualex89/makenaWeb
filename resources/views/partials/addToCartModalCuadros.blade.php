<div class="modal fade" id="addToCartModalCuadros" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        
        <!-- Header -->
        <div class="modal-header border-0 pb-0 text-center d-block">
            <h3 class="modal-title mb-3" id="addToCartModalLabel" style="font-weight:700; font-size:1.8rem; color:#b321a6;">
            Seleccioná tu modelo
            </h3>
            <button type="button" class="close position-absolute" data-bs-dismiss="modal" aria-label="Close" style="right:18px; top:18px; font-size:2rem; color:#777; opacity:0.8;">
            <span class="fas fa-times" aria-hidden="true"></span>
            </button>
        </div>

        <!-- Body -->
        <div class="modal-body pt-4 pb-2 px-5">
            <div class="row">
            
            <!-- Marca -->
            <div class="col-md-6 mb-4">
                <label for="colganteDropdown" class="form-label label-dd">Tamaño</label>
                <select class="form-control form-control-lg" id="colganteDropdown" name="marcas"
                style="background:#fff; border:2px solid #ddd; border-radius:10px; color:#333;">
                <option value="">Seleccione una marca</option>
                <option value="basic">Basic 20x30cm</option>
                <option value="standard">Standard 30x40cm</option>
                <option value="epic">Epic 40x60cm</option>
                </select>
            </div>

            <!-- Modelo -->
            <div class="col-md-6 mb-4">
                <label for="tamanoDropdown" class="form-label label-dd">Colgante</label>
                <select class="form-control form-control-lg" id="tamanoDropdown" name="modelos"
                style="background:#fff; border:2px solid #ddd; border-radius:10px; color:#333;">
                <option value="">Seleccione un modelo</option>
                <option value="hook">Hook</option>
                <option value="iman">Iman</option>
                </select>
            </div>

            </div>
        </div>

        <!-- Footer -->
        <div class="modal-footer border-0 pb-4 pt-2 px-5">
            <button type="button" id="addToCartModalOkButton" class="btn w-100"
            style="background-color:#b321a6; color:white; font-weight:600; font-size:1.2rem; padding:14px; border-radius:10px; border:none; transition:all 0.3s;"
            disabled>
            <i class="fas fa-shopping-cart mr-2"></i> Agregar al carrito
            </button>
        </div>

        </div>
    </div>
</div>