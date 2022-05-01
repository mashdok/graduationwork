<h1>検索機能トライアル</h1>

<form action="{{url('/market')}}" method="GET">
    <p><input type="text" name="keyword" value="{{$keyword}}"></p>
    <p><input type="submit" value="検索"></p>
</form>
 
@if($sku_masters->count())
 
<table border="1">
    <tr>
        <th>商品名</th>
        <th>商品分類</th>
        <th>商品詳細</th>
    </tr>
    @foreach ($sku_masters as $sku_master)
    <tr>
        <td>{{ $sku_master->sku_name }}</td>
        <td>{{ $sku_master->sku_subcategory }}</td>
        <td>{{ $sku_master->sku_desc }}</td>
    </tr>
    @endforeach
</table>
 
@else
<p>見つかりませんでした。</p>
@endif



     @if (count($sku_masters) > 0)
         <div class="card-body">
             <div class="card-body">
                 <table class="table table-striped task-table">
                     <!-- テーブルヘッダ -->
                     <thead>
                         <th>商品情報一覧</th>
                         <th>&nbsp;</th>
                     </thead>
                     <!-- テーブル本体 -->
                     <tbody>
                         @foreach ($sku_masters as $sku_master)
                             <tr>
                                 <!-- 店舗名 -->
                                 <td class="table-text">
                                     <br>
                                     <div>{{ $sku_master->sku_id}}</div>
                                     <div>{{ $sku_master->sku_name}}</div>
                                     <div>{{ $sku_master->sku_subcategory}}</div>
                                     <div>{{ $sku_master->sku_desc}}</div>
                                     <br>
                                 </td>


                                </td>
 			                      
                                 <td>
                         
                         
                                        <div class="form-group row justify-content-center">
                                            <label class="col-form-label">購入個数</label>
                                            <div class="">
                                    
                                                <input type="number"
                                    　　　　　　　 class="inputNumber form-control" value="0" name="quantity" >
                                            </div>
                                    
                                            <lavel class="col-form-label">個</lavel>
                                            <div class="col-sm-auto">
                                            </div>      
                                        </div>
                                    

                                 </td>
                             </tr>
                         @endforeach
                     </tbody>
                 </table>
                 <a class="btn btn-link pull-right" href="{{ url('/cart_content') }}"> カートを見る</a>
                 <form action="{{ url('cart_content') }}" method="GET"> {{ csrf_field() }}
                                	    <button type="submit" class="btn btn-primary">カートを見る </button>
                 </form>
             </div>
         </div>		
    @endif
    
    

    
    
    