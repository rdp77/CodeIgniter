<?php $this->load->view('V_0115') ?>
<div class="mt-5 py-5 border-top text-center">
    <div class="row justify-content-center">
        <div class="text-center">
            <h3>Select SUM</h3>
        </div>
        <table class="table">
            <p></p>
            <thead>
                <tr>
                    <th class="text-center">Total Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($total)) : ?>
                    <tr>
                        <td class="text-center">
                            <?= number_format($total) ?>
                        </td>
                    </tr>
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