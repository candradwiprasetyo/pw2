  <section class="content-header">
                    <h1>
                        Home
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                      
                        <li class="active">Data</li>
                    </ol>
                </section>

                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                               
                                                <th width="20%">Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = mysql_query("select * from home");
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?= $row['home_title']?></td>
                                                <td><?= $row['home_description']?></td>
                                               
                                                <td style="text-align:center;">
                                                    <a href="index.php?page=pages/home_form&home_id=<?= $row['home_id']?>" class="btn btn-primary" >Edit</a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['home_id']; ?>,'controller/home.php?act=delete&home_id=')" class="btn btn-primary" >Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <th><a href="index.php?page=pages/home_form" class="btn btn-primary btn-lg" >Add</a></th>
                                                <th>&nbsp;</th>
                                                
                                                <th>&nbsp;</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>



               
                    <div class="row">
                        <div class="col-xs-6">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                               
                                                <th width="20%">Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for($i=0; $i<=5; $i++){
                                            ?>
                                            <tr>
                                                <td>asf</td>
                                                <td>asf</td>
                                               
                                                <td style="text-align:center;">
                                                    <a href="index.php?page=pages/home_form&home_id=<?= $row['home_id']?>" class="btn btn-primary" >Edit</a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['home_id']; ?>,'controller/home.php?act=delete&home_id=')" class="btn btn-primary" >Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <th><a href="index.php?page=pages/home_form" class="btn btn-primary btn-lg" >Add</a></th>
                                                <th>&nbsp;</th>
                                                
                                                <th>&nbsp;</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>

                        <div class="col-xs-6">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                               
                                                <th width="20%">Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for($i=0; $i<=5; $i++){
                                            ?>
                                            <tr>
                                                <td>asf</td>
                                                <td>asf</td>
                                               
                                                <td style="text-align:center;">
                                                    <a href="index.php?page=pages/home_form&home_id=<?= $row['home_id']?>" class="btn btn-primary" >Edit</a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['home_id']; ?>,'controller/home.php?act=delete&home_id=')" class="btn btn-primary" >Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <th><a href="index.php?page=pages/home_form" class="btn btn-primary btn-lg" >Add</a></th>
                                                <th>&nbsp;</th>
                                                
                                                <th>&nbsp;</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        
                    </div>




                </section><!-- /.content -->