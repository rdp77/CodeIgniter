<?php $this->load->view('V_0115') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <div class="text-center">
            <h3>Select Join Where</h3>
        </div>
        <table class="table">
            <p></p>
            <thead>
                <tr>
                    <th class="text-center">ID Barang</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Email</th>
                    <th class="text-right">Nama Barang</th>
                    <th class="text-right">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data)) : ?>
                    <?php foreach ($data as $joinwhere) : ?>
                        <tr>
                            <td class="text-center">
                                <?= $joinwhere->id_barang ?>
                            </td>
                            <td>
                                <?= $joinwhere->id_pelanggan ?>
                            </td>
                            <td><?= $joinwhere->nama ?></td>
                            <td><?= $joinwhere->email ?></td>
                            <td class="text-right">
                                <?= $joinwhere->nama_barang ?></td>
                            <td class="text-right">
                                <?= $joinwhere->harga ?>
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