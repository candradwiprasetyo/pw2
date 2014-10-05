<!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Home
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Form</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                            <?php
                            if(isset($_GET['home_id'])){
                                $query = mysql_query("select * from home where home_id = '".$_GET['home_id']."'");
                                $row = mysql_fetch_array($query);
                            }else{
                                $row['home_title'] = "";
                                 $row['home_description'] = "";
                            }
                            ?>

                             <form role="form" action="<?php if(isset($_GET['home_id']) && $_GET['home_id'] != ""){ ?>controller/home.php?act=edit&home_id=<?= $_GET['home_id'] ?><?php }else{ ?>controller/home.php?act=add<?php }?>" method="post">

                            <div class="box box-primary">
                                
                               
                                <div class="box-body">
                                    
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input required type="text" name="i_title" class="form-control" placeholder="Enter ..." value="<?= $row['home_title']?>"/>
                                        </div>
                                     

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea required class="form-control" name="i_description" rows="3" placeholder="Enter ..."><?= $row['home_description']?></textarea>
                                        </div>
                                      
                                   
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                <input class="btn btn-primary" type="submit" value="Save"/>
                                <a href="index.php?page=pages/home" class="btn btn-primary" >Close</a>
                                </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->