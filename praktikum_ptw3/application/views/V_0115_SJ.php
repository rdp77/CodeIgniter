<?php $this->load->view('V_0115') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <div class="text-center">
            <h3>Select Join</h3>
        </div>
        <table class="table">
            <p></p>
            <thead>
                <tr>
                    <th class="text-center">ID Barang</th>
                    <th>Nama Pelanggan</th>
                    <th>Email</th>
                    <th>Nama Barang</th>
                    <th class="text-right">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data)) : ?>
                    <?php foreach ($data as $selectjoin) : ?>
                        <tr>
                            <td class="text-center">
                                <?= $selectjoin->id_barang ?>
                            </td>
                            <td><?= $selectjoin->nama ?></td>
                            <td><?= $selectjoin->email ?></td>
                            <td>
                                <?= $selectjoin->nama_barang ?></td>
                            <td class="text-right">
                                <?= $selectjoin->harga ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else : ?>
                    <strong>
                        ERROR
                    </strong>
                <?php endif ?>
            </tbody>

        </table>
    </div>
</div>
</div>
</div>
</div>
</section>
</body>

</html>