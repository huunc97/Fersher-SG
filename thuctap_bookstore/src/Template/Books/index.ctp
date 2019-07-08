
<?= $this->Flash->render() ?>
<div class="container-fluid">



  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Book Tables</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Book</h6>
  </div>
  <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col"><?= $this->Paginator->sort('id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('name') ?></th>
              <th scope="col"><?= $this->Paginator->sort('created') ?></th>
              <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
              <th scope="col" class="actions"><?= __('Actions') ?></th>
          </tr>
      </thead>
      <tfoot>
        <tr>
          <th scope="col"><?= $this->Paginator->sort('id') ?></th>
          <th scope="col"><?= $this->Paginator->sort('name') ?></th>
          <th scope="col"><?= $this->Paginator->sort('created') ?></th>
          <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
          <th scope="col" class="actions"><?= __('Actions') ?></th>
      </tr>
  </tfoot>
  <tbody>
    <?php foreach ($books as $book): ?>
      <tr>
        <td><?= $this->Number->format($book->id) ?></td>
        <td><?= h($book->name) ?></td>
        <td><?= h($book->created) ?></td>
        <td><?= h($book->modified) ?></td>
        <td class="actions">
          <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $book->id]) ?> -->
          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id]) ?>
          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure?'),'id' => 'delete']) ?>
      </td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
        <!-- <div class="paginator">
          <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
          </ul>
          <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
      </div> -->
  </div>
</div>
</div>

</div>
