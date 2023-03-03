@extends('layouts.app')

@section('title', 'Manage Users')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>User List</h4>
            <div class="card-header-action">
                <a href="{{ route('user.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add New
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
        var datatable = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: "{!! url()->current() !!}"
            },
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, 'ALL']
            ],
            responsive: true,
            order: [
                [0, 'desc'],
            ],
            columns: [
                {data: 'id', name: 'id'},
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'username'},
                {data: 'username', name: 'username'},
                {data: 'role', name: 'role'},
                {data: 'email_verified_at', name: 'email_verified_at'},
            ],
            columnDefs: [{
                "targets": 1,
                "render": function(data, type, row, meta) {
                    return `<img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35">`;
                }
            },{
                "targets": 2,
                "render": function(data, type, row, meta) {
                    return `
                        ${data}
                        <div class="table-links">
                            <a href="#">Edit</a>
                            <div class="bullet"></div>
                            <a href="#" class="text-danger">Delete</a>
                        </div>
                    `;
                }
            },{
                "targets": -1,
                "render": function(data, type, row, meta) {
                    if(data){
                        return `<div class="badge badge-success">Verified</div>`;
                    } else {
                        return `<div class="badge badge-danger">Unverified</div>`;
                    }
                }
            }],
            rowId: function(a) {
                return a;
            },
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            },
            initComplete: function () {
                this.api()
                    .columns([5])
                    .every(function () {
                        var column = this;
                        var select = $('<select class="form-select form-select-sm"><option value="">-- Pilih --</option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    });
            },
        });
    });
</script>
@endpush()
