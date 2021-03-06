@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Typemedia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($typemedia, ['route' => ['typemedia.update', $typemedia->id], 'method' => 'patch']) !!}

                        @include('typemedia.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection