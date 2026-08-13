@extends('dashboard.layouts.app', ['themeplugins' => ['datatable', 'sweetalert2']])

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!-- Breadcrumb -->
            <div class="page-breadcrumb d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3 d-none d-sm-flex">SEO Data</div>
                <div class="ps-3 d-none d-sm-flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">SEO Data</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto float-end">
                    <a href="{{ route('dashboard.seo-data.create') }}" class="btn btn-primary">
                        <i class='bx bx-plus'></i> ADD
                    </a>
                </div>
            </div>
            <!-- End Breadcrumb -->

            <h6 class="mb-0 text-uppercase">SEO Data</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="seo_data_table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Page Slug</th>
                                    <th>SEO Title</th>
                                    <th>SEO Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Page Slug</th>
                                    <th>SEO Title</th>
                                    <th>SEO Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var seo_data_table = $('#seo_data_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dashboard.seo-data.index') }}",
                columns: [{
                        data: 'page_slug',
                        name: 'page_slug'
                    },
                    {
                        data: 'seo_title',
                        name: 'seo_title'
                    },
                    {
                        data: 'seo_description',
                        name: 'seo_description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                initComplete: function() {
                    this.api().columns().every(function() {
                        var that = this;
                        $('input', this.footer()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
                }
            });

            // Handle Delete Action
            $('#seo_data_table').on('click', '.delete_user_button', function(e) {
                e.preventDefault();
                var url = $(this).data('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            method: 'DELETE',
                            success: function(response) {
                                seo_data_table.ajax.reload();
                                Swal.fire('Deleted!', response.message, 'success');
                            },
                            error: function() {
                                Swal.fire('Error!', 'Something went wrong.', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
