
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Book
                    <small style='font-size: 20px;'>Edit</small>
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
