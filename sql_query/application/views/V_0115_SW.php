<?php $this->load->view('V_0115') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <div class="text-center">
            <h3>Select Data Where</h3>
        </div>
        <table class="table">
            <p></p>
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th>Nama</th>
                    <th class="text-right">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data)) : ?>
                    <?php foreach ($data as $selectwhere) : ?>
                        <tr>
                            <td class="text-center">
                                <?= $selectwhere->id_pelanggan ?>
                            </td>
                            <td>
                                <?= $selectwhere->nama ?>
                            </td>
                            <td class="text-right">
                                <?= $selectwhere->email ?>
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