<div class="row">
    <form class="mt-5 d-flex justify-content-center d-flex align-items-center" action="helpers/buscar.php" method="POST">
        <div class="col-md-5 d-flex justify-content-evenly">
            <label for="busqueda" class="mx-3 fw-bold fs-2">Buscar:</label>
            <input type="text" class="form-control form-control-lg fs-2" id="busqueda" name="producto" placeholder="producto" required>
            <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="categoria" required>
                <option selected disabled>Seleciona categoria</option>
                <option value="playeras">Playeras</option>
                <option value="sudaderas">Sudaderas</option>
            </select>
            <button type="submit" class="btn btn-primary ms-3 btn-lg fs-3">Buscar</button>
        </div>
    </form>
</div>