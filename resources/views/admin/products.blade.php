<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 12.03.18
 * Time: 13:03
 */
?>
<div class="row carusel">
    @php
        $i = 0;
        $page = 0;
    @endphp
@foreach ($products as $product)
    @php
        if($i == 0)
        {
            $page=$i;
            echo "<div class='itm'>";
        }
    @endphp

        <div class="col-sm-6">
            <div class="card" onclick="selectItem({{$product->id}},this)">
                <img class="card-img-top" src="https://files-ptdpritol.netdna-ssl.com/system/photos/1194637/large/5abdf369b7833e6011eb9f220960bf1d.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">Weight : {{ $product->weight }}</p>
                    {{--<a href="#" class="btn btn-primary btn-block add_prod_btn">Add</a>--}}
                </div>
            </div>
        </div>
    @php
        $i++;
        if($i == $page+3 )
        {
            $i=0;
            echo "</div>";
        }
    @endphp
@endforeach
</div>
