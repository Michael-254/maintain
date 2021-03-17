<form class="p-10 bg-white rounded shadow-xl" wire:submit.prevent="addMachine">
    <div>
        @if (session()->has('message'))
        <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
            {{ session('message') }}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger">{{session()->get('error')}}</div>
        @endif
    </div>
    <p class="text-lg text-gray-800 font-medium pb-1">Add Machine</p>
    <div class="flex">
        <div class="inline-block mt-1 w-1/3 pr-1">
            <label class="text-sm font-bold text-gray-600">Machine Name</label>
            <select class="form-control rounded" wire:model.debounce.500ms="machine_name">
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
            @error('machine_name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="inline-block mt-1 w-1/3 pr-1">
            <label class="text-sm font-bold text-gray-600">Number Plate</label>
            <input class="form-control rounded" wire:model.debounce.500ms="number_plate" type="text" required="" placeholder="number plate">
            @error('number_plate') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="inline-block mt-1 w-1/3 pr-1">
            <label class="text-sm font-bold text-gray-600" for="cus_email">Model Number</label>
            <input class="form-control rounded" wire:model.debounce.500ms="model_number" type="text" required="" placeholder="model number">
            @error('model_number') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="inline-block mt-2 w-full pr-1">
        <label class="text-sm font-bold text-gray-600">Worked Hours</label>
        <input class="form-control rounded" wire:model.debounce.500ms="worked_hours" type="text" required="" placeholder="Worked hours">
        @error('worked_hours') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="flex mt-2">
        <div class="inline-block mt-1 w-1/3 pr-1">
            <label class="text-sm font-bold text-gray-600">Upcoming Plan</label>
            <input class="form-control rounded" wire:model.debounce.500ms="plan" type="text" required="" placeholder="Upcoming Plan">
            @error('plan') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="inline-block mt-1 w-1/3 pr-1">
            <label class="text-sm font-bold text-gray-600" for="cus_email">Hours Remaining to Plan</label>
            <input class="form-control rounded" wire:model.debounce.500ms="plan_hours" type="text" required="" placeholder="Hours Remaining to Plan">
            @error('plan_hours') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="inline-block mt-1 w-1/3 pr-1">
            <label class="text-sm font-bold text-gray-600" for="cus_email">Site</label>
            <select class="form-control rounded" wire:model.debounce.500ms="site">
                <option value="">Select Site</option>
                <option value="Head Office">Head Office</option>
                <option value="Kiambere">Kiambere</option>
                <option value="Nyongoro">Nyongoro</option>
                <option value="Dokolo">Dokolo</option>
            </select>
            @error('site') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-green-900 rounded">Submit</button>
    </div>
</form>