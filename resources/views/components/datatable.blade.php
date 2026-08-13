@props([
    'id' => 'genericTable',
    'ajaxUrl' => '',
    'columns' => [], // each: ['data'=>..., 'name'=>..., 'title'=>..., 'orderable'=>bool?, 'searchable'=>bool?]
    'filters' => [], // each: ['id'=>..., 'name'=>..., 'placeholder'=>..., 'options'=>fn()=>Collection, 'label'=>...]
])

<div class="card mb-3">
    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <div class="search-set">
            <div class="search-input">
                <span class="btn-searchset"><i class="ti ti-search fs-14 feather-search"></i></span>
                <input type="search" data-datatable-search class="form-control form-control-sm" placeholder="Search..." />
            </div>
        </div>

        <div class="d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">
            @foreach ($filters as $filter)
                <div class="me-2" style="min-width: 200px;">
                    <select id="{{ $filter['id'] }}" class="form-control" data-datatable-filter="{{ $filter['name'] }}">
                        <option value="">{{ $filter['placeholder'] ?? 'All' }}</option>
                        @foreach (call_user_func($filter['options']) as $opt)
                            <option value="{{ $opt->id }}">{{ $opt->{$filter['label']} }}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach
        </div>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="{{ $id }}" class="table">
                <thead class="thead-light">
                    <tr>
                        @foreach ($columns as $col)
                            <th>{{ $col['title'] }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

@push('js')
    <script>
        (function() {
            // state
            var currentSearch = '';
            var currentFilters = {};

            var table = $('#{{ $id }}').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ $ajaxUrl }}",
                    data: function(d) {
                        if (currentSearch) {
                            d.search = {
                                value: currentSearch,
                                regex: false
                            };
                        }
                        for (const k in currentFilters) {
                            d[k] = currentFilters[k];
                        }
                    }
                },
                columns: {!! json_encode(
                    array_map(function ($c) {
                        // ensure keys exist
                        return [
                            'data' => $c['data'],
                            'name' => $c['name'],
                            'orderable' => $c['orderable'] ?? true,
                            'searchable' => $c['searchable'] ?? true,
                        ];
                    }, $columns),
                ) !!},
                searching: false,
                bFilter: false,
                sDom: 'Brtlpi',
                ordering: true,
                language: {
                    sLengthMenu: '_MENU_',
                    sLengthMenu: 'Row Per Page _MENU_ Entries',
                    info: "_START_ - _END_ of _TOTAL_ items",
                    paginate: {
                        next: ' <i class=" fa fa-angle-right"></i>',
                        previous: '<i class="fa fa-angle-left"></i> '
                    },
                },
                drawCallback: function() {
                    if (typeof feather !== 'undefined') {
                        feather.replace();
                    }
                }
            });

            // search input
            $('#{{ $id }}').closest('.card').find('[data-datatable-search]').on('keyup', function() {
                currentSearch = this.value;
                table.draw();
            });

            // filters
            $('#{{ $id }}').closest('.card').find('[data-datatable-filter]').each(function() {
                var filterName = $(this).data('datatable-filter');
                // initialize selectize if available
                if ($(this).selectize) {
                    $(this).selectize({
                        placeholder: '',
                        allowEmptyOption: true,
                        onChange: function(value) {
                            currentFilters[filterName] = value;
                            table.draw();
                        }
                    });
                } else {
                    // fallback plain select
                    $(this).on('change', function() {
                        currentFilters[filterName] = this.value;
                        table.draw();
                    });
                }
                currentFilters[filterName] = '';
            });

            // expose table instance if needed globally
            window['dt_{{ $id }}'] = table;

            // Common delete functionality
            $('#{{ $id }}').on('click', '.delete-btn', function(e) {
                e.preventDefault();
                var delete_url = $(this).data('href');

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
                            url: delete_url,
                            method: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                if (response.success == true) {
                                    // Reload the DataTable instead of the entire page for better UX
                                    table.draw();

                                    // Show success message if provided
                                    if (response.message) {
                                        Swal.fire({
                                            title: "Deleted!",
                                            icon: "success",
                                            text: response.message,
                                            timer: 2000,
                                            showConfirmButton: false
                                        });
                                    }
                                } else {
                                    Swal.fire({
                                        title: "Error",
                                        icon: "warning",
                                        text: response.message ||
                                            "Something went wrong!",
                                    });
                                }
                            },
                            error: function(xhr) {
                                var errorMessage = "Something went wrong!";
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    errorMessage = xhr.responseJSON.message;
                                }

                                Swal.fire({
                                    title: "Error",
                                    icon: "error",
                                    text: errorMessage,
                                });
                            }
                        });
                    }
                });
            });
        })();
    </script>
@endpush
