@extends('master')

@section('content')
    @foreach($result as $items)
    <section class="content-first">
        <div class="container">
            <div class="content-top">
                <h1 class="">{{$items[0]->name_cate}}</h1>
            </div>
            <div class="content-body" style="">
                <div class="icon-left-right slide_first">
                    <span class="lt_left">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </span>
                    <span class="lt_right">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div style="display: flex; position: relative; z-index: 10; left: 0; transition: 0.5s" id="slide_first">
                	
                		@foreach($items as $item)
	                    <div class="item">
	                        <div class="content-box">
	                            <img src="{{ url('public/uploads/'.$item->image) }}" class="img_width">
	                            <div class="text-dec padding_lrb">
	                                <h3>{{$item->name_product}}</h3>
	                                <span>
	                                    {{$item->description}}
	                                </span>
	                            </div>
	                        </div>
	                    </div>
                    	@endforeach()
                    
                </div>
            </div>
        </div>
    </section>
    @endforeach()
    <div class="clearfix"></div>

    <section class="content-first" style="display: block">
        <div class="container">
            <div class="content-top">
                <h1 class="">HÃY ĐẾN VỚI DỊCH VỤ DU LỊCH CỦA CHÚNG TÔI</h1>
            </div>
            <div class="content-body" style="">
                <div class="icon-left-right slide_two">
                    <span class="lt_left">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </span>
                    <span class="lt_right">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div style="display: flex; position: relative; z-index: 10; left: 0; transition: 0.5s" id="slide_two">
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                            <div class="buy_product">
                            	<span style="float: left">
                            		300.000đ
                            	</span>
                            	<span style="float: right;" class="title_buy">
                            		Mua ngay
                            	</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b6.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b7.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b8.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b9.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b10.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <div class="clearfix"></div>


    <section class="content-first" style="display: block">
        <div class="container">
            <div class="content-top">
                <h1 class="">HÃY ĐẾN VỚI DỊCH VỤ DU LỊCH CỦA CHÚNG TÔI</h1>
            </div>
            <div class="content-body" style="">
                <div class="icon-left-right slide_three">
                    <span class="lt_left">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </span>
                    <span class="lt_right">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </span>
                </div>
                <div style="display: flex; position: relative; z-index: 10; left: 0; transition: 0.5s" id="slide_three">
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b6.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b7.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b8.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b9.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b10.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b1.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch đảo Cô Tô</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b2.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Đà Nẵng</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box">
                            <img src="http://localhost:8082/myNextProject/public/assets/images/b4.png" class="img_width">
                            <div class="text-dec padding_lrb">
                                <h3>Du lịch Hội An</h3>
                                <span>
                                    Trải nghiệm thú vị, view đẹp, tận hưởng kì nghỉ thoải mái cùng người thân và bạn bè
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>


    <section class="contact-content">
            <div class="row">
                <div class="container">
                    <div class="top">
                        <h1>Liên hệ với chúng tôi</h1>
                    </div>
                    <div class="body">
                        <div class="col-md-9 no-padding">
                            <form action="" id="form_contact">
                                <div class="col-md-6 no-padding-left padding_phone_r">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="First Name">
                                    </div>

                                </div>
                                <div class="col-md-6 no-padding-right padding_phone_l">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="pwd" placeholder="Number Phone">
                                    </div>

                                </div>
                                <div class="col-md-12 no-padding">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12 no-padding">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success">Gửi</button>
                                </div>
                                
                            </form>
                        </div>
                        <div class="col-md-3">
                            <div class="info-com">
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                <div>
                                    <span>Working Hours</span>
                                    <p>10am – 6pm (Monday to Friday)</p>
                                </div>
                            </div>
                            <div class="info-com">
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <div>
                                    <span>Office Address</span>
                                    <p>QTSC Building 9 Quang Trung <br> Software City Tan Chanh Hiep Ward, District 12, <br> Ho Chi Minh City, Viet Nam</p>
                                </div>
                            </div>
                            <div class="info-com">
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <div>
                                    <span>Phone</span>
                                    <p>Tel: +84 28 7109 2939</p>
                                </div>
                            </div>
                            <div class="info-com">
                                <span><i class="fa fa fa-envelope" aria-hidden="true"></i></span>
                                <div>
                                    <span>Email Address</span>
                                    <p>info@wds.com.sg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@stop
