@extends('dashboards.layout.app')

@section('main-content')



<div class="container-fluid">
@hasrole('walas')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Walas</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card widget-inline">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $dataKelasWalas->nama }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Nama Kelas</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $jumlahPertemuanSiswa }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Pertemuan</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{  $dataKelasWalas->siswas->count() }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Siswa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $jumlahSiswaYangPernahBertemuBK /  $dataKelasWalas->siswas->count() }}%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                    <p class="text-muted font-15 mb-0">Bimbingan</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
    @endhasrole
@hasrole('admin')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Log Activity</h5>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">#</th>
                        <th class="th-sm">Activity</th>
                        <th class="th-sm">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activityLogs as $activityLog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $activityLog->activity }}</td>
                        <td>{{ $activityLog->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endhasrole

    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Account</h5>
            <hr>

            <div class="container-datas" style="display: flex;">
                <img src="{{ auth()->user()->guru->fotos()->first() ? asset('storage/'.auth()->user()->guru->fotos()->first()->img_location) : ''}}" alt="" style="width: 300px">
                <div style="width: 70%;">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder=" Masukkan Nama" value="{{ auth()->user()->name }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="{{ auth()->user()->email }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" value="{{ auth()->user()->guru->no_telepon }}" readonly>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary btn-icon-text text-white " href="{{ url('guru/edit', auth()->user()->guru->id) }}" role="button" style="margin-left:20px; display:inline-block ">Edit Data</a>
        </div>
    </div>

          <!-- start page title -->
          <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">BK</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @hasrole('bk')
        @foreach($dataKelasTerorganisirUntukBK as $datas)

    <div class="row">
        <div class="col-12">
            <div class="card widget-inline">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="dripicons-briefcase text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $datas['nama'] }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Nama Kelas</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-checklist text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $datas['total_pertemuan'] }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Pertemuan</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-user-group text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{  $datas['siswa_count'] }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Siswa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="dripicons-graph-line text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $datas['total_pertemuan'] /  $datas['siswa_count'] }}%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                    <p class="text-muted font-15 mb-0">Bimbingan</p>
                                </div> 
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
        @endforeach
    @endhasrole

</div>


@endsection

@section('scriptJS')
<script>
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
@endsection