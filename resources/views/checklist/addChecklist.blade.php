<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@extends('checklist.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">{{session()->get('message')}}</div>
            @elseif(session()->has('error'))
            <div class="alert alert-danger text-center">{{session()->get('error')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="font-bold">New Maintainance</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('store.list')}}" method="post">

                        @csrf
                        <div class="flex">
                            <div class="inline-block mt-1 w-1/2 pr-1">
                                <label class="text-sm font-bold text-gray-600">Machine Name</label>
                                <select class="form-control rounded" name="check[machine_name]">
                                    <option value="">Select Machine</option>
                                    <option value="Bulldozer">Bulldozer</option>
                                    <option value="Tractor">Tractor</option>
                                    <option value="Motorbike">Motorbike</option>
                                    <option value="Mower">Mower</option>
                                    <option value="Auger">Auger</option>
                                    <option value="Trailer">Trailer</option>
                                    <option value="Waterbowser">Water bowser</option>
                                    <option value="Waterpump(petrol)">Waterpump (petrol)</option>
                                    <option value="Waterpump(diesel)">Waterpump (diesel)</option>
                                    <option value="Chainsaw">Chainsaw</option>
                                    <option value="Compressor">Compressor</option>
                                    <option value="Donkeycart">Donkey cart</option>
                                    <option value="Truck">Truck</option>
                                    <option value="Pickup">Pick Up</option>
                                    <option value="Fielder">Fielder</option>
                                    <option value="Landcruiser">Landcruiser</option>
                                </select>
                                @error('check.machine_name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="inline-block mt-1 w-1/2 pr-1">
                                <label class="text-sm font-bold text-gray-600">Maintainance Name</label>
                                <input class="form-control rounded" name="check[hours]" type="text" required="" placeholder="Maintainance name">
                                @error('check.hours') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <h5 class="mt-2">Items to check</h5>
                                <small id="choicesHelp" class="form-text text-muted">Give your items to check on this specific Maintainance Name</small>
                                <div class="mt-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="inputFormRow">
                                                <div class="input-group mb-3">
                                                    <input name="items[][checklist]" type="text" value="" class="form-control" aria-describedby="choicesHelp" placeholder="Enter Choice">
                                                    <div class="input-group-append">
                                                        <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="newRow"></div>
                                            <a id="addRow" type="button" class="btn rounded shadow text-white bg-primary btn-sm">Add Row</a>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                        <button type="submit" class="btn text-white" style="background-color:#013220">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // add row
    $("#addRow").click(function() {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input name="items[][checklist]" type="text" value="" class="form-control" aria-describedby="choicesHelp" placeholder="Enter Choice">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function() {
        $(this).closest('#inputFormRow').remove();
    });
</script>
@endsection