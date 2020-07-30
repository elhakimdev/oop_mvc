<div class="container mt-3">
    <div class="row">
        <div class="col-6">
        <?php foreach ($data['Example'] as $data):?>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $data['nama'];?>
                    <span class="badge badge-primary badge-pill">DETAIL</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $data['npm'];?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $data['email'];?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $data['fakultas'];?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $data['prodi'];?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $data['universitas'];?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $data['angkatan'];?>
                </li>
            </ul>
            <BR></BR>
        <?php endforeach;?>
        </div>
    </div>
</div>