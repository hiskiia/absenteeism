@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">{{ $page_title }}</h4>
            </div>
            <form class="form-horizontal">
                <div class="form-body">
                    <div class="card-body">
                        <h4 class="card-title">Info Siswa</h4>
                    </div>
                    <hr class="m-t-0 m-b-40">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">NIS:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getNis() }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getName() }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Rombel:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getRombelsId()->getName() }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Rayon:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getRayonsId()->getName() }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Jenis Kelamin:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getGender() }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Tempat Lahir:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getBirthCity() }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Tanggal Lahir:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ dateFormat($data->getBirthDate()) }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Religion:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getReligion() }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Nama Wali:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $data->getNameOfGuardian() }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <h4 class="card-title mt-5">Alamat</h4>
                    </div>
                    <hr class="m-t-0 m-b-40">
                    <div class="card-body">
                        <div class="row">
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Kota:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $address->city }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Kecamatan:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $address->district }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Desa:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $address->village }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">RT:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $address->rt }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">RW:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ $address->rw }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h4 class="card-title mt-5">Statistik Absensi</h4>
                    </div>
                    <hr class="m-t-0 m-b-40">
                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Tepat Waktu:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ absentstatistict($data->getId(),'Tepat Waktu') }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Terlambat:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ absentstatistict($data->getId(),'Terlambat') }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Sakit:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ absentstatistict($data->getId(),'Sakit') }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Izin:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ absentstatistict($data->getId(),'Izin') }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Tanpa Keterangan:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ absentstatistict($data->getId(),'Tanpa Keterangan') }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Bolos:</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static"> {{ absentstatistict($data->getId(),'Bolos') }} </p>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h4 class="card-title mt-5">Scan QR Code</h4>
                    </div>
                    <hr class="m-t-0 m-b-40">
                    <div class="card-body">
                        <center><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(250)->generate($qrcode)) !!} "></center>
                    </div>
                </div>
                <hr>
                <div class="form-actions">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="{{ url(request()->segment(1)) }}/edit/{{ $data->getId() }}" class="btn btn-danger"> <i class="fa fa-pencil"></i> Edit</a>
                                        <a href="{{ url(request()->segment(1)) }}" class="btn btn-dark">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection