<div class="row">
    <div class="col-lg-12">
        <div class="card dashboard-product">
            <h4>List</h4>
            <p>{!! url('/') !!}/api/messages</p>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card dashboard-product">
            <h4>Response</h4>
            <pre id="list"></pre>
        </div>
    </div>
    <div class="col-lg-12">
        <hr>
    </div>
    <div class="col-lg-12">
        <div class="card dashboard-product">
            <h4>Get by Phone number</h4>
            <p>{!! url('/') !!}/api/message/get/phone/{phone}</p>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card dashboard-product">
            <h4>Response</h4>
            <pre id="phoneapi"></pre>
        </div>
    </div>
    <div class="col-lg-12">
        <hr>
    </div>
    <div class="col-lg-12">
        <div class="card dashboard-product">
            <h4>Get latest sms</h4>
            <p>{!! url('/') !!}/api/message/get/latest</p>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card dashboard-product">
            <h4>Response</h4>
            <pre id="latest"></pre>
        </div>
    </div>
</div>


@section('scripts')
<script>
    var list = {
        "statuts": 200,
        "message": "Data get successfully",
        "data": [{
                "id": 18,
                "phone": "01708404440",
                "message": "925690 is your one time password for verification",
                "timestamp": "2024-09-30 10:00:09",
                "is_read": "0",
                "created_at": "2024-09-30T04:05:16.000000Z",
                "updated_at": "2024-09-30T04:05:16.000000Z"
            },
            {
                "id": 17,
                "phone": "IVAC_BD",
                "message": "631282 is your one time password for verification",
                "timestamp": "2024-09-30 10:00:44",
                "is_read": "0",
                "created_at": "2024-09-30T04:00:48.000000Z",
                "updated_at": "2024-09-30T04:00:48.000000Z"
            },
            {
                "id": 16,
                "phone": "IVAC_BD",
                "message": "309379 is your one time password for verification",
                "timestamp": "2024-09-30 10:00:12",
                "is_read": "0",
                "created_at": "2024-09-30T04:00:14.000000Z",
                "updated_at": "2024-09-30T04:00:14.000000Z"
            },
            {
                "id": 15,
                "phone": "01708404440",
                "message": "802112 is your one time password for verification",
                "timestamp": "2024-09-30 10:00:08",
                "is_read": "0",
                "created_at": "2024-09-30T04:00:14.000000Z",
                "updated_at": "2024-09-30T04:00:14.000000Z"
            },

        ]
    }

    document.getElementById("list").textContent = JSON.stringify(list, undefined, 2);



    var phoneapi = {
        "statuts": 200,
        "message": "Data get successfully",
        "data": {
            "id": 4,
            "phone": "0191148642",
            "message": "802112 is your one time password for verification",
            "timestamp": "2024-09-29 06:30:34",
            "is_read": 0,
            "created_at": "2024-09-30T09:06:26.000000Z",
            "updated_at": "2024-09-30T09:06:26.000000Z"
        }
    }

    document.getElementById("phoneapi").textContent = JSON.stringify(phoneapi, undefined, 2);


    var latest = {
        "statuts": 200,
        "message": "Data get successfully",
        "data": {
            "id": 6,
            "phone": "01911418642",
            "message": "802112 is your one time password for verification",
            "timestamp": "2024-09-29 06:30:34",
            "is_read": 1,
            "created_at": "2024-09-30T09:14:05.000000Z",
            "updated_at": "2024-09-30T09:14:11.000000Z"
        }
    }
    document.getElementById("latest").textContent = JSON.stringify(latest, undefined, 2);

</script>
@endsection