@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm thương hiệu sản phẩm
                        </header>
                        <div class="panel-body">
                            <?php
                            $message =  Session::get('message');
                            if($message){
                                echo '<span class="text-alert">',$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>  
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên thương hiệu" name="brand_product_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                    <textarea style="resize: none" rows="7" type="text" class="form-control" name="brand_product_decs" id="exampleInputPassword1" placeholder="Mô tả thương hiệu"></textarea>
                                </div>                            
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm thương hiệu</button>
                            </form>
                            </div>
 
                        </div>
                    </section>

            </div>
@endsection