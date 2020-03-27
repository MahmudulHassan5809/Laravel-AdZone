<div class="banner">

                <!-- banner-form -->
                <div class="banner-form banner-form-full">
                    <form action="{{ route('post_search') }}" method="GET">
                        <!-- category-change -->
                        <select class="form-control" name="category">
                            <option value="" selected>Select Category</option>
                            @foreach ($all_categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <!-- language-dropdown -->


                                <select class="form-control" name="division">
                                    <option value="" selected>Select City</option>
                                    @foreach ($all_division as $division)
                                        <option value="{{$division}}">{{$division}}</option>
                                    @endforeach
                                </select>



                        <input type="text" name="search" class="form-control" placeholder="Type Your key word">
                        <button type="submit" class="form-control" value="Search">Search</button>
                    </form>
                </div><!-- banner-form -->
            </div>
