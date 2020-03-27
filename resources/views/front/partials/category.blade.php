<div class="col-lg-3 col-md-4">
                        <div class="category-accordion tr-accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading-1">
                                    <button data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">All Categories</button>
                                </div>

                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>

                                           @foreach ($all_categories as $category)

                                           <li>
                                                <a href="{{ route('category_adds',$category->slug) }}">
                                                    @if ($category->image)
                                                        <img src="/storage/category_photos/{{$category->image}}" alt="" width="20px">
                                                    @else
                                                        <img src="/storage/category_photos/default.png" alt="" width="20px">
                                                    @endif
                                                    {{$category->name}}<span>({{$category->addposts->count()}})</span></a>
                                            </li>

                                           @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading-2">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">Condition</button>
                                </div>
                                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <form method="GET" action="{{ route('condition_adds') }}">

                                                <input type="radio" name="condition" id="new" value="new"> New

                                            <br>
                                           <input type="radio" name="condition" id="used" value="used"> Used

                                           <br>

                                            <button type="submit" class="btn btn-info btn-sm">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading-3">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Price</button>
                                </div>
                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <form method="GET" action="{{ route('price_range_adds') }}">
                                            <div class="price-range"><!--price-range-->
                                                <div class="price">
                                                    <span>TK{{$min_price}} - <strong>{{$max_price}}TK</strong></span>
                                                    <input
                                                    type="range"
                                                    id="vol"
                                                    name="price_range"
                                                    min="{{$min_price}}"
                                                    max="{{$max_price}}"><br />
                                                </div>
                                            </div><!--/price-range-->
                                            <button type="submit" class="btn btn-info btn-sm">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>




                        </div><!-- accordion-->
                    </div>
