<div class="message">
    <div class="row search">

        <div class="col-lg-12">
            <div class="card dashboard-product">
                <div class="short">
                    <h3 class="m-0">Short</h3>
                    <select class="form-control" wire:model.live="shortby">
                        <option value="id">ID</option>
                        <option value="date_time">Date</option>
                    </select>
                    <select class="form-control" wire:model.live="short">
                        <option value="DESC">DESC</option>
                        <option value="ASC">ASC</option>
                    </select>
                    <button class="btn btn-primary" wire:click.live="clearShort">Clear</button>
                </div>
                <div class="form">
                    <h3 class="m-0">Search</h3>
                    <input type="text" class="form-control" wire:model.live="search">
                </div>
            </div>
        </div>


    </div>
    <!-- 4-blocks row start -->
    <div class="row dashboard-header">
        @forelse($messages as $message)
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>{{ $message->phone }}</span>
                <hr>
                <p style="font-size: 20px;">{{ $message->message }}</p>
                <hr>
                <p>{{ $message->date }}, {{ $message->time }}</p>
            </div>
        </div>
        @empty
        <div class="col-lg-12">
            <p class="text-center"> No Message Found!!</p>
        </div>
        @endforelse

    </div>
    <!-- 4-blocks row end -->
</div>