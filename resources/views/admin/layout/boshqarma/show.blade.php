@extends('admin.master.main')
@section('content')

    <div class="container mt-5 ">

        <table class="table table-striped table-bordered table-hover mt-3">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Model</th>
                <th scope="col">Seria nomeri</th>
                <th scope="col">QMD model</th>
                <th scope="col">QMD seria</th>
                <th scope="col">SSD seria</th>
                <th scope="col">SSD model</th>
                <th scope="col">Monitor number</th>
                <th scope="col">Monitor model</th>
                <th scope="col">Ishlab chiqarilgan sana</th>
                <th scope="col">Hisob olingan sana</th>
                <th scope="col">Olindi</th>
                <th scope="col">Topshirildi</th>
            </tr>
            </thead>
            <tbody>

{{--            @foreach($boshqarma as $bosh)--}}
{{--                <tr>--}}
{{--                    <td>{{$b++}}</td>--}}
{{--                    <td>{{$bosh->model}}</td>--}}
{{--                    <td>{{$bosh->seria_name}}</td>--}}
{{--                    <td>{{$bosh->qmd_model}}</td>--}}
{{--                    <td>{{$bosh->qmd_seria}}</td>--}}
{{--                    <td>{{$bosh->ssd_number}}</td>--}}
{{--                    <td>{{$bosh->ssd_model}}</td>--}}
{{--                    <td>{{$bosh->monitor_number}}</td>--}}
{{--                    <td>{{$bosh->monitor_model}}</td>--}}
{{--                    <td>{{$bosh->ishlangan_sana}}</td>--}}
{{--                    <td>{{$bosh->hisob_sana}}</td>--}}
{{--                    <td>{{$bosh->olindi}}</td>--}}
{{--                    <td>{{$bosh->topshirdi}}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
            </tbody>
        </table>
        <a href="{{route('admin.boshqarma.index')}}" class="btn rounded-pill btn-dark">ortga qaytish</a>

    </div>

@endsection
