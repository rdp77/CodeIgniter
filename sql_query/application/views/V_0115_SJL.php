<?php $this->load->view('V_0115') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <div class="text-center">
            <h3>Select Join Like</h3>
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
                    <?php foreach ($data as $joinwherelike) : ?>
                        <tr>
                            <td class="text-center">
                                <?= $joinwherelike->id_barang ?>
                            </td>
                            <td>
                                <?= $joinwherelike->id_pelanggan ?>
                            </td>
                            <td><?= $joinwherelike->nama ?></td>
                            <td><?= $joinwherelike->email ?></td>
                            <td class="text-right">
                                <?= $joinwherelike->nama_barang ?></td>
                            <td class="text-right">
                                <?= number_format($joinwherelike->harga) ?>
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