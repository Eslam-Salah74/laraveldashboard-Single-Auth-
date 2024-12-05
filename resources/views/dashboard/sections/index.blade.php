@extends('layouts.master')
@section('title')
الاقسام
@stop
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">الاقسام</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/الاعدادات</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

<div class="row row-sm">

    <div class="col-xl-12">
        <div class="card">
            <div class="col-sm-4 col-md-4">

                    <div class="card-body">
                        <a class="btn ripple btn-primary" data-target="#modaldemo8" data-toggle="modal" href="">اضافة قسم</a>
                    </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">اسم القسم</th>
                                <th class="wd-15p border-bottom-0"> اضيف بواسطة</th>
                                <th class="wd-20p border-bottom-0">ملاحظات</th>
                                <th class="wd-15p border-bottom-0">الاجرائات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=0 @endphp
                            @foreach ($sections as $item)
                                @php  $i++ @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{@$item->section_name}}</td>
                                    <td>{{@$item->description}}</td>
                                    <td>{{@$item->created_by}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal effects -->
<div class="modal" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">اضافة قسم </h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">

                        <div class="card-body">
                            <form action="{{route('sections.store')}}" method="POST" class="needs-validation was-validated">
                                @csrf
                                <div class="row row-sm">
                                    <div class="col-lg-12">
                                        {{-- has-dange & has-success --}}
                                        <label for="">اسم القسم</label>
                                        <div class="form-group mg-b-0">
                                            <input class="form-control" name="section_name"  required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mg-b-0">
                                            <label for="">الملاحظات</label>
                                            <textarea class="form-control mg-t-20" name="description" required="" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn ripple btn-primary" type="button">تاكيد</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">اغلاق</button>
                    </div>
                </form>
        </div>
    </div>
</div>


</div>

</div>

@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<!-- Internal Modal js-->
<script src="{{URL::asset('assets/js/modal.js')}}"></script>
@endsection
