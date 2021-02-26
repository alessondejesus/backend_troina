<section class="section">
    <div class="section-header">
        <h1>Usuários</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="section-title">Todos Usuários</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="table-1_length"><label>Show <select
                                                name="table-1_length" aria-controls="table-1"
                                                class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="table-1_filter" class="dataTables_filter float-right"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="table-1"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Progress</th>
                                            <th scope="col">Members</th>
                                            <th scope="col">Data Criação</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($users as $user)
                                            <tr>
                                                <th scope="row">{{$user->id}}</th>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                    <div class="progress mb-3" data-height="5" style="height: 5px;">
                                                        <div class="progress-bar" role="progressbar" data-width="25%"
                                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 25%;"></div>
                                                    </div>
                                                </td>
                                                <td><img alt="image"
                                                         src="https://demo.getstisla.com/assets/img/avatar/avatar-1.png"
                                                         class="rounded-circle" width="35" data-toggle="tooltip"
                                                         title=""
                                                         data-original-title="Nur Alpiana">
                                                    <img alt="image"
                                                         src="https://demo.getstisla.com/assets/img/avatar/avatar-3.png"
                                                         class="rounded-circle" width="35" data-toggle="tooltip"
                                                         title=""
                                                         data-original-title="Hariono Yusup">
                                                    <img alt="image"
                                                         src="https://demo.getstisla.com/assets/img/avatar/avatar-4.png"
                                                         class="rounded-circle" width="35" data-toggle="tooltip"
                                                         title=""
                                                         data-original-title="Bagus Dwi Cahya"></td>
                                                <td>
                                                    <div class="badge badge-info">Todo</div>
                                                </td>
                                                <td>
                                                   Date..
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-secondary">Detail</a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="dataTables_paginate paging_simple_numbers float-right"
                                         id="table-1_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="table-1_previous"><a href="#" aria-controls="table-1"
                                                                         data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                                                            aria-controls="table-1"
                                                                                            data-dt-idx="1" tabindex="0"
                                                                                            class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="table-1_next"><a
                                                    href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0"
                                                    class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
