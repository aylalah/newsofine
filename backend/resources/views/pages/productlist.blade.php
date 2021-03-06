@extends('layouts.navapp')
@section('my-content')
<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Ecommerce Products</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Ecommerce Products</li>
                </ol>
            </div>
            
            <div class="">
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
<div class="table-responsive">
        
        <table id="demo-foo-addrow" class="table product-table table-hover contact-list" data-page-size="10">
                                <thead>
              <tr>
                 <th>ID</th>
                 <th>Product</th>
                 <th>Category</th>
                 <th>SKU</th>
                 <th>Price</th>
                 <th>QTY</th>
                 <th>Status</th>
                 <td class="op-0">&nbsp;</td>
                <td class="op-0">&nbsp;</td>
                
                
              </tr>
            </thead>
                               
<tbody>
              <tr>
              <td>1245</td>
                 <td class="text-dark font-bold"><img src="../assets/images/gallery/pro4.jpg" alt="" title=""> Riser white laptop <br>
                  </td>
               <td>Technique</td>
                 <td>C1561</td>
                 <td>$1175</td>
                 <td>25</td>
                 <td>In Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
              
              
              <tr>
              <td>5891</td>
                 <td class="text-dark font-bold"><img src="../assets/images/gallery/pro5.jpg" alt="" title=""> Red wine lipstick <br>
                  </td>
               <td>Women Accessories</td>
                 <td>P4545</td>
                 <td>$750</td>
                 <td>140</td>
                 <td>In Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
              
              <tr>
              <td>1234</td>
                <td class="text-dark font-bold"><img src="../assets/images/gallery/pro3.jpg" alt="" title=""> Huawei Y512 phone <br>
                  </td>
               <td>Phone</td>
                 <td>K5463</td>
                 <td>$375</td>
                 <td>54</td>
                 <td>Out of Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
              <tr>
              <td>7811</td>
                 <td class="text-dark font-bold"><img src="../assets/images/gallery/pro.jpg" alt="" title=""> Notebook Asus Aspire <br>
                  </td>
               <td>Technique</td>
                 <td>A5415</td>
                 <td>$175</td>
                 <td>5</td>
                 <td>In Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
              <tr>
              <td>6587</td>
                 <td class="text-dark font-bold"><img src="../assets/images/gallery/pro6.jpg" alt="" title=""> Rose hand cream <br>
                  </td>
               <td>Cosmetics</td>
                 <td>Q4811</td>
                 <td>$515</td>
                 <td>14</td>
                 <td>Out of Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
              <tr>
              <td>2451</td>
                 <td class="text-dark font-bold"><img src="../assets/images/gallery/pro7.jpg" alt="" title="">Wood table in red <br>
                  </td>
               <td>Furniture</td>
                 <td>F1561</td>
                 <td>$2115</td>
                 <td>321</td>
                 <td>In Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
              <tr>
              <td>2611</td>
                 <td class="text-dark font-bold"><img src="../assets/images/gallery/pro8.jpg" alt="" title=""> Baby oil for body <br>
                  </td>
               <td>Oils</td>
                 <td>I1551</td>
                 <td>$85</td>
                 <td>985	</td>
                 <td>In Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
              <tr>
              <td>7891</td>
                <td class="text-dark font-bold"><img src="../assets/images/gallery/pro2.jpg" alt="" title=""> Women Gold ring <br>
                  </td>
               <td>Women Accessories</td>
                 <td>A156</td>
                 <td>$456</td>
                 <td>12</td>
                 <td>Out of Stock</td>
                 <td class="text-center"><a href="#"><i class="fa fa-pencil text-primary"></i></a></td>
                      <td class="text-center"><a href="#"><i class="fa fa-trash text-danger text-danger"></i></a></td>
              </tr>
            </tbody>
        

                               <tfoot>
                                    <tr>
                                        <td colspan="2">
                                            <a class="btn btn-primary btn-rounded" href="addproduct">Add New Product</button>
                                        </td>
                                        <td colspan="7">
                                            <div class="text-right">
                                                <ul class="pagination"> </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        
        
        </div>                          

                  </div>
                </div>
                <!-- Column --> </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="mt-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>


@endsection