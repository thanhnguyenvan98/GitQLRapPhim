@extends('adminlayout.layout')

@section('main')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>List Film</h3>
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
            
            <div class="clearfix"></div>

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
                          <td>
                            <a href="filmInfor/<?php echo $film->id_film; ?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="filmEdit/<?php echo $film->id_film; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
