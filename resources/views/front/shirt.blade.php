@extends('layout.main')

@section('title', 'Shirts')
@section('content')
 <!-- products listing -->
        <!-- Latest SHirts -->
        <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                             <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h3 class="subheader">
                       <span class="price-tag">${{$shirt->price}}</span> {{$shirt->name}}
                    </h3>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Select Size
                                <select>
                                    <option value="small">
                                        Small
                                    </option>
                                    <option value="medium">
                                        Medium
                                    </option>
                                    <option value="large">
                                        Large
                                    </option>
                                   
                                </select>
                            </label>
                            <a href="{{route('cart.addItem',$shirt->id)}}" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
                <p class="text-left subheader"><small>* Designed by <a href="https://www.jyotsnasingh.com">Jyotsna</a></small></p>

                </div>
            </div>
        </div>
    </div>
</body>
@endsection