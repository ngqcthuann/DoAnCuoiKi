@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục sản phẩm
                        </header>
                        <?php
                $message =  Session::get('message');
                if($message){
                    echo '<span class="text-alert">',$message.'</span>';
                    Session::put('message',null);
                }
                ?>  
                        <div class="panel-body">
                            @foreach($edit_category_product as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" value="{{$edit_value->category_name}}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="category_product_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none" rows="7" type="text" class="form-control" name="category_product_decs" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div>                            
                                <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection