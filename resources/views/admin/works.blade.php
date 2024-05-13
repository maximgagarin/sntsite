

    <div class="row mt-5">
        <h4>Загрузить выполненные работы</h4>

        <div class="col-5">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01" name="imgfile">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nameFile" name="fileName">
                </div>
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </form>
        </div>
    </div>




