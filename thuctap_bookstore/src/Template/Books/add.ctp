<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<!-- <div class="books form large-9 medium-8 columns content">
    <?= $this->Form->create($book) ?>
    <fieldset>
        <legend><?= __('Add Book') ?></legend>
        <?php
        echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Book
                    <small style='font-size: 20px;'>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <?= $this->Form->create($book,['enctype'=>'multipart/form-data','method'=>'POST']) ?>
                <div class="form-group">
                    <p><label>&nbsp; Book name</label></p>
                    <?= $this->Form->text('name',['class'=>'form-control input-width','placeholder  '=>'Nhập tên sách']); ?>
                </div>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default','type'=>'submit']) ?>
                <?= $this->Form->button(__('Reset'),['class'=>'btn btn-default btn-mleft','type'=>'reset']) ?>
                <?= $this->Form->end() ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
