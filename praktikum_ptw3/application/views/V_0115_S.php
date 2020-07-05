<?php $this->load->view('V_0115') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <div class="text-center">
            <h3>Select Data</h3>
        </div>
        <table class="table">
            <p></p>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th class="text-right">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data)) : ?>
                    <?php foreach ($data as $select) : ?>
                        <tr>
                            <td>
                                <?= $select->id_pelanggan ?>
                            </td>
                            <td>
                                <?= $select->nama ?>
                            </td>
                            <td class="text-right">
                                <?= $select->email ?></td>
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