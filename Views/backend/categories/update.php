<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Basic Form</strong> Elements
                    </div>
                    <div class="card-body card-block">
                        <?php
                            $row = $nhomsanpham->data;
                        ?>
                        <form action="index_admin.php?module=backend&controller=category&action=updateCategory" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="id" id="id" value="<?=$id?>">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="name" value="<?=$row["name"];?>"
                                        class="form-control">
                                    <small class="form-text text-muted">This is a help text</small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="description" id="textarea-input" rows="9"
                                        class="form-control"><?=$row["description"];?></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Image</label>
                                </div>
                                <div class="col-12 col-md-9">
                                <p><img width="400px" src="./public/images/danhmuc/<?=$row["image"];?>" alt=""></p><br>
                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">ord</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text" name="ord" value="<?=$row["ord"];?>"
                                        class="form-control">
                                    <small class="form-text text-muted">Nhập số thứ tự</small>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Status</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <!-- <input type="file" id="file-input" name="image" class="form-control-file"> -->
                                    Có <input type="radio" name="status" id="r1" value="1"  <?=($row["status"]==1)?"checked":""?>> &nbsp;
                                    Không <input type="radio" name="status" id="r2" value="0"  <?=($row["status"]==0)?"checked":""?>>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name='btn-submit'>
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                            href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>