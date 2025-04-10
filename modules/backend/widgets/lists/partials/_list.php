<div class="control-list list-scrollable" data-control="listwidget">
    <table class="table data" data-control="rowlink">
        <thead>
            <?php if ($showTotals): ?>
                <?= $this->makePartial('list_totals') ?>
            <?php endif; ?>
            <?= $this->makePartial('list_head_row') ?>
        </thead>
        <tbody>
            <?php if (count($records)): ?>
                <?= $this->makePartial('list_body_rows') ?>
            <?php else: ?>
                <tr class="no-data">
                    <td colspan="<?= $columnTotal ?>" class="nolink">
                        <p class="no-data"><?= $noRecordsMessage ?></p>
                    </td>
                </tr>
            <?php endif ?>
        </tbody>
        <?php if ($showTotals): ?>
            <tfoot>
                <?= $this->makePartial('list_totals') ?>
            </tfoot>
        <?php endif; ?>
    </table>
    <?php if ($showPagination): ?>
        <div class="list-footer">
            <div class="list-pagination">
                <?php if ($showPageNumbers): ?>
                    <?= $this->makePartial('list_pagination') ?>
                <?php else: ?>
                    <?= $this->makePartial('list_pagination_simple') ?>
                <?php endif ?>
            </div>
        </div>
    <?php endif ?>
</div>
