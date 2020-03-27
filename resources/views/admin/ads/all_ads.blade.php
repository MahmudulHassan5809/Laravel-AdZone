@extends('layouts.admin_app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                          All Ads
                        </div>
                        <div class="card-body">

                            <table class="table table-sm table-inverse table-hover">
                                <thead>
                                    <tr>
                                        <th>Owner</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Area</th>
                                        <th>Location</th>
                                        <th>Codition</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Active</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_ads as $ad)
                                    <tr>
                                        <td>{{$ad->user->name}}</td>
                                        <td>{{$ad->title}}</td>
                                        <td>{{$ad->price}}</td>
                                        <td>{{$ad->area}}</td>
                                        <td>{{$ad->division}}--{{$ad->area}}</td>
                                        <td>{{$ad->condition}}</td>
                                        <td>{{$ad->type}}</td>
                                         <td>
                                            @if ($ad->sold)
                                               Sold
                                            @else
                                                Not Sold
                                            @endif
                                        </td>
                                        <td>
                                            @if ($ad->active)
                                                <a href="{{ route('admin.admin.status_toggle',$ad->id) }}" class="btn btn-sm btn-info">Make Inactive</a>
                                            @else
                                                <a href="{{ route('admin.admin.status_toggle',$ad->id) }}" class="btn btn-sm btn-success">Make Active</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$all_ads->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
