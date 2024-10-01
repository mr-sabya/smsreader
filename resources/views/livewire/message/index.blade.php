<div>
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
            <div class="col-lg-12 ">
                <div style="margin-bottom: 20px;">

                    <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModal">
                        <i class="icon-trash"></i> Delete all SMS
                    </button>
                </div>
            </div>
            @forelse($messages as $message)
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <div style="display: flex; justify-content: space-between;">
                        <div>
                        <span>Sender: {{ $message->sender }}</span><br>
                        <span>Receiver: {{ $message->receiver }}</span>
                        </div>
                        @if($message->is_read)
                        <i class="icon-check" style="color: green;"></i>
                        @endif
                    </div>
                    <hr>
                    <p style="font-size: 20px;">{{ $message->message }}</p>
                    <hr>
                    <p class="d-flex justify-content-between"><span>{{ date('d-m-Y h:i a', strtotime($message->timestamp)) }}</span> <span>{{ \Carbon\Carbon::parse($message->timestamp)->diffForHumans() }}</span></p>
                </div>
            </div>
            @empty
            <div class="col-lg-12">
                <p class="text-center"> No Message Found!!</p>
            </div>
            @endforelse

            <div class="col-lg-12">
                {{ $messages->links() }}
            </div>

        </div>
        <!-- 4-blocks row end -->
    </div>


    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Do you want to delete all messages?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteAll" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>


</div>