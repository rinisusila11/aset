@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
<div class="section-header">
    <h1>Dashboard</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item ">Data</a></div>
      </div>    
  </div>   

  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <a href="../opd/index.blade.php"><i class="fas fa-users"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Operator Perangkat Daerah</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
        
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                <a class="nav-link" href="{{ route('admin.users') }}"><i class="fas fa-layer-group"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jenis Aset</h4>
                  </div>
                  <div class="card-body">
                  10
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                <a class="nav-link" href="{{ route('admin.users') }}"> <i class="	fas fa-database"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                  <h4>Aset TIK</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
</div>

<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                <a class="nav-link" href="{{ route('admin.users') }}"><i class="fas fa-map-marked-alt"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Lokasi Aset</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                <a class="nav-link" href="{{ route('admin.users') }}"> <i class="	fas fa-cogs"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Maintainance</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
</div>

 
<!-- OPD -->
    <!-- index -->

    <div class="section-header">
        <h1>Operator Perangkat Daerah</h1> 
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="dashboard">Operator Perangkat Daerah</a></div>
            <div class="breadcrumb-item active" aria-current="page">Data</div>
          </div>  
    </div>  

      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header"><hr>
              <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a>
            </div>
                
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID OPD</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Action</th>                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td>opd1</td>
                    <td>admin</td>
                     <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
              </tbody>
            </table>
        </div>
        
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>


 <!-- Tmbah -->

      <div class="section-header">
          <h1>Operator Perangkat Daerah</h1> 
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="dashboard">Operator Perangkat Daerah</a></div>
              <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
            </div>  
      </div> 

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
          
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>
                  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!-- Edit -->


      <div class="section-header">
          <h1>Operator Perangkat Daerah</h1> 
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="dashboard">Operator Perangkat Daerah</a></div>
              <div class="breadcrumb-item active" aria-current="page">Update Data</div>
            </div>  
      </div> 

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
          
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>
                  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>






<!-- Jenis Aset -->
    <!-- index -->

    <div class="section-header">
    <h1>Jenis Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Jenis Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data </div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header"><hr>
              <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a>
            </div>
                
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID Jenis</th>
                  <th scope="col">Jenis Aset</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Action</th>                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td>jns1</td>
                    <td>Hardware</td>
                    <td>tersedia</td>
                     <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                    <td>jns2</td>
                    <td>Software</td>
                    <td>tersedia</td>
                     <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>


<!-- Tmbah -->

<div class="section-header">
    <h1>Jenis Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Jenis Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
      </div>  
    </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Jenis</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
          
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    </div>
                  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <!-- Edit -->

<div class="section-header">
    <h1>Jenis Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Jenis Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Update Data</div>
      </div>  
    </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Jenis</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
          
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    </div>
                  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            






<!-- 
Aset TIK
index -->


<div class="section-header">
    <h1>Aset TIK</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Aset TIK</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data</div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header"><hr>
              <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a>
            </div>
                
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID Aset</th>
                  <th scope="col">ID Jenis</th>
                  <th scope="col">ID OPD</th>
                  <th scope="col">Nama Aset</th>
                  <th scope="col">Type/Model</th>
                  <th scope="col">Merk</th>
                  <th scope="col">Seri</th>
                  <th scope="col">Tanggal Beli</th>
                  <th scope="col">Harga Beli</th>
                  <th scope="col">Tanggal Garansi</th>             
                  <th scope="col">ActionActionActionAcactiontion</th>                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td width="200 px">ast1</td>
                    <td>jns1</td>
                    <td>opd1</td>
                    <td>Router</td>
                    <td>v12</td>
                    <td>tp-ink</td>
                    <td>12332</td>
                    <td>25 April 2022</td>
                    <td>Rp.300.000</td>
                    <td>25 Agustus 2022</td>
                    <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                    <td>ast1</td>
                    <td>jns1</td>
                    <td>opd1</td>
                    <td>Router</td>
                    <td>v12</td>
                    <td>tp-ink</td>
                    <td>12332</td>
                    <td>25 April 2022</td>
                    <td>Rp.300.000</td>
                    <td>25 Agustus 2022</td>
                    <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>


<!-- tambah -->

<div class="section-header">
    <h1>Aset TIK</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Aset TIK</a></div>
        <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
      </div>  
    </div>  

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Jenis</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type/Model</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Merk</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Seri</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Garansi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        


            
<!-- edit -->

<div class="section-header">
    <h1>Aset TIK</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Aset TIK</a></div>
        <div class="breadcrumb-item active" aria-current="page">Update Data</div>
      </div>  
    </div>  

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Jenis</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type/Model</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Merk</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Seri</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Garansi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        




<!-- Lokasi Aet -->
    <!-- index -->

    <div class="section-header">
    <h1>Lokasi Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Lokasi Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data </div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header"><hr>
              <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a>
            </div>
                
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID Lokasi</th>
                  <th scope="col">ID Aset</th>
                  <th scope="col">ID OPD</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Action</th>                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td>lks1</td>
                    <td>ast1</td>
                    <td>opd1</td>
                    <td>jalan mayjend sungkono</td>
                     <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>


<!-- Tmbah -->

<div class="section-header">
    <h1>Lokasi Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Lokasi Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
      </div>  
    </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Lokasi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
          
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    </div>
                  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    <!-- Edit -->

    <div class="section-header">
    <h1>Lokasi Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Lokasi Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Update Data</div>
      </div>  
    </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Lokasi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
          
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    </div>
                  
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<!-- 
maintainance
index -->


<div class="section-header">
    <h1>Maintainance</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Maintainance</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data</div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header"><hr>
              <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a>
            </div>
                
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID Maintainance</th>
                  <th scope="col">ID Aset</th>
                  <th scope="col">Tanggal Maintainance</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Dokumen Pendukung</th>             
                  <th scope="col">ActionActionActionActionAction</th>                       
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td>mtnc1</td>
                    <td>ast1</td>
                    <td>25 Mei 2022</td>
                    <td>Kabel Putus</td>
                    <td><img src="{{ asset('assets/img/logo2.png') }}" alt="logo" width="60"></a></td>
                    <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                    <td>mtnc1</td>
                    <td>ast1</td>
                    <td>25 Mei 2022</td>
                    <td>Kabel Putus</td>
                    <td><img src="{{ asset('assets/img/logo1.png') }}" alt="logo" width="60"></a></td>
                    <td>
                        <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Update</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>


<!-- tambah -->

<div class="section-header">
    <h1>Maintainance</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Maintainance</a></div>
        <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
      </div>  
    </div>  

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Maintainance</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Maintainance</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dokumen Pendukung</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        


<!-- edit -->


<!-- tambah -->

<div class="section-header">
    <h1>Maintainance</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="dashboard">Maintainance</a></div>
        <div class="breadcrumb-item active" aria-current="page">Update Data</div>
      </div>  
    </div>  

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Data</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Maintainance</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Maintainance</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" required=""></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dokumen Pendukung</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</section>
@endsection

