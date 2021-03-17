<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-600 flex justify-center">
    <div class="w-11/12 flex flex-col bg-white shadow-lg rounded-lg overflow-hidden mt-4">
        <div class="bg-gray-200 text-gray-700 text-lg px-6 py-4">
            <img class="w-10 h-10 m-1 mr-3 float-right rounded-full" src="{{asset('/storage/logo.png')}}" />
            <h5 class="text-lg font-bold text-green-600">Machine Maintainance Report</h5>
            <p class="text-xl text-blue-600 font-bold">Type: {{$comment->machine_name}} {{$comment->type}}</p>
        </div>

        <div class="flex justify-between items-center px-6 py-4">
            <div class="text-sm font-bold">Site: {{$comment->site}}</div>
            <div class="text-sm font-bold">Machine name:  {{$comment->machine_name}}</div>
            <div class="text-sm font-bold">Number Plate:  {{$comment->number_plate}}</div>
            <div class="text-sm font-bold">Hours Worked:  {{$comment->hours}}</div>
        </div>

        <div class="px-6 py-4 border-t border-gray-200">
            <div class="border rounded-lg p-4 bg-gray-200">
            <div class="flex justify-between font-semibold">
                    <span class="w-7/12 ...">Title</span>
                    <span class="w-2/12 ...">Check</span>
                    <span class="w-3/12 ...">Comment</span>
                </div>
                @foreach($comment->headers as $list)
                <div class="flex justify-between text-gray-700 text-sm">
                    <span class="w-7/12">{{$list->item}}</span>
                    <span class="w-2/12">{{$list->answer}}</span>
                    <span class="w-3/12">{{$list->comment}}</span>
                </div>
                @endforeach
            </div>
        </div>

        <div class="bg-gray-200 px-6 py-4">
            <div class="uppercase text-xs text-gray-600 font-bold">More Details</div>

            <div class="flex">
                <div class="inline-block mt-1 w-1/2 pr-1">
                    <label class="text-sm font-bold">Prepared by</label>
                    <input class="form-control rounded bg-gray-600" readonly value="{{$comment->owner}}" />
                </div>
                <div class="inline-block mt-1 w-1/2 pr-1">
                    <label class="text-sm font-bold">Date Prepared</label>
                    <input class="form-control rounded bg-gray-600" readonly value="{{$comment->date}}">
                </div>
            </div>
            <div class="flex">
                <div class="inline-block mt-1 w-1/3 pr-1">
                    <label class="text-sm font-bold">Approved by</label>
                    <input class="form-control rounded bg-gray-600" readonly value="{{$comment->approved_by}}" />
                </div>
                <div class="inline-block mt-1 w-1/3 pr-1">
                    <label class="text-sm font-bold">Date Approved</label>
                    <input class="form-control rounded bg-gray-600" readonly value="{{$comment->approved_date}}">
                </div>
                <div class="inline-block mt-1 w-1/3 pr-1">
                    <label class="text-sm font-bold">Comment</label>
                    <input class="form-control rounded bg-gray-600" readonly value="{{$comment->admincomment}}">
                </div>
            </div>
            
        </div>
    </div>
</body>

</html>