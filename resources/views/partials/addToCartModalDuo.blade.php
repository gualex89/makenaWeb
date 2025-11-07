<div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header border-0 pb-0 text-center d-block">
                <h3 class="modal-title mb-3" id="addToCartModalLabel" style="font-weight:700; font-size:1.8rem; color:#b321a6;">
                Seleccioná tus modelos
                </h3>
                <button type="button" class="close position-absolute" data-bs-dismiss="modal" aria-label="Close"
                style="right:18px; top:18px; font-size:2rem; color:#777; opacity:0.8;">
                <span class="fas fa-times" aria-hidden="true"></span>
                </button>
            </div>

            <!-- Body -->
            <div class="modal-body pt-4 pb-2 px-5">
                <div class="row gx-4 gy-4">

                <!-- Funda #1 -->
                <div class="col-md-6 text-center">
                    <h5 class="fw-bold mb-3" style="color:#b321a6;">Funda #1</h5>

                    <!-- Marca -->
                    <div class="mb-4">
                    <label for="marcasDropdown" class="form-label label-dd">Marca</label>
                    <select class="form-control form-control-lg text-center" id="marcasDropdown" name="marcas"
                        style="background:#fff; border:2px solid #ddd; border-radius:10px; color:#333;">
                        <option value="">Seleccione una marca</option>
                    </select>
                    </div>

                    <!-- Modelo -->
                    <div>
                    <label for="modelosDropdown" class="form-label label-dd">Modelo</label>
                    <select class="form-control form-control-lg text-center" id="modelosDropdown" name="modelos"
                        style="background:#fff; border:2px solid #ddd; border-radius:10px; color:#333;">
                        <option value="">Seleccione un modelo</option>
                    </select>
                    </div>
                </div>

                <!-- Funda #2 -->
                <div class="col-md-6 text-center">
                    <h5 class="fw-bold mb-3" style="color:#b321a6;">Funda #2</h5>

                    <!-- Marca -->
                    <div class="mb-4">
                    <label for="marcasDropdown2" class="form-label label-dd">Marca</label>
                    <select class="form-control form-control-lg text-center" id="marcasDropdown2" name="marcas2"
                        style="background:#fff; border:2px solid #ddd; border-radius:10px; color:#333;">
                        <option value="">Seleccione una marca</option>
                    </select>
                    </div>

                    <!-- Modelo -->
                    <div>
                    <label for="modelosDropdown2" class="form-label label-dd">Modelo</label>
                    <select class="form-control form-control-lg text-center" id="modelosDropdown2" name="modelos2"
                        style="background:#fff; border:2px solid #ddd; border-radius:10px; color:#333;">
                        <option value="">Seleccione un modelo</option>
                    </select>
                    </div>
                </div>
                </div>

                <!-- Imagen del producto -->
                <div class="text-center mt-4">
                <img src="" alt="{{ $image->nombreFundas }}" id="productImageAlcarrito"
                    style="max-width:40%; border-radius:10px;">
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
