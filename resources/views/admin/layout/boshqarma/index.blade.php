@extends('admin.master.main')
@section('content')

    <div class="container ">
        <a href="{{route('admin.boshqarma.create')}}" class="btn rounded-pill btn-success mt-5">boshqarmani kiritish</a>
        <table class="table  shadow mt-3 text-center table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Boshqarmalar</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
       @foreach($boshqarma as $bosh)
           <tr>
               <td>{{$c++}}</td>
               <td>{{$bosh->name}}</td>
               <form action="{{route('admin.boshqarma.destroy', $bosh)}}" method="POST">
                   @csrf
                   @method('delete')
                   <td>
                       <a href="{{route('admin.boshqarma.edit', $bosh)}}" class="btn rounded-pill btn-success">O'zgartirish</a>
                       <a href="{{route('admin.boshqarma.show', $bosh)}}" class="btn rounded-pill btn-primary">Ko'rish</a>
                       <button type="submit" class="btn rounded-pill btn-danger">Delete</button>
                   </td>

               </form>
           </tr>
       @endforeach
            </tbody>
        </table>
    </div>

@endsection
