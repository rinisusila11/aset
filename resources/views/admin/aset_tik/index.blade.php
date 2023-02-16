@extends('layouts.admin-master')

@section('title')
Manage Users
@endsection

@section('content')
<section class="section">
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

</section>
@endsection
