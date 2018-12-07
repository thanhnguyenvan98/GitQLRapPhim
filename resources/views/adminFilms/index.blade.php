@extends('adminlayout.layout')

@section('main')

<div class="right_col" role="main">
  <h3 style="color: blue">
    <?php 
      if (session('message')) {
        echo session('message');
      }
    ?>
  </h3>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>List Film</h3>
                <a href="{{route('getFilmCreate')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Create</a>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix">
              
              
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Films</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div>
                      <center>
                        <?php
                          if (session('error')) {
                            echo '<h3 style="text-align: center; color: red">Lỗi</h3>';
                            echo '<p style="color : red">'.session('error').'</p>';
                          }
                          if (session('messagexoa')) {
                            echo '<p style="color : red">'.session('messagexoa').'</p>';
                          }
                        ?>
                      </center>
                    </div>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 10%">#</th>
                          <th style="width: 20%">Name</th>
                          <th>Production company</th>
                          <th>Date show</th>
                          <th>Status</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          //$films = (array)$data;
                          if(count($films)>0)
                            foreach ($films as $film):
                        ?>
                        <tr>
                          <td><?php echo $film->id_film; ?></td>
                          <td>
                            <a><?php echo $film->name; ?></a>
                            <br />
                            <small>Create at: <?php echo $film->date; ?></small>
                          </td>
                          <td>
                            <?php echo $film->production_company?>
                          </td>
                          <td>
                            <?php echo $film->date?></p>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs" <?php if ($film->status != 1)  {
                              echo "style = 'background-color: #d9534f ;'";
                            } ?> ><?php if($film->status == 1) echo "On";
                            else echo "Off";
                             ?></button>
                          </td>
                          <div class="modal fade" id="exampleModal{{$film->id_film}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  Bạn có chắc chắn muốn xóa không ?
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-xs" data-dismiss="modal"> No </button>
                                  <a href="filmDelete/<?php echo $film->id_film; ?>" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Delete </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <td>
                            <a href="filmInfor/<?php echo $film->id_film; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="filmEdit/<?php echo $film->id_film; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            
                            <button type="button" class="btn btn-primary btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal{{$film->id_film}}"><i class="fa fa-trash-o"></i>Delete</button>
                          </td>
                          
                        </tr>
                        <?php
                          endforeach;
                        ?>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
